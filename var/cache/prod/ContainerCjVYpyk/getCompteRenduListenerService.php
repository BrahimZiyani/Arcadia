<?php

namespace ContainerCjVYpyk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCompteRenduListenerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\EventListener\CompteRenduListener' shared autowired service.
     *
     * @return \App\EventListener\CompteRenduListener
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\EventListener\\CompteRenduListener'] = new \App\EventListener\CompteRenduListener();
    }
}
