<?php

namespace ContainerLv6ty30;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_C3sIbBqService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.C3sIbBq' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.C3sIbBq'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'user' => ['privates', '.errored..service_locator.C3sIbBq.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.C3sIbBq": it needs an instance of "App\\Entity\\User" but this type has been excluded in "config/services.yaml".'],
            'userManager' => ['privates', 'App\\Service\\UserManager', 'getUserManagerService', true],
        ], [
            'user' => 'App\\Entity\\User',
            'userManager' => 'App\\Service\\UserManager',
        ]);
    }
}
