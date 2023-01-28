<?php

namespace Programic\Rules\Tests;

use Programic\Rules\RulesServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            RulesServiceProvider::class
        ];
    }

    /**
     * @param \Illuminate\Foundation\Application $app
     */
    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('app.key', '607qoBMBM6y5dXhmTdnBUYT7mc5h14NB7lTQ41k');
    }
}
