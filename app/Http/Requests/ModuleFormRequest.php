<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ModuleFormRequest extends FormRequest
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
            'code' => [
                'required',
                'min:5',
                'max:8',
            ],
           'name' => [
                'required',
                'max:255'
           ],
           'faculty' => [
                'required',
                'max:255'
           ],
           'department' => [
                'required',
                'max:255'
           ],
           'lecturer' => [
                'required',
                'max:255'
           ],
           'credit' => [
                'required',
                'numeric',
                'integer',
                'between:0,200'
           ]
        ];
    }
}
