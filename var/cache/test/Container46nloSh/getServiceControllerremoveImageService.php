<?php

namespace Container46nloSh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getServiceControllerremoveImageService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.ofH3RGv.App\Controller\ServiceController::removeImage()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ofH3RGv.App\\Controller\\ServiceController::removeImage()'] = ($container->privates['.service_locator.ofH3RGv'] ?? $container->load('get_ServiceLocator_OfH3RGvService'))->withContext('App\\Controller\\ServiceController::removeImage()', $container);
    }
}
