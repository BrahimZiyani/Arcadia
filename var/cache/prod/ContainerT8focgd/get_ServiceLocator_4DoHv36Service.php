<?php

namespace ContainerT8focgd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_4DoHv36Service extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.4DoHv36' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.4DoHv36'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'avis' => ['privates', '.errored..service_locator.4DoHv36.App\\Entity\\Avis', NULL, 'Cannot autowire service ".service_locator.4DoHv36": it needs an instance of "App\\Entity\\Avis" but this type has been excluded in "config/services.yaml".'],
        ], [
            'avis' => 'App\\Entity\\Avis',
        ]);
    }
}
