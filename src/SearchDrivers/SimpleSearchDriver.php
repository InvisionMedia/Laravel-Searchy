<?php

namespace InvisionMedia\Searchy\SearchDrivers;

class SimpleSearchDriver extends BaseSearchDriver
{
    /**
     * @var array
     */
    protected $matchers = [
        \InvisionMedia\Searchy\Matchers\ExactMatcher::class                 => 100,
        \InvisionMedia\Searchy\Matchers\StartOfStringMatcher::class         => 50,
        \InvisionMedia\Searchy\Matchers\InStringMatcher::class              => 30,
    ];
}
