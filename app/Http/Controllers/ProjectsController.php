<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectsController extends Controller
{
    /*public function __construct() {
        $this->middleware("auth");
    }*/

    public function index() {

        $projects = Project::all();

        return view('project.index', compact('projects'));

    }

    public function create() {

        return view('project.create');

    }
}
