<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidarFormulario extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre'=>'required|min:2|max:20',
            'descripcion'=>'required',
            'email'=>'required|email',
            'contraseña'=>'required|min:8|max:10|',
            'likes'=>'required'
        ];
    }

    public function messages()
     {
        return[
            'nombre.required'=>'Introduce un nombre por favor',
            'nombre.min:2'=>'El nombre tiene que tener como mínimo 2 carácteres',
            'nombre.max:20'=>'El nombre tiene que tener como máximo 20 carácteres',
            'descripcion.required'=>'Introduce una descripción por favor',
            'email.required'=>'Introduce un email por favor',
            'contraseña.required'=>'Introduce un nombre por favor',
            'contraseña.min:8'=>'La contraseña tiene que tener como mínimo 8 carácteres',
            'contraseña.max:10'=>'La contraseña tiene que tener como máximo 10 carácteres',
        ];
     }
}
