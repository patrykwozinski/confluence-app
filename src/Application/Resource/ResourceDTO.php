<?php
/**
 * Created by PhpStorm.
 * User: freeq
 * Date: 01.07.2018
 * Time: 21:35
 */
declare(strict_types=1);

namespace App\Application\Resource;


final class ResourceDTO
{
    /** @var int */
    private $identity;

    /** @var string */
    private $name;

    public function __construct(int $identity, string $name)
    {
        $this->identity = $identity;
        $this->name = $name;
    }

    public function getIdentity(): int
    {
        return $this->identity;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
