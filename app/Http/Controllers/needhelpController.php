<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\needhelp;

class needhelpController extends Controller
{
    public function index(Request $request)
    {
        return view("help",['message'=>$request->get("success")]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        needhelp::create($validatedData);
        
        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
