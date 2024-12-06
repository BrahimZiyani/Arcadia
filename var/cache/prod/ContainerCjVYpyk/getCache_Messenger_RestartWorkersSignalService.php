<?php

namespace ContainerCjVYpyk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCache_Messenger_RestartWorkersSignalService extends App_KernelProdContainer
{
    /*
     * Gets the private 'cache.messenger.restart_workers_signal' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['cache.messenger.restart_workers_signal'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('8wg1rCHT7D', 0, ($container->targetDir.''.'/pools/app'), ($container->privates['cache.default_marshaller'] ??= new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(NULL, false)));

        $instance->setLogger(($container->privates['monolog.logger.cache'] ?? self::getMonolog_Logger_CacheService($container)));

        return $instance;
    }
}
