<?php

namespace ContainerREUeL7a;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAnimalControllerdetailsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.gJtCKO8.App\Controller\AnimalController::details()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['.service_locator.gJtCKO8'] ?? $container->load('get_ServiceLocator_GJtCKO8Service'));

        if (isset($container->privates['.service_locator.gJtCKO8.App\\Controller\\AnimalController::details()'])) {
            return $container->privates['.service_locator.gJtCKO8.App\\Controller\\AnimalController::details()'];
        }

        return $container->privates['.service_locator.gJtCKO8.App\\Controller\\AnimalController::details()'] = $a->withContext('App\\Controller\\AnimalController::details()', $container);
    }
}
