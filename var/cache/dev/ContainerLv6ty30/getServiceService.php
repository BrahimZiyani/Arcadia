<?php

namespace ContainerLv6ty30;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.errored..service_locator.ofH3RGv.App\Entity\Service' shared service.
     *
     * @return \App\Entity\Service
     */
    public static function do($container, $lazyLoad = true)
    {
        throw new RuntimeException('Cannot autowire service ".service_locator.ofH3RGv": it needs an instance of "App\\Entity\\Service" but this type has been excluded in "config/services.yaml".');
    }
}
