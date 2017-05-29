<?php

use Rii\PropertyBundle\Repository\BarrioRepository;
use Rii\PropertyBundle\Repository\CampoRepository;
use Rii\PropertyBundle\Repository\EdificioRepository;
use Rii\PropertyBundle\Repository\MarcaRepository;
use Rii\PropertyBundle\Repository\PropertyRepository;
use Rii\ReportBundle\Repository\ContableAsientoAdminMovRepository;
use Rii\ReportBundle\Repository\ContableAsientoMovRepository;
use Rii\ReportBundle\Repository\ContableConfiguracionRepository;
use Rii\ReportBundle\Repository\ContableCuentaContableRepository;
use Rii\ReportBundle\Repository\ContableCuentasAdministrativasRepository;
use Rii\ReportBundle\Repository\ContableTiposMonedasRepository;

$app['EdificioRepository'] = function () use($app) {
    return new EdificioRepository($app);
};

$app['PropertyRepository'] = function () use($app) {
    return new PropertyRepository($app);
};

$app['ContableAsientoMovRepository'] = function () use($app) {
    return new ContableAsientoMovRepository($app);
};
$app['ContableCuentaContableRepository'] = function () use($app) {
    return new ContableCuentaContableRepository($app);
};

$app['ContableAsientoAdminMovRepository'] = function () use($app) {
    return new ContableAsientoAdminMovRepository($app);
};
$app['ContableCuentasAdministrativasRepository'] = function () use($app) {
    return new ContableCuentasAdministrativasRepository($app);
};

$app['MarcaRepository'] = function () use($app) {
    return new MarcaRepository($app);
};

$app['BarrioRepository'] = function () use($app) {
    return new BarrioRepository($app);
};

$app['CampoRepository'] = function () use($app) {
    return new CampoRepository($app);
};


$app['ContableConfiguracionRepository'] = function () use($app) {
    return new ContableConfiguracionRepository($app);
};

$app['ContableTiposMonedasRepository'] = function () use($app) {
    return new ContableTiposMonedasRepository($app);
};

