<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LotPostingRequest extends FormRequest
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
            'lot_number' => 'required',
            'blk_number' => 'required', 
            'area' => 'required',
            'price' => 'required',
            'location' => 'required',
        ];
    }
}
