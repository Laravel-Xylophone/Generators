<?php

namespace Xylophone\Generators;

use Xylophone\Generators\Console\Commands\ConfigBackpackCommand;
use Xylophone\Generators\Console\Commands\CrudBackpackCommand;
use Xylophone\Generators\Console\Commands\CrudControllerBackpackCommand;
use Xylophone\Generators\Console\Commands\CrudModelBackpackCommand;
use Xylophone\Generators\Console\Commands\CrudOperationBackpackCommand;
use Xylophone\Generators\Console\Commands\CrudRequestBackpackCommand;
use Xylophone\Generators\Console\Commands\ModelBackpackCommand;
use Xylophone\Generators\Console\Commands\RequestBackpackCommand;
use Xylophone\Generators\Console\Commands\ViewBackpackCommand;
use Illuminate\Support\ServiceProvider;

class GeneratorsServiceProvider extends ServiceProvider
{
    protected $commands = [
        ConfigBackpackCommand::class,
        CrudModelBackpackCommand::class,
        CrudControllerBackpackCommand::class,
        CrudOperationBackpackCommand::class,
        CrudRequestBackpackCommand::class,
        CrudBackpackCommand::class,
        ModelBackpackCommand::class,
        RequestBackpackCommand::class,
        ViewBackpackCommand::class,
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
