<?php

namespace ContainerCjVYpyk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getScheduleRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\ScheduleRepository' shared autowired service.
     *
     * @return \App\Repository\ScheduleRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\ScheduleRepository'] = new \App\Repository\ScheduleRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
