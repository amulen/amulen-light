<?php

namespace Rii\ReportBundle\Repository;

use Rii\PropertyBundle\Repository\EntityRepository;
use Rii\ReportBundle\Entity\ContableTiposMonedas;
/**
 * ContableTiposMonedasRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ContableTiposMonedasRepository extends EntityRepository
{
    function __construct($app) {
        parent::__construct($app);
        $this->tableName = "contable_tipos_monedas";
        $this->tableId = "tipo_moneda";
    }

	public function getAllNotEqualTo($monedaPatronId){
		$query = "SELECT * FROM ".$this->tableName." WHERE ".$this->tableId." != :moneda ";
        $stmt = $this->app['db']->prepare($query);
        $stmt->bindValue("moneda", $monedaPatronId);
        $stmt->execute();
        return $stmt->fetchAll();
	}
	
	static function mapToContableTiposMonedas($dbData) {
		$change = new ContableTiposMonedas();
 		$change->setId($dbData["tipo_moneda"]);
 		$change->setInmobiliaria($dbData["inmobiliaria"]);
 		$change->setSucursal($dbData["sucursal"]);
 		$change->setNombreMoneda($dbData["nombre_moneda"]);
 		$change->setSimboloMoneda($dbData["simbolo_moneda"]);
 		$change->setNewRecord($dbData["new_record"]);
 		$change->setFecUltAct($dbData["fec_ult_act"]);
 		$change->setBorrado($dbData["borrado"]);
 		$change->setDirty($dbData["dirty"]);
 		return $change;
 	}

 	static function mapToArrayOfContableTiposMonedas($array){
 		$arrayOfContableTiposMonedas = array();
 		foreach ($array as $element) {
 			array_push($arrayOfContableTiposMonedas, ContableTiposMonedasRepository::mapToContableTiposMonedas($element)) ; 
 		}
 		return $arrayOfContableTiposMonedas;
 	}
}
