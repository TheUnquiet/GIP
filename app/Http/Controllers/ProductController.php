<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function __construct()
    {
        // Check login
        $this->middleware('auth');
    }

    public function showFoods(): View
    {
        return view('categories.foods', [
            'breadBakery' => Category::with('products')->findOrFail(5),
            'cereal' => Category::with('products')->findOrFail(6),
            'meat' => Category::with('products')->findOrFail(7),
            'fish' => Category::with('products')->findOrFail(8),
            'baking' => Category::with('products')->findOrFail(9),
            'pastaRice' => Category::with('products')->findOrFail(10),
            'sauce' => Category::with('products')->findOrFail(11),  
        ]);
    }

    public function showDrinks(): View
    {
        return view('categories.drinks', [
            'water' => Category::with('products')->findOrFail(12),
            'soda' => Category::with('products')->findOrFail(13),
            'juice' => Category::with('products')->findOrFail(14),
            'dairy' => Category::with('products')->findOrFail(15),
        ]);
    }

    public function showProduce(): View
    {
        return view('categories.produce', [
            'fruit' => Category::with('products')->findOrFail(16),
            'veggies' => Category::with('products')->findOrFail(17),
        ]);
    }

    public function showFrozen(): View
    {
        return view('categories.frozen', [
            'pizza' => Category::with('products')->findOrFail(18),
            'iceCream' => Category::with('products')->findOrFail(19),
<<<<<<< HEAD
=======
            'readyMeals' => Category::with('products')->findOrFail(20),
            'fruitFrozen' => Category::with('products')->findOrFail(21),
            'vegFrozen' => Category::with('products')->findOrFail(22),
>>>>>>> b051cb2938ed49afee83102f7e8e5c46e12e4679
        ]);
    }

    public function addToCart(Request $request)
    {
<<<<<<< HEAD

        // New cart instance
        $cart = new Cart; 
        // Get the user's id and store it
        $cart->user_id = $request->user()->id; 
        // Get the product's id and store it
        $cart->product_id = $request->product_id; 
=======
        // New cart instance
        $cart = new Cart; 
        $cart->user_id = $request->user()->id; 
        $cart->product_id = $request->product_id; 
        
>>>>>>> b051cb2938ed49afee83102f7e8e5c46e12e4679
        // Save the record
        $cart->save();
        // Refresh the page
        return redirect()->back();
    }

    static function cartItem()
    {
        // Fetch the user's id from the session.
        $user_id = Auth::id();

        // Count the items which contain that user's id.
        return Cart::where('user_id', $user_id)->count();
    }

    public function cartList()
    {
        // Fetch the user's id from the session.
        $user_id = Auth::id();

        /**
         * Join the products table, where product_id is the same as id.
         * 
         * Filter where 'user_id' is the same as that user's id.
         * 
         * Select the fields, every one in the products table together with the cart_id.
         * 
        */

        $products = DB::table('cart')
        ->join('products', 'cart.product_id', '=', 'products.id')
        ->where('cart.user_id', $user_id)
        ->select('products.*', 'cart.id as cart_id')
        ->get();

        return view('cart', ['products' => $products]);
    }

    public function removeCartItem($id)
    {
        Cart::destroy($id); // Delete the record.

        return redirect()->back();
    }

    public function orderNow()
    {
        $userId = Auth::id();
        $total= $products= DB::table('cart')
         ->join('products','cart.product_id','=','products.id')
         ->where('cart.user_id',$userId)
         ->sum('products.price');

        return view('orderNow', ['total' => $total]);
    }
    public function placeOrder(Request $request)
    {
        $user_id = Auth::id();
        $cartItems = Cart::where('user_id', $user_id)->get();

        foreach ($cartItems as $cart) {
            $order = new Order;
            $order->product_id = $cart->product_id;
            $order->user_id = $cart->user_id;
            $order->status = "Pending";
            $order->payment_method = $request->payment;
            $order->payment_status = "Pending";
            $order->address = $request->address;
            $order->save();

            Cart::where('user_id', $user_id)->delete();
        }

        $request->input();
        return redirect('/ordersuccess');
    }

    public function myOrders()
    {
        $user_id = Auth::id();
        $orders = DB::table('orders')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->where('orders.user_id', $user_id)
            ->get();

            return view('myorders', ['orders'=>$orders]);
    }
}
