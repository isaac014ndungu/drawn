<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    function login(){
        return view('admin.login');
    }
}
