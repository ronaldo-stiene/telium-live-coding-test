<?php

namespace App\Http\Requests\Store\Supplier;

use App\Http\Requests\Request;

class SupplierStoreRequest extends Request
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
            'active' => 'required|boolean'
        ];
    }
}
