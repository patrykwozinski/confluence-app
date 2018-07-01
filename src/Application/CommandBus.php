<?php
/**
 * Created by PhpStorm.
 * User: freeq
 * Date: 01.07.2018
 * Time: 19:11
 */
declare(strict_types=1);

namespace App\Application;


final class CommandBus
{
    /** @var CommandHandlerLocator */
    private $commandHandlerLocator;

    public function __construct(CommandHandlerLocator $commandHandlerLocator)
    {
        $this->commandHandlerLocator = $commandHandlerLocator;
    }

    public function handle(CommandInterface $command): void
    {
        $commandHandler = $this->commandHandlerLocator->getHandlerForCommand($command);

        $commandHandler->handle($command);
    }
}
