<?php

namespace ContainerCjVYpyk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHabitatServiceService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Service\HabitatService' shared autowired service.
     *
     * @return \App\Service\HabitatService
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container));

        if (isset($container->privates['App\\Service\\HabitatService'])) {
            return $container->privates['App\\Service\\HabitatService'];
        }

        return $container->privates['App\\Service\\HabitatService'] = new \App\Service\HabitatService($a, ($container->privates['slugger'] ??= new \Symfony\Component\String\Slugger\AsciiSlugger('en')), (\dirname(__DIR__, 4).'/public/uploads/habitats'));
    }
}
