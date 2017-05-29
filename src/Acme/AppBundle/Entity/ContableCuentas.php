<?php

namespace Rii\ReportBundle\Entity;

abstract class ContableCuentas
{
   abstract public function getNroCuenta();
   public function getSumUpAccounts() {
        $keys = explode('.', $this->getNroCuenta());
        if (count($keys) != 4) {
            throw new \RuntimeException('Formato incorrecto:' . $this->getNroCuenta());
        }
        $z = '000';
        return array(
            implode('.', array($keys[0], $keys[1], $keys[2], $z)),
            implode('.', array($keys[0], $keys[1], $z, $z)),
            implode('.', array($keys[0], $z, $z, $z))
        );
    }
                
    public function getClassName() {
        $keys = $this->explodeNroCuenta();
        $classId = $keys[2];
        $arrayClassName = array("100" => "Disponible",
                                "200" => "Deudores",
                                "300" => "Inventarios",
                                "400" => "Complementarios",
                                "100" => "Disponible",
                                "200" => "Bienes",
                                "300" => "Comodato");
        if (!array_key_exists($classId, $arrayClassName)) {
            return $classId;
        }
        return $arrayClassName[$classId];
    }

    public function getGroupName() {
        $keys = $this->explodeNroCuenta();
        $groupId = $keys[1];
        $arrayGroupsName = array(100 => "Activo Corriente",
                                 200 => "No Corriente");
        if (!array_key_exists($groupId, $arrayGroupsName)) {
            return $groupId;
        }
        return $arrayGroupsName[$groupId];
    }

    private function explodeNroCuenta(){
        $keys = explode('.', $this->getNroCuenta());
        if (count($keys) != 4) {
            throw new \RuntimeException('Formato incorrecto:' . $account);
        }
        return $keys;
    }

    public function getGenreName() {
        $keys = $this->explodeNroCuenta();
        $genreId = $keys[0];
        $arrayGenreName = array(100 => "Activo",
                                200 => "Pasivo",
                                400 => "Ganancia",
                                500 => "Perdida");
        if (!array_key_exists($genreId, $arrayGenreName)) {
            return $genreId;
        }
        return $arrayGenreName[$genreId];
    }
    
    public function isActivo() {
        return ($this->explodeNroCuenta()[0] == 100);
    }

    public function isPasivo() {
        return ($this->explodeNroCuenta()[0] == 200);
    }
    
    public function isPatrimonioNeto() {
        return ($this->explodeNroCuenta()[0] == 300);
    }
    public function isGanancia() {
        return ($this->explodeNroCuenta()[0] == 400);
    }

    public function isPerdida() {
        return ($this->explodeNroCuenta()[0] == 500);
    }

}
