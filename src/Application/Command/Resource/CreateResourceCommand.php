<?php
/**
 * Created by PhpStorm.
 * User: freeq
 * Date: 01.07.2018
 * Time: 18:15
 */
declare(strict_types=1);

namespace App\Application\Command\Resource;


use App\Application\Command\CommandInterface;

final class CreateResourceCommand implements CommandInterface
{
    private $resourceName;

    public function __construct(string $resourceName)
    {
        $this->resourceName = $resourceName;
    }

    public function getResourceName(): string
    {
        return $this->resourceName;
    }
}
