<?php

namespace ContainerI8LnEV9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAnimalControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\AnimalController' shared autowired service.
     *
     * @return \App\Controller\AnimalController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AnimalController.php';

        $container->services['App\\Controller\\AnimalController'] = $instance = new \App\Controller\AnimalController();

        $instance->setContainer(($container->privates['.service_locator.nuHIcAe'] ?? $container->load('get_ServiceLocator_NuHIcAeService'))->withContext('App\\Controller\\AnimalController', $container));

        return $instance;
    }
}
