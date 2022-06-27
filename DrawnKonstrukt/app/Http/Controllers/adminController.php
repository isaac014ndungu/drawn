<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class AdminController extends Controller
{
    function index(){

        return view('dashboards.admins.index');
       }

       function profile(){
        return view('dashboards.admins.profile');
    }
    function settings(){
        return view('dashboards.admins.settings');
    }
        function CRUD(){
            return view('dashboards.admins.CRUD');
        }
        function users(){
            return view ('users');
        }

    }

