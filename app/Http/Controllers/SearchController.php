<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drinks;

class SearchController extends Controller
{

    public function show() {
        return view('search');
    }

    public static function search($term)
    { 
        Drinks::where('name', 'LIKE', '%'.$term.'%')->get(); 
    }

}
