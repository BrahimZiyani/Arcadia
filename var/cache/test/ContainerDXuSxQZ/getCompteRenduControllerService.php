<?php

namespace ContainerDXuSxQZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCompteRenduControllerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'App\Controller\CompteRenduController' shared autowired service.
     *
     * @return \App\Controller\CompteRenduController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'CompteRenduController.php';

        $container->services['App\\Controller\\CompteRenduController'] = $instance = new \App\Controller\CompteRenduController();

        $instance->setContainer(($container->privates['.service_locator.nuHIcAe'] ?? $container->load('get_ServiceLocator_NuHIcAeService'))->withContext('App\\Controller\\CompteRenduController', $container));

        return $instance;
    }
}
