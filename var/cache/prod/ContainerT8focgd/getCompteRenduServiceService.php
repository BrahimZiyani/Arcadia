<?php

namespace ContainerT8focgd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCompteRenduServiceService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Service\CompteRenduService' shared autowired service.
     *
     * @return \App\Service\CompteRenduService
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container));

        if (isset($container->privates['App\\Service\\CompteRenduService'])) {
            return $container->privates['App\\Service\\CompteRenduService'];
        }
        $b = ($container->privates['security.helper'] ?? $container->load('getSecurity_HelperService'));

        if (isset($container->privates['App\\Service\\CompteRenduService'])) {
            return $container->privates['App\\Service\\CompteRenduService'];
        }

        return $container->privates['App\\Service\\CompteRenduService'] = new \App\Service\CompteRenduService($a, $b);
    }
}
