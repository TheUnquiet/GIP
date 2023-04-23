<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
<<<<<<< HEAD
use Error;
=======
>>>>>>> b051cb2938ed49afee83102f7e8e5c46e12e4679

class ItemController extends Controller
{
    public function __construct()
    {
        // Check user login
        $this->middleware('auth');
    }

    public function show()
    {
        // Get all data from the table
        $categories = Category::all();
        return view('form', ['categories' => $categories]);
    }

    public function store()
    {
        $item = new Product; // Model instance
        
        // Store each input in a column
        $item->name = request("name");
        $item->price = request("price");
        $item->description = request("description");
        $item->image_url = request("image_url");
        $item->category_id = request("category_id");

        $item->save(); // Save the record
<<<<<<< HEAD
        error_log($item);
=======
>>>>>>> b051cb2938ed49afee83102f7e8e5c46e12e4679

        // Show the application
        return redirect('/success');
    }
}
