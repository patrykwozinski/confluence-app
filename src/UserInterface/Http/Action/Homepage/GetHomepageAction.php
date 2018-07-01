<?php
/**
 * Created by PhpStorm.
 * User: freeq
 * Date: 01.07.2018
 * Time: 17:51
 */
declare(strict_types=1);

namespace App\UserInterface\Http\Action\Homepage;


use App\Application\CommandBus;
use App\Application\Resource\Command\DeleteResourceCommand;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

final class GetHomepageAction extends Controller
{
    public function __invoke(CommandBus $commandBus): Response
    {
        $commandBus->handle(new DeleteResourceCommand(15212));

        return new Response('Hello.');
    }
}
