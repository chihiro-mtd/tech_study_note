<?php

namespace App\Http\Controllers;

class registerController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function register(){
      return 'Success!!';
    }
}
