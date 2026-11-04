<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Specify the database table name.
    protected $table = 'products';   

    // Allow mass assignment for specified columns.
    protected $fillable = ['title', 'price', 'qty', 'description']; 
}
