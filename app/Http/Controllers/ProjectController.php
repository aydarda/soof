<?php

// app/Http/Controllers/ProjectController.php
namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest('project_date')->paginate(9);
        return view('what-we-do', compact('projects'));
    }

    public function show(Project $project)
    {
        $project->load('images');
        return view('project-show', compact('project'));
    }
}
