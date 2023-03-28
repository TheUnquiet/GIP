<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use DateTime;

class AccountController extends Controller
{
    /**
     * 
     * @return void
     */
    
    public function __construct() 
    {
        $this->middleware('auth');

        // $time = new DateTime((Auth::user()->created_at) ? Auth::user()->created_at : 0);
        // $date = $time->format('n.j.Y');
        // $time = $time->format('H:i');
    }

    /**
     * 
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index() 
    {
        return view('account');
    }
}
