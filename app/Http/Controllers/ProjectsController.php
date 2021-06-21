<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

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

    public function store(Request $request) {

        $data = $request->validate([
            'title' => 'required',
            'summary' => '',
            'image' => 'image',
            'beginDate' => 'required|date',
            'endDate' => 'required|date',
            'skills' => ''
        ]);

        $post = new Project($data);
        $post->save();

        return redirect('projects');

    }
}
