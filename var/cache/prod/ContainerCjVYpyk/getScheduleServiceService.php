<?php

namespace ContainerCjVYpyk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getScheduleServiceService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Service\ScheduleService' shared autowired service.
     *
     * @return \App\Service\ScheduleService
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container));

        if (isset($container->privates['App\\Service\\ScheduleService'])) {
            return $container->privates['App\\Service\\ScheduleService'];
        }

        return $container->privates['App\\Service\\ScheduleService'] = new \App\Service\ScheduleService($a);
    }
}