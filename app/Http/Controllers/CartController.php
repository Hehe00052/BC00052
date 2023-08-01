<?php
use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $productId = $request->input('product_id');
        // Add the product with the given $productId to the cart here
        // You can use Eloquent to add the product to the cart in your database

        // Redirect back to the product listing page or cart page after adding the product
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
}
