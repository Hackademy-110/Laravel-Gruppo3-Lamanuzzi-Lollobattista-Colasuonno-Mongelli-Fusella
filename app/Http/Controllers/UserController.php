<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //per le funzioni relative alle viste degli utenti
    public function Login(){
        return view('auth.login');
    }
    public function Register(){
        return view('auth.register');
    } 


    public function dashboard(){

        return view('auth.dashboard');
    }
}
