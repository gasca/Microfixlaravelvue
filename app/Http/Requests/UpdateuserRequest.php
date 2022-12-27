<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateuserRequest extends FormRequest
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
            //
            'Nombre'=>['required'],
                'Apellidos'=>['required'],
                'Correo'=>['required'],
                // 'Correo'=>['required' Rule::class()unique:table,column,except,id],
                'Password'=>['required'],
                'Password2'=>['required'],
                'Ciudad'=>['required'],
                'Colonia'=>['required'],
                'Direccion'=>['required'],
                'Celular'=>['required'],
        ];
    }
}
