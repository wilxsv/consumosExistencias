<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlConsumo
 */
class CtlConsumo
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $fechaConsumo;

    /**
     * @var integer
     */
    private $cantidadConsumo;

    /**
     * @var \DateTime
     */
    private $registroSchema;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var \Minsal\CoreBundle\Entity\CtlInsumo
     */
    private $ctlInsumoid;

    /**
     * @var \Minsal\CoreBundle\Entity\CtlEstablecimiento
     */
    private $ctlEstablecimientoid;

    /**
     * @var \Minsal\CoreBundle\Entity\CtlMecanismo
     */
    private $ctlMecanismoid;


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
     * Set fechaConsumo
     *
     * @param \DateTime $fechaConsumo
     * @return CtlConsumo
     */
    public function setFechaConsumo($fechaConsumo)
    {
        $this->fechaConsumo = $fechaConsumo;

        return $this;
    }

    /**
     * Get fechaConsumo
     *
     * @return \DateTime 
     */
    public function getFechaConsumo()
    {
        return $this->fechaConsumo;
    }

    /**
     * Set cantidadConsumo
     *
     * @param integer $cantidadConsumo
     * @return CtlConsumo
     */
    public function setCantidadConsumo($cantidadConsumo)
    {
        $this->cantidadConsumo = $cantidadConsumo;

        return $this;
    }

    /**
     * Get cantidadConsumo
     *
     * @return integer 
     */
    public function getCantidadConsumo()
    {
        return $this->cantidadConsumo;
    }

    /**
     * Set registroSchema
     *
     * @param \DateTime $registroSchema
     * @return CtlConsumo
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
     * Set userId
     *
     * @param integer $userId
     * @return CtlConsumo
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set ctlInsumoid
     *
     * @param \Minsal\CoreBundle\Entity\CtlInsumo $ctlInsumoid
     * @return CtlConsumo
     */
    public function setCtlInsumoid(\Minsal\CoreBundle\Entity\CtlInsumo $ctlInsumoid = null)
    {
        $this->ctlInsumoid = $ctlInsumoid;

        return $this;
    }

    /**
     * Get ctlInsumoid
     *
     * @return \Minsal\CoreBundle\Entity\CtlInsumo 
     */
    public function getCtlInsumoid()
    {
        return $this->ctlInsumoid;
    }

    /**
     * Set ctlEstablecimientoid
     *
     * @param \Minsal\CoreBundle\Entity\CtlEstablecimiento $ctlEstablecimientoid
     * @return CtlConsumo
     */
    public function setCtlEstablecimientoid(\Minsal\CoreBundle\Entity\CtlEstablecimiento $ctlEstablecimientoid = null)
    {
        $this->ctlEstablecimientoid = $ctlEstablecimientoid;

        return $this;
    }

    /**
     * Get ctlEstablecimientoid
     *
     * @return \Minsal\CoreBundle\Entity\CtlEstablecimiento 
     */
    public function getCtlEstablecimientoid()
    {
        return $this->ctlEstablecimientoid;
    }

    /**
     * Set ctlMecanismoid
     *
     * @param \Minsal\CoreBundle\Entity\CtlMecanismo $ctlMecanismoid
     * @return CtlConsumo
     */
    public function setCtlMecanismoid(\Minsal\CoreBundle\Entity\CtlMecanismo $ctlMecanismoid = null)
    {
        $this->ctlMecanismoid = $ctlMecanismoid;

        return $this;
    }

    /**
     * Get ctlMecanismoid
     *
     * @return \Minsal\CoreBundle\Entity\CtlMecanismo 
     */
    public function getCtlMecanismoid()
    {
        return $this->ctlMecanismoid;
    }
}
