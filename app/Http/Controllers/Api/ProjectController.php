<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Project;

class ProjectController extends Controller
{

    public function index() {

    $projects = Project::all();

    return response()->json($projects
//         [
//         'title' => $projects['title'],
//         'creation_date' => $projects['creation_date'],
//         'author' => $projects['author'],
        
//         'cover'=> $projects['cover']
// ]
    );
}
}
