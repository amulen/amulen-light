<?php

namespace Rii\ReportBundle\Entity\Reports;

use Rii\ReportBundle\Repository\ContableCuentaContableRepository;

use DateTime;

/**
 * Description of Report
 *
 * @author Juan Manuel Agüero <jaguero@flowcode.com.ar>
 */
class ReportBalance extends  Report{

     private $excludeAccounts;

    function __construct($app, $inmobiliaria, $sucursal, $excludeAccounts) {
        parent::__construct($app, $inmobiliaria, $sucursal);
        $this->excludeAccounts = explode(',', $excludeAccounts);
    }
    
    protected function accountFilter($accountData){
        return true;
    }

    /**
     * Gets report data.
     * @param string $dateFrom
     * @param string $dateTo
     * @return array reportData.
     */

    public function getData() {
        $accounts = $this   ->app['ContableAsientoMovRepository']
                            ->getAllWithDebeHaber($this->getDateFrom(), $this->getDateTo(), $this->getInmobiliaria(), $this->getSucursal());
        $rows = array();
        $totals = array();
        $totals["nro_cuenta"] = null;
        $totals["accountClass"] = "";
        $totals["_parents"] = "";
        $totals["nombre"] = 'Totales';
        $totals["debe"] = 0;
        $totals["haber"] = 0;
        $totals["saldo"] = 0;
        foreach ($accounts as $dataRow) {
            $accountData = ContableCuentaContableRepository::mapToContableCuentaContable($dataRow);
            if ($this->accountFilter($accountData)  &&
                !array_key_exists($accountData->getNroCuenta(), $rows)) {
                $sumUpAccounts = $accountData->getSumUpAccounts();
                $dataRow["_depth"] = 0;
                $dataRow["accountClass"] = str_replace(".", "-", $accountData->getNroCuenta());
                $dataRow["_parents"] = str_replace(".", "-", implode(" ", $sumUpAccounts));                
                $dataRow["nro_cuenta"] = $accountData->getNroCuenta();
                $dataRow["nombre"] = $accountData->getNombre();
                $relation = ($accountData->isPasivo() || $accountData->isGanancia() || $accountData->isPatrimonioNeto())? -1 : 1;
                $dataRow["debe"] = $relation * $dataRow["debe"];
                $dataRow["haber"] = $relation * $dataRow["haber"];
                $dataRow["saldo"] = 0 + $dataRow["debe"] - $dataRow["haber"];
                $dataRow["exclude"] = "normal";
                if($this->isExlude($accountData)){
                    $debe = 0;
                    $haber = 0;
                    $saldo = 0;
                    $dataRow["exclude"] = "exclude";
                }else{
                    $debe = $dataRow["debe"];
                    $haber = $dataRow["haber"];
                    $saldo =  0 + $debe - $haber;
                }
                if($this->willBeExclude($accountData)){
                    $dataRow["exclude"] = "exclude";
                }
                $rows[$accountData->getNroCuenta()] = $dataRow;
                $totals["debe"] += $dataRow["debe"];
                $totals["haber"] += $dataRow["haber"];
                $totals["saldo"] += $dataRow["saldo"];


                $depth = 1;
                foreach ($sumUpAccounts as $account) {
                    $parentAccount = ContableCuentaContableRepository::mapToContableCuentaContable($this  ->app['ContableCuentaContableRepository']
                                            ->getAccountByAccountNumber($account));
                    
                    $parentAccount->setNroCuenta($account);
                    
                    if (!array_key_exists($account, $rows)) {
                        $rows[$account] = array();
                        $rows[$account]["nro_cuenta"] = $account;
                        $rows[$account]["accountClass"] = str_replace(".", "-", $account);
                        $rows[$account]["nombre"] = ($parentAccount)? $parentAccount->getNombre(): '-';
                        $rows[$account]["debe"] = 0 + $debe;
                        $rows[$account]["haber"] = 0 + $haber;
                        $rows[$account]["_depth"] = $depth;
                        $rows[$account]["_parents"] = str_replace(".", "-", implode(" ", array_slice($sumUpAccounts, $depth, 3)));
                        $rows[$account]["saldo"] = $saldo;
                    } else {
                        $rows[$account]["debe"]+= $debe;
                        $rows[$account]["haber"]+= $haber;
                        $rows[$account]["saldo"] += $saldo;
                    }
                    $rows[$account]["exclude"] = "normal";
                    if($this->willBeExclude($parentAccount)){
                        $rows[$account]["exclude"] = "exclude";
                    }
                    if($this->isExlude($parentAccount)){
                        $rows[$account]["exclude"] = "exclude";
                        $debe = 0;
                        $haber = 0;
                        $saldo = 0;
                    }
                    $depth++;
                }
            }
        }
        ksort($rows, SORT_STRING);
        return $rows;
    }


    public function setExcludeAccounts($excludeAccounts) {
        $this->excludeAccounts = $excludeAccounts;
    }
    
    public function getExcludeAccounts() {
        return $this->excludeAccounts;
    }
    public function isExlude($account) {
        return in_array($account->getNroCuenta(), $this->getExcludeAccounts());
    }
    
    public function willBeExclude($account){
        $sumUpAccounts = $account->getSumUpAccounts();
        foreach ($sumUpAccounts as $parentAccounts) {
            if(in_array($parentAccounts, $this->getExcludeAccounts() )){
                return true;
                break;
            }    
        }
        return false;
    }
}