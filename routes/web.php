<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\needhelpController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

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


Route::get('/product', [ProductController::class, 'showProductsForCustomers'])->name('product');


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


Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');

// Route to show
Route::get('/admin/listproducts.blade.php', [ProductController::class, 'index'])->name('productsa.index');

Route::get('/admin/index.blade.php', [needhelpController::class, 'index'])->name('needhelpa.index');

// Route to display the list of products (assuming you have an 'index' method in the ProductController)
Route::get('/admin/products', [ProductController::class, 'index'])->name('products.index');

Route::delete('/admin/products/{product}', [ProductController::class, 'destroy'])->name('admin.products.destroy');

// routes for cart
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');

Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');

//route for search
Route::get('/product/search', [ProductController::class, 'search'])->name('product.search');



