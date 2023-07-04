<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\needhelpController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
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




