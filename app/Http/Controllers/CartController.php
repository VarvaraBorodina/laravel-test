<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Request $request){
        $cart = \Session::get('cart', []);
        $productsId = array_keys($cart);
        $products = Product::whereIn('id', $productsId)->get();
        dump($products);
    }
    public function addToCart(Request $request){
        session()->increment('cart.'.$productId = $request->get('product_id'));
        return redirect()->to(route('cart'));
    }

}
