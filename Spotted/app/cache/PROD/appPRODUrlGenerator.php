<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Symfony\Component\HttpKernel\Log\LoggerInterface;

/**
 * appPRODUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appPRODUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        'spotted_request_listener_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'SpottedRequestListenerBundle:Default:index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),),
        'spotted_home_homepage' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'Spotted\\HomeBundle\\Controller\\HomeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => '_locale',    ),  ),),
        'fos_user_security_login' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => '_locale',    ),  ),),
        'fos_user_security_check' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => '_locale',    ),  ),),
        'fos_user_security_logout' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => '_locale',    ),  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }
}
