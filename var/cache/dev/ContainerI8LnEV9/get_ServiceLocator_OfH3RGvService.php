<?php

namespace ContainerI8LnEV9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OfH3RGvService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ofH3RGv' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ofH3RGv'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'service' => ['privates', '.errored..service_locator.ofH3RGv.App\\Entity\\Service', NULL, 'Cannot autowire service ".service_locator.ofH3RGv": it needs an instance of "App\\Entity\\Service" but this type has been excluded in "config/services.yaml".'],
            'serviceManager' => ['privates', 'App\\Service\\ServiceManager', 'getServiceManagerService', true],
        ], [
            'service' => 'App\\Entity\\Service',
            'serviceManager' => 'App\\Service\\ServiceManager',
        ]);
    }
}
