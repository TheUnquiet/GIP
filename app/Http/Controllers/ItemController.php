<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class ItemController extends Controller
{
    public function __construct() 
    {

        $this->middleware('auth');
    }

    public function show()
    {
        
        $bread_bakery = Food::where('type', 'Bread & Bakery')->get();
        $meat = Food::where('type', 'Meat')->get();

        return view('foods', [
            'bakery' => $bread_bakery,
            'meat' => $meat,
        ]);
    }
}
