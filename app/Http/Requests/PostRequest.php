<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'order'    => 'nullable|min:2|max:2',
            'title'    => 'required',
            'content1' => 'required',
        ];

        if($this->id)
            $args['image'] = 'nullable';
        else
            $args['image'] = 'required';
        

        return $args;
    }

    public function messages()
    {
        return [
            'order.min'         => 'Orden solo puede tener dos caracteres',
            'order.max'         => 'Orden solo puede tener dos caracteres',
            'title.required'    => 'El título es obligatorio',
            'content1.required' => 'Contenido es obligatorio',
            'image.mimes'       => 'Solo se aceptan imágenes en formato jpeg,bmp y png',
        ];
    }
}
