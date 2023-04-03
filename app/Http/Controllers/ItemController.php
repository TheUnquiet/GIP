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
        return view('form');
    }

    public function store()
    {
        $item = new Food; // Model instance
        
        $item->type = request("type");
        $item->name = request("name");
        $item->price = request("price");

        $item->save(); // Save the item as an object

        return redirect('/success');
    }
}
