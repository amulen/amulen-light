<?php

use DerAlex\Silex\YamlConfigServiceProvider;
use Entea\Twig\Extension\AssetExtension;
use Jaza\Silex\ExcelServiceProvider;
use Silex\Provider\DoctrineServiceProvider;
use Silex\Provider\MonologServiceProvider;
use Silex\Provider\SessionServiceProvider;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\UrlGeneratorServiceProvider;

$app->register(new YamlConfigServiceProvider($app["path_config"]));

$app->register(new SessionServiceProvider());

$app->register(new MonologServiceProvider(), array(
    'monolog.name' => "amulen_light",
    'monolog.level' => $app["config"]["app"]["mode"] == "dev" ? "DEBUG" : "ERROR",
    'monolog.logfile' => $app["path_log"] . "/" . $app["config"]["app"]["mode"] . ".log"
));

$app->register(new UrlGeneratorServiceProvider());
$app->register(new TwigServiceProvider(), array(
    'twig.path' => $app["path_view"],
));

$twig = $app['twig'];
$twig->addExtension(new AssetExtension($app));


$app->register(new DoctrineServiceProvider(), array(
    'db.options' => array(
        'driver' => $app["config"]["database"]["driver"],
        'host' => $app["config"]["database"]["host"],
        'dbname' => $app["config"]["database"]["dbname"],
        'user' => $app["config"]["database"]["user"],
        'password' => $app["config"]["database"]["password"],
    ),
));

$app->register(new ExcelServiceProvider());
