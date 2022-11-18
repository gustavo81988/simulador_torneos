<?php

namespace App\Http\Requests\Torneo;

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
            'integer' => 'El campo id_ganador debe ser un entero',
            'required_with' => 'Debe ingresar un rango de fecha valido (fecha_inicio / fecha_fin).'
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
            'fecha_inicio' => 'date_format:Y-m-d|required_with:fecha_fin',
            'fecha_fin'    => 'date_format:Y-m-d|required_with:fecha_inicio',
            'genero' => 'in:M,F',
            'id_ganador' => 'integer'
        ];
    }
}
