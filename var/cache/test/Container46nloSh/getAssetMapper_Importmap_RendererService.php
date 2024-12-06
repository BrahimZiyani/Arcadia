<?php

namespace Container46nloSh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssetMapper_Importmap_RendererService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'asset_mapper.importmap.renderer' shared service.
     *
     * @return \Symfony\Component\AssetMapper\ImportMap\ImportMapRenderer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset-mapper'.\DIRECTORY_SEPARATOR.'ImportMap'.\DIRECTORY_SEPARATOR.'ImportMapRenderer.php';

        return $container->privates['asset_mapper.importmap.renderer'] = new \Symfony\Component\AssetMapper\ImportMap\ImportMapRenderer(($container->privates['asset_mapper.importmap.generator'] ?? $container->load('getAssetMapper_Importmap_GeneratorService')), ($container->privates['assets.packages'] ?? self::getAssets_PackagesService($container)), 'UTF-8', 'es-module-shims', ['data-turbo-track' => 'reload'], ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()));
    }
}
