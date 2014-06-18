<?php

namespace Cubalider\Bundle\SmsQueueBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Cubalider\Bundle\SmsQueueBundle\DependencyInjection\Compiler\DoctrineMappingPass;

/**
 * @author Nabel Hernandez <nabelhm@cubalider.com>
 */
class CubaliderSmsQueueBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new DoctrineMappingPass());
    }
}
