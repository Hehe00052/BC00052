<?php
// app/Models/Cart.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', // Assuming you have a user ID to associate the cart items with a user
        'product_id', // The ID of the product added to the cart
        'quantity', // The quantity of the product added to the cart
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
