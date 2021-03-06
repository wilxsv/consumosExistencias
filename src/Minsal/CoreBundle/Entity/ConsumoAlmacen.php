<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConsumoAlmacen
 */
class ConsumoAlmacen
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $fechaMovimiento;

    /**
     * @var integer
     */
    private $ctlMecanismoid;

    /**
     * @var integer
     */
    private $ctlExistencia;

    /**
     * @var float
     */
    private $cantidadConsumoAlmacen;

    /**
     * @var integer
     */
    private $userIdSchema;

    /**
     * @var string
     */
    private $userIpSchema;

    /**
     * @var \DateTime
     */
    private $registroSchema;


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
     * Set fechaMovimiento
     *
     * @param \DateTime $fechaMovimiento
     * @return ConsumoAlmacen
     */
    public function setFechaMovimiento($fechaMovimiento)
    {
        $this->fechaMovimiento = $fechaMovimiento;

        return $this;
    }

    /**
     * Get fechaMovimiento
     *
     * @return \DateTime 
     */
    public function getFechaMovimiento()
    {
        return $this->fechaMovimiento;
    }

    /**
     * Set ctlMecanismoid
     *
     * @param integer $ctlMecanismoid
     * @return ConsumoAlmacen
     */
    public function setCtlMecanismoid($ctlMecanismoid)
    {
        $this->ctlMecanismoid = $ctlMecanismoid;

        return $this;
    }

    /**
     * Get ctlMecanismoid
     *
     * @return integer 
     */
    public function getCtlMecanismoid()
    {
        return $this->ctlMecanismoid;
    }

    /**
     * Set ctlExistencia
     *
     * @param integer $ctlExistencia
     * @return ConsumoAlmacen
     */
    public function setCtlExistencia($ctlExistencia)
    {
        $this->ctlExistencia = $ctlExistencia;

        return $this;
    }

    /**
     * Get ctlExistencia
     *
     * @return integer 
     */
    public function getCtlExistencia()
    {
        return $this->ctlExistencia;
    }

    /**
     * Set cantidadConsumoAlmacen
     *
     * @param float $cantidadConsumoAlmacen
     * @return ConsumoAlmacen
     */
    public function setCantidadConsumoAlmacen($cantidadConsumoAlmacen)
    {
        $this->cantidadConsumoAlmacen = $cantidadConsumoAlmacen;

        return $this;
    }

    /**
     * Get cantidadConsumoAlmacen
     *
     * @return float 
     */
    public function getCantidadConsumoAlmacen()
    {
        return $this->cantidadConsumoAlmacen;
    }

    /**
     * Set userIdSchema
     *
     * @param integer $userIdSchema
     * @return ConsumoAlmacen
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
     * Set userIpSchema
     *
     * @param string $userIpSchema
     * @return ConsumoAlmacen
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
     * Set registroSchema
     *
     * @param \DateTime $registroSchema
     * @return ConsumoAlmacen
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
     * @var \Minsal\CoreBundle\Entity\FosUser
     */
    private $userSchema;


    /**
     * Set userSchema
     *
     * @param \Minsal\CoreBundle\Entity\FosUser $userSchema
     * @return ConsumoAlmacen
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
