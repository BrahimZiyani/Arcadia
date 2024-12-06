<?php

namespace ContainerCjVYpyk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserControllernewService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.k2OG5ja.App\Controller\UserController::new()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.k2OG5ja.App\\Controller\\UserController::new()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'userManager' => ['privates', 'App\\Service\\UserManager', 'getUserManagerService', true],
        ], [
            'userManager' => 'App\\Service\\UserManager',
        ]))->withContext('App\\Controller\\UserController::new()', $container);
    }
}
