<?php

namespace Rii\SecurityBundle\Controller;

use Rii\SecurityBundle\Entity\Context;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class UserController {

    /**
     * Choose profile action.
     * 
     * @param Request $request
     * @param Application $app
     * @return type
     * @throws AccessDeniedHttpException
     */
    public function chooseProfileAction(Request $request, Application $app) {


        /* create context */
        $context = new Context($app);
        $context->startUp();
        $ini_array = $context->getConfig();

        $app['monolog']->addDebug('ini array.');

        $profilesCount = count($ini_array);
        if ($profilesCount > 1) {

            return $app['twig']->render('Security/chooseProfile.html.twig', array("profiles" => $ini_array));
        } elseif ($profilesCount == 1) {
            /* set only profile */
            $session = $request->getSession();
            $firstProfile = reset($ini_array);
            $settings = ($firstProfile);

            $context->logInUser($context, $session, $settings);
            return $app->redirect("/");
        } else {
            throw new AccessDeniedHttpException('No hay perfiles configurados en el sistema.');
        }
    }

    /**
     * 
     * Config profile.
     * 
     * @param Request $request
     * @param Application $app
     * @return type
     */
    public function configProfileAction(Request $request, Application $app) {
        $session = $request->getSession();

        /* create context */
        $context = new Context($app);
        $context->startUp();
        $ini_array = $context->getConfig();

        /* set user */
        $settings = $ini_array[$request->get("profile")];
        $context->logInUser($context, $session, $settings);
        return $app->redirect("/");
    }

    /**
     * 
     * @param Request $request
     * @param Application $app
     * @return type
     */
    public function logoutAction(Request $request, Application $app) {
        $app["session"]->clear();
        return $app->redirect("/");
    }

}
