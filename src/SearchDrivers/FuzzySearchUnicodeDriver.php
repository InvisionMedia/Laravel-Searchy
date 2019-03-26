<?php

namespace InvisionMedia\Searchy\SearchDrivers;

class FuzzySearchUnicodeDriver extends BaseSearchDriver
{
    /**
     * @var array
     */
    protected $matchers = [
        \InvisionMedia\Searchy\Matchers\ExactMatcher::class                        => 100,
        \InvisionMedia\Searchy\Matchers\StartOfStringMatcher::class                => 50,
        \InvisionMedia\Searchy\Matchers\AcronymUnicodeMatcher::class               => 42,
        \InvisionMedia\Searchy\Matchers\ConsecutiveCharactersUnicodeMatcher::class => 40,
        \InvisionMedia\Searchy\Matchers\StartOfWordsMatcher::class                 => 35,
        \InvisionMedia\Searchy\Matchers\StudlyCaseUnicodeMatcher::class            => 32,
        \InvisionMedia\Searchy\Matchers\InStringMatcher::class                     => 30,
        \InvisionMedia\Searchy\Matchers\TimesInStringMatcher::class                => 8,
  ];
}
