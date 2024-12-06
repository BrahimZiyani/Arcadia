<?php

namespace Container46nloSh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAnimalControllereditService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.Uontg3x.App\Controller\AnimalController::edit()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Uontg3x.App\\Controller\\AnimalController::edit()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'animal' => ['privates', '.errored..service_locator.Uontg3x.App\\Entity\\Animal', NULL, 'Cannot autowire service ".service_locator.Uontg3x": it needs an instance of "App\\Entity\\Animal" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'animalService' => ['privates', 'App\\Service\\AnimalService', 'getAnimalServiceService', true],
        ], [
            'animal' => 'App\\Entity\\Animal',
            'entityManager' => '?',
            'animalService' => 'App\\Service\\AnimalService',
        ]))->withContext('App\\Controller\\AnimalController::edit()', $container);
    }
}
