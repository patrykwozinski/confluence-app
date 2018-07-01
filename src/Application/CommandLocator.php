<?php
/**
 * Created by PhpStorm.
 * User: freeq
 * Date: 01.07.2018
 * Time: 19:04
 */
declare(strict_types=1);

namespace App\Application;


use App\Application\Command\CommandHandlerInterface;
use App\Application\Command\CommandInterface;
use App\Application\Exception\HandlerNotFoundException;

final class CommandLocator
{
    /** @var CommandHandlerInterface[] */
    private $handlers = [];

    public function getHandlerForCommand(CommandInterface $command): CommandHandlerInterface
    {
        foreach ($this->handlers as $handler)
        {
            if ($handler->supports($command))
            {
                return $handler;
            }
        }

        throw HandlerNotFoundException::forCommand($command);
    }

    public function addHandler(CommandHandlerInterface $commandHandler): void
    {
        dd('KURWA');

        $this->handlers[] = $commandHandler;
    }
}
