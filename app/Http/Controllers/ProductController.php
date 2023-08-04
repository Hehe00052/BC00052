<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Show the form for creating a new product.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin/product.addproduct');
    }

    /**
     * Store a newly created product in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
        ]);
    
        // Handle photo upload
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('products', 'public');
        } else {
            $photoPath = null;
        }
    
        // Create the product
        Product::create([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'photo' => $photoPath,
            'description' => $request->input('description'),
        ]);
    
        return redirect()->route('products.index')->with('success', 'Product added successfully!');
    }
    public function index()
    {
        $products = Product::all();
        return view('admin.product.listproducts', compact('products'));
    }
    public function showProductsForCustomers()
    {
        $products = Product::all();
        return view('product', ['product' => $products]);
    }
    public function destroy($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return redirect()->route('products.index')->with('error', 'Product not found');
        }

        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }

        public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.product.editproduct', compact('product'));
    }
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
        ]);

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('products', 'public');
        } else {
            $photoPath = $product->photo;
        }

        $product->update([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'photo' => $photoPath,
            'description' => $request->input('description'),
        ]);

        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $products = Product::where('name', 'LIKE', '%' . $query . '%')
                            ->orWhere('description', 'LIKE', '%' . $query . '%')
                            ->get();
    
        if ($products->isEmpty()) {
            return redirect()->route('product.index')->with('error', 'No products found.');
        }
    
        return view('product', ['product' => $products]);
    }

}
