<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Get data from the db
use App\Models\Stock; 

class StockController extends Controller
{
    //

    public function store()
    {
        
        return view('stock');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}