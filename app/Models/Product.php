<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Define the table associated with the Product model
    protected $table = 'products';

    // Define the fillable attributes for mass assignment
    protected $fillable = ['name', 'price', 'photo', 'description'];
}



