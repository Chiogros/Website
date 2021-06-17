<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return view('login');
    }

    public function verify(Request $request) {

        $userInputs = $request->validate([
            'email' => "required|email",
            'password' => "required"
        ]);

    }
}
