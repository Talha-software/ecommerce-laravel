<?php

namespace App\Http\Controllers;

use App\Models\products;
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
        $products=products::all();
        return view('index',compact('products'));
    }

    public function productDetail($id){
        $product = products::findOrFail($id);
        return view('product-detail', compact('product'));
    }
}
