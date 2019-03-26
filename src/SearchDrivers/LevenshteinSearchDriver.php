<?php

namespace InvisionMedia\Searchy\SearchDrivers;

class LevenshteinSearchDriver extends BaseSearchDriver
{
    /**
     * @var array
     */
    protected $matchers = [
        \InvisionMedia\Searchy\Matchers\LevenshteinMatcher::class           => 100,
    ];
}
