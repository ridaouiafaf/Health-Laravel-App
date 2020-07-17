<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DonationRequest extends FormRequest
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
            'type'=>'required',
        'status'=>'required',
        'donors'=>'required',
        'gsm'=>'required',
        'address'=>'required',
        'city'=>'required',
        'end_date'=>'required',
        ];
    }
}
