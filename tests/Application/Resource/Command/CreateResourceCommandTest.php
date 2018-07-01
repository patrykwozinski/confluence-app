<?php
/**
 * Created by PhpStorm.
 * User: freeq
 * Date: 01.07.2018
 * Time: 18:20
 */
declare(strict_types=1);

namespace Tests\Application\Resource\Command;


use App\Application\Resource\Command\CreateResourceCommand;
use Tests\Application\ApplicationTestCase;

final class CreateResourceCommandTest extends ApplicationTestCase
{
    private const RESOURCE_NAME = 'Room 01';

    public function testCreateResourceCommandReturnsInstance(): void
    {
        $resourceCommand = new CreateResourceCommand(self::RESOURCE_NAME);

        $this->assertInstanceOf(CreateResourceCommand::class, $resourceCommand);
        $this->assertEquals(self::RESOURCE_NAME, $resourceCommand->getResourceName());
    }
}
