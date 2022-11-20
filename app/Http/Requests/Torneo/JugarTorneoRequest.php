<?php

namespace App\Http\Requests\Torneo;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\PotenciaDeDos;
use App\Rules\ArrayValoresUnicos;

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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'jugadores' => [
                new PotenciaDeDos($this->jugadores),
                new ArrayValoresUnicos($this->jugadores)
            ],
        ];
    }
}
