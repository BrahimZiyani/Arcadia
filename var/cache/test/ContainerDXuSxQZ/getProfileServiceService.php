<?php

namespace ContainerDXuSxQZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProfileServiceService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Service\ProfileService' shared autowired service.
     *
     * @return \App\Service\ProfileService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'ProfileService.php';

        $a = ($container->privates['form.factory'] ?? $container->load('getForm_FactoryService'));

        if (isset($container->privates['App\\Service\\ProfileService'])) {
            return $container->privates['App\\Service\\ProfileService'];
        }
        $b = ($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container));

        if (isset($container->privates['App\\Service\\ProfileService'])) {
            return $container->privates['App\\Service\\ProfileService'];
        }
        $c = ($container->privates['security.helper'] ?? $container->load('getSecurity_HelperService'));

        if (isset($container->privates['App\\Service\\ProfileService'])) {
            return $container->privates['App\\Service\\ProfileService'];
        }

        return $container->privates['App\\Service\\ProfileService'] = new \App\Service\ProfileService(($container->privates['App\\Repository\\UserRepository'] ?? $container->load('getUserRepositoryService')), ($container->privates['App\\Repository\\HabitatRepository'] ?? $container->load('getHabitatRepositoryService')), ($container->privates['App\\Repository\\AnimalRepository'] ?? $container->load('getAnimalRepositoryService')), ($container->privates['App\\Repository\\ServiceRepository'] ?? $container->load('getServiceRepositoryService')), ($container->privates['App\\Repository\\CompteRenduRepository'] ?? $container->load('getCompteRenduRepositoryService')), ($container->privates['App\\Repository\\AvisRepository'] ?? $container->load('getAvisRepositoryService')), $a, $b, $c);
    }
}
