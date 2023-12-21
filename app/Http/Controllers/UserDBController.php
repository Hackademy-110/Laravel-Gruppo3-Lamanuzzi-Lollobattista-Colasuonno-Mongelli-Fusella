<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDBController extends Controller
{
    //per le funzioni relative al database degli utenti
  public function Dash(){
    //per controllare che a nome/mail corrisponda la password inserita per effettuare il login
  }
  public function create(Request $request){
    $img=$request->file('img')->store('public/img');
    User::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>$request->password,
        'img'=>$img
    ]);
    
  }
}
