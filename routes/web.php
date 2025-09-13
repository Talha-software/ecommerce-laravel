<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;

Route::get('/', [userController::class, 'home'])->name("index");
Route::get('/all_products', [userController::class, 'allProducts'])->name("products_detail_page");
Route::get('/product/{id}', [userController::class, 'productDetail'])->name('product.detail');

Route::get('/dashboard', [userController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/addtocart/{id}', [userController::class, 'add_to_cart'])->middleware(['auth', 'verified'])->name('add_to_cart');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware('admin','auth')->group(function () {
    Route::get('/addCategory', [AdminController::class, 'addCategory'])->name('admin.addcategory');
    Route::get('/view_Category', [AdminController::class, 'viewCategory'])->name('admin.viewcategory');
    Route::post('/addCategory', [AdminController::class, 'postAddCategory'])->name('admin.postaddcategory');
    Route::get('/delete_Category/{id}', [AdminController::class, 'deleteCategory'])->name('admin.categoryDelete');
    Route::get('/edit_Category/{id}', [AdminController::class, 'editCategory'])->name('admin.categoryEdit');
    Route::post('/update_Category/{id}', [AdminController::class, 'postEditCategory'])->name('admin.updateCategory');
    Route::get('/add_products', [AdminController::class, 'addProducts'])->name('admin.addProducts');
    Route::post('/add_products', [AdminController::class, 'postAddProducts'])->name('admin.postAddProducts');
    Route::get('/view_products', [AdminController::class, 'viewProducts'])->name('admin.viewProducts');
    Route::get('/delete_product/{id}', [AdminController::class, 'deleteProduct'])->name('admin.deleteproduct');
    Route::get('/edit_Product/{id}', [AdminController::class, 'productEdit'])->name('admin.productEdit');
    Route::post('/update_Product/{id}', [AdminController::class, 'updateProduct'])->name('admin.updateProduct');
    Route::any('/view_products', [AdminController::class, 'search'])->name('admin.search');

});


require __DIR__.'/auth.php';    


