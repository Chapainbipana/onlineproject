<?php

namespace App\Http\Controllers;
use\App\Models\Productt;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function cartview(){
        
            // Get the cart from the session and pass it to the view
            $cart = session('cart', []);
            return view('cart.cart', compact('cart'));
        
    }
    public function addToCart($id)
    {
        // Find the product by ID
        $product = Productt::find($id);
    
        if (!$product) {
         
            return redirect()->back()->with('error', 'Product not found.');
        }
    
        
        $cart = session('cart', []);
    
       
        $exists = collect($cart)->contains('id', $product->id);
    
        if ($exists) {
            
            return redirect()->back()->with('message', 'Product is already in the cart!');
        }
    
        
        session()->push('cart', $product);
    
       
        $cart = session('cart');
    
        return view('cart.cart', compact('cart'))->with('message', 'Product added to cart successfully!');
    }
public function removecart($id)
    {
        
        $cart = session('cart', []);


        foreach ($cart as $key => $item) {
            if ($item->id == $id) {
            
                unset($cart[$key]);
            }
        }
        session(['cart' => $cart]);

        
        return redirect()->route('products.cart.view')->with('success', 'Product removed from cart!');
    }
}
