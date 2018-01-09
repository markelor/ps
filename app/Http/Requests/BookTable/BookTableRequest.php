<?php

namespace App\Http\Requests\BookTable;

use Illuminate\Foundation\Http\FormRequest;

class BookTableRequest extends FormRequest
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
            //
        'name'=>'required',
        'phone'=>'required',
        'email'=>'required|email',
        'datepicker'=>'required',
        'time'=>'required',
        'person'=>'required',
        'mensaje'=>'required'
        ];
    }
}
