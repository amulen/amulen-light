<?php

namespace Rii\ReportBundle\Entity\Reports;

use DateTime;

/**
 * Description of Report
 *
 * @author Juan Manuel Agüero <jaguero@flowcode.com.ar>
 */
abstract class Report {

    private $dateFrom;
    private $dateTo;
    private $rawData;
    private $sumas;
    private $inmobiliaria;
    private $sucursal;

    function __construct($app, $inmobiliaria, $sucursal) {
        
        $this->dateFrom = new DateTime("-1 year");
        $this->dateTo = new DateTime("now");
        $this->inmobiliaria = $inmobiliaria;
        $this->sucursal = $sucursal;
        $this->app = $app;
    }

    abstract public function getData();

    public function getRawData() {
        return $this->rawData;
    }

    public function setSumas($sumas) {
        $this->sumas = $sumas;
    }
    
    public function getSumas() {
        return $this->sumas;
    }

    public function setRawData($rawData) {
        $this->rawData = $rawData;
    }


    public function getDateFrom() {
        return $this->dateFrom;
    }

    public function getDateTo() {
        return $this->dateTo;
    }

    public function setDateFrom($dateFrom) {
        $this->dateFrom = $dateFrom;
    }

    public function setDateTo($dateTo) {
        $this->dateTo = $dateTo;
    }
    
    public function getInmobiliaria(){
        return $this->inmobiliaria;
    }
    
    public function getSucursal(){
        return $this->sucursal ;
    }
    public function setInmobiliaria($inmobiliaria){
        $this->inmobiliaria = $inmobiliaria;
        return $this;
    }
    public function setSucursal($sucursal){
        $this->sucursal = $sucursal;
        return $this;
    }
}
