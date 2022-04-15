<?php

namespace App\Http\Requests\Store\Product;

use App\Http\Requests\Request;

class ProductUpdateRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'sometimes|string',
            'price' => 'sometimes|numeric',
            'active' => 'sometimes|boolean'
        ];
    }
}
