<?php

namespace Programic\Rules\Tests;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;

class CommandTest extends TestCase
{
    /** @test */
    public function it_can_create_task_migration()
    {
        $ruleName = 'addRule';
        Artisan::call('make:rule ' . $ruleName);

        $taskName = Str::snake($ruleName);
        $fileName = $ruleName . '.php';

        if (file_exists(Task::getDirectory() . $fileName)) {
            $this->assertTrue(true);
        } else {
            $this->fail('Rule not exists');
        }
    }
}
