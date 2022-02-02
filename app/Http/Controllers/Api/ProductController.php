<?php

namespace App\Http\Controllers\Api;

use App\Contracts\ProductServiceInterface;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductCollection;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Services\ProductService;
use Database\Seeders\ProductSeeder;
use Illuminate\Http\Request;
use Monolog\Logger;

class ProductController extends Controller
{
/** Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
   private $productService;

   public function __constructor(ProductServiceInterface $productService){
       $this->productService = $productService;
   }


    public function index(Logger $logger)
    {
        Product::query()
            ->where()
            ->orWhere()
            ->orderByRaw()
            ->get();
        return new ProductCollection(Product::paginate());
    }

/** Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
    public function store(Request $request)
    {
        //
    }

/** Display the specified resource.
*
* @param  \App\Models\Product  $product
* @return \Illuminate\Http\Response
*/
    public function show($id, ProductService $productService)
    {
        return new ProductResource($this->$productService->getProductById($id));
    }

/** Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  \App\Models\Product  $product
* @return \Illuminate\Http\Response
*/
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
