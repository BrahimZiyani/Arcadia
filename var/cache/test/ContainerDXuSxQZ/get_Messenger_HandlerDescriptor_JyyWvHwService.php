<?php

namespace ContainerDXuSxQZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_JyyWvHwService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.jyyWvHw' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'messenger'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'HandlerDescriptor.php';

        $a = ($container->privates['messenger.redispatch_message_handler'] ?? $container->load('getMessenger_RedispatchMessageHandlerService'));

        if (isset($container->privates['.messenger.handler_descriptor.jyyWvHw'])) {
            return $container->privates['.messenger.handler_descriptor.jyyWvHw'];
        }

        return $container->privates['.messenger.handler_descriptor.jyyWvHw'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor($a, []);
    }
}