<?php
/**
 * Created by PhpStorm.
 * User: freeq
 * Date: 01.07.2018
 * Time: 18:56
 */
declare(strict_types=1);

namespace App\Application;


abstract class AbstractCommandHandler implements CommandHandlerInterface
{
    /** @var CommandValidatorInterface $validator */
    protected $validator;

    public function addValidator(CommandValidatorInterface $commandValidator): void
    {
        $this->validator = $commandValidator;
    }
}
