<?php

namespace ContainerDXuSxQZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHabitatControllerdeleteService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.A20ZbmT.App\Controller\HabitatController::delete()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.A20ZbmT.App\\Controller\\HabitatController::delete()'] = ($container->privates['.service_locator.A20ZbmT'] ?? $container->load('get_ServiceLocator_A20ZbmTService'))->withContext('App\\Controller\\HabitatController::delete()', $container);
    }
}
