<?php
/**
 * Created by PhpStorm.
 * User: freeq
 * Date: 01.07.2018
 * Time: 19:04
 */
declare(strict_types=1);

namespace App\Application;


use App\Application\Exception\HandlerNotFoundException;

final class CommandLocator
{
    /** @var CommandHandlerInterface[] */
    private $handlers = [];

    public function getHandlerForCommand(CommandInterface $command): CommandHandlerInterface
    {
        $commandName = $command->getCommandName();

        if (empty($this->handlers[$commandName]))
        {
            throw HandlerNotFoundException::forCommand($command);
        }

        return $this->handlers[$commandName];
    }

    public function addHandler(CommandHandlerInterface $commandHandler, string $handles): void
    {
        $this->handlers[$handles] = $commandHandler;
    }
}
