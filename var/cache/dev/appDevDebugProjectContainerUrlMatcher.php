<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // _assetic_df0a62a
        if ('/css/df0a62a.css' === $pathinfo) {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'df0a62a',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_df0a62a',);
        }

        if (0 === strpos($pathinfo, '/css/df0a62a_')) {
            // _assetic_df0a62a_0
            if ('/css/df0a62a_bootstrap_1.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'df0a62a',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_df0a62a_0',);
            }

            // _assetic_df0a62a_1
            if ('/css/df0a62a_style_2.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'df0a62a',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_df0a62a_1',);
            }

            // _assetic_df0a62a_2
            if ('/css/df0a62a_owl.theme_3.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'df0a62a',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_df0a62a_2',);
            }

            // _assetic_df0a62a_3
            if ('/css/df0a62a_owl.carousel_4.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'df0a62a',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_df0a62a_3',);
            }

            // _assetic_df0a62a_4
            if ('/css/df0a62a_prettyPhoto_5.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'df0a62a',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_df0a62a_4',);
            }

            // _assetic_df0a62a_5
            if ('/css/df0a62a_minimal-slider_6.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'df0a62a',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_df0a62a_5',);
            }

            // _assetic_df0a62a_6
            if ('/css/df0a62a_fontawesome-all_7.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'df0a62a',  'pos' => 6,  '_format' => 'css',  '_route' => '_assetic_df0a62a_6',);
            }

            // _assetic_df0a62a_7
            if ('/css/df0a62a_contact_8.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'df0a62a',  'pos' => 7,  '_format' => 'css',  '_route' => '_assetic_df0a62a_7',);
            }

        }

        // _assetic_5b2ee60
        if ('/js/5b2ee60.js' === $pathinfo) {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '5b2ee60',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_5b2ee60',);
        }

        if (0 === strpos($pathinfo, '/js/5b2ee60_')) {
            if (0 === strpos($pathinfo, '/js/5b2ee60_jquery')) {
                // _assetic_5b2ee60_0
                if ('/js/5b2ee60_jquery-2.2.3.min_1.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5b2ee60',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_5b2ee60_0',);
                }

                // _assetic_5b2ee60_6
                if ('/js/5b2ee60_jquery-1.7.2_7.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5b2ee60',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_5b2ee60_6',);
                }

                // _assetic_5b2ee60_7
                if ('/js/5b2ee60_jquery.quicksand_8.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5b2ee60',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_5b2ee60_7',);
                }

                // _assetic_5b2ee60_9
                if ('/js/5b2ee60_jquery.prettyPhoto_10.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5b2ee60',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_5b2ee60_9',);
                }

            }

            // _assetic_5b2ee60_1
            if ('/js/5b2ee60_minimal-slider_2.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '5b2ee60',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_5b2ee60_1',);
            }

            // _assetic_5b2ee60_3
            if ('/js/5b2ee60_move-top_4.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '5b2ee60',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_5b2ee60_3',);
            }

            // _assetic_5b2ee60_2
            if ('/js/5b2ee60_owl.carousel_3.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '5b2ee60',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_5b2ee60_2',);
            }

            // _assetic_5b2ee60_4
            if ('/js/5b2ee60_easing_5.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '5b2ee60',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_5b2ee60_4',);
            }

            // _assetic_5b2ee60_5
            if ('/js/5b2ee60_bootstrap_6.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '5b2ee60',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_5b2ee60_5',);
            }

            // _assetic_5b2ee60_8
            if ('/js/5b2ee60_pretty-script_9.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '5b2ee60',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_5b2ee60_8',);
            }

        }

        elseif (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // nelmio_api_doc.swagger_ui
        if ('/api/doc' === $trimmedPathinfo) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_nelmio_api_docswagger_ui;
            }

            $ret = array (  '_controller' => 'nelmio_api_doc.controller.swagger_ui',  '_route' => 'nelmio_api_doc.swagger_ui',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'nelmio_api_doc.swagger_ui'));
            }

            return $ret;
        }
        not_nelmio_api_docswagger_ui:

        // home
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'MorivenBundle\\Controller\\DefaultController::renderAction',  '_route' => 'home',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'home'));
            }

            return $ret;
        }

        if (0 === strpos($pathinfo, '/ordre')) {
            // moriven_ordre
            if ('/ordre' === $pathinfo) {
                return array (  '_controller' => 'MorivenBundle\\Controller\\OrdreController::getAction',  '_route' => 'moriven_ordre',);
            }

            // moriven_ordre_edit
            if ('/ordre/edit' === $pathinfo) {
                return array (  '_controller' => 'MorivenBundle\\Controller\\OrdreController::patchAction',  '_route' => 'moriven_ordre_edit',);
            }

        }

        // moriven_ordre_import
        if ('/order/import' === $pathinfo) {
            return array (  '_controller' => 'MorivenBundle\\Controller\\OrdreController::postAction',  '_route' => 'moriven_ordre_import',);
        }

        if (0 === strpos($pathinfo, '/users')) {
            // users
            if ('/users' === $pathinfo) {
                return array (  '_controller' => 'MorivenBundle\\Controller\\UserController::getAction',  '_route' => 'users',);
            }

            // users_edit
            if ('/users/edit' === $pathinfo) {
                return array (  '_controller' => 'MorivenBundle\\Controller\\UserController::patchAction',  '_route' => 'users_edit',);
            }

        }

        elseif (0 === strpos($pathinfo, '/verification')) {
            // verification
            if ('/verification' === $pathinfo) {
                return array (  '_controller' => 'MorivenBundle\\Controller\\VerificationController::getAction',  '_route' => 'verification',);
            }

            // verification_post
            if ('/verification/post' === $pathinfo) {
                return array (  '_controller' => 'MorivenBundle\\Controller\\VerificationController::postAction',  '_route' => 'verification_post',);
            }

            // verification_delete
            if ('/verification/delete' === $pathinfo) {
                return array (  '_controller' => 'MorivenBundle\\Controller\\VerificationController::deleteAction',  '_route' => 'verification_delete',);
            }

        }

        elseif (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_login;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_security_check;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_security_logout;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_profile_show;
                }

                $ret = array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                }

                return $ret;
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

        }

        elseif (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_registration_register;
                }

                $ret = array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                }

                return $ret;
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_registration_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirm;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirmed;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
