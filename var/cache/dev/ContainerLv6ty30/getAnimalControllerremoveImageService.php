<?php

namespace ContainerLv6ty30;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAnimalControllerremoveImageService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.gJtCKO8.App\Controller\AnimalController::removeImage()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['.service_locator.gJtCKO8'] ?? $container->load('get_ServiceLocator_GJtCKO8Service'));

        if (isset($container->privates['.service_locator.gJtCKO8.App\\Controller\\AnimalController::removeImage()'])) {
            return $container->privates['.service_locator.gJtCKO8.App\\Controller\\AnimalController::removeImage()'];
        }

        return $container->privates['.service_locator.gJtCKO8.App\\Controller\\AnimalController::removeImage()'] = $a->withContext('App\\Controller\\AnimalController::removeImage()', $container);
    }
}
