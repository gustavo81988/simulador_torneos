<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Usuario;

class GeneroTorneo implements Rule
{
    protected $genero;
    protected $jugadores;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($jugadores,$genero)
    {
        $this->jugadores = $jugadores;
        $this->genero    = $genero;
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
        if($this->genero == 'M'){
            $jugadores = Usuario::whereIn('id',$this->jugadores)
                ->where('genero','F')
                ->count()
            ;
            return $jugadores > 0 ? false : true;
        }else if($this->genero == 'F'){
            $jugadores = Usuario::whereIn('id',$this->jugadores)
                ->where('genero','M')
                ->count()
            ;
            return $jugadores > 0 ? false : true;
        }else{
            return false;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        if($this->genero == 'M'){
            return 'No puede ingresar jugadores femeninos en un torneo masculino.';
        }else if($this->genero == 'F'){
            return 'No puede ingresar jugadores masculinos en un torneo femenino.';
        }else{
            return '';
        }
    }
}
