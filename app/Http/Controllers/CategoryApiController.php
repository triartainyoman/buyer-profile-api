<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryApiController extends Controller
{
    public function index() {
        $categories = Category::all();
        return response()->json(['message' => 'Success', 'data' => $categories]);
    }

    public function show($id) {
        $category = Category::find($id);
        return response()->json(['message' => 'Success', 'data' => $category]);
    }

    public function store(Request $request) {
        $category = Category::create($request->all());
        return response()->json(['message' => 'Data has been inserted successfully', 'data' => $category]);
    }

    public function update(Request $request, $id) {
        $category = Category::find($id);
        $category->update($request->all());
        return response()->json(['message' => 'Data has been updated successfully', 'data' => $category]);
    }

    public function destroy($id) {
        $category = Category::find($id);
        $category->delete();
        return response()->json(['message' => 'Data has been deleted successfully', 'data' => null]);
    }
}
