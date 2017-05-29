<?php

namespace Rii\ReportBundle\Entity\Reports;

/**
 * Description of Report
 *
 * @author Juan Manuel Agüero <jaguero@flowcode.com.ar>
 */
class ReportBalancePatrimonial extends ReportBalance {

    protected function accountFilter($accountData){
        return ($accountData->isPasivo() || $accountData->isActivo() || $accountData->isPatrimonioNeto());
    }

}
