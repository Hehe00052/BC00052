<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'photo', 'description'];

    // Additional methods, relationships, and other customizations can be added here
}

class Productadd extends Controller
{
    public function store(Request $request)
    {
        $name = $request->input('name');
        $price = $request->input('price');
        $photo = $request->input('photo');
        $description = $request->input('description');
    }
}