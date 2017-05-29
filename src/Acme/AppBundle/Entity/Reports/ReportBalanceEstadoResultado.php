<?php

namespace Rii\ReportBundle\Entity\Reports;

/**
 * Description of Report
 *
 * @author Juan Manuel Agüero <jaguero@flowcode.com.ar>
 */
class ReportBalanceEstadoResultado extends ReportBalance {

    protected function accountFilter($accountData){
        return ($accountData->isGanancia() || $accountData->isPerdida());
    }

}
