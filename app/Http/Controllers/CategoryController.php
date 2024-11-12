<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\category;
use\App\Models\Productt;
class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all(); // Fetch all categories
        return view('admin.category.categories', compact('categories'));
    }

    public function addcategory($id){
        $product = Category::with('productt')->findOrFail($id);
        return view('categories.addcategory',compact('product'));
    }
    public function showProducts($id)
{
    $category = Category::with('productt')->findOrFail($id);
    return view('categories.category', compact('category'));
}
public function addCategoryToProduct(Request $request, $productId)
{
    // Validate the request to ensure it contains a valid category_id
    $request->validate([
        'category_id' => 'required|exists:categories,id',
    ]);

    // Find the product by ID
    $product = Productt::findOrFail($productId);

    // Attach the category to the product
    $product->categories()->attach($request->category_id);

    return redirect()->back()->with('success', 'Category added to product successfully.');
}
}
