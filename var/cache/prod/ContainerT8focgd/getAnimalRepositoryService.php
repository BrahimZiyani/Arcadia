<?php

namespace ContainerT8focgd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAnimalRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\AnimalRepository' shared autowired service.
     *
     * @return \App\Repository\AnimalRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\AnimalRepository'] = new \App\Repository\AnimalRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}