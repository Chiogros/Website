<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectsController extends Controller
{
    public function index() {

        $projects = Project::all();


        return view('projects', compact('projects'));
    }
}
