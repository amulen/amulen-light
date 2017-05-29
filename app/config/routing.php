<?php

/* security */
$app->get('/login', "Rii\\SecurityBundle\\Controller\\UserController::chooseProfileAction");
$app->post('/login_check', "Rii\\SecurityBundle\\Controller\\UserController::configProfileAction");
$app->get('/logout', "Rii\\SecurityBundle\\Controller\\UserController::logoutAction");


/* dashboard */
$app->get('/test', "Acme\\AppBundle\\Controller\\DefaultController::testAction")
    ->bind("test");


/* dashboard */
$app->get('/', "Acme\\AppBundle\\Controller\\DefaultController::indexAction")
    ->bind("dashboard");
