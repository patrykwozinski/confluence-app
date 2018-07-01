<?php
/**
 * Created by PhpStorm.
 * User: freeq
 * Date: 01.07.2018
 * Time: 19:06
 */
declare(strict_types=1);

namespace App\Application\Exception;


use App\Application\CommandInterface;

final class HandlerNotFoundException extends AbstractApplicationException
{
    public static function forCommand(CommandInterface $command): self
    {
        $message = sprintf('Can not find handler for command %s', \get_class($command));

        return new self($message);
    }
}
