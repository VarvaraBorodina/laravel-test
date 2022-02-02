<?php

namespace App\Services;

use App\Contracts\ProductServiceInterface;
use App\Http\Resources\ProductResource;
use App\Models\Product;

class ProductService implements ProductServiceInterface
{
    public function getProductById($id){
        return Product::find($id);
    }
}
