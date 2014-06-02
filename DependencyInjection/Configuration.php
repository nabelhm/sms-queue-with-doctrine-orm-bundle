<?php

namespace Cubalider\Bundle\SmsQueueBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * @author Nabel Hernandez <nabelhm@cubalider.com>
 */
class Configuration implements ConfigurationInterface
{
    /**
     * @inheritdoc
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('cubalider_sms_queue');

        $rootNode
            ->children()
                ->scalarNode('message_class')->cannotBeEmpty()->end()
                ->scalarNode('bulk_class')->cannotBeEmpty()->end()
            ->end();

        return $treeBuilder;
    }
}
