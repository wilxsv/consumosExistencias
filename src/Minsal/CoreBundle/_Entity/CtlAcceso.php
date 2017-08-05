<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlAcceso
 */
class CtlAcceso
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombreAcceso;

    /**
     * @var string
     */
    private $pathAcceso;

    /**
     * @var boolean
     */
    private $publicAcceso;

    /**
     * @var integer
     */
    private $ordenAcceso;

    /**
     * @var boolean
     */
    private $visibleAcceso;

    /**
     * @var \Minsal\CoreBundle\Entity\CtlAcceso
     */
    private $acceso;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $rol;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->rol = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nombreAcceso
     *
     * @param string $nombreAcceso
     * @return CtlAcceso
     */
    public function setNombreAcceso($nombreAcceso)
    {
        $this->nombreAcceso = $nombreAcceso;

        return $this;
    }

    /**
     * Get nombreAcceso
     *
     * @return string 
     */
    public function getNombreAcceso()
    {
        return $this->nombreAcceso;
    }

    /**
     * Set pathAcceso
     *
     * @param string $pathAcceso
     * @return CtlAcceso
     */
    public function setPathAcceso($pathAcceso)
    {
        $this->pathAcceso = $pathAcceso;

        return $this;
    }

    /**
     * Get pathAcceso
     *
     * @return string 
     */
    public function getPathAcceso()
    {
        return $this->pathAcceso;
    }

    /**
     * Set publicAcceso
     *
     * @param boolean $publicAcceso
     * @return CtlAcceso
     */
    public function setPublicAcceso($publicAcceso)
    {
        $this->publicAcceso = $publicAcceso;

        return $this;
    }

    /**
     * Get publicAcceso
     *
     * @return boolean 
     */
    public function getPublicAcceso()
    {
        return $this->publicAcceso;
    }

    /**
     * Set ordenAcceso
     *
     * @param integer $ordenAcceso
     * @return CtlAcceso
     */
    public function setOrdenAcceso($ordenAcceso)
    {
        $this->ordenAcceso = $ordenAcceso;

        return $this;
    }

    /**
     * Get ordenAcceso
     *
     * @return integer 
     */
    public function getOrdenAcceso()
    {
        return $this->ordenAcceso;
    }

    /**
     * Set visibleAcceso
     *
     * @param boolean $visibleAcceso
     * @return CtlAcceso
     */
    public function setVisibleAcceso($visibleAcceso)
    {
        $this->visibleAcceso = $visibleAcceso;

        return $this;
    }

    /**
     * Get visibleAcceso
     *
     * @return boolean 
     */
    public function getVisibleAcceso()
    {
        return $this->visibleAcceso;
    }

    /**
     * Set acceso
     *
     * @param \Minsal\CoreBundle\Entity\CtlAcceso $acceso
     * @return CtlAcceso
     */
    public function setAcceso(\Minsal\CoreBundle\Entity\CtlAcceso $acceso = null)
    {
        $this->acceso = $acceso;

        return $this;
    }

    /**
     * Get acceso
     *
     * @return \Minsal\CoreBundle\Entity\CtlAcceso 
     */
    public function getAcceso()
    {
        return $this->acceso;
    }

    /**
     * Add rol
     *
     * @param \Minsal\CoreBundle\Entity\CtlRol $rol
     * @return CtlAcceso
     */
    public function addRol(\Minsal\CoreBundle\Entity\CtlRol $rol)
    {
        $this->rol[] = $rol;

        return $this;
    }

    /**
     * Remove rol
     *
     * @param \Minsal\CoreBundle\Entity\CtlRol $rol
     */
    public function removeRol(\Minsal\CoreBundle\Entity\CtlRol $rol)
    {
        $this->rol->removeElement($rol);
    }

    /**
     * Get rol
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRol()
    {
        return $this->rol;
    }
}
