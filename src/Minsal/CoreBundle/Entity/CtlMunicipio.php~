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
}
