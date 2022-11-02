<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use phpDocumentor\Reflection\PseudoTypes\True_;

class StoreProductsRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {

        return [
            'name'           => 'required|max:200',
            'Product'       =>'required',
            'Quantity'     => 'required',
            'CostPerItem'        => 'required',
            'Total'          => 'required',
            'GrandTotal'          => 'required',
            'Notes'            => 'required',
         ];
    }
    public function data()
    {
        $data = [
            'name'           => $this->get('name'),
            'Product'     => $this->get('Product'),
            'Quantity'     =>$this->get('Quantity'),
            'CostPerItem'        => $this->get('CostPerItem'),
            'Total'          => $this->get('Total'),
            'GrandTotal'          => $this->get('GrandTotal'),
            'Notes'            => $this->get('Notes'),

        ];

        return $data;
    }
}
