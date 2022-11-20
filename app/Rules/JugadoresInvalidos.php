<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Usuario;

class JugadoresInvalidos implements Rule
{
    protected $jugadores;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct(array $jugadores)
    {
        $this->jugadores = $jugadores;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $jugadores_bd = Usuario::whereIn('id',$this->jugadores)->count();
        return $jugadores_bd != count($this->jugadores) ? false : true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'La lista de :attribute contiene id\'s invalidos.';
    }
}
