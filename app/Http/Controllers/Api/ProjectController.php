<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Project;

class ProjectController extends Controller
{
    public function index() {

        $projects = Project::all();

        return response()->json([
            'results' => $projects
        ]);
    }

    public function show(Project $project) {

        $project->load('type', 'tecnologies');
        
        return  response()->json([
            'project' => $project
        ]);
    }
}
