<?php

namespace Acme\AppBundle\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class DefaultController
{

    public function indexAction(Request $request, Application $app)
    {
        $name = "juanma";

        return $app['twig']->render('Acme/App/Default/dashboard.html.twig', array(
            'name' => $name,
        ));
    }

    public function testAction(Request $request, Application $app)
    {

        return $app['twig']->render('Acme/App/Default/test.html.twig', array());
    }

}
