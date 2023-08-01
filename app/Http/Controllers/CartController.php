<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart; // Import the Cart model

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $productId = $request->input('product_id');
        $product = Product::find($productId);

        if (!$product) {
            return response()->json(['message' => 'Product not found.'], 404);
        }

        // Create a new record in the carts table
        Cart::create(['product_id' => $productId]);

        // Return a JSON response indicating success
        return response()->json(['message' => 'Product added to cart successfully!']);
    }

    public function showCart(Request $request)
    {
        // Retrieve the cart data from the session
        $cart = $request->session()->get('cart', []);

        // You can then use the $cart data to fetch the products from the database or do any other processing you need for the cart view

        // For example, if you have a Product model:
        $productsInCart = Product::whereIn('id', $cart)->get();

        return view('cart', ['productsInCart' => $productsInCart]);
    }

}
