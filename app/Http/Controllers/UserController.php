<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard(){

        return view('auth.dashboard');
    }

    public function create(){

        return view('post.create');
    }
}
