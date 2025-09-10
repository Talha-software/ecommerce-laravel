<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('index');
})->name("index");

Route::get('/dashboard', [userController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

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


});


require __DIR__.'/auth.php';    


