<?php

namespace Rii\ReportBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * ContableCuentasAdministrativas
 *
 * @ORM\Table(name="contable_cuentas_administrativas")
 * @ORM\Entity(repositoryClass="Rii\ReportBundle\Entity\ContableCuentasAdministrativasRepository")
 */
class ContableCuentasAdministrativas extends ContableCuentas
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
    * @ORM\Column(name="inmobiliaria", type="string")
    */
    private $inmobiliaria;
    
    /**
    * @var integer
    * @ORM\Column(name="sucursal", type="integer")
    */
    private $sucursal;
    
    /**
    * @var string
    * @ORM\Column(name="nro_cuenta", type="string")
    */
    private $nroCuenta;
    
    /**
    * @var string
    * @ORM\Column(name="nombre", type="string")
    */
    private $nombre;
    
    /**
    * @var string
    * @ORM\Column(name="visible", type="string")
    */
    private $visible;
    
    /**
    * @var integer
    * @ORM\Column(name="tipo_cuenta", type="integer")
    */
    private $tipoCuenta;
    
    /**
    * @var integer
    * @ORM\Column(name="tipo_combo", type="integer")
    */
    private $tipoCombo;
    
    /**
    * @var integer
    * @ORM\Column(name="tipo_combo_personas", type="integer")
    */
    private $tipoComboPersonas;
    
    /**
    * @var string
    * @ORM\Column(name="new_record", type="string")
    */
    private $newRecord;
    
    /**
    * @var datetime
    * @ORM\Column(name="fec_ult_act", type="datetime")
    */
    private $fecUltAct;
    
    /**
    * @var string
    * @ORM\Column(name="borrado", type="string")
    */
    private $borrado;
    
    /**
    * @var string
    * @ORM\Column(name="dirty", type="string")
    */
    private $dirty;

    /**
     * Set id
     * @param int $id
     * @return ContableCuentasAdministrativas 
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
     * @return ContableCuentasAdministrativas
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
     * @return ContableCuentasAdministrativas
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
     * @return ContableCuentasAdministrativas
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
     * @return ContableCuentasAdministrativas
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
     * Set visible
     *
     * @param string $visible
     * @return ContableCuentasAdministrativas
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Get visible
     *
     * @return string 
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * Set tipoCuenta
     *
     * @param integer $tipoCuenta
     * @return ContableCuentasAdministrativas
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
     * Set tipoCombo
     *
     * @param integer $tipoCombo
     * @return ContableCuentasAdministrativas
     */
    public function setTipoCombo($tipoCombo)
    {
        $this->tipoCombo = $tipoCombo;

        return $this;
    }

    /**
     * Get tipoCombo
     *
     * @return integer 
     */
    public function getTipoCombo()
    {
        return $this->tipoCombo;
    }

    /**
     * Set tipoComboPersonas
     *
     * @param integer $tipoComboPersonas
     * @return ContableCuentasAdministrativas
     */
    public function setTipoComboPersonas($tipoComboPersonas)
    {
        $this->tipoComboPersonas = $tipoComboPersonas;

        return $this;
    }

    /**
     * Get tipoComboPersonas
     *
     * @return integer 
     */
    public function getTipoComboPersonas()
    {
        return $this->tipoComboPersonas;
    }

    /**
     * Set newRecord
     *
     * @param string $newRecord
     * @return ContableCuentasAdministrativas
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
     * @return ContableCuentasAdministrativas
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
     * @return ContableCuentasAdministrativas
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
     * @return ContableCuentasAdministrativas
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
