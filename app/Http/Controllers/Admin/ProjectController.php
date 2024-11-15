<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage; 

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();

        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newProject = new Project;

        // $image = Storage::put('uploads', $data['image']);

        $newProject->title = $data['title'];
        $newProject->creation_date = $data['creation_date'];
        $newProject->author = $data['author'];
        $newProject->cover = $data['cover'];

        // $newProject->cover = Storage::put('uploads', $data['cover']);
        if (isset($data['cover'])) {
            $cover = Storage::disk('public')->put('uploads', $data['cover']);
            $data['cover'] = $cover;
        }

        $newProject = Project::create($data);
        //$newProject->save();

        return redirect()->route('projects.show', [ 'project' => $newProject->id]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->all();

        $project->update($data);

        if (isset($data['cover'])){
            if($project->cover) {
                Storage::disk('public')->delete($project->cover);
                $project->cover = null;
            }

            $coverPath = Storage::disk('public')->put('uploads', $data['cover']);
            $data['cover'] = $coverPath;
        }
        else if (isset($data['remove_cover']) && $project->cover) {
            Storage::disk('public')->delete($project->cover);
            $project->cover = null;
        }

        $project->update($data);

        return redirect()->route('projects.show', ['project' => $project->id]); 

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('projects.index');
    }
}
