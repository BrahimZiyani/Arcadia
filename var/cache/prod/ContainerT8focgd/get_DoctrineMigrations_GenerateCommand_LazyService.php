<?php

namespace ContainerT8focgd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_DoctrineMigrations_GenerateCommand_LazyService extends App_KernelProdContainer
{
    /*
     * Gets the private '.doctrine_migrations.generate_command.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.doctrine_migrations.generate_command.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('doctrine:migrations:generate', [], 'Generate a blank migration class.', false, #[\Closure(name: 'doctrine_migrations.generate_command', class: 'Doctrine\\Migrations\\Tools\\Console\\Command\\GenerateCommand')] fn (): \Doctrine\Migrations\Tools\Console\Command\GenerateCommand => ($container->privates['doctrine_migrations.generate_command'] ?? $container->load('getDoctrineMigrations_GenerateCommandService')));
    }
}
