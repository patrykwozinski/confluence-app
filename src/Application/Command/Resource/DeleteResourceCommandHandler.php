<?php
/**
 * Created by PhpStorm.
 * User: freeq
 * Date: 01.07.2018
 * Time: 21:14
 */
declare(strict_types=1);

namespace App\Application\Command\Resource;


use App\Application\Command\AbstractCommandHandler;
use App\Application\Command\CommandInterface;

class DeleteResourceCommandHandler extends AbstractCommandHandler
{
    /**
     * @param DeleteResourceCommand | CommandInterface $command
     */
    public function handle(CommandInterface $command): void
    {
    }
}
