<?php

namespace App\Http\Requests\Store\Product;

use App\Http\Requests\Request;

class ProductStoreRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'price' => 'required|numeric',
            'active' => 'required|boolean'
        ];
    }
}
