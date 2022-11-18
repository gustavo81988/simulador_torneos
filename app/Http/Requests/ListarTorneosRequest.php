<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ListarTorneosRequest extends FormRequest
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

    public function messages(){
        return [
            'date_format' => 'El formato de fecha debe ser yyyy-mm-dd.',
            'in' => 'Genero debe ser M (Masculino) o F (Femenino).',
            'integer' => 'El campo id_ganador debe ser un entero'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'fecha' => 'date_format:Y-m-d',
            'genero' => 'in:M,F',
            'id_ganador' => 'integer'
        ];
    }
}
