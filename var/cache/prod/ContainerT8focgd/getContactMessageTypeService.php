<?php

namespace ContainerT8focgd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContactMessageTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\ContactMessageType' shared autowired service.
     *
     * @return \App\Form\ContactMessageType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\ContactMessageType'] = new \App\Form\ContactMessageType();
    }
}
