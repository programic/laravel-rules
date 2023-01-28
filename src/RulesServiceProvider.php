<?php

namespace Programic\Rules;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\ServiceProvider;

class RulesServiceProvider extends ServiceProvider
{
    public function boot(Filesystem $filesystem)
    {
        $this->commands([
            Commands\MakeRuleCommand::class,
        ]);

        $this->publishes([
            __DIR__ . '/../stubs/rule.php.stub' => base_path('stubs/rule.php.stub'),
        ], 'stubs');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
