<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class VideoRequest extends FormRequest
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
            'title'     => 'required',
            'content1'  => 'required',
            'extra1'    => 'required',
        ];

        return $args;
    }

    public function messages()
    {
        return [
            'title.required'    => 'Título es requerido',
            'content1.required' => 'Descripción es requerido',
            'extra1.required'   => 'Video es requerido',
        ];
    }
}
