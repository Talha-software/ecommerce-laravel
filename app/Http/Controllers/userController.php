<?php

namespace App\Http\Controllers;

use App\Models\products;
use App\Models\ProductCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function index()
    {
        if (Auth::check() && Auth::user()->user_type == 'user') {
            return view('dashboard');
        } else if (Auth::check() && Auth::user()->user_type == 'admin') {
            return view('admin.dashboard');
        }
    }

    public function home()
    {
        if (Auth::check()) {
            $count = ProductCart::where('user_id', Auth::user()->id)->count();
        } else {
            $count = 0;
        }


        $products = products::latest()->take(2)->get();
        return view('index', compact('products', 'count'));
    }

    public function productDetail($id)
    {
        if (Auth::check()) {
            $count = ProductCart::where('user_id', Auth::user()->id)->count();
        } else {
            $count = 0;
        }
        $product = products::findOrFail($id);
        return view('product-detail', compact('product', 'count'));
    }


    public function allProducts()
    {
        if (Auth::check()) {
            $count = ProductCart::where('user_id', Auth::user()->id)->count();
        } else {
            $count = 0;
        }
        $products = products::all();
        return view('products_detail_page', compact('products', 'count'));
    }


    public function add_to_cart($id)
    {
        $product = products::findOrFail($id);
        $productCart = new ProductCart();
        $productCart->user_id = Auth::user()->id;
        $productCart->product_id = $id;
        $productCart->save();
        return redirect()->back()->with('success', 'Product added to cart successfully');
    }

    public function cartProducts()
    {


        if (Auth::check()) {
            $count = ProductCart::where('user_id', Auth::user()->id)->count();
            $cart=ProductCart::where('user_id', Auth::id())->get();
        } else {
            $count = "";
        }


        return view('cartProducts', compact('cart', 'count'));
    }

    public function deletecartproduct($id)
    {
        $cartProduct=ProductCart::findOrFail($id);
        $cartProduct->delete();
        return redirect()->back()->with('success', 'Product removed from cart successfully');
    }
}
