<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\needhelpController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/needhelp', [needhelpController::class, 'index'])->name('needhelp.index');
Route::post('/needhelp', [needhelpController::class, 'store'])->name('needhelp.store');

Route::get('/test-database-connection', function () {
    try {
        DB::connection()->getPdo();
        return "Connected to the database!";
    } catch (\Exception $e) {
        die("Could not connect to the database. Error: " . $e->getMessage());
    }
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/help', function () {
    return view('help');
})->name('help');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/welcome', function () {
    return view('welcome');
})->name('index');

Route::get('/product', function () {
    return view('product');
})->name('product');
 

Route::get('/admin/{id}/edit', [AdminController::class, 'edit'])->name('admin.edit');
Route::put('/admin/{id}', [AdminController::class, 'update'])->name('admin.update');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');


Route::get('/admin/needhelp', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/needhelp/{id}', [AdminController::class, 'show'])->name('admin.show');
Route::delete('/admin/needhelp/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');


// Route to display the form for creating a new product
Route::get('/admin/addproduct', [ProductController::class, 'create'])->name('products.create');

// Route to store the newly created product
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

// Route to display the list of products (assuming you have an 'index' method in the ProductController)
Route::get('/products', [ProductController::class, 'index'])->name('products.index');



