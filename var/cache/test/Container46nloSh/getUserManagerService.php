<?php

namespace Container46nloSh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserManagerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Service\UserManager' shared autowired service.
     *
     * @return \App\Service\UserManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'UserManager.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container));

        if (isset($container->privates['App\\Service\\UserManager'])) {
            return $container->privates['App\\Service\\UserManager'];
        }

        return $container->privates['App\\Service\\UserManager'] = new \App\Service\UserManager($a);
    }
}
