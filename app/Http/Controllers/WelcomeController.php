<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
   public function login(){
    return view('login');
   }
   public function signup(){
    return view('signup');
   }

   public function loginRequest(Request $request){
    dd($request);
   }
   public function signupRequest(Request $request){
    dd($request);
   }

   
}
