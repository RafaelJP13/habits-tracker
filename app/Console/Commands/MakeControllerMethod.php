<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MakeControllerMethod extends Command
{
    protected $signature = 'make:method {controller} {method}';

    protected $description = 'Create a method inside an existing controller';

    public function handle(): int
    {
        $controller = $this->argument('controller');
        $method = $this->argument('method');

        $path = app_path("Http/Controllers/{$controller}.php");

        if (!file_exists($path)) {
            $this->error("Controller not found: {$path}");
            return self::FAILURE;
        }

        $content = file_get_contents($path);

        $newMethod = <<<PHP

            public function {$method}()
            {
                //
            }

        PHP;

        $content = preg_replace('/\}\s*$/', $newMethod . "\n}", $content);

        file_put_contents($path, $content);

        $this->info("Method {$method} created successfully!");

        return self::SUCCESS;
    }
}