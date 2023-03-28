<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;


class LogoutController extends Controller
{
    // Logout Controller


    public function preform() 
    {
        // Flush the session, remove all data from session

        Session::flush();

        // Auth, used to authenticate users

        Auth::logout();

        // Send the user back to the welcome page
        
        return redirect('welcome');
    }
}