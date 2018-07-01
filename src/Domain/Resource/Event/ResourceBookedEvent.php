<?php
/**
 * Created by PhpStorm.
 * User: freeq
 * Date: 01.07.2018
 * Time: 22:07
 */
declare(strict_types=1);

namespace App\Domain\Resource\Event;


use App\Domain\DomainEventInterface;
use App\Domain\Resource\Resource;

final class ResourceBookedEvent implements DomainEventInterface
{
    private const EVENT_NAME = 'resource.booked';

    /** @var Resource */
    private $resource;

    public function __construct(Resource $resource)
    {
        $this->resource = $resource;
    }

    public function getResource(): Resource
    {
        return $this->resource;
    }

    public function getName(): string
    {
        return self::EVENT_NAME;
    }
}
