<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\User;
use App\Models\post;
use App\Models\image;
use Illuminate\Support\Facades\File;
use Encore\Admin\Form\Field\Id;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
   function index(){

    return view('dashboards.users.index');
   }

   function profile(){
       return view('dashboards.users.profile');
   }
   function view(){



    $users_id=user::get();

    $post=Post::all();
    $post=auth()->user()->post;
    return view('dashboards.users.data')->with('user',auth()->user())->with('post',$post);
}
   function settings(){
       return view('dashboards.users.settings');
   }
}
