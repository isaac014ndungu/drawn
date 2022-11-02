<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     *
     */


    public function redirect()
    {  $user = empty($user) ? [null] : $user;
        foreach($user as $user)
        {

        }
        if (Auth::id())
        {
            if(Auth::User()->role=='1')
            {
                return view ('dashboards.admins.index');
            }
            elseif(Auth::User()->role=='2')
            {
                return view ('dashboards.users.index');

            }
            else{
                return view ('dashboards.manager.index');
            }
        }
        else{
            return redirect()->back();
        }
    }

}
