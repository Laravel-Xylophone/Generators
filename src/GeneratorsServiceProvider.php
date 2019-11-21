<?php

namespace Xylophone\Generators;

use Xylophone\Generators\Console\Commands\ConfigXylophoneCommand;
use Xylophone\Generators\Console\Commands\CrudXylophoneCommand;
use Xylophone\Generators\Console\Commands\CrudControllerXylophoneCommand;
use Xylophone\Generators\Console\Commands\CrudModelXylophoneCommand;
use Xylophone\Generators\Console\Commands\CrudOperationXylophoneCommand;
use Xylophone\Generators\Console\Commands\CrudRequestXylophoneCommand;
use Xylophone\Generators\Console\Commands\ModelXylophoneCommand;
use Xylophone\Generators\Console\Commands\RequestXylophoneCommand;
use Xylophone\Generators\Console\Commands\ViewXylophoneCommand;
use Illuminate\Support\ServiceProvider;

class GeneratorsServiceProvider extends ServiceProvider
{
    protected $commands = [
        ConfigXylophoneCommand::class,
        CrudModelXylophoneCommand::class,
        CrudControllerXylophoneCommand::class,
        CrudOperationXylophoneCommand::class,
        CrudRequestXylophoneCommand::class,
        CrudXylophoneCommand::class,
        ModelXylophoneCommand::class,
        RequestXylophoneCommand::class,
        ViewXylophoneCommand::class,
    ];

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands($this->commands);
    }
}
