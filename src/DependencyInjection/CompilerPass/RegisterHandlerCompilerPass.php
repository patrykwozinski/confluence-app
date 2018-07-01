<?php

namespace App\DependencyInjection\CompilerPass;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class RegisterHandlerCompilerPass implements CompilerPassInterface
{
    private const METHOD = 'addHandler';
    private const HANDLES = 'handles';

    private $serviceDefinition;

    private $itemTag;

    public function __construct(string $serviceDefinition, string $itemTag)
    {
        $this->serviceDefinition = $serviceDefinition;
        $this->itemTag = $itemTag;
    }

    public function process(ContainerBuilder $container): void
    {
        if (
            $container->hasDefinition($this->serviceDefinition) ||
            $container->hasAlias($this->serviceDefinition)
        ) {
            $serviceDefinition = $container->findDefinition($this->serviceDefinition);

            foreach ($container->findTaggedServiceIds($this->itemTag) as $id => $tagsCollection)
            {
                $handles = null;

                foreach ($tagsCollection as $tag)
                {
                    if (isset($tag[self::HANDLES]))
                    {
                        $handles = $tag[self::HANDLES];
                        break;
                    }
                }

                $serviceDefinition->addMethodCall(self::METHOD, [new Reference($id), $handles]);
            }
        }
    }
}
