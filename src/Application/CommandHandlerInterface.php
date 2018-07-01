<?php
/**
 * Created by PhpStorm.
 * User: freeq
 * Date: 01.07.2018
 * Time: 18:42
 */
declare(strict_types=1);

namespace App\Application;


interface CommandHandlerInterface
{
    public function handle(CommandInterface $command): void;
}
