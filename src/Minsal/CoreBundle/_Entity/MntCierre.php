<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MntCierre
 */
class MntCierre
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $fechaCierre;

    /**
     * @var \Minsal\CoreBundle\Entity\CtlEstablecimiento
     */
    private $establecimiento;


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
     * Set fechaCierre
     *
     * @param \DateTime $fechaCierre
     * @return MntCierre
     */
    public function setFechaCierre($fechaCierre)
    {
        $this->fechaCierre = $fechaCierre;

        return $this;
    }

    /**
     * Get fechaCierre
     *
     * @return \DateTime 
     */
    public function getFechaCierre()
    {
        return $this->fechaCierre;
    }

    /**
     * Set establecimiento
     *
     * @param \Minsal\CoreBundle\Entity\CtlEstablecimiento $establecimiento
     * @return MntCierre
     */
    public function setEstablecimiento(\Minsal\CoreBundle\Entity\CtlEstablecimiento $establecimiento = null)
    {
        $this->establecimiento = $establecimiento;

        return $this;
    }

    /**
     * Get establecimiento
     *
     * @return \Minsal\CoreBundle\Entity\CtlEstablecimiento 
     */
    public function getEstablecimiento()
    {
        return $this->establecimiento;
    }
}
