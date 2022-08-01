#!/usr/bin/env php
<?php

require dirname(__DIR__) . '/vendor/autoload.php';

use Assegai\Cli\Commands\HelpCommand;
use Assegai\Cli\Commands\InfoCommand;
use Assegai\Cli\Commands\ListCommand;
use Assegai\Cli\Commands\VersionCommand;
use Assegai\Cli\Core\App;
use Assegai\Cli\Core\AssegaiCliFactory;

function bootstrap(): void
{
  $app = AssegaiCliFactory::create(App::class);
  $app
    ->addAll([
      new HelpCommand(),
      new InfoCommand(),
      new ListCommand(),
      new VersionCommand(),
    ])
    ->run();
}

bootstrap();