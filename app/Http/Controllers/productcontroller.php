<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use\App\Models\Productt;

class productcontroller extends Controller
{
    public function create() {
        return view('product.creatproduct');
        
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $originalImageName = null;
    
    if ($request->file('image')) {
        $originalImageName = $request->file('image')->getClientOriginalName();        
        $imagePath = $request->file('image')->storeAs('images', $originalImageName, 'public');
    }


        Productt::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $originalImageName,
        ]);
       return redirect()->route('products.show');

   }
   public function show(){
    $product=Productt::all();
    return view('product.productdisplay',compact('product'));
   }
   public function delete($id){
    $product=Productt::find($id);  
    $product->delete();
    return back();
   }
public function editproduct($id){
$productedit=Productt::find($id);
return view('product.editproduct', compact('productedit'));
}
public function updateproduct(Request $request,$id){
    $request->validate([
        'name' => 'required',
        'description' => 'required',
        'price'=>'required',
    ]);
    $post= Productt:: find($id);
    if($post){
        $post->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price'=>$request->input('price'),
        ]);
        return redirect()->route('products.show')->with('success', 'Post updated successfully!');
    }
}

}


