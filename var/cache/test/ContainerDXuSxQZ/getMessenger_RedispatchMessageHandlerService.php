<?php

namespace ContainerDXuSxQZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_RedispatchMessageHandlerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'messenger.redispatch_message_handler' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\RedispatchMessageHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'messenger'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'RedispatchMessageHandler.php';

        $a = ($container->services['messenger.default_bus'] ?? self::getMessenger_DefaultBusService($container));

        if (isset($container->privates['messenger.redispatch_message_handler'])) {
            return $container->privates['messenger.redispatch_message_handler'];
        }

        return $container->privates['messenger.redispatch_message_handler'] = new \Symfony\Component\Messenger\Handler\RedispatchMessageHandler($a);
    }
}
