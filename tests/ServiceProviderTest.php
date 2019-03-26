<?php

namespace InvisionMedia\Tests\Searchy;

use GrahamCampbell\TestBenchCore\ServiceProviderTrait;
use InvisionMedia\Searchy\SearchBuilder;

/**
 * This is the service provider test.
 *
 * @author Vincent Klaiber <hello@vinkla.com>
 */
class ServiceProviderTest extends AbstractTestCase
{
    use ServiceProviderTrait;

    public function testSearchBuilderIsInjectable()
    {
        $this->assertIsInjectable(SearchBuilder::class);
    }
}
