<?php

namespace ContainerI8LnEV9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_4wc4Ag1Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.4wc4Ag1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.4wc4Ag1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'loader' => ['privates', '.errored..service_locator.4wc4Ag1.Symfony\\Component\\Config\\Loader\\LoaderInterface', NULL, 'Cannot autowire service ".service_locator.4wc4Ag1": it needs an instance of "Symfony\\Component\\Config\\Loader\\LoaderInterface" but this type has been excluded from autowiring.'],
        ], [
            'loader' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
        ]);
    }
}
