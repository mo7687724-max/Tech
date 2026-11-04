<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


// =======================
// Basic Route
// =======================
// Route::get("/", function () {
//     return "Hello Laravel";
// });

// =======================
// Route Parameters
// =======================
// route::get('/product/{qty}/{price}', 
//     function(int $qty, int $price){
//         return "Product id : ". $qty * $price;
// });


// =======================
// Optional Parameters
// =======================
// route::get('/product/{qty?}/{price?}', 
//     function(int $qty = 0, int $price = 0) {
//         return "Product id : ". $qty * $price;
// });

// =======================
// route + views
// =======================

// Route::get('/home', function(){
//     return view('home');
// });

// =======================
// route + data + views
// =======================
// Route::get('/product/list', function(){
//     $product = [
//                 'id' => 1,
//                 'name' => 'Minimalist Analog Watch',
//                 'price' => 149.99,
//                 'qty' => 35,
//                 'image' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?auto=format&fit=crop&w=800&q=80',
//                 'description' => 'A clean, modern timepiece featuring a brushed stainless steel case and a genuine leather strap.'
//         ] ;
//     return view('product/products', compact('product'));
// });

// =======================
// HTTP Methods
// =======================

// Route::get('/get', function(){
//     return "Show Data";
// });
// Route::post("/post", function(){
//     return "Create Data /Update Data (optional)";
// });

// Route::put("/put", function(){
//     return "Update Date 1 object";
// });

// Route::patch("/patch", function(){
//     return "Update Data 1 part of object";
// });

// Route::delete("/delete", function(){
//     return "Delete Data 1 object";
// });


// =======================
// Route + Controller
// =======================
// Route::get('/product', [ProductController::class, 'index']);



// =======================
// Route + redirect + route name
// =======================
// Route::get('/', function(){
//     // return redirect('/user/index'); // use url for redirect
//     return redirect()->route('home'); // use route name instance of base url
// });

// Route::get('/user/index', function(){
//     return view('user.index');
// })->name('home');

// Route::get('/user/about', function(){
//     return view('user.about');
// })->name('about');

// Route::get('/user/contact', function(){
//     return view('user.contact');
// })->name('contact');


// ==========================================
// Route + prefix + name + Controller + group 
// =========================================

Route::get('/', function () {
    return redirect()->route('product.index');
});

// Route::get('/product/index', [ProductController::class, 'index'])->name('product.index');
// Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
// Route::get('/product/show', [ProductController::class, 'show'])->name('product.show');
// Route::get('/product/edit', [ProductController::class, 'edit'])->name('product.edit');

Route::prefix('/product')->name('product.')->controller(ProductController::class)->group(function(){
    Route::get('/index', 'index')->name('index');
    Route::get('/show','show')->name('show');
    Route::get('/create','create')->name('create');
    Route::get('/edit','edit')->name('edit');
});