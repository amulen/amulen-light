<?php

namespace Rii\ReportBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContableTiposMonedas
 *
 * @ORM\Table(name="contable_tipos_monedas")
 * @ORM\Entity(repositoryClass="Rii\ReportBundle\Entity\ContableTiposMonedasRepository")
 */
class ContableTiposMonedas
{
    /**
    *  @var integer
    * @ORM\Id
    *  @ORM\Column(name="tipo_moneda")
    */
    private $id;
    /**
    *  @var string
    *  @ORM\Column(name="inmobiliaria")
    */
    private $inmobiliaria;
    /**
    *  @var integer
    *  @ORM\Column(name="sucursal")
    */
    private $sucursal;
    /**
    *  @var string
    *  @ORM\Column(name="nombre_moneda")
    */
    private $nombreMoneda;
    /**
    *  @var string
    *  @ORM\Column(name="simbolo_moneda")
    */
    private $simboloMoneda;
    /**
    *  @var string
    *  @ORM\Column(name="new_record")
    */
    private $newRecord;
    /**
    *  @var datetime
    *  @ORM\Column(name="fec_ult_act")
    */
    private $fecUltAct;
    /**
    *  @var string
    *  @ORM\Column(name="borrado")
    */
    private $borrado;
    /**
    *  @var string
    *  @ORM\Column(name="dirty")
    */
    private $dirty;

    private $change = 1;

    /**
     * Set id
     *
     * @param string $id
     * @return ContableTiposMonedas
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
     * @return ContableTiposMonedas
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
     * @return ContableTiposMonedas
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
     * Set nombreMoneda
     *
     * @param string $nombreMoneda
     * @return ContableTiposMonedas
     */
    public function setNombreMoneda($nombreMoneda)
    {
        $this->nombreMoneda = $nombreMoneda;

        return $this;
    }

    /**
     * Get nombreMoneda
     *
     * @return string 
     */
    public function getNombreMoneda()
    {
        return $this->nombreMoneda;
    }

    /**
     * Set simboloMoneda
     *
     * @param string $simboloMoneda
     * @return ContableTiposMonedas
     */
    public function setSimboloMoneda($simboloMoneda)
    {
        $this->simboloMoneda = $simboloMoneda;

        return $this;
    }

    /**
     * Get simboloMoneda
     *
     * @return string 
     */
    public function getSimboloMoneda()
    {
        return $this->simboloMoneda;
    }

    /**
     * Set newRecord
     *
     * @param string $newRecord
     * @return ContableTiposMonedas
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
     * @return ContableTiposMonedas
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
     * @return ContableTiposMonedas
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
     * @return ContableTiposMonedas
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

    public function __toString()
    {
            return "{$this->getNombreMoneda()}";
    }

    public function setchange($change)
    {
        $this->change = $change;

        return $this;
    }

    public function getchange()
    {
        return $this->change;
    }
}
