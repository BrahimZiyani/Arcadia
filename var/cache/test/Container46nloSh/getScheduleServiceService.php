<?php

namespace Container46nloSh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getScheduleServiceService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Service\ScheduleService' shared autowired service.
     *
     * @return \App\Service\ScheduleService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'ScheduleService.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container));

        if (isset($container->privates['App\\Service\\ScheduleService'])) {
            return $container->privates['App\\Service\\ScheduleService'];
        }

        return $container->privates['App\\Service\\ScheduleService'] = new \App\Service\ScheduleService($a);
    }
}
