<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/blog')) {
            // cl_blog_home
            if (preg_match('#^/blog(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cl_blog_home')), array (  '_controller' => 'CL\\BlogBundle\\Controller\\AdvertController::indexAction',  'page' => 1,));
            }

            if (0 === strpos($pathinfo, '/blog/ad')) {
                // cl_blog_view
                if (0 === strpos($pathinfo, '/blog/advert') && preg_match('#^/blog/advert/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cl_blog_view')), array (  '_controller' => 'CL\\BlogBundle\\Controller\\AdvertController::viewAction',));
                }

                // cl_blog_add
                if ($pathinfo === '/blog/add') {
                    return array (  '_controller' => 'CL\\BlogBundle\\Controller\\AdvertController::addAction',  '_route' => 'cl_blog_add',);
                }

            }

            // cl_blog_edit
            if (0 === strpos($pathinfo, '/blog/edit') && preg_match('#^/blog/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cl_blog_edit')), array (  '_controller' => 'CL\\BlogBundle\\Controller\\AdvertController::editAction',));
            }

            // cl_blog_delete
            if (0 === strpos($pathinfo, '/blog/delete') && preg_match('#^/blog/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cl_blog_delete')), array (  '_controller' => 'CL\\BlogBundle\\Controller\\AdvertController::deleteAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
