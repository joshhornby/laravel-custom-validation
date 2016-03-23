<?php

namespace App;

use Illuminate\Validation\Validator;

class CustomValidator extends Validator
{
    public function validateSortCode($attribute, $value, $parameters)
    {
        dd($attribute, $value, $parameters, $this->getData());
    }
}