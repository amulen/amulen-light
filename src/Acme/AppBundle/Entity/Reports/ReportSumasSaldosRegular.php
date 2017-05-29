<?php

namespace Rii\ReportBundle\Entity\Reports;
use Rii\ReportBundle\Repository\ContableCuentaContableRepository;
use DateTime;

/**
 * Description of ReportSaldoAdmin
 *
 * @author Juan Manuel Agüero <jaguero@flowcode.com.ar>
 */
class ReportSumasSaldosRegular extends ReportSumasSaldos{

    protected function getAllWithDebeHaber(){
        return $this->app['ContableAsientoMovRepository']
                    ->getAllWithDebeHaber($this->getDateFrom(), $this->getDateTo(), $this->getInmobiliaria(), $this->getSucursal());
    }

    protected function preProcessData($dataRow){
        return $dataRow;
    }

    protected function getMapedAccount($dataRow) {
        return ContableCuentaContableRepository::mapToContableCuentaContable($dataRow);
    }

}
