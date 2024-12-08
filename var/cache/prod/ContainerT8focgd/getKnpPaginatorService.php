<?php

namespace ContainerT8focgd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getKnpPaginatorService extends App_KernelProdContainer
{
    /*
     * Gets the public 'knp_paginator' shared service.
     *
     * @return \Knp\Component\Pager\Paginator
     */
    public static function do($container, $lazyLoad = true)
    {
        if (true === $lazyLoad) {
            return $container->services['knp_paginator'] = $container->createProxy('PaginatorProxyF03325b', static fn () => \PaginatorProxyF03325b::createLazyProxy(static fn () => self::do($container, false)));
        }

        $instance = new \Knp\Component\Pager\Paginator(($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container)), new \Knp\Component\Pager\ArgumentAccess\RequestArgumentAccess(($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack())), ($container->services['doctrine.dbal.default_connection'] ?? self::getDoctrine_Dbal_DefaultConnectionService($container)));

        $instance->setDefaultPaginatorOptions(['pageParameterName' => 'page', 'sortFieldParameterName' => 'sort', 'sortDirectionParameterName' => 'direction', 'filterFieldParameterName' => 'filterField', 'filterValueParameterName' => 'filterValue', 'distinct' => true, 'pageOutOfRange' => 'ignore', 'defaultLimit' => 10]);

        return $instance;
    }
}