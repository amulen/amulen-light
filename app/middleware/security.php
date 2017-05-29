<?php

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

$app->before(function (Request $request, Application $app) {
    $pattern = $app["config"]["security"]["login_path"] . "/";
    $enabled = $app["config"]["security"]["enabled"];

    if (
            $enabled &&
            !$app['session']->get("username") &&
            !preg_match($pattern, $request->getUri())
    ) {
        return $app->redirect($app["config"]["security"]["login_path"]);
    }
});

