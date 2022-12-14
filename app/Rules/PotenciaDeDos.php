<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class PotenciaDeDos implements Rule
{

    protected $arr;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct(array $arr)
    {
        $this->arr = $arr;
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
        $cantidad = count($this->arr);
        return ($cantidad & ($cantidad - 1)) == 0 ? true : false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'La cantidad de :attribute debe ser potencia de 2';
    }
}
