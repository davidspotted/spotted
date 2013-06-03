<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appPRODUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appPRODUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // spotted_request_listener_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SpottedRequestListenerBundle:Default:index',)), array('_route' => 'spotted_request_listener_homepage'));
        }

        // spotted_home_homepage
        if (preg_match('#^/(?P<_locale>[^/]+)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'spotted_home_homepage');
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Spotted\\HomeBundle\\Controller\\HomeController::indexAction',)), array('_route' => 'spotted_home_homepage'));
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

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
