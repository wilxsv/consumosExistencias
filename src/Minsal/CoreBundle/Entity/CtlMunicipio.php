<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlMunicipio
 */
class CtlMunicipio
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $nombreMunicipio;

    /**
     * @var \Minsal\CoreBundle\Entity\CtlDepartamento
     */
    private $ctlDepartamentoid;


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
     * Set nombreMunicipio
     *
     * @param integer $nombreMunicipio
     * @return CtlMunicipio
     */
    public function setNombreMunicipio($nombreMunicipio)
    {
        $this->nombreMunicipio = $nombreMunicipio;

        return $this;
    }

    /**
     * Get nombreMunicipio
     *
     * @return integer 
     */
    public function getNombreMunicipio()
    {
        return $this->nombreMunicipio;
    }

    /**
     * Set ctlDepartamentoid
     *
     * @param \Minsal\CoreBundle\Entity\CtlDepartamento $ctlDepartamentoid
     * @return CtlMunicipio
     */
    public function setCtlDepartamentoid(\Minsal\CoreBundle\Entity\CtlDepartamento $ctlDepartamentoid = null)
    {
        $this->ctlDepartamentoid = $ctlDepartamentoid;

        return $this;
    }

    /**
     * Get ctlDepartamentoid
     *
     * @return \Minsal\CoreBundle\Entity\CtlDepartamento 
     */
    public function getCtlDepartamentoid()
    {
        return $this->ctlDepartamentoid;
    }
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $codigoCnr;

    /**
     * @var string
     */
    private $abreviatura;

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
     * @var boolean
     */
    private $cabecera;

    /**
     * @var \Minsal\CoreBundle\Entity\CtlDepartamento
     */
    private $idDepartamento;


    /**
     * Set nombre
     *
     * @param string $nombre
     * @return CtlMunicipio
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
     * Set codigoCnr
     *
     * @param string $codigoCnr
     * @return CtlMunicipio
     */
    public function setCodigoCnr($codigoCnr)
    {
        $this->codigoCnr = $codigoCnr;

        return $this;
    }

    /**
     * Get codigoCnr
     *
     * @return string 
     */
    public function getCodigoCnr()
    {
        return $this->codigoCnr;
    }

    /**
     * Set abreviatura
     *
     * @param string $abreviatura
     * @return CtlMunicipio
     */
    public function setAbreviatura($abreviatura)
    {
        $this->abreviatura = $abreviatura;

        return $this;
    }

    /**
     * Get abreviatura
     *
     * @return string 
     */
    public function getAbreviatura()
    {
        return $this->abreviatura;
    }

    /**
     * Set idUsuarioReg
     *
     * @param string $idUsuarioReg
     * @return CtlMunicipio
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
     * @return CtlMunicipio
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
     * @return CtlMunicipio
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
     * @return CtlMunicipio
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
     * Set cabecera
     *
     * @param boolean $cabecera
     * @return CtlMunicipio
     */
    public function setCabecera($cabecera)
    {
        $this->cabecera = $cabecera;

        return $this;
    }

    /**
     * Get cabecera
     *
     * @return boolean 
     */
    public function getCabecera()
    {
        return $this->cabecera;
    }

    /**
     * Set idDepartamento
     *
     * @param \Minsal\CoreBundle\Entity\CtlDepartamento $idDepartamento
     * @return CtlMunicipio
     */
    public function setIdDepartamento(\Minsal\CoreBundle\Entity\CtlDepartamento $idDepartamento = null)
    {
        $this->idDepartamento = $idDepartamento;

        return $this;
    }

    /**
     * Get idDepartamento
     *
     * @return \Minsal\CoreBundle\Entity\CtlDepartamento 
     */
    public function getIdDepartamento()
    {
        return $this->idDepartamento;
    }
    
    public function __toString(){
		return $this->getNombre();
	}
}
