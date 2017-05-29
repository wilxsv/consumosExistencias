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
     * @var string
     */
    private $codigoSinab;

    /**
     * @var string
     */
    private $codigoEcri;

    /**
     * @var string
     */
    private $codigoAtc;

    /**
     * @var boolean
     */
    private $listadoOficial;

    /**
     * @var string
     */
    private $nombreLargo;

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
     * Set codigoEcri
     *
     * @param string $codigoEcri
     * @return CtlInsumo
     */
    public function setCodigoEcri($codigoEcri)
    {
        $this->codigoEcri = $codigoEcri;

        return $this;
    }

    /**
     * Get codigoEcri
     *
     * @return string 
     */
    public function getCodigoEcri()
    {
        return $this->codigoEcri;
    }

    /**
     * Set codigoAtc
     *
     * @param string $codigoAtc
     * @return CtlInsumo
     */
    public function setCodigoAtc($codigoAtc)
    {
        $this->codigoAtc = $codigoAtc;

        return $this;
    }

    /**
     * Get codigoAtc
     *
     * @return string 
     */
    public function getCodigoAtc()
    {
        return $this->codigoAtc;
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
     * Set nombreLargo
     *
     * @param string $nombreLargo
     * @return CtlInsumo
     */
    public function setNombreLargo($nombreLargo)
    {
        $this->nombreLargo = $nombreLargo;

        return $this;
    }

    /**
     * Get nombreLargo
     *
     * @return string 
     */
    public function getNombreLargo()
    {
        return $this->nombreLargo;
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
}
