<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlMicrored
 */
class CtlMicrored
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var integer
     */
    private $codigoc3;


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
     * Set nombre
     *
     * @param string $nombre
     * @return CtlMicrored
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
     * Set codigoc3
     *
     * @param integer $codigoc3
     * @return CtlMicrored
     */
    public function setCodigoc3($codigoc3)
    {
        $this->codigoc3 = $codigoc3;

        return $this;
    }

    /**
     * Get codigoc3
     *
     * @return integer 
     */
    public function getCodigoc3()
    {
        return $this->codigoc3;
    }
    /**
     * @var boolean
     */
    private $activo;

    /**
     * @var string
     */
    private $idUsuarioReg;

    /**
     * @var \DateTime
     */
    private $fechaHoraReg;

    /**
     * @var string
     */
    private $idUsuarioMod;

    /**
     * @var \DateTime
     */
    private $fechaHoraMod;

    /**
     * @var \Minsal\CoreBundle\Entity\CtlEstablecimiento
     */
    private $sibasi;


    /**
     * Set activo
     *
     * @param boolean $activo
     * @return CtlMicrored
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean 
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Set idUsuarioReg
     *
     * @param string $idUsuarioReg
     * @return CtlMicrored
     */
    public function setIdUsuarioReg($idUsuarioReg)
    {
        $this->idUsuarioReg = $idUsuarioReg;

        return $this;
    }

    /**
     * Get idUsuarioReg
     *
     * @return string 
     */
    public function getIdUsuarioReg()
    {
        return $this->idUsuarioReg;
    }

    /**
     * Set fechaHoraReg
     *
     * @param \DateTime $fechaHoraReg
     * @return CtlMicrored
     */
    public function setFechaHoraReg($fechaHoraReg)
    {
        $this->fechaHoraReg = $fechaHoraReg;

        return $this;
    }

    /**
     * Get fechaHoraReg
     *
     * @return \DateTime 
     */
    public function getFechaHoraReg()
    {
        return $this->fechaHoraReg;
    }

    /**
     * Set idUsuarioMod
     *
     * @param string $idUsuarioMod
     * @return CtlMicrored
     */
    public function setIdUsuarioMod($idUsuarioMod)
    {
        $this->idUsuarioMod = $idUsuarioMod;

        return $this;
    }

    /**
     * Get idUsuarioMod
     *
     * @return string 
     */
    public function getIdUsuarioMod()
    {
        return $this->idUsuarioMod;
    }

    /**
     * Set fechaHoraMod
     *
     * @param \DateTime $fechaHoraMod
     * @return CtlMicrored
     */
    public function setFechaHoraMod($fechaHoraMod)
    {
        $this->fechaHoraMod = $fechaHoraMod;

        return $this;
    }

    /**
     * Get fechaHoraMod
     *
     * @return \DateTime 
     */
    public function getFechaHoraMod()
    {
        return $this->fechaHoraMod;
    }

    /**
     * Set sibasi
     *
     * @param \Minsal\CoreBundle\Entity\CtlEstablecimiento $sibasi
     * @return CtlMicrored
     */
    public function setSibasi(\Minsal\CoreBundle\Entity\CtlEstablecimiento $sibasi = null)
    {
        $this->sibasi = $sibasi;

        return $this;
    }

    /**
     * Get sibasi
     *
     * @return \Minsal\CoreBundle\Entity\CtlEstablecimiento 
     */
    public function getSibasi()
    {
        return $this->sibasi;
    }

    public function __toString()
    {
        return $this->getNombre();
    }
}
