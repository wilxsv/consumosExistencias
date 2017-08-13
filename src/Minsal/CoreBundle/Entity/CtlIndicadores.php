<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlIndicadores
 */
class CtlIndicadores
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Minsal\CoreBundle\Entity\CtlInsumo
     */
    private $insumo;


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
     * Set insumo
     *
     * @param \Minsal\CoreBundle\Entity\CtlInsumo $insumo
     * @return CtlIndicadores
     */
    public function setInsumo(\Minsal\CoreBundle\Entity\CtlInsumo $insumo = null)
    {
        $this->insumo = $insumo;

        return $this;
    }

    /**
     * Get insumo
     *
     * @return \Minsal\CoreBundle\Entity\CtlInsumo 
     */
    public function getInsumo()
    {
        return $this->insumo;
    }
}
