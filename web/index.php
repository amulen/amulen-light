<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Silex\Application;

$app = new Application();

/* app setup */
$app["path_view"] = __DIR__ . '/../views';
$app["path_config"] = __DIR__ . '/../app/config/config.yml';
$app["path_log"] = __DIR__ . '/../app/logs';

/* includes */
require_once __DIR__ . "/../app/config/providers.php";
require_once __DIR__ . "/../app/config/routing.php";
require_once __DIR__ . "/../app/config/services.php";


/* app mode */
$app["debug"] = $app["config"]["app"]["mode"] == "dev" ? true : false;


/* middlewares */
require_once __DIR__ . "/../app/middleware/security.php";



$app->run();
