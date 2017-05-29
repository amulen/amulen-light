<?php

namespace Rii\ReportBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\DependencyInjection\ContainerBuilder;
/**
 * ContableCuentaContable
 *
 * @ORM\Table(name="contable_cuentas_contables")
 * @ORM\Entity(repositoryClass="Rii\ReportBundle\Entity\ContableCuentaContableRepository")
 */
class ContableCuentaContable  extends ContableCuentas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cuenta", type="integer")
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
     * @var string
     *
     * @ORM\Column(name="nro_cuenta", type="string", length=50)
     */
    private $nroCuenta;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=200)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo_cuenta", type="integer")
     */
    private $tipoCuenta;

    /**
     * @var string
     *
     * @ORM\Column(name="es_cuenta_conversiones", type="string", length=1)
     */
    private $esCuentaConversiones;

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
     * Set id
     *
     * @param string $id
     * @return ContableCuentaContable
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
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
     * @return ContableCuentaContable
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
     * @return ContableCuentaContable
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
     * Set nroCuenta
     *
     * @param string $nroCuenta
     * @return ContableCuentaContable
     */
    public function setNroCuenta($nroCuenta)
    {
        $this->nroCuenta = $nroCuenta;

        return $this;
    }

    /**
     * Get nroCuenta
     *
     * @return string 
     */
    public function getNroCuenta()
    {
        return $this->nroCuenta;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return ContableCuentaContable
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set tipoCuenta
     *
     * @param integer $tipoCuenta
     * @return ContableCuentaContable
     */
    public function setTipoCuenta($tipoCuenta)
    {
        $this->tipoCuenta = $tipoCuenta;

        return $this;
    }

    /**
     * Get tipoCuenta
     *
     * @return integer 
     */
    public function getTipoCuenta()
    {
        return $this->tipoCuenta;
    }

    /**
     * Set esCuentaConversiones
     *
     * @param string $esCuentaConversiones
     * @return ContableCuentaContable
     */
    public function setEsCuentaConversiones($esCuentaConversiones)
    {
        $this->esCuentaConversiones = $esCuentaConversiones;

        return $this;
    }

    /**
     * Get esCuentaConversiones
     *
     * @return string 
     */
    public function getEsCuentaConversiones()
    {
        return $this->esCuentaConversiones;
    }

    /**
     * Set newRecord
     *
     * @param string $newRecord
     * @return ContableCuentaContable
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
     * @return ContableCuentaContable
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
     * @return ContableCuentaContable
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
     * @return ContableCuentaContable
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
