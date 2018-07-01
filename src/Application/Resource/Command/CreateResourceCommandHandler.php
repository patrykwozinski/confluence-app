<?php
/**
 * Created by PhpStorm.
 * User: freeq
 * Date: 01.07.2018
 * Time: 18:41
 */
declare(strict_types=1);

namespace App\Application\Resource\Command;


use App\Application\AbstractCommandHandler;
use App\Application\CommandInterface;

class CreateResourceCommandHandler extends AbstractCommandHandler
{
    /**
     * @param CreateResourceCommand | CommandInterface $command
     */
    public function handle(CommandInterface $command): void
    {
        $this->validator->validate($command);
    }
}
