<?php
/**
 * Created by PhpStorm.
 * User: freeq
 * Date: 01.07.2018
 * Time: 23:32
 */
declare(strict_types=1);

namespace App\Application;


use App\Domain\DomainEventInterface;

final class EventBus
{
    private $eventHandlerLocator;

    public function __construct(EventHandlerLocator $eventHandlerLocator)
    {
        $this->eventHandlerLocator = $eventHandlerLocator;
    }

    public function handle(DomainEventInterface $event): void
    {
        $eventHandler = $this->eventHandlerLocator->getHandlerForEvent($event);

        $eventHandler->handle($event);
    }
}
