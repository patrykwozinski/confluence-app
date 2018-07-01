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
use App\Domain\DomainEventInterface;

final class EventHandlerLocator
{
    /** @var EventHandlerInterface[] */
    private $handlers = [];

    public function getHandlerForEvent(DomainEventInterface $event): EventHandlerInterface
    {
        $eventName = $event->getEventName();

        if (empty($this->handlers[$eventName]))
        {
            throw HandlerNotFoundException::forEvent($event);
        }

        return $this->handlers[$eventName];
    }

    public function addHandler(EventHandlerInterface $eventHandler, string $handles): void
    {
        $this->handlers[$handles] = $eventHandler;
    }
}
