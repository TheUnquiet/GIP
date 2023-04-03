<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Drinks;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        return view('food');
    }
}
