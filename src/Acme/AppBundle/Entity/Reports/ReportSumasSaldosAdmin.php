<?php

namespace Rii\ReportBundle\Entity\Reports;
use Rii\ReportBundle\Repository\ContableCuentasAdministrativasRepository;

use DateTime;

/**
 * Description of ReportSaldoAdmin
 *
 * @author Juan Manuel Agüero <jaguero@flowcode.com.ar>
 */
class ReportSumasSaldosAdmin extends ReportSumasSaldos{
    
    private $changes;
    private $realChanges;
    private $changesOptions;
    private $selectedChange;

    public function setChanges($changes){
        $this->changes = $changes;
    }
    public function getChanges(){
        return $this->changes;
    }

    public function setRealChanges($realChanges){
        $this->realChanges = $realChanges;
    }
    public function getRealChanges(){
        return $this->realChanges;
    }
    public function setChangesOptions($changesOptions){
        $this->changesOptions = $changesOptions;
    }
    public function getChangesOptions(){
        return $this->changesOptions;
    }
    public function setSelectedChange($selectedChange){
        $this->selectedChange = $selectedChange;
    }
    public function getSelectedChange(){
        return $this->selectedChange;
    }
    protected function getAllWithDebeHaber(){
        return $this->app['ContableAsientoAdminMovRepository']
                    ->getAllWithDebeHaberOriginal($this->getDateFrom(), $this->getDateTo(), $this->getInmobiliaria(), $this->getSucursal());
    }
    
    private function getRealChange($changeId){        
        return $this->getRealChanges()[$changeId]->getChange();
    }

    protected function preProcessData($dataRow){        
        $change = $this->getRealChange($dataRow["moneda_original"]);
        $dataRow["debe"] = $change * $dataRow["debe"];
        $dataRow["haber"] = $change * $dataRow["haber"];
        return $dataRow;
    }

    protected function getMapedAccount($dataRow) {
        return ContableCuentasAdministrativasRepository::mapToContableCuentasAdministrativas($dataRow);        
    }
}
