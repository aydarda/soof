<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home()
    {
        // $projects = Project::latest('project_date')->paginate(9);
        // return view('home', compact('projects'));
        return view('home');
    }
}
