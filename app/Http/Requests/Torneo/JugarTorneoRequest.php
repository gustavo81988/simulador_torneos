<?php

namespace App\Http\Requests\Torneo;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\PotenciaDeDos;
use App\Rules\ArrayValoresUnicos;
use App\Rules\JugadoresInvalidos;
use App\Rules\GeneroTorneo;

class JugarTorneoRequest extends FormRequest
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

    public function messages()
    {
        return [
            'jugadores.min'          => 'Debe ingresar al menos 4 :attribute.',
            'jugadores.required'     => 'El campo :attribute es obligatorio',
            'genero.in'              => ':attribute debe ser M (Masculino) o F (Femenino).',
            'genero.required'        => 'El campo :attribute es obligatorio',
            'nombre_torneo.required' => 'El campo :attribute es obligatorio',
            'nombre_torneo.unique'   => 'Ya existe un :attribute con ese nombre.'
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
            'nombre_torneo' => 'unique:App\Torneo,nombre|required',
            'jugadores' => [
                new PotenciaDeDos($this->jugadores),
                new ArrayValoresUnicos($this->jugadores),
                new JugadoresInvalidos($this->jugadores),
                new GeneroTorneo($this->jugadores,$this->genero),
                'Min:4',
                'required'
            ],
            'genero' => 'in:M,F|required'
        ];
    }
}
