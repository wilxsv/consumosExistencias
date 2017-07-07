<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlRol
 */
class CtlRol
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombreRol;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $acceso;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->acceso = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nombreRol
     *
     * @param string $nombreRol
     * @return CtlRol
     */
    public function setNombreRol($nombreRol)
    {
        $this->nombreRol = $nombreRol;

        return $this;
    }

    /**
     * Get nombreRol
     *
     * @return string 
     */
    public function getNombreRol()
    {
        return $this->nombreRol;
    }

    /**
     * Add acceso
     *
     * @param \Minsal\CoreBundle\Entity\CtlAcceso $acceso
     * @return CtlRol
     */
    public function addAcceso(\Minsal\CoreBundle\Entity\CtlAcceso $acceso)
    {
        $this->acceso[] = $acceso;

        return $this;
    }

    /**
     * Remove acceso
     *
     * @param \Minsal\CoreBundle\Entity\CtlAcceso $acceso
     */
    public function removeAcceso(\Minsal\CoreBundle\Entity\CtlAcceso $acceso)
    {
        $this->acceso->removeElement($acceso);
    }

    /**
     * Get acceso
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAcceso()
    {
        return $this->acceso;
    }
    
    public function __toString()
    {
        return $this->getNombreRol();
    }
    
    
}
