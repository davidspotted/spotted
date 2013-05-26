<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // _wdt
        if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_info
            if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',)), array('_route' => '_profiler_info'));
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+)\\.txt$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_phpinfo
            if ($pathinfo === '/_profiler/phpinfo') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::phpinfoAction',  '_route' => '_profiler_phpinfo',);
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+)/search/results$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

            // _profiler_redirect
            if (rtrim($pathinfo, '/') === '/_profiler') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_profiler_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => '_profiler_search_results',  'token' => 'empty',  'ip' => '',  'url' => '',  'method' => '',  'limit' => '10',  '_route' => '_profiler_redirect',);
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }

                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // spotted_home
        if (preg_match('#^/(?P<_locale>[^/]+)/home$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Spotted\\HomeBundle\\Controller\\HomeController::indexAction',)), array('_route' => 'spotted_home'));
        }

        // fos_user_security_login
        if (preg_match('#^/(?P<_locale>[^/]+)/login$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',)), array('_route' => 'fos_user_security_login'));
        }

        // fos_user_security_check
        if (preg_match('#^/(?P<_locale>[^/]+)/login_check$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_fos_user_security_check;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',)), array('_route' => 'fos_user_security_check'));
        }
        not_fos_user_security_check:

        // fos_user_security_logout
        if (preg_match('#^/(?P<_locale>[^/]+)/logout$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',)), array('_route' => 'fos_user_security_logout'));
        }

        // fos_user_profile_show
        if (preg_match('#^/(?P<_locale>[^/]+)/profile/?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_user_profile_show;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',)), array('_route' => 'fos_user_profile_show'));
        }
        not_fos_user_profile_show:

        // fos_user_profile_edit
        if (preg_match('#^/(?P<_locale>[^/]+)/profile/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',)), array('_route' => 'fos_user_profile_edit'));
        }

        // fos_user_registration_register
        if (preg_match('#^/(?P<_locale>[^/]+)/register/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',)), array('_route' => 'fos_user_registration_register'));
        }

        // fos_user_registration_check_email
        if (preg_match('#^/(?P<_locale>[^/]+)/register/check\\-email$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_user_registration_check_email;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',)), array('_route' => 'fos_user_registration_check_email'));
        }
        not_fos_user_registration_check_email:

        // fos_user_registration_confirm
        if (preg_match('#^/(?P<_locale>[^/]+)/register/confirm/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_user_registration_confirm;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',)), array('_route' => 'fos_user_registration_confirm'));
        }
        not_fos_user_registration_confirm:

        // fos_user_registration_confirmed
        if (preg_match('#^/(?P<_locale>[^/]+)/register/confirmed$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_user_registration_confirmed;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',)), array('_route' => 'fos_user_registration_confirmed'));
        }
        not_fos_user_registration_confirmed:

        // fos_user_resetting_request
        if (preg_match('#^/(?P<_locale>[^/]+)/resetting/request$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_user_resetting_request;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',)), array('_route' => 'fos_user_resetting_request'));
        }
        not_fos_user_resetting_request:

        // fos_user_resetting_send_email
        if (preg_match('#^/(?P<_locale>[^/]+)/resetting/send\\-email$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_fos_user_resetting_send_email;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',)), array('_route' => 'fos_user_resetting_send_email'));
        }
        not_fos_user_resetting_send_email:

        // fos_user_resetting_check_email
        if (preg_match('#^/(?P<_locale>[^/]+)/resetting/check\\-email$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_user_resetting_check_email;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',)), array('_route' => 'fos_user_resetting_check_email'));
        }
        not_fos_user_resetting_check_email:

        // fos_user_resetting_reset
        if (preg_match('#^/(?P<_locale>[^/]+)/resetting/reset/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_resetting_reset;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',)), array('_route' => 'fos_user_resetting_reset'));
        }
        not_fos_user_resetting_reset:

        // fos_user_change_password
        if (preg_match('#^/(?P<_locale>[^/]+)/profile/change\\-password$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',)), array('_route' => 'fos_user_change_password'));
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
