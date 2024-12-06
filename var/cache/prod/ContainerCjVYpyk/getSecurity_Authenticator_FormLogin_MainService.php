<?php

namespace ContainerCjVYpyk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_FormLogin_MainService extends App_KernelProdContainer
{
    /*
     * Gets the private 'security.authenticator.form_login.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authenticator\FormLoginAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['http_kernel'] ?? self::getHttpKernelService($container));

        if (isset($container->privates['security.authenticator.form_login.main'])) {
            return $container->privates['security.authenticator.form_login.main'];
        }
        $b = ($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService'));
        $c = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($b, [], ($container->privates['monolog.logger'] ?? $container->load('getMonolog_LoggerService')));
        $c->setOptions(['login_path' => 'app_login', 'default_target_path' => '/profile', 'always_use_default_target_path' => false, 'target_path_parameter' => '_target_path', 'use_referer' => false]);
        $c->setFirewallName('main');
        $d = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($a, $b, [], ($container->services['monolog.logger.security'] ?? self::getMonolog_Logger_SecurityService($container)));
        $d->setOptions(['login_path' => 'app_login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path']);

        return $container->privates['security.authenticator.form_login.main'] = new \Symfony\Component\Security\Http\Authenticator\FormLoginAuthenticator($b, ($container->privates['security.user.provider.concrete.app_user_provider'] ?? $container->load('getSecurity_User_Provider_Concrete_AppUserProviderService')), $c, $d, ['login_path' => 'app_login', 'check_path' => 'login_check', 'use_forward' => false, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'authenticate', 'enable_csrf' => false, 'post_only' => true, 'form_only' => false]);
    }
}
