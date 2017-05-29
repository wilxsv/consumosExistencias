<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlEstablecimiento
 */
class CtlEstablecimiento
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombreEstablecimiento;

    /**
     * @var \Minsal\CoreBundle\Entity\CtlMunicipio
     */
    private $ctlMunicipioid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $ctlInsumoid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ctlInsumoid = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nombreEstablecimiento
     *
     * @param string $nombreEstablecimiento
     * @return CtlEstablecimiento
     */
    public function setNombreEstablecimiento($nombreEstablecimiento)
    {
        $this->nombreEstablecimiento = $nombreEstablecimiento;

        return $this;
    }

    /**
     * Get nombreEstablecimiento
     *
     * @return string 
     */
    public function getNombreEstablecimiento()
    {
        return $this->nombreEstablecimiento;
    }

    /**
     * Set ctlMunicipioid
     *
     * @param \Minsal\CoreBundle\Entity\CtlMunicipio $ctlMunicipioid
     * @return CtlEstablecimiento
     */
    public function setCtlMunicipioid(\Minsal\CoreBundle\Entity\CtlMunicipio $ctlMunicipioid = null)
    {
        $this->ctlMunicipioid = $ctlMunicipioid;

        return $this;
    }

    /**
     * Get ctlMunicipioid
     *
     * @return \Minsal\CoreBundle\Entity\CtlMunicipio 
     */
    public function getCtlMunicipioid()
    {
        return $this->ctlMunicipioid;
    }

    /**
     * Add ctlInsumoid
     *
     * @param \Minsal\CoreBundle\Entity\CtlInsumo $ctlInsumoid
     * @return CtlEstablecimiento
     */
    public function addCtlInsumoid(\Minsal\CoreBundle\Entity\CtlInsumo $ctlInsumoid)
    {
        $this->ctlInsumoid[] = $ctlInsumoid;

        return $this;
    }

    /**
     * Remove ctlInsumoid
     *
     * @param \Minsal\CoreBundle\Entity\CtlInsumo $ctlInsumoid
     */
    public function removeCtlInsumoid(\Minsal\CoreBundle\Entity\CtlInsumo $ctlInsumoid)
    {
        $this->ctlInsumoid->removeElement($ctlInsumoid);
    }

    /**
     * Get ctlInsumoid
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCtlInsumoid()
    {
        return $this->ctlInsumoid;
    }
}
