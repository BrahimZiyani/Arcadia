<?php

namespace Container46nloSh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAnimalControllerdetailsService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.gJtCKO8.App\Controller\AnimalController::details()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.gJtCKO8.App\\Controller\\AnimalController::details()'] = ($container->privates['.service_locator.gJtCKO8'] ?? $container->load('get_ServiceLocator_GJtCKO8Service'))->withContext('App\\Controller\\AnimalController::details()', $container);
    }
}
