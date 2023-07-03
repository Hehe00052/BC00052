<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $needHelpItems = Admin::all();

        return view('admin.needhelp.index', compact('needHelpItems'));
    }

    public function show($id)
    {
        $needHelpItem = Admin::findOrFail($id);

        return view('admin.needhelp.show', compact('needHelpItem'));
    }

    public function destroy($id)
    {
        $needHelpItem = Admin::findOrFail($id);
        $needHelpItem->delete();

        return redirect()->route('admin.index')->with('success', 'Item deleted successfully');
    }

    public function edit($id)
    {
        $item = Admin::findOrFail($id);
        return view('admin.needhelp.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = Admin::findOrFail($id);
        $item->name = $request->input('name');
        $item->email = $request->input('email');
        $item->message = $request->input('message');
        $item->save();

        return redirect()->route('admin.index')->with('success', 'Item updated successfully.');
    }

}
