<?php

namespace App\Http\Controllers\Api\Store;

use App\Model\Store\Supplier;
use App\Http\Requests\Request;
use App\Http\Controllers\ApiController;
use App\Http\Resources\SupplierResource;
use App\Http\Requests\Store\Supplier\SupplierStoreRequest;
use App\Http\Requests\Store\Supplier\SupplierUpdateRequest;

class SupplierController extends ApiController
{
    public function index(Request $request, Supplier $supplier)
    {
        return $supplier->paginate($request->get('paginate', 20));
    }

    public function store(SupplierStoreRequest $request, Supplier $supplier)
    {
        $supplier->fill($request->validated());
        $supplier->save();

        return new SupplierResource($supplier);
    }

    public function show(Supplier $supplier)
    {
        return new SupplierResource($supplier);
    }

    public function update(SupplierUpdateRequest $request, Supplier $supplier)
    {
        $supplier->fill($request->validated());
        $supplier->save();

        return new SupplierResource($supplier);
    }

    public function destroy(Supplier $supplier)
    {
        if ($supplier->products->count() > 1) {
            return response()->json(__('store/supplier.errors.delete_with_products'), 400);
        }

        $supplier->delete();
        return response()->json(null, 204);
    }
}
