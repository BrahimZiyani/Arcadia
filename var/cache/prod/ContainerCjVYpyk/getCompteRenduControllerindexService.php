<?php

namespace ContainerCjVYpyk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCompteRenduControllerindexService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.5KiUGWj.App\Controller\CompteRenduController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5KiUGWj.App\\Controller\\CompteRenduController::index()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'compteRenduRepository' => ['privates', 'App\\Repository\\CompteRenduRepository', 'getCompteRenduRepositoryService', true],
        ], [
            'compteRenduRepository' => 'App\\Repository\\CompteRenduRepository',
        ]))->withContext('App\\Controller\\CompteRenduController::index()', $container);
    }
}
