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

    public function addHandler(CommandHandlerInterface $commandHandler): void
    {
        $this->handlers[] = $commandHandler;
    }

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
}
