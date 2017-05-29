<?php

namespace Rii\ReportBundle\Entity\Reports;

use DateTime;

/**
 * Description of ReportSaldoAdmin
 *
 * @author Juan Manuel Agüero <jaguero@flowcode.com.ar>
 */
abstract class ReportSumasSaldos extends ReportBalance{

    abstract protected function getAllWithDebeHaber();
    abstract protected function preProcessData($dataRow);
    abstract protected function getMapedAccount($dataRow);

    /**
     * Gets report data.
     * @param string $dateFrom
     * @param string $dateTo
     * @return array reportData.
     */
    public function getData() {
        $accounts = $this->getAllWithDebeHaber();
        $rows = array();
        $sumas = array();
        $sumas["debe"] = 0;
        $sumas["haber"] = 0;
        $sumas["saldosDeudor"] = 0;
        $sumas["saldosAcreedor"] = 0;
        $sumas["resuldatosGanancias"] = 0;
        $sumas["resuldatosPerdidas"] = 0;
        $sumas["patrimoniales_Activo"] = 0;
        $sumas["patrimoniales_Pasivo"] = 0;
        foreach ($accounts as $dataRow) {
            $accountData = $this->getMapedAccount($dataRow);
            if (!array_key_exists($accountData->getNroCuenta(), $rows)) {
                $dataRow = $this->preProcessData($dataRow);
                $result = $this->calcDataByAccountType($accountData, $dataRow, $sumas);
                $rows[$accountData->getNroCuenta()] = $result["dataRow"];
                $sumas =  $result["sumas"];
            }
        }
        ksort($rows, SORT_STRING);
        return array("rows" => $rows, "sumas" => $sumas);
    }

    private function calcDataByAccountType($accountData, $dataRow, $sumas) {
        $sumUpAccounts = $accountData->getSumUpAccounts();
        $dataRow["_depth"] = 0;
        $dataRow["saldo"] = 0 + $dataRow["debe"] - $dataRow["haber"];
        $dataRow["accountClass"] = str_replace(".", "-", $accountData->getNroCuenta());
        $dataRow["_parents"] = str_replace(".", "-", implode(" ", $sumUpAccounts));
        $dataRow["nro_cuenta"] = $accountData->getNroCuenta();
        $dataRow["nombre"] = $accountData->getNombre();
        $dataRow["exclude"] = "normal";
        $exclude = false;
        if($this->willBeExclude($accountData)){
            $exclude = true;
        }
        if($exclude  || in_array($dataRow["nro_cuenta"], $this->getExcludeAccounts() )){
            $debeMHaberSumas = 0;
            $dataRow["exclude"] = "exclude";
        }else{
            $sumas["debe"] += $dataRow["debe"];
            $sumas["haber"] += $dataRow["haber"];
            $debeMHaberSumas = $dataRow["debe"] - $dataRow["haber"];
        }
        $dataRow["debe"] = $dataRow["debe"] + 0;
        $dataRow["haber"] = $dataRow["haber"] + 0;

        $dataRow["saldosDeudor"] = "-";
        $dataRow["saldosAcreedor"] = "-";
        $dataRow["resuldatosGanancias"] = "-";
        $dataRow["resuldatosPerdidas"] = "-";
        $dataRow["patrimoniales_Activo"] = "-";
        $dataRow["patrimoniales_Pasivo"] = "-";
        $debeMHaber = $dataRow["debe"] - $dataRow["haber"];

        if ($accountData->isActivo()) {
            $dataRow["saldosDeudor"] = $debeMHaber;
            $dataRow["patrimoniales_Activo"] = $debeMHaber;
            $sumas["saldosDeudor"] += $debeMHaberSumas;
            $sumas["patrimoniales_Activo"] += $debeMHaberSumas;
        }
        if ($accountData->isPasivo()) {
            $dataRow["saldosAcreedor"] = -$debeMHaber;
            $dataRow["patrimoniales_Pasivo"] = -$debeMHaber;
            $sumas["patrimoniales_Pasivo"] += -$debeMHaberSumas;
            $sumas["saldosAcreedor"] += -$debeMHaberSumas;
        }
        if ($accountData->isPerdida()) {
            $dataRow["saldosDeudor"] = $debeMHaber;
            $dataRow["resuldatosPerdidas"] = $debeMHaber;
            $sumas["saldosDeudor"] += $debeMHaberSumas;
            $sumas["resuldatosPerdidas"] += $debeMHaberSumas;
        }
        if ($accountData->isGanancia()) {
            $dataRow["saldosAcreedor"] = -$debeMHaber;
            $dataRow["resuldatosGanancias"] = -$debeMHaber;
            $sumas["resuldatosGanancias"] += -$debeMHaberSumas;
            $sumas["saldosAcreedor"] += -$debeMHaberSumas;
        }
        if ($accountData->isPatrimonioNeto()) {
            $dataRow["saldosAcreedor"] = -$debeMHaber;
            $dataRow["patrimoniales_Pasivo"] = -$debeMHaber;
            $sumas["patrimoniales_Pasivo"] += -$debeMHaberSumas;
            $sumas["saldosAcreedor"] += -$debeMHaberSumas;
        }
        return array('dataRow' => $dataRow, 'sumas' => $sumas);
    }
}
