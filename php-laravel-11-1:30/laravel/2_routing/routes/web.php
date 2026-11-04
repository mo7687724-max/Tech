<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use function PHPUnit\Framework\returnArgument;
// ======================================
//              ROUTE BASIC
// ======================================
// Route::get('/', function () {
//     return "<h1>Hello Laravel</h1>";
// });

// // route single parameter
// Route::get('/product/{id}', function ($id) {
//     return "Product id : $id";
// });

// // route multiple parameter 
// Route::get('/categories/{id}/{name}', function ($id, $name) {
//     return "Categories ID : $id <br>
//             Categories NAME : $name";
// });

// // route optional parameter
// Route::get('/users/{username?}', function ($username = '') {
//     return "Username : " . $username;
// });

// // HTTP Request Methods: GET, POST, PUT, PATCH, DELETE

// // GET: Retrieve data
// Route::get('/get', function () {
//     return "GET is used to retrieve data";
// });

// // POST: Create new data
// Route::post('/post', function () {
//     return "POST is used to insert or create new data";
// });

// // PUT: Update an entire resource
// Route::put('/put/{id}', function ($id) {
//     return "PUT is used to update the entire product: $id";
// });

// // PATCH: Update specific fields
// Route::patch('/patch/{id}', function ($id) {
//     return "PATCH is used to update specific fields of product: $id";
// });

// // DELETE: Delete data
// Route::delete('/delete/{id}', function ($id) {
//     return "DELETE is used to delete product: $id";
// });


// // ===============================================
// //                ROUTE + VIEWS
// // ===============================================
// // route + view
// Route::get('/home', function () {
//     return view('home');
// });

// // route parameter + view
// Route::get('/home/{name}', function ($name) {
//     return view('home', compact('name'));
// });

// // route + view + passing data
// Route::get('/product', function () {
//     $products = [
//         [
//             'id' => 1,
//             'title' => 'iPhone 16 Pro',
//             'price' => 1099,
//             'qty' => 10,
//             'image' => 'https://images.unsplash.com/photo-1592750475338-74b7b21085ab?w=500',
//             'description' => 'Apple iPhone with advanced camera and powerful performance.'
//         ],
//         [
//             'id' => 2,
//             'title' => 'MacBook Pro M4',
//             'price' => 1999,
//             'qty' => 5,
//             'image' => 'https://images.unsplash.com/photo-1517336714731-489689fd1ca8?w=500',
//             'description' => 'Powerful laptop for programming, design, and professional work.'
//         ],
//         [
//             'id' => 3,
//             'title' => 'Wireless Headphones',
//             'price' => 149,
//             'qty' => 20,
//             'image' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=500',
//             'description' => 'Comfortable wireless headphones with high-quality sound.'
//         ],
//         [
//             'id' => 4,
//             'title' => 'Smart Watch',
//             'price' => 249,
//             'qty' => 15,
//             'image' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=500',
//             'description' => 'Modern smartwatch for fitness tracking and daily activities.'
//         ],
//         [
//             'id' => 5,
//             'title' => 'Gaming Mouse',
//             'price' => 59,
//             'qty' => 30,
//             'image' => 'https://images.unsplash.com/photo-1527814050087-3793815479db?w=500',
//             'description' => 'Ergonomic gaming mouse with precise optical tracking.'
//         ]
//     ];

//     return view('product', compact('products'));
// });


// // route name + view 
// Route::get('user/', function(){
//     return view('users.index');
// })->name('user.index');

// Route::get('user/create/', function(){
//     return view('users.create');
// })->name('user.create');

// Route::get('user/edit', function(){
//     return view('users.edit');
// })->name('user.edit');


// // group route (prefix , name) + view
// Route::prefix('user')->name('user.')->group(function(){
//     Route::get('/', function(){
//         return view('users.index');
//     })->name('index');

//     Route::get('/create', function(){
//         return view('users.create');
//     })->name('create');

//     Route::get('/edit', function(){
//         return view('users.edit');
//     })->name('edit');
// });



// ======================================
//      Route + Controller
// ======================================
// single route + controller
// Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
// Route::get('/product', [HomeController::class, 'product'])->name('product');

// group route + controller
// Route::controller(HomeController::class)->group(function(){
//     Route::get('/', 'index')->name('home');
//     Route::get('/contact', 'contact')->name('contact');
//     Route::get('/product', 'product')->name('product');
// });

// route + controller + model + view
Route::get('/', [ProductController::class, 'index']);

