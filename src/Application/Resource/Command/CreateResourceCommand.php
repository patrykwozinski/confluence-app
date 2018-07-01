<?php
/**
 * Created by PhpStorm.
 * User: freeq
 * Date: 01.07.2018
 * Time: 18:15
 */
declare(strict_types=1);

namespace App\Application\Resource\Command;


use App\Application\CommandInterface;

final class CreateResourceCommand implements CommandInterface
{
    private const COMMAND_NAME = 'create_resource';

    /** @var string */
    private $resourceName;

    public function __construct(string $resourceName)
    {
        $this->resourceName = $resourceName;
    }

    public function getResourceName(): string
    {
        return $this->resourceName;
    }

    public function getCommandName(): string
    {
        return self::COMMAND_NAME;
    }
}
