<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {

        $products = Product::all(); // Eloquent ORM

        // $products = Product::where('price', '>' , 400)
        //             ->get(); // Eloquent ORM

        // $products = Product::whereLike('title', '%b%')->get();

        return view('pages.product_list', compact('products'));

    }

    public function find()
    {
        $product = Product::find(17);

        return view('pages.find', compact('product'));
    }


    public function create()
    {

        // Product::create([
        //     'title' => "New Product",
        //     'price' => 1000,
        //     'qty' => 10,
        //     'description' => 'new product ........'
        // ]);


        $products = Product::make([
            'title' => "New Product 2",
            'price' => 2000,
            'qty' => 20,
            'description' => 'new product 2 ........'
        ]);

        $products->save();

        return redirect()->route('all');
    }


    public function update()
    {
        $product = Product::findOrFail(5);

        $product->update([
            'title' => "Update Product",
            'price' => 3000,
            'qty' => 30,
            'description' => 'Update product........'
        ]);
        return redirect()->route('all');
    }

    public function delete()
    {
        $product = Product::findOrFail(1);
        $product->delete();
        return redirect()->route('all');
    }

}
