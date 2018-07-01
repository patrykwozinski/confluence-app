<?php
/**
 * Created by PhpStorm.
 * User: freeq
 * Date: 01.07.2018
 * Time: 22:10
 */
declare(strict_types=1);

namespace App\Domain;

interface DomainEventInterface
{
    public function getName(): string;
}
