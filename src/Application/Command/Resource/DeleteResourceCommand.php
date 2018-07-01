<?php
/**
 * Created by PhpStorm.
 * User: freeq
 * Date: 01.07.2018
 * Time: 21:15
 */
declare(strict_types=1);

namespace App\Application\Command\Resource;


use App\Application\Command\CommandInterface;

final class DeleteResourceCommand implements CommandInterface
{
    private $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }
}
