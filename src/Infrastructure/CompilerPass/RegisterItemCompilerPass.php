<?php

namespace App\Infrastructure\CompilerPass;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class RegisterItemCompilerPass implements CompilerPassInterface
{
    private const DEFAULT_METHOD = 'addItem';

    private $serviceDefinition;

    private $itemTag;

    private $method;

    public function __construct(
        string $serviceDefinition,
        string $itemTag,
        string $method = self::DEFAULT_METHOD
    ) {
        $this->serviceDefinition = $serviceDefinition;
        $this->itemTag = $itemTag;
        $this->method = $method;
    }

    public function process(ContainerBuilder $container): void
    {
        if (
            $container->hasDefinition($this->serviceDefinition) ||
            $container->hasAlias($this->serviceDefinition)
        ) {
            $arguments = [];
            $serviceDefinition = $container->findDefinition($this->serviceDefinition);

            foreach ($container->findTaggedServiceIds($this->itemTag) as $id => $tagsCollection)
            {
                $arguments[] = new Reference($id);
            }

            $serviceDefinition->addMethodCall($this->method, $arguments);
        }
    }
}
