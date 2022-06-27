<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    function index(){

     return view('dashboards.manager.index');
    }

    function profile(){
        return view('dashboards.manager.profile');
    }
    function settings(){
        return view('dashboards.manager.settings');
    }
 }
