<?php

namespace Rii\ReportBundle\Repository;

use Rii\PropertyBundle\Repository\EntityRepository;
use Rii\ReportBundle\Entity\ContableCuentaContable;

/**
 * ContableCuentaContableRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ContableCuentaContableRepository extends EntityRepository {

    function __construct($app) {
        parent::__construct($app);
        $this->tableName = "contable_cuentas_contables";
        $this->tableId = "nro_cuenta";
    }


    function getAccountByAccountNumber($nroCuenta) {
        return $this->findById($nroCuenta);
    }

    static function mapToContableCuentaContable($dbData) {
        $cuenta = new ContableCuentaContable();
        $cuenta->setId($dbData["cuenta"]);
        $cuenta->setInmobiliaria($dbData["inmobiliaria"]);
        $cuenta->setSucursal($dbData["sucursal"]);
        $cuenta->setNroCuenta($dbData["nro_cuenta"]);
        $cuenta->setNombre($dbData["nombre"]);
        $cuenta->setTipoCuenta($dbData["tipo_cuenta"]);
        $cuenta->setEsCuentaConversiones($dbData["es_cuenta_conversiones"]);
        $cuenta->setNewRecord($dbData["new_record"]);
        $cuenta->setFecUltAct($dbData["fec_ult_act"]);
        $cuenta->setBorrado($dbData["borrado"]);
        $cuenta->setDirty($dbData["dirty"]);
        return $cuenta;
    }

}
