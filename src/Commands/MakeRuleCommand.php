<?php

namespace Programic\Rules\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class MakeRuleCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:rule {rule}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new rule instance';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $ruleName = Str::snake($this->argument('rule'));
        $className = Str::studly($ruleName);

        $stubPath = base_path() . '/stubs/rule.php.stub';
        if (! file_exists($stubPath)) {
            $stubPath = __DIR__ . '/../../stubs/rule.php.stub';
        }

        $stub = File::get($stubPath);
        $stub = str_replace('RULE_NAME', $className, $stub);

        File::put(base_path() . '/tasks/' . $className, $stub);

        $this->line('<info>Rule created:</info> ' . $className);
    }
}
