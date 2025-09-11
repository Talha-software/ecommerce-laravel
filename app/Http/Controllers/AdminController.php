<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\products;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addCategory(){
        return view('admin.addcategory');
    }
    public function postAddCategory(Request $request){
        $category=new Category();
        $category->category = $request->addCategory;
        $category->save();
        return redirect()->back()->with('session_message','Category Added Successfully');
    }
    public function viewCategory(){
        $categories=Category::all();
        return view('admin.viewcategory',compact('categories'));
    }
    public function deleteCategory($id){
        $category=Category::findorFail($id);
        if($category){
            $category->delete();
            return redirect()->back()->with('session_message','Category Deleted Successfully');
        }else{
            return redirect()->back()->with('session_message','No Category Found');
        }
    }
    public function editCategory($id){
        $category=Category::findorFail($id);
        return view('admin.editCategory',compact('category'));
    }
    public function postEditCategory(Request $request,$id){
        $category=Category::findorFail($id);
        $category->category = $request->category;
        $category->save();
        return redirect('/view_Category')->with('session_message','Category Updated Successfully');
    }


    public function addProducts(){
        $categories=Category::all();
        return view('admin.addproducts',compact('categories'));
    }


    public function postAddProducts(Request $request){
        $product=new Products();
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_description = $request->product_description;
        $product->product_quantity = $request->product_quantity;


        $image=$request->product_image;
        if($image){
            $imageName=time().'.'.$image->getClientOriginalExtension();
            $product->product_image=$imageName;
        }


        $product->product_category = $request->product_category;
        $product->save();


        if($image && $product->save()){
            $image->move('product_images',$imageName);
        }

        return redirect()->back()->with('session_message','Product added Successfully');


    }




    public function viewProducts(){
        $products=Products::paginate(2);
        return view('admin.viewproducts',compact('products'));
    }

        public function deleteProduct($id){
        $product=Products::findorFail($id);
        $imagePath = 'product_images/'.$product->product_image;
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        if($product){
            $product->delete();
            return redirect()->back()->with('session_message','Category Deleted Successfully');
        }else{
            return redirect()->back()->with('session_message','No Category Found');
        }
    }

    public function productEdit($id){
        $product=Products::findorFail($id);
        $categories=Category::all();
        return view('admin.editProduct',compact('product','categories'));
    }

    public function updateProduct(Request $request,$id){
        $product=Products::findorFail($id);
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_description = $request->product_description;
        $product->product_quantity = $request->product_quantity;
        $product->product_category = $request->product_category;
        $image=$request->product_image;
        if($image){
            $imageName=time().'.'.$image->getClientOriginalExtension();
            $product->product_image=$imageName;
        }


        $product->product_category = $request->product_category;
        $product->save();


        if($image && $product->save()){
            $image->move('product_images',$imageName);
        }

        return redirect()->back()->with('session_message','Product added Successfully');
    }
}
