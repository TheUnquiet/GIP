<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function show()
    {
        return view('form');
    }

    public function store()
    {
        // error_log(request("type"));
        // error_log(request("name"));
        // error_log(request("price"));

        $item = new Food; // Model instance
        
        $item->type = request("type");
        $item->name = request("name");
        $item->price = request("price");

        $item->save(); // Save the item as an object

        return redirect('/success');
    }
}
