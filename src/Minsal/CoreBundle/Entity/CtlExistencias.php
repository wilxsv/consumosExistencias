<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlExistencias
 */
class CtlExistencias
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $fechaRegistro;

    /**
     * @var integer
     */
    private $cantidadExistencia;

    /**
     * @var \DateTime
     */
    private $fechaCaducidad;

    /**
     * @var integer
     */
    private $loteExistencia;

    /**
     * @var \DateTime
     */
    private $fechaExistencia;

    /**
     * @var boolean
     */
    private $almacenFarmacia;

    /**
     * @var integer
     */
    private $userIdSchema;

    /**
     * @var string
     */
    private $ipUserSchema;

    /**
     * @var \Minsal\CoreBundle\Entity\CtlInsumo
     */
    private $ctlInsumoid;

    /**
     * @var \Minsal\CoreBundle\Entity\CtlEstablecimiento
     */
    private $ctlEstablecimientoid;


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
     * Set fechaRegistro
     *
     * @param \DateTime $fechaRegistro
     * @return CtlExistencias
     */
    public function setFechaRegistro($fechaRegistro)
    {
        $this->fechaRegistro = $fechaRegistro;

        return $this;
    }

    /**
     * Get fechaRegistro
     *
     * @return \DateTime 
     */
    public function getFechaRegistro()
    {
        return $this->fechaRegistro;
    }

    /**
     * Set cantidadExistencia
     *
     * @param integer $cantidadExistencia
     * @return CtlExistencias
     */
    public function setCantidadExistencia($cantidadExistencia)
    {
        $this->cantidadExistencia = $cantidadExistencia;

        return $this;
    }

    /**
     * Get cantidadExistencia
     *
     * @return integer 
     */
    public function getCantidadExistencia()
    {
        return $this->cantidadExistencia;
    }

    /**
     * Set fechaCaducidad
     *
     * @param \DateTime $fechaCaducidad
     * @return CtlExistencias
     */
    public function setFechaCaducidad($fechaCaducidad)
    {
        $this->fechaCaducidad = $fechaCaducidad;

        return $this;
    }

    /**
     * Get fechaCaducidad
     *
     * @return \DateTime 
     */
    public function getFechaCaducidad()
    {
        return $this->fechaCaducidad;
    }

    /**
     * Set loteExistencia
     *
     * @param integer $loteExistencia
     * @return CtlExistencias
     */
    public function setLoteExistencia($loteExistencia)
    {
        $this->loteExistencia = $loteExistencia;

        return $this;
    }

    /**
     * Get loteExistencia
     *
     * @return integer 
     */
    public function getLoteExistencia()
    {
        return $this->loteExistencia;
    }

    /**
     * Set fechaExistencia
     *
     * @param \DateTime $fechaExistencia
     * @return CtlExistencias
     */
    public function setFechaExistencia($fechaExistencia)
    {
        $this->fechaExistencia = $fechaExistencia;

        return $this;
    }

    /**
     * Get fechaExistencia
     *
     * @return \DateTime 
     */
    public function getFechaExistencia()
    {
        return $this->fechaExistencia;
    }

    /**
     * Set almacenFarmacia
     *
     * @param boolean $almacenFarmacia
     * @return CtlExistencias
     */
    public function setAlmacenFarmacia($almacenFarmacia)
    {
        $this->almacenFarmacia = $almacenFarmacia;

        return $this;
    }

    /**
     * Get almacenFarmacia
     *
     * @return boolean 
     */
    public function getAlmacenFarmacia()
    {
        return $this->almacenFarmacia;
    }

    /**
     * Set userIdSchema
     *
     * @param integer $userIdSchema
     * @return CtlExistencias
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
     * @return CtlExistencias
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
     * Set ctlInsumoid
     *
     * @param \Minsal\CoreBundle\Entity\CtlInsumo $ctlInsumoid
     * @return CtlExistencias
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
     * @return CtlExistencias
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
     * @var \Minsal\CoreBundle\Entity\CtlMovimiento
     */
    private $movimiento;


    /**
     * Set movimiento
     *
     * @param \Minsal\CoreBundle\Entity\CtlMovimiento $movimiento
     * @return CtlExistencias
     */
    public function setMovimiento(\Minsal\CoreBundle\Entity\CtlMovimiento $movimiento = null)
    {
        $this->movimiento = $movimiento;

        return $this;
    }

    /**
     * Get movimiento
     *
     * @return \Minsal\CoreBundle\Entity\CtlMovimiento 
     */
    public function getMovimiento()
    {
        return $this->movimiento;
    }
}
