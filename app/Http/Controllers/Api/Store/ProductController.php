<?php

namespace App\Http\Controllers\Api\Store;

use App\Model\Store\Product;
use App\Model\Store\Supplier;
use App\Http\Requests\Request;
use App\Http\Controllers\ApiController;
use App\Http\Resources\Store\Product\ProductResource;
use App\Http\Requests\Store\Product\ProductStoreRequest;
use App\Http\Requests\Store\Product\ProductUpdateRequest;

class ProductController extends ApiController
{
    public function index(Request $request, Product $product)
    {
        return $product->paginate($request->get('paginate', 20));
    }

    public function store(ProductStoreRequest $request, Product $product)
    {
        $product->fill($request->validated());
        $product->save();

        return new ProductResource($product);
    }

    public function show(Product $product)
    {
        return new ProductResource($product);
    }

    public function update(ProductUpdateRequest $request, Product $product)
    {
        $product->fill($request->validated());
        $product->save();

        return new ProductResource($product);
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return response()->json(null, 204);
    }

    public function bind(Supplier $supplier, Product $product)
    {
        $product->suppliers()->syncWithoutDetaching($supplier);
        return new ProductResource($product);
    }

    public function unbind(Supplier $supplier, Product $product)
    {
        $product->suppliers()->detach($supplier);
        return new ProductResource($product);
    }
}
