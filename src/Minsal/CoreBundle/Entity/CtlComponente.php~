<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlComponente
 */
class CtlComponente
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombreComponente;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $insumo;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->insumo = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nombreComponente
     *
     * @param string $nombreComponente
     * @return CtlComponente
     */
    public function setNombreComponente($nombreComponente)
    {
        $this->nombreComponente = $nombreComponente;

        return $this;
    }

    /**
     * Get nombreComponente
     *
     * @return string 
     */
    public function getNombreComponente()
    {
        return $this->nombreComponente;
    }

    /**
     * Add insumo
     *
     * @param \Minsal\CoreBundle\Entity\CtlInsumo $insumo
     * @return CtlComponente
     */
    public function addInsumo(\Minsal\CoreBundle\Entity\CtlInsumo $insumo)
    {
        $this->insumo[] = $insumo;

        return $this;
    }

    /**
     * Remove insumo
     *
     * @param \Minsal\CoreBundle\Entity\CtlInsumo $insumo
     */
    public function removeInsumo(\Minsal\CoreBundle\Entity\CtlInsumo $insumo)
    {
        $this->insumo->removeElement($insumo);
    }

    /**
     * Get insumo
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getInsumo()
    {
        return $this->insumo;
    }
}
