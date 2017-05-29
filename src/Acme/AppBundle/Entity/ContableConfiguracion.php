<?php

namespace Rii\ReportBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContableConfiguracion
 *
 * @ORM\Table(name="contable_configuracion")
 * @ORM\Entity(repositoryClass="Rii\ReportBundle\Entity\ContableConfiguracionRepository")
 */
class ContableConfiguracion
{
    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(name="config")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="inmobiliaria")
     */
    private $inmobiliaria;

    /**
     * @var integer
     * @ORM\Column(name="sucursal")
     */
    private $sucursal;

    /**
     * @var integer
     * @ORM\Column(name="moneda_patron")
     */
    private $monedaPatron;

    /**
     * @var integer
     * @ORM\Column(name="moneda_contabilidad")
     */
    private $monedaContabilidad;

    /**
     * @var integer
     * @ORM\Column(name="filtro_meses")
     */
    private $filtroMeses;

    /**
     * @var integer
     * @ORM\Column(name="filtro_meses_adm")
     */
    private $filtroMesesAdm;

    /**
     * @var integer
     * @ORM\Column(name="filtro_meses_contable")
     */
    private $filtroMesesContable;

    /**
     * @var integer
     * @ORM\Column(name="cantidad_decimales")
     */
    private $cantidadDecimales;

    /**
     * @var integer
     * @ORM\Column(name="moneda_defecto")
     */
    private $monedaDefecto;

    /**
     * @var string
     * @ORM\Column(name="new_record")
     */
    private $newRecord;

    /**
     * @var datetime
     * @ORM\Column(name="fec_ult_act")
     */
    private $fecUltAct;

    /**
     * @var string
     * @ORM\Column(name="borrado")
     */
    private $borrado;

    /**
     * @var string
     * @ORM\Column(name="dirty")
     */
    private $dirty;


    /**
     * Set id
     *
     * @param string $id
     * @return ContableConfiguracion
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set inmobiliaria
     *
     * @param string $inmobiliaria
     * @return ContableConfiguracion
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
     * @param string $sucursal
     * @return ContableConfiguracion
     */
    public function setSucursal($sucursal)
    {
        $this->sucursal = $sucursal;

        return $this;
    }

    /**
     * Get sucursal
     *
     * @return string 
     */
    public function getSucursal()
    {
        return $this->sucursal;
    }

    /**
     * Set monedaPatron
     *
     * @param string $monedaPatron
     * @return ContableConfiguracion
     */
    public function setMonedaPatron($monedaPatron)
    {
        $this->monedaPatron = $monedaPatron;

        return $this;
    }

    /**
     * Get monedaPatron
     *
     * @return string 
     */
    public function getMonedaPatron()
    {
        return $this->monedaPatron;
    }

    /**
     * Set monedaContabilidad
     *
     * @param string $monedaContabilidad
     * @return ContableConfiguracion
     */
    public function setMonedaContabilidad($monedaContabilidad)
    {
        $this->monedaContabilidad = $monedaContabilidad;

        return $this;
    }

    /**
     * Get monedaContabilidad
     *
     * @return string 
     */
    public function getMonedaContabilidad()
    {
        return $this->monedaContabilidad;
    }

    /**
     * Set filtroMeses
     *
     * @param string $filtroMeses
     * @return ContableConfiguracion
     */
    public function setFiltroMeses($filtroMeses)
    {
        $this->filtroMeses = $filtroMeses;

        return $this;
    }

    /**
     * Get filtroMeses
     *
     * @return string 
     */
    public function getFiltroMeses()
    {
        return $this->filtroMeses;
    }

    /**
     * Set filtroMesesAdm
     *
     * @param string $filtroMesesAdm
     * @return ContableConfiguracion
     */
    public function setFiltroMesesAdm($filtroMesesAdm)
    {
        $this->filtroMesesAdm = $filtroMesesAdm;

        return $this;
    }

    /**
     * Get filtroMesesAdm
     *
     * @return string 
     */
    public function getFiltroMesesAdm()
    {
        return $this->filtroMesesAdm;
    }

    /**
     * Set filtroMesesContable
     *
     * @param string $filtroMesesContable
     * @return ContableConfiguracion
     */
    public function setFiltroMesesContable($filtroMesesContable)
    {
        $this->filtroMesesContable = $filtroMesesContable;

        return $this;
    }

    /**
     * Get filtroMesesContable
     *
     * @return string 
     */
    public function getFiltroMesesContable()
    {
        return $this->filtroMesesContable;
    }

    /**
     * Set cantidadDecimales
     *
     * @param string $cantidadDecimales
     * @return ContableConfiguracion
     */
    public function setCantidadDecimales($cantidadDecimales)
    {
        $this->cantidadDecimales = $cantidadDecimales;

        return $this;
    }

    /**
     * Get cantidadDecimales
     *
     * @return string 
     */
    public function getCantidadDecimales()
    {
        return $this->cantidadDecimales;
    }

    /**
     * Set monedaDefecto
     *
     * @param string $monedaDefecto
     * @return ContableConfiguracion
     */
    public function setMonedaDefecto($monedaDefecto)
    {
        $this->monedaDefecto = $monedaDefecto;

        return $this;
    }

    /**
     * Get monedaDefecto
     *
     * @return string 
     */
    public function getMonedaDefecto()
    {
        return $this->monedaDefecto;
    }

    /**
     * Set newRecord
     *
     * @param string $newRecord
     * @return ContableConfiguracion
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
     * @param string $fecUltAct
     * @return ContableConfiguracion
     */
    public function setFecUltAct($fecUltAct)
    {
        $this->fecUltAct = $fecUltAct;

        return $this;
    }

    /**
     * Get fecUltAct
     *
     * @return string 
     */
    public function getFecUltAct()
    {
        return $this->fecUltAct;
    }

    /**
     * Set borrado
     *
     * @param string $borrado
     * @return ContableConfiguracion
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
     * @return ContableConfiguracion
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
