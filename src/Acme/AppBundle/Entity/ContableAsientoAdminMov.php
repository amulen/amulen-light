<?php

namespace Rii\ReportBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContableAsientoAdminMov
 *
 * @ORM\Table(name="contable_administrativas_mov")
 * @ORM\Entity(repositoryClass="Rii\ReportBundle\Entity\ContableAsientoAdminMovRepository")
 */
class ContableAsientoAdminMov
{

    /**
     * @var integer
     *
     * @ORM\Column(name="movimiento", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
    * @var string
    * @ORM\column(name="inmobiliaria", type="string")
    */
    private $inmobiliaria;

    /**
    * @var integer
    * @ORM\column(name="sucursal", type="integer")
    */
    private $sucursal;

    /**
    * @var integer
    * @ORM\column(name="cuenta", type="integer")
    */
    private $cuenta;

    /**
    * @var integer
    * @ORM\column(name="tipo_moneda", type="integer")
    */
    private $tipoMoneda;

    /**
    * @var datetime
    * @ORM\column(name="fecha", type="datetime")
    */
    private $fecha;

    /**
    * @var datetime
    * @ORM\column(name="fecha_hora", type="datetime")
    */
    private $fechaHora;

    /**
    * @var string
    * @ORM\column(name="descripcion", type="string")
    */
    private $descripcion;

    /**
    * @var string
    * @ORM\column(name="anulado", type="string")
    */
    private $anulado;

    /**
    * @var string
    * @ORM\column(name="es_actualizable", type="string")
    */
    private $esActualizable;

    /**
    * @var integer
    * @ORM\column(name="documento", type="integer")
    */
    private $documento;

    /**
    * @var string
    * @ORM\column(name="propiedad", type="string")
    */
    private $propiedad;

    /**
    * @var integer
    * @ORM\column(name="cuenta_corriente", type="integer")
    */
    private $cuentaCorriente;

    /**
    * @var integer
    * @ORM\column(name="tipo_persona", type="integer")
    */
    private $tipoPersona;

    /**
    * @var decimal
    * @ORM\column(name="debe", type="decimal")
    */
    private $debe;

    /**
    * @var decimal
    * @ORM\column(name="haber", type="decimal")
    */
    private $haber;

    /**
    * @var integer
    * @ORM\column(name="campo_multigrilla", type="integer")
    */
    private $campoMultigrilla;

    /**
    * @var integer
    * @ORM\column(name="moneda_original", type="integer")
    */
    private $monedaOriginal;

    /**
    * @var decimal  
    * @ORM\column(name="debe_original", type="decimal  ")
    */
    private $debeOriginal;

    /**
    * @var decimal  
    * @ORM\column(name="haber_original", type="decimal  ")
    */
    private $haberOriginal;

    /**
    * @var decimal
    * @ORM\column(name="cotizacion_moneda", type="decimal")
    */
    private $cotizacionMoneda;

    /**
    * @var decimal
    * @ORM\column(name="concepto_item_grilla", type="decimal")
    */
    private $conceptoItemGrilla;

    /**
    * @var decimal
    * @ORM\column(name="recordno_multigrilla", type="decimal")
    */
    private $recordnoMultigrilla;

    /**
    * @var string
    * @ORM\column(name="new_record", type="string")
    */
    private $newRecord;

    /**
    * @var datetime
    * @ORM\column(name="fec_ult_act", type="datetime")
    */
    private $fecUltAct;

    /**
    * @var string
    * @ORM\column(name="borrado", type="string")
    */
    private $borrado;

    /**
    * @var string
    * @ORM\column(name="dirty", type="string")
    */
    private $dirty;

}
