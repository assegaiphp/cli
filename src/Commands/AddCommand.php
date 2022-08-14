<?php

namespace Assegai\Cli\Commands;

use Assegai\Cli\Attributes\Command;
use Assegai\Cli\Core\AbstractCommand;
use Assegai\Cli\Core\CommandArgument;
use Assegai\Cli\Core\CommandOption;
use Assegai\Cli\Core\Console\Console;
use Assegai\Cli\Enumerations\ValueRequirementType;
use Assegai\Cli\Enumerations\ValueType;
use Assegai\Cli\Interfaces\IArgumentHost;

#[Command(
  name: 'add',
  description: 'Imports a library that has been packaged as an assegai library, running its install schematic.',
  options: [
    new CommandOption(name: 'dry-run', alias: 'd', description: 'Report actions that would be performed without writing out results.'),
    new CommandOption(name: 'project', alias: 'p', type: ValueRequirementType::REQUIRED, description: 'Project in which to generate files.', valueType: ValueType::STRING)
  ],
  arguments: [
    new CommandArgument(
      name: 'library',
      isRequired: true,
      description: 'The name of the library to import.',
      valueType: ValueType::STRING
    )
  ]
)]
class AddCommand extends AbstractCommand
{
  public function execute(IArgumentHost $context): int
  {
    // TODO: Implement execute() method.
    Console::warn("Not implemented");
    return Command::SUCCESS;
  }
}