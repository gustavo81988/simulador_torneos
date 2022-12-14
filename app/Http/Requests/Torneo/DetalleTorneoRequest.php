<?php

namespace App\Http\Requests\Torneo;

use Illuminate\Foundation\Http\FormRequest;

class DetalleTorneoRequest extends FormRequest
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
            'integer' => 'El campo id_torneo debe ser un entero',
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
            'id_torneo' => 'integer'
        ];
    }
}
