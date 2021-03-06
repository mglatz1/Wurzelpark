<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'confirmed'            => 'Passwords do not match.',
    'digits_between'       => 'The year of birth must contain exactly :min digits.',
    'email'                => 'The format of the email address must be valid.',
    'integer'              => 'The year of birth must be a number.',
    'max'                  => [
        'numeric' => 'The year of birth must not exceed :max.',
        'string' => 'The input must be less than :max characters.'
    ],
    'min'                  => [
        'numeric' => 'The year of birth must be at least :min.',
        'string' => 'The length of the password must be at least :min characters.'
    ],
    'required'             => 'The input of :attribute is required.',
    'string'               => 'The input of :attribute must be a string.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
