<?php

namespace ContainerCjVYpyk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RKMHrg5Service extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.rKMHrg5' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.rKMHrg5'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'habitatRepository' => ['privates', 'App\\Repository\\HabitatRepository', 'getHabitatRepositoryService', true],
        ], [
            'habitatRepository' => 'App\\Repository\\HabitatRepository',
        ]);
    }
}
