<?php

namespace ContainerCjVYpyk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHabitatControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\HabitatController' shared autowired service.
     *
     * @return \App\Controller\HabitatController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\HabitatController'] = $instance = new \App\Controller\HabitatController();

        $instance->setContainer(($container->privates['.service_locator.nuHIcAe'] ?? $container->load('get_ServiceLocator_NuHIcAeService'))->withContext('App\\Controller\\HabitatController', $container));

        return $instance;
    }
}