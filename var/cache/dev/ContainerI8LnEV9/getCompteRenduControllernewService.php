<?php

namespace ContainerI8LnEV9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCompteRenduControllernewService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.FbxsP.a.App\Controller\CompteRenduController::new()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.FbxsP.a.App\\Controller\\CompteRenduController::new()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'compteRenduService' => ['privates', 'App\\Service\\CompteRenduService', 'getCompteRenduServiceService', true],
        ], [
            'compteRenduService' => 'App\\Service\\CompteRenduService',
        ]))->withContext('App\\Controller\\CompteRenduController::new()', $container);
    }
}
