<?php
/**
 * Created by PhpStorm.
 * User: freeq
 * Date: 01.07.2018
 * Time: 21:15
 */
declare(strict_types=1);

namespace App\Application\Resource\Command;


use App\Application\CommandInterface;

final class DeleteResourceCommand implements CommandInterface
{
    private const COMMAND_NAME = 'delete_resource';

    /** @var int */
    private $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getCommandName(): string
    {
        return self::COMMAND_NAME;
    }
}
