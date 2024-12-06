<?php

namespace Container46nloSh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTranslation_Extractor_Visitor_TranslatableMessageService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'translation.extractor.visitor.translatable_message' shared service.
     *
     * @return \Symfony\Component\Translation\Extractor\Visitor\TranslatableMessageVisitor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Extractor'.\DIRECTORY_SEPARATOR.'Visitor'.\DIRECTORY_SEPARATOR.'AbstractVisitor.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nikic'.\DIRECTORY_SEPARATOR.'php-parser'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'PhpParser'.\DIRECTORY_SEPARATOR.'NodeVisitor.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'translation'.\DIRECTORY_SEPARATOR.'Extractor'.\DIRECTORY_SEPARATOR.'Visitor'.\DIRECTORY_SEPARATOR.'TranslatableMessageVisitor.php';

        return $container->privates['translation.extractor.visitor.translatable_message'] = new \Symfony\Component\Translation\Extractor\Visitor\TranslatableMessageVisitor();
    }
}
