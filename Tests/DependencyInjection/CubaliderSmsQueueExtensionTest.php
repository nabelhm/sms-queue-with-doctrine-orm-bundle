<?php

namespace Cubalider\SmsQueueBundle\Tests\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Cubalider\Bundle\SmsQueueBundle\DependencyInjection\CubaliderSmsQueueExtension;

class CubaliderSmsQueueExtensionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers \Cubalider\Bundle\SmsQueueBundle\DependencyInjection\CubaliderSmsQueueExtension::load
     */
    public function testLoad()
    {
        $configuration = new ContainerBuilder();
        $loader = new CubaliderSmsQueueExtension();
        $loader->load(array(), $configuration);

        $this->assertTrue($configuration->hasDefinition('cubalider_sms_queue.bulk_manager'));
        $this->assertTrue($configuration->hasDefinition('cubalider_sms_queue.message_manager'));
    }
}
