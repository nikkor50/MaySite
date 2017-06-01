<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreProductPostRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'typeid'=>'required',
            'productname'=>'required',
            'category'=>'required',
            'productid'=>'required',
            'mfg'=>'required',
            'specific'=>'required'
        ];
    }
}
