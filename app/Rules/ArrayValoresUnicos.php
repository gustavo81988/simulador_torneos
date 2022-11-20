<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ArrayValoresUnicos implements Rule
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
        return count(
            array_diff_assoc($this->arr, array_unique($this->arr))
        ) > 0 ? false : true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'El campo :attribute contiene valores duplicados.';
    }
}
