<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Models
use App\Models\Project;

class ProjectController extends Controller
{

    public function index() {

    //$projects = Project::all();

    //return response()->json($projects
//         [
//         'title' => $projects['title'],
//         'creation_date' => $projects['creation_date'],
//         'author' => $projects['author'],
        
//         'cover'=> $projects['cover']
// ]
    //);

        $projects = Project::get();

        return response()->json([
            'success'=> true,
            'message' => "ok" ,
            //'data' => [
                'projects' => $projects
            //],
        ]);
    }
}
