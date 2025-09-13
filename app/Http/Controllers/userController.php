<?php

namespace App\Http\Controllers;

use App\Models\products;
use App\Models\ProductCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function index(){
        if(Auth::check() && Auth::user()->user_type == 'user'){
            return view('dashboard');
        }
        else if(Auth::check() && Auth::user()->user_type == 'admin'){
                return view('admin.dashboard');
        }
    }

    public function home(){
        $products=products::latest()->take(2)->get();
        return view('index',compact('products'));
    }

    public function productDetail($id){
        $product = products::findOrFail($id);
        return view('product-detail', compact('product'));
    }


    public function allProducts(){
        $products = products::all();
        return view('products_detail_page', compact('products'));
    }


    public function add_to_cart($id){
        $product=products::findOrFail($id);
        $productCart=new ProductCart();
        $productCart->user_id=Auth::user()->id;
        $productCart->product_id=$id;
        $productCart->save();
        return redirect()->back()->with('success','Product added to cart successfully');

    }
}
