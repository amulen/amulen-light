<?php

namespace Rii\ReportBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContableAsientoMov
 *
 * @ORM\Table(name="contable_asientos_mov")
 * @ORM\Entity(repositoryClass="Rii\ReportBundle\Entity\ContableAsientoMovRepository")
 */
class ContableAsientoMov
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
     *
     * @ORM\Column(name="inmobiliaria", type="string", length=10)
     */
    private $inmobiliaria;

    /**
     * @var integer
     *
     * @ORM\Column(name="sucursal", type="integer")
     */
    private $sucursal;

    /**
     * @var integer
     *
     * @ORM\Column(name="asiento", type="integer")
     * @ORM\OneToMany(targetEntity="ContableAsiento", mappedBy="id")
     */
    private $asiento;

    /**
     * @var integer
     *
     * @ORM\Column(name="documento", type="integer")
     */
    private $documento;

    /**
     * @var integer
     *
     * @ORM\Column(name="cuenta_contable", type="integer")
     */
    private $cuentaContable;

    /**
     * @var integer
     *
     * @ORM\Column(name="orden", type="integer")
     */
    private $orden;

    /**
     * @var string
     *
     * @ORM\Column(name="debe", type="decimal")
     */
    private $debe;

    /**
     * @var string
     *
     * @ORM\Column(name="haber", type="decimal")
     */
    private $haber;

    /**
     * @var integer
     *
     * @ORM\Column(name="moneda_original", type="integer")
     */
    private $monedaOriginal;

    /**
     * @var string
     *
     * @ORM\Column(name="debe_original", type="decimal")
     */
    private $debeOriginal;

    /**
     * @var string
     *
     * @ORM\Column(name="haber_original", type="decimal")
     */
    private $haberOriginal;

    /**
     * @var string
     *
     * @ORM\Column(name="es_actualizable", type="string", length=1)
     */
    private $esActualizable;

    /**
     * @var string
     *
     * @ORM\Column(name="new_record", type="string", length=1)
     */
    private $newRecord;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fec_ult_act", type="datetime")
     */
    private $fecUltAct;

    /**
     * @var string
     *
     * @ORM\Column(name="borrado", type="string", length=1)
     */
    private $borrado;

    /**
     * @var string
     *
     * @ORM\Column(name="dirty", type="string", length=1)
     */
    private $dirty;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set inmobiliaria
     *
     * @param string $inmobiliaria
     * @return ContableAsientoMov
     */
    public function setInmobiliaria($inmobiliaria)
    {
        $this->inmobiliaria = $inmobiliaria;

        return $this;
    }

    /**
     * Get inmobiliaria
     *
     * @return string 
     */
    public function getInmobiliaria()
    {
        return $this->inmobiliaria;
    }

    /**
     * Set sucursal
     *
     * @param integer $sucursal
     * @return ContableAsientoMov
     */
    public function setSucursal($sucursal)
    {
        $this->sucursal = $sucursal;

        return $this;
    }

    /**
     * Get sucursal
     *
     * @return integer 
     */
    public function getSucursal()
    {
        return $this->sucursal;
    }

    /**
     * Set asiento
     *
     * @param integer $asiento
     * @return ContableAsientoMov
     */
    public function setAsiento($asiento)
    {
        $this->asiento = $asiento;

        return $this;
    }

    /**
     * Get asiento
     *
     * @return integer 
     */
    public function getAsiento()
    {
        return $this->asiento;
    }

    /**
     * Set documento
     *
     * @param integer $documento
     * @return ContableAsientoMov
     */
    public function setDocumento($documento)
    {
        $this->documento = $documento;

        return $this;
    }

    /**
     * Get documento
     *
     * @return integer 
     */
    public function getDocumento()
    {
        return $this->documento;
    }

    /**
     * Set cuentaContable
     *
     * @param integer $cuentaContable
     * @return ContableAsientoMov
     */
    public function setCuentaContable($cuentaContable)
    {
        $this->cuentaContable = $cuentaContable;

        return $this;
    }

    /**
     * Get cuentaContable
     *
     * @return integer 
     */
    public function getCuentaContable()
    {
        return $this->cuentaContable;
    }

    /**
     * Set orden
     *
     * @param integer $orden
     * @return ContableAsientoMov
     */
    public function setOrden($orden)
    {
        $this->orden = $orden;

        return $this;
    }

    /**
     * Get orden
     *
     * @return integer 
     */
    public function getOrden()
    {
        return $this->orden;
    }

    /**
     * Set debe
     *
     * @param string $debe
     * @return ContableAsientoMov
     */
    public function setDebe($debe)
    {
        $this->debe = $debe;

        return $this;
    }

    /**
     * Get debe
     *
     * @return string 
     */
    public function getDebe()
    {
        return $this->debe;
    }

    /**
     * Set haber
     *
     * @param string $haber
     * @return ContableAsientoMov
     */
    public function setHaber($haber)
    {
        $this->haber = $haber;

        return $this;
    }

    /**
     * Get haber
     *
     * @return string 
     */
    public function getHaber()
    {
        return $this->haber;
    }

    /**
     * Set monedaOriginal
     *
     * @param integer $monedaOriginal
     * @return ContableAsientoMov
     */
    public function setMonedaOriginal($monedaOriginal)
    {
        $this->monedaOriginal = $monedaOriginal;

        return $this;
    }

    /**
     * Get monedaOriginal
     *
     * @return integer 
     */
    public function getMonedaOriginal()
    {
        return $this->monedaOriginal;
    }

    /**
     * Set debeOriginal
     *
     * @param string $debeOriginal
     * @return ContableAsientoMov
     */
    public function setDebeOriginal($debeOriginal)
    {
        $this->debeOriginal = $debeOriginal;

        return $this;
    }

    /**
     * Get debeOriginal
     *
     * @return string 
     */
    public function getDebeOriginal()
    {
        return $this->debeOriginal;
    }

    /**
     * Set haberOriginal
     *
     * @param string $haberOriginal
     * @return ContableAsientoMov
     */
    public function setHaberOriginal($haberOriginal)
    {
        $this->haberOriginal = $haberOriginal;

        return $this;
    }

    /**
     * Get haberOriginal
     *
     * @return string 
     */
    public function getHaberOriginal()
    {
        return $this->haberOriginal;
    }

    /**
     * Set esActualizable
     *
     * @param string $esActualizable
     * @return ContableAsientoMov
     */
    public function setEsActualizable($esActualizable)
    {
        $this->esActualizable = $esActualizable;

        return $this;
    }

    /**
     * Get esActualizable
     *
     * @return string 
     */
    public function getEsActualizable()
    {
        return $this->esActualizable;
    }

    /**
     * Set newRecord
     *
     * @param string $newRecord
     * @return ContableAsientoMov
     */
    public function setNewRecord($newRecord)
    {
        $this->newRecord = $newRecord;

        return $this;
    }

    /**
     * Get newRecord
     *
     * @return string 
     */
    public function getNewRecord()
    {
        return $this->newRecord;
    }

    /**
     * Set fecUltAct
     *
     * @param \DateTime $fecUltAct
     * @return ContableAsientoMov
     */
    public function setFecUltAct($fecUltAct)
    {
        $this->fecUltAct = $fecUltAct;

        return $this;
    }

    /**
     * Get fecUltAct
     *
     * @return \DateTime 
     */
    public function getFecUltAct()
    {
        return $this->fecUltAct;
    }

    /**
     * Set borrado
     *
     * @param string $borrado
     * @return ContableAsientoMov
     */
    public function setBorrado($borrado)
    {
        $this->borrado = $borrado;

        return $this;
    }

    /**
     * Get borrado
     *
     * @return string 
     */
    public function getBorrado()
    {
        return $this->borrado;
    }

    /**
     * Set dirty
     *
     * @param string $dirty
     * @return ContableAsientoMov
     */
    public function setDirty($dirty)
    {
        $this->dirty = $dirty;

        return $this;
    }

    /**
     * Get dirty
     *
     * @return string 
     */
    public function getDirty()
    {
        return $this->dirty;
    }
}
