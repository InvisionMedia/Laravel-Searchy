<?php

return [

    'default' => 'fuzzy',

    'fieldName' => 'relevance',

    'drivers' => [

        'fuzzy' => [
            'class' => 'InvisionMedia\Searchy\SearchDrivers\FuzzySearchDriver',
        ],

        'ufuzzy' => [
            'class' => 'InvisionMedia\Searchy\SearchDrivers\FuzzySearchUnicodeDriver',
        ],

        'simple' => [
            'class' => 'InvisionMedia\Searchy\SearchDrivers\SimpleSearchDriver',
        ],

        'levenshtein' => [
            'class' => 'InvisionMedia\Searchy\SearchDrivers\LevenshteinSearchDriver',
        ],

    ],

];
