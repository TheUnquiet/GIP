<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drinks;


class DrinksController extends Controller
{

    public function __construct() {
        
        $this->middleware('auth');
    }


    public function index() {

       $drinks = Drinks::latest()->get();
    
    }

    public function show() {

        // Check if user is logged in
        $this->middleware('auth');

        // Look through records

        $water = Drinks::where('type', 'water')->get();
        $soda = Drinks::where('type', 'soda')->get();

        // Return the view
        return view('details', [
            'water' => $water,
            'soda' => $soda,
        ]);
    }
}
