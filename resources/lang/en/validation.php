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

    'accepted' => 'The :attribute must be accepted.',
    'active_url' => 'The :attribute is not a valid URL.',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'The :attribute may only contain letters.',
    'alpha_dash' => 'The :attribute may only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :attribute may only contain letters and numbers.',
    'array' => 'The :attribute must be an array.',
    'before' => 'The :attribute must be a date before :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'string' => 'The :attribute must be between :min and :max characters.',
        'array' => 'The :attribute must have between :min and :max items.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'confirmed' => 'The :attribute confirmation does not match.',
    'date' => 'The :attribute is not a valid date.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'different' => 'The :attribute and :other must be different.',
    'digits' => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => 'The :attribute must be a valid email address.',
    'ends_with' => 'The :attribute must end with one of the following: :values',
    'exists' => 'The selected :attribute is invalid.',
    'file' => 'The :attribute must be a file.',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => 'The :attribute must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file' => 'The :attribute may not be greater than :max kilobytes.',
        'string' => 'The :attribute may not be greater than :max characters.',
        'array' => 'The :attribute may not have more than :max items.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'The :attribute must be at least :min.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'string' => 'The :attribute must be at least :min characters.',
        'array' => 'The :attribute must have at least :min items.',
    ],
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'present' => 'The :attribute field must be present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'The :attribute field is required.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid zone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute format is invalid.',
    'uuid' => 'The :attribute must be a valid UUID.',

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

    'custom' => [
        'answer.1' => [
            'required' => 'Eine Auswahl für Frage 1 ist erforderlich.',
        ],

        'answer.2' => [
            'required' => 'Eine Auswahl für Frage 2 ist erforderlich.',
        ],

        'answer.3' => [
            'required' => 'Eine Auswahl für Frage 3 ist erforderlich.',
        ],

        'answer.4' => [
            'required' => 'Eine Auswahl für Frage 4 ist erforderlich.',
        ],

        'answer.5' => [
            'required' => 'Eine Auswahl für Frage 5 ist erforderlich.',
        ],

        'answer.6' => [
            'required' => 'Eine Auswahl für Frage 6 ist erforderlich.',
        ],

        'answer.7' => [
            'required' => 'Eine Auswahl für Frage 7 ist erforderlich.',
        ],

        'answer.8' => [
            'required' => 'Eine Auswahl für Frage 8 ist erforderlich.',
        ],

        'answer.9' => [
            'required' => 'Eine Auswahl für Frage 9 ist erforderlich.',
        ],

        'answer.10' => [
            'required' => 'Eine Auswahl für Frage 10 ist erforderlich.',
        ],

        'answer.11' => [
            'required' => 'Eine Auswahl für Frage 11 ist erforderlich.',
        ],

        'answer.12' => [
            'required' => 'Eine Auswahl für Frage 12 ist erforderlich.',
        ],

        'answer.13' => [
            'required' => 'Eine Auswahl für Frage 13 ist erforderlich.',
        ],

        'answer.14' => [
            'required' => 'Eine Auswahl für Frage 14 ist erforderlich.',
        ],

        'answer.15' => [
            'required' => 'Eine Auswahl für Frage 15 ist erforderlich.',
        ],

        'answer.16' => [
            'required' => 'Eine Auswahl für Frage 16 ist erforderlich.',
        ],

        'answer.17' => [
            'required' => 'Eine Auswahl für Frage 17 ist erforderlich.',
        ],

        'answer.18' => [
            'required' => 'Eine Auswahl für Frage 18 ist erforderlich.',
        ],

        'answer.19' => [
            'required' => 'Eine Auswahl für Frage 19 ist erforderlich.',
        ],

        'answer.20' => [
            'required' => 'Eine Auswahl für Frage 20 ist erforderlich.',
        ],

        'answer.21' => [
            'required' => 'Eine Auswahl für Frage 21 ist erforderlich.',
        ],

        'answer.22' => [
            'required' => 'Eine Auswahl für Frage 22 ist erforderlich.',
        ],

        'answer.23' => [
            'required' => 'Eine Auswahl für Frage 23 ist erforderlich.',
        ],

        'answer.24' => [
            'required' => 'Eine Auswahl für Frage 24 ist erforderlich.',
        ],

        'answer.25' => [
            'required' => 'Eine Auswahl für Frage 25 ist erforderlich.',
        ],

        'answer.26' => [
            'required' => 'Eine Auswahl für Frage 26 ist erforderlich.',
        ],

        'answer.27' => [
            'required' => 'Eine Auswahl für Frage 27 ist erforderlich.',
        ],

        'answer.28' => [
            'required' => 'Eine Auswahl für Frage 28 ist erforderlich.',
        ],

        'answer.29' => [
            'required' => 'Eine Auswahl für Frage 29 ist erforderlich.',
        ],

        'answer.30' => [
            'required' => 'Eine Auswahl für Frage 30 ist erforderlich.',
        ],

        'answer.31' => [
            'required' => 'Eine Auswahl für Frage 31 ist erforderlich.',
        ],

        'answer.32' => [
            'required' => 'Eine Auswahl für Frage 32 ist erforderlich.',
        ],

        'answer.33' => [
            'required' => 'Eine Auswahl für Frage 33 ist erforderlich.',
        ],

        'answer.34' => [
            'required' => 'Eine Auswahl für Frage 34 ist erforderlich.',
        ],

        'answer.35' => [
            'required' => 'Eine Auswahl für Frage 35 ist erforderlich.',
        ],

        'answer.36' => [
            'required' => 'Eine Auswahl für Frage 36 ist erforderlich.',
        ],

        'answer.37' => [
            'required' => 'Eine Auswahl für Frage 37 ist erforderlich.',
        ],

        'answer.38' => [
            'required' => 'Eine Auswahl für Frage 38 ist erforderlich.',
        ],

        'answer.39' => [
            'required' => 'Eine Auswahl für Frage 39 ist erforderlich.',
        ],

        'answer.40' => [
            'required' => 'Eine Auswahl für Frage 40 ist erforderlich.',
        ],

        'answer.41' => [
            'required' => 'Eine Auswahl für Frage 41 ist erforderlich.',
        ],

        'answer.42' => [
            'required' => 'Eine Auswahl für Frage 42 ist erforderlich.',
        ],

        'answer.43' => [
            'required' => 'Eine Auswahl für Frage 43 ist erforderlich.',
        ],

        'answer.44' => [
            'required' => 'Eine Auswahl für Frage 44 ist erforderlich.',
        ],

        'answer.45' => [
            'required' => 'Eine Auswahl für Frage 45 ist erforderlich.',
        ],

        'answer.46' => [
            'required' => 'Eine Auswahl für Frage 46 ist erforderlich.',
        ],

        'answer.47' => [
            'required' => 'Eine Auswahl für Frage 47 ist erforderlich.',
        ],

        'answer.48' => [
            'required' => 'Eine Auswahl für Frage 48 ist erforderlich.',
        ],

        'answer.49' => [
            'required' => 'Eine Auswahl für Frage 49 ist erforderlich.',
        ],

        'answer.50' => [
            'required' => 'Eine Auswahl für Frage 50 ist erforderlich.',
        ],
    ],


    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
