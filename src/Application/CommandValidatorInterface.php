<?php
/**
 * Created by PhpStorm.
 * User: freeq
 * Date: 01.07.2018
 * Time: 18:31
 */
declare(strict_types=1);

namespace App\Application;


interface CommandValidatorInterface
{
    public function validate(CommandInterface $command): void;
}
