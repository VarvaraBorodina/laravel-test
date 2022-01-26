<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class WishListController extends Controller
{
    public function index(Request $request){
        $wishList = \Session::get('wishList', []);
        $productsId = array_keys($wishList);
        $products = Product::whereIn('id', $productsId)->get();
        $productList = [];
        foreach ($products as $product){
            $productList[$product->name] = $wishList[$product->id];;
        }
        return view('wishList', compact('productList'));
    }

    public function addToWishList(Request $request)
    {
        session()->increment('wishList.'.$request->get('product_id'));
        return redirect()->to(route('wishList'));
    }
}
