<?php

namespace ContainerDXuSxQZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPageControllersupprimerAvisService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.4DoHv36.App\Controller\PageController::supprimerAvis()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.4DoHv36.App\\Controller\\PageController::supprimerAvis()'] = ($container->privates['.service_locator.4DoHv36'] ?? $container->load('get_ServiceLocator_4DoHv36Service'))->withContext('App\\Controller\\PageController::supprimerAvis()', $container);
    }
}
