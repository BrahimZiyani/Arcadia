<?php

namespace ContainerLv6ty30;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHabitatControllerdetailsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.O38RXnT.App\Controller\HabitatController::details()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.O38RXnT.App\\Controller\\HabitatController::details()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'habitat' => ['privates', '.errored..service_locator.O38RXnT.App\\Entity\\Habitat', NULL, 'Cannot autowire service ".service_locator.O38RXnT": it needs an instance of "App\\Entity\\Habitat" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'habitat' => 'App\\Entity\\Habitat',
            'entityManager' => '?',
        ]))->withContext('App\\Controller\\HabitatController::details()', $container);
    }
}
