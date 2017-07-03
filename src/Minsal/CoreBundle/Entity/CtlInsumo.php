<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlInsumo
 */
class CtlInsumo
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $codigoNu;

    /**
     * @var integer
     */
    private $grupoid;

    /**
     * @var string
     */
    private $codigoSinab;

    /**
     * @var boolean
     */
    private $listadoOficial;

    /**
     * @var string
     */
    private $nombreLargoInsumo;

    /**
     * @var \DateTime
     */
    private $registroSchema;

    /**
     * @var integer
     */
    private $enableSchema;

    /**
     * @var string
     */
    private $detalleInsumo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $establecimiento;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $componente;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $ctlEstablecimientoid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->establecimiento = new \Doctrine\Common\Collections\ArrayCollection();
        $this->componente = new \Doctrine\Common\Collections\ArrayCollection();
        $this->ctlEstablecimientoid = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set codigoNu
     *
     * @param string $codigoNu
     * @return CtlInsumo
     */
    public function setCodigoNu($codigoNu)
    {
        $this->codigoNu = $codigoNu;

        return $this;
    }

    /**
     * Get codigoNu
     *
     * @return string 
     */
    public function getCodigoNu()
    {
        return $this->codigoNu;
    }

    /**
     * Set grupoid
     *
     * @param integer $grupoid
     * @return CtlInsumo
     */
    public function setGrupoid($grupoid)
    {
        $this->grupoid = $grupoid;

        return $this;
    }

    /**
     * Get grupoid
     *
     * @return integer 
     */
    public function getGrupoid()
    {
        return $this->grupoid;
    }

    /**
     * Set codigoSinab
     *
     * @param string $codigoSinab
     * @return CtlInsumo
     */
    public function setCodigoSinab($codigoSinab)
    {
        $this->codigoSinab = $codigoSinab;

        return $this;
    }

    /**
     * Get codigoSinab
     *
     * @return string 
     */
    public function getCodigoSinab()
    {
        return $this->codigoSinab;
    }

    /**
     * Set listadoOficial
     *
     * @param boolean $listadoOficial
     * @return CtlInsumo
     */
    public function setListadoOficial($listadoOficial)
    {
        $this->listadoOficial = $listadoOficial;

        return $this;
    }

    /**
     * Get listadoOficial
     *
     * @return boolean 
     */
    public function getListadoOficial()
    {
        return $this->listadoOficial;
    }

    /**
     * Set nombreLargoInsumo
     *
     * @param string $nombreLargoInsumo
     * @return CtlInsumo
     */
    public function setNombreLargoInsumo($nombreLargoInsumo)
    {
        $this->nombreLargoInsumo = $nombreLargoInsumo;

        return $this;
    }

    /**
     * Get nombreLargoInsumo
     *
     * @return string 
     */
    public function getNombreLargoInsumo()
    {
        return $this->nombreLargoInsumo;
    }

    /**
     * Set registroSchema
     *
     * @param \DateTime $registroSchema
     * @return CtlInsumo
     */
    public function setRegistroSchema($registroSchema)
    {
        $this->registroSchema = $registroSchema;

        return $this;
    }

    /**
     * Get registroSchema
     *
     * @return \DateTime 
     */
    public function getRegistroSchema()
    {
        return $this->registroSchema;
    }

    /**
     * Set enableSchema
     *
     * @param integer $enableSchema
     * @return CtlInsumo
     */
    public function setEnableSchema($enableSchema)
    {
        $this->enableSchema = $enableSchema;

        return $this;
    }

    /**
     * Get enableSchema
     *
     * @return integer 
     */
    public function getEnableSchema()
    {
        return $this->enableSchema;
    }

    /**
     * Set detalleInsumo
     *
     * @param string $detalleInsumo
     * @return CtlInsumo
     */
    public function setDetalleInsumo($detalleInsumo)
    {
        $this->detalleInsumo = $detalleInsumo;

        return $this;
    }

    /**
     * Get detalleInsumo
     *
     * @return string 
     */
    public function getDetalleInsumo()
    {
        return $this->detalleInsumo;
    }

    /**
     * Add establecimiento
     *
     * @param \Minsal\CoreBundle\Entity\CtlEstablecimiento $establecimiento
     * @return CtlInsumo
     */
    public function addEstablecimiento(\Minsal\CoreBundle\Entity\CtlEstablecimiento $establecimiento)
    {
        $this->establecimiento[] = $establecimiento;

        return $this;
    }

    /**
     * Remove establecimiento
     *
     * @param \Minsal\CoreBundle\Entity\CtlEstablecimiento $establecimiento
     */
    public function removeEstablecimiento(\Minsal\CoreBundle\Entity\CtlEstablecimiento $establecimiento)
    {
        $this->establecimiento->removeElement($establecimiento);
    }

    /**
     * Get establecimiento
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEstablecimiento()
    {
        return $this->establecimiento;
    }

    /**
     * Add componente
     *
     * @param \Minsal\CoreBundle\Entity\CtlComponente $componente
     * @return CtlInsumo
     */
    public function addComponente(\Minsal\CoreBundle\Entity\CtlComponente $componente)
    {
        $this->componente[] = $componente;

        return $this;
    }

    /**
     * Remove componente
     *
     * @param \Minsal\CoreBundle\Entity\CtlComponente $componente
     */
    public function removeComponente(\Minsal\CoreBundle\Entity\CtlComponente $componente)
    {
        $this->componente->removeElement($componente);
    }

    /**
     * Get componente
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComponente()
    {
        return $this->componente;
    }

    /**
     * Add ctlEstablecimientoid
     *
     * @param \Minsal\CoreBundle\Entity\CtlEstablecimiento $ctlEstablecimientoid
     * @return CtlInsumo
     */
    public function addCtlEstablecimientoid(\Minsal\CoreBundle\Entity\CtlEstablecimiento $ctlEstablecimientoid)
    {
        $this->ctlEstablecimientoid[] = $ctlEstablecimientoid;

        return $this;
    }

    /**
     * Remove ctlEstablecimientoid
     *
     * @param \Minsal\CoreBundle\Entity\CtlEstablecimiento $ctlEstablecimientoid
     */
    public function removeCtlEstablecimientoid(\Minsal\CoreBundle\Entity\CtlEstablecimiento $ctlEstablecimientoid)
    {
        $this->ctlEstablecimientoid->removeElement($ctlEstablecimientoid);
    }

    /**
     * Get ctlEstablecimientoid
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCtlEstablecimientoid()
    {
        return $this->ctlEstablecimientoid;
    }
    
    public function __toString()
    {
        return $this->getNombreLargoInsumo();
    }
}
