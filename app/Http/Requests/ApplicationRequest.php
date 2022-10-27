<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class ApplicationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $args = [
            'name'  => 'required',
        ];

        if(! $this->id){
            $args['icon'] = 'required';
            $args['image'] = 'required';
            $args['image_small'] = 'required';
        }
            

        return $args;
    }

    public function messages()
    {
        return [
            'name.required'         => 'Nombre del color es requerido',
            'icon.required'         => 'Icono es requerido',
            'image.required'        => 'Imagen hero es requedia para la pagina de la aplicación',
            'image_small.required'  => 'Imagen small es requedia para la pagina de la aplicación',
        ];
    }
}
