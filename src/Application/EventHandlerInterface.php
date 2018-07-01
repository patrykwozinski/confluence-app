<?php
/**
 * Created by PhpStorm.
 * User: freeq
 * Date: 01.07.2018
 * Time: 23:37
 */
declare(strict_types=1);

namespace App\Application;


use App\Domain\DomainEventInterface;

interface EventHandlerInterface
{
    public function handle(DomainEventInterface $event): void;
}
