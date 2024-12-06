<?php

namespace ContainerREUeL7a;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getScheduleControllernewService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.3vLhH9A.App\Controller\ScheduleController::new()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3vLhH9A.App\\Controller\\ScheduleController::new()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'scheduleService' => ['privates', 'App\\Service\\ScheduleService', 'getScheduleServiceService', true],
        ], [
            'scheduleService' => 'App\\Service\\ScheduleService',
        ]))->withContext('App\\Controller\\ScheduleController::new()', $container);
    }
}
