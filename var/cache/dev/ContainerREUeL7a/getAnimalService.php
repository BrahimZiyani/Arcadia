<?php

namespace ContainerREUeL7a;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAnimalService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.errored..service_locator.Uontg3x.App\Entity\Animal' shared service.
     *
     * @return \App\Entity\Animal
     */
    public static function do($container, $lazyLoad = true)
    {
        throw new RuntimeException('Cannot autowire service ".service_locator.Uontg3x": it needs an instance of "App\\Entity\\Animal" but this type has been excluded in "config/services.yaml".');
    }
}
