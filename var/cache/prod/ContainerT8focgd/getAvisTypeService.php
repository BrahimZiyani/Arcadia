<?php

namespace ContainerT8focgd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAvisTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\AvisType' shared autowired service.
     *
     * @return \App\Form\AvisType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\AvisType'] = new \App\Form\AvisType();
    }
}