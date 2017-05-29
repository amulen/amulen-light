<?php

namespace Rii\ReportBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContableAsiento
 *
 * @ORM\Table(name="contable_asientos")
 * @ORM\Entity(repositoryClass="Rii\ReportBundle\Entity\ContableAsientoRepository")
 */
class ContableAsiento {

    /**
     * @var integer
     *
     * @ORM\Column(name="asiento", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\ManyToOne(targetEntity="ContableAsientoMov", inversedBy="asiento")
     * @ORM\JoinColumn(name="id", referencedColumnName="asiento")
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
     * @ORM\Column(name="nro_asiento", type="integer")
     */
    private $nroAsiento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_hora", type="datetime")
     */
    private $fechaHora;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=200)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="anulado", type="string", length=1)
     */
    private $anulado;

    /**
     * @var integer
     *
     * @ORM\Column(name="documento", type="integer")
     */
    private $documento;

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
    public function getId() {
        return $this->id;
    }

    /**
     * Set inmobiliaria
     *
     * @param string $inmobiliaria
     * @return ContableAsiento
     */
    public function setInmobiliaria($inmobiliaria) {
        $this->inmobiliaria = $inmobiliaria;

        return $this;
    }

    /**
     * Get inmobiliaria
     *
     * @return string 
     */
    public function getInmobiliaria() {
        return $this->inmobiliaria;
    }

    /**
     * Set sucursal
     *
     * @param integer $sucursal
     * @return ContableAsiento
     */
    public function setSucursal($sucursal) {
        $this->sucursal = $sucursal;

        return $this;
    }

    /**
     * Get sucursal
     *
     * @return integer 
     */
    public function getSucursal() {
        return $this->sucursal;
    }

    /**
     * Set nroAsiento
     *
     * @param integer $nroAsiento
     * @return ContableAsiento
     */
    public function setNroAsiento($nroAsiento) {
        $this->nroAsiento = $nroAsiento;

        return $this;
    }

    /**
     * Get nroAsiento
     *
     * @return integer 
     */
    public function getNroAsiento() {
        return $this->nroAsiento;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return ContableAsiento
     */
    public function setFecha($fecha) {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha() {
        return $this->fecha;
    }

    /**
     * Set fechaHora
     *
     * @param \DateTime $fechaHora
     * @return ContableAsiento
     */
    public function setFechaHora($fechaHora) {
        $this->fechaHora = $fechaHora;

        return $this;
    }

    /**
     * Get fechaHora
     *
     * @return \DateTime 
     */
    public function getFechaHora() {
        return $this->fechaHora;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return ContableAsiento
     */
    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion() {
        return $this->descripcion;
    }

    /**
     * Set anulado
     *
     * @param string $anulado
     * @return ContableAsiento
     */
    public function setAnulado($anulado) {
        $this->anulado = $anulado;

        return $this;
    }

    /**
     * Get anulado
     *
     * @return string 
     */
    public function getAnulado() {
        return $this->anulado;
    }

    /**
     * Set documento
     *
     * @param integer $documento
     * @return ContableAsiento
     */
    public function setDocumento($documento) {
        $this->documento = $documento;

        return $this;
    }

    /**
     * Get documento
     *
     * @return integer 
     */
    public function getDocumento() {
        return $this->documento;
    }

    /**
     * Set esActualizable
     *
     * @param string $esActualizable
     * @return ContableAsiento
     */
    public function setEsActualizable($esActualizable) {
        $this->esActualizable = $esActualizable;

        return $this;
    }

    /**
     * Get esActualizable
     *
     * @return string 
     */
    public function getEsActualizable() {
        return $this->esActualizable;
    }

    /**
     * Set newRecord
     *
     * @param string $newRecord
     * @return ContableAsiento
     */
    public function setNewRecord($newRecord) {
        $this->newRecord = $newRecord;

        return $this;
    }

    /**
     * Get newRecord
     *
     * @return string 
     */
    public function getNewRecord() {
        return $this->newRecord;
    }

    /**
     * Set fecUltAct
     *
     * @param \DateTime $fecUltAct
     * @return ContableAsiento
     */
    public function setFecUltAct($fecUltAct) {
        $this->fecUltAct = $fecUltAct;

        return $this;
    }

    /**
     * Get fecUltAct
     *
     * @return \DateTime 
     */
    public function getFecUltAct() {
        return $this->fecUltAct;
    }

    /**
     * Set borrado
     *
     * @param string $borrado
     * @return ContableAsiento
     */
    public function setBorrado($borrado) {
        $this->borrado = $borrado;

        return $this;
    }

    /**
     * Get borrado
     *
     * @return string 
     */
    public function getBorrado() {
        return $this->borrado;
    }

    /**
     * Set dirty
     *
     * @param string $dirty
     * @return ContableAsiento
     */
    public function setDirty($dirty) {
        $this->dirty = $dirty;

        return $this;
    }

    /**
     * Get dirty
     *
     * @return string 
     */
    public function getDirty() {
        return $this->dirty;
    }

}
