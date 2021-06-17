<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SelfController extends Controller
{
    public function index() {
        return view('self');
    }
}
