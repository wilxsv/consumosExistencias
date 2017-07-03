<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlMecanismo
 */
class CtlMecanismo
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombreMecanismo;

    /**
     * @var integer
     */
    private $manualMecanismo;


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
     * Set nombreMecanismo
     *
     * @param string $nombreMecanismo
     * @return CtlMecanismo
     */
    public function setNombreMecanismo($nombreMecanismo)
    {
        $this->nombreMecanismo = $nombreMecanismo;

        return $this;
    }

    /**
     * Get nombreMecanismo
     *
     * @return string 
     */
    public function getNombreMecanismo()
    {
        return $this->nombreMecanismo;
    }

    /**
     * Set manualMecanismo
     *
     * @param integer $manualMecanismo
     * @return CtlMecanismo
     */
    public function setManualMecanismo($manualMecanismo)
    {
        $this->manualMecanismo = $manualMecanismo;

        return $this;
    }

    /**
     * Get manualMecanismo
     *
     * @return integer 
     */
    public function getManualMecanismo()
    {
        return $this->manualMecanismo;
    }
}
