<?php

namespace ContainerCjVYpyk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAnimalControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\AnimalController' shared autowired service.
     *
     * @return \App\Controller\AnimalController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\AnimalController'] = $instance = new \App\Controller\AnimalController();

        $instance->setContainer(($container->privates['.service_locator.nuHIcAe'] ?? $container->load('get_ServiceLocator_NuHIcAeService'))->withContext('App\\Controller\\AnimalController', $container));

        return $instance;
    }
}