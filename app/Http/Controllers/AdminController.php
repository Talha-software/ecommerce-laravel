<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
}
