<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //Show Reegister Create Form
    public function create(){
        return view('users.register');
    }
}
