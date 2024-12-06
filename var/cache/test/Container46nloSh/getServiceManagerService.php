<?php

namespace Container46nloSh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getServiceManagerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Service\ServiceManager' shared autowired service.
     *
     * @return \App\Service\ServiceManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'ServiceManager.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'string'.\DIRECTORY_SEPARATOR.'Slugger'.\DIRECTORY_SEPARATOR.'SluggerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'string'.\DIRECTORY_SEPARATOR.'Slugger'.\DIRECTORY_SEPARATOR.'AsciiSlugger.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container));

        if (isset($container->privates['App\\Service\\ServiceManager'])) {
            return $container->privates['App\\Service\\ServiceManager'];
        }

        return $container->privates['App\\Service\\ServiceManager'] = new \App\Service\ServiceManager($a, (\dirname(__DIR__, 4).'/public/uploads/services'), ($container->privates['slugger'] ??= new \Symfony\Component\String\Slugger\AsciiSlugger('en')));
    }
}
