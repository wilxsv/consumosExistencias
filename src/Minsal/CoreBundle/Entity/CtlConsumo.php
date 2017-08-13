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
    private $userIdSchema;

    /**
     * @var string
     */
    private $ipUserSchema;

    /**
     * @var \Minsal\CoreBundle\Entity\CtlExistencias
     */
    private $ctlExistencia;

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
     * Set userIdSchema
     *
     * @param integer $userIdSchema
     * @return CtlConsumo
     */
    public function setUserIdSchema($userIdSchema)
    {
        $this->userIdSchema = $userIdSchema;

        return $this;
    }

    /**
     * Get userIdSchema
     *
     * @return integer 
     */
    public function getUserIdSchema()
    {
        return $this->userIdSchema;
    }

    /**
     * Set ipUserSchema
     *
     * @param string $ipUserSchema
     * @return CtlConsumo
     */
    public function setIpUserSchema($ipUserSchema)
    {
        $this->ipUserSchema = $ipUserSchema;

        return $this;
    }

    /**
     * Get ipUserSchema
     *
     * @return string 
     */
    public function getIpUserSchema()
    {
        return $this->ipUserSchema;
    }

    /**
     * Set ctlExistencia
     *
     * @param \Minsal\CoreBundle\Entity\CtlExistencias $ctlExistencia
     * @return CtlConsumo
     */
    public function setCtlExistencia(\Minsal\CoreBundle\Entity\CtlExistencias $ctlExistencia = null)
    {
        $this->ctlExistencia = $ctlExistencia;

        return $this;
    }

    /**
     * Get ctlExistencia
     *
     * @return \Minsal\CoreBundle\Entity\CtlExistencias 
     */
    public function getCtlExistencia()
    {
        return $this->ctlExistencia;
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
    /**
     * @var string
     */
    private $userIpSchema;

    /**
     * @var \Minsal\CoreBundle\Entity\FosUser
     */
    private $userSchema;


    /**
     * Set userIpSchema
     *
     * @param string $userIpSchema
     * @return CtlConsumo
     */
    public function setUserIpSchema($userIpSchema)
    {
        $this->userIpSchema = $userIpSchema;

        return $this;
    }

    /**
     * Get userIpSchema
     *
     * @return string 
     */
    public function getUserIpSchema()
    {
        return $this->userIpSchema;
    }

    /**
     * Set userSchema
     *
     * @param \Minsal\CoreBundle\Entity\FosUser $userSchema
     * @return CtlConsumo
     */
    public function setUserSchema(\Minsal\CoreBundle\Entity\FosUser $userSchema = null)
    {
        $this->userSchema = $userSchema;

        return $this;
    }

    /**
     * Get userSchema
     *
     * @return \Minsal\CoreBundle\Entity\FosUser 
     */
    public function getUserSchema()
    {
        return $this->userSchema;
    }
}
