<?php
/**
 * Created by PhpStorm.
 * User: freeq
 * Date: 01.07.2018
 * Time: 18:29
 */
declare(strict_types=1);

namespace App\Application\Command\Resource;


use App\Application\Command\CommandInterface;
use App\Application\Command\CommandValidatorInterface;

final class CreateResourceCommandValidator implements CommandValidatorInterface
{
    /**
     * @param CreateResourceCommand | CommandInterface $command
     */
    public function validate(CommandInterface $command): void
    {
        //
    }
}
