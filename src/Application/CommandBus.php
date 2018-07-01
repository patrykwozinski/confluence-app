<?php
/**
 * Created by PhpStorm.
 * User: freeq
 * Date: 01.07.2018
 * Time: 19:11
 */
declare(strict_types=1);

namespace App\Application;


use App\Application\Command\CommandInterface;

final class CommandBus
{
    /** @var CommandLocator */
    private $commandLocator;

    public function __construct(CommandLocator $commandLocator)
    {
        $this->commandLocator = $commandLocator;
    }

    public function handle(CommandInterface $command): void
    {
        $commandHandler = $this->commandLocator->getHandlerForCommand($command);

        $commandHandler->handle($command);
    }
}
