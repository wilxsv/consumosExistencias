<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlMovimiento
 */
class CtlMovimiento
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
     * @var float
     */
    private $cantidad;

    /**
     * @var \DateTime
     */
    private $fechaRegistroMovimiento;

    /**
     * @var boolean
     */
    private $almacenFarmacia;

    /**
     * @var integer
     */
    private $loteMovimiento;

    /**
     * @var boolean
     */
    private $almacenFarmaciaOrigen;

    /**
     * @var \Minsal\CoreBundle\Entity\CtlEstablecimiento
     */
    private $ctlEstablecimientoid;

    /**
     * @var \Minsal\CoreBundle\Entity\CtlInsumo
     */
    private $ctlInsumoid;

    /**
     * @var \Minsal\CoreBundle\Entity\CtlTipoMovimiento
     */
    private $ctlTipoMovimientoid;

    /**
     * @var \Minsal\CoreBundle\Entity\CtlEstablecimiento
     */
    private $establecimientoOrigen;


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
     * @return CtlMovimiento
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
     * Set cantidad
     *
     * @param float $cantidad
     * @return CtlMovimiento
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return float 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set fechaRegistroMovimiento
     *
     * @param \DateTime $fechaRegistroMovimiento
     * @return CtlMovimiento
     */
    public function setFechaRegistroMovimiento($fechaRegistroMovimiento)
    {
        $this->fechaRegistroMovimiento = $fechaRegistroMovimiento;

        return $this;
    }

    /**
     * Get fechaRegistroMovimiento
     *
     * @return \DateTime 
     */
    public function getFechaRegistroMovimiento()
    {
        return $this->fechaRegistroMovimiento;
    }

    /**
     * Set almacenFarmacia
     *
     * @param boolean $almacenFarmacia
     * @return CtlMovimiento
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
     * Set loteMovimiento
     *
     * @param integer $loteMovimiento
     * @return CtlMovimiento
     */
    public function setLoteMovimiento($loteMovimiento)
    {
        $this->loteMovimiento = $loteMovimiento;

        return $this;
    }

    /**
     * Get loteMovimiento
     *
     * @return integer 
     */
    public function getLoteMovimiento()
    {
        return $this->loteMovimiento;
    }

    /**
     * Set almacenFarmaciaOrigen
     *
     * @param boolean $almacenFarmaciaOrigen
     * @return CtlMovimiento
     */
    public function setAlmacenFarmaciaOrigen($almacenFarmaciaOrigen)
    {
        $this->almacenFarmaciaOrigen = $almacenFarmaciaOrigen;

        return $this;
    }

    /**
     * Get almacenFarmaciaOrigen
     *
     * @return boolean 
     */
    public function getAlmacenFarmaciaOrigen()
    {
        return $this->almacenFarmaciaOrigen;
    }

    /**
     * Set ctlEstablecimientoid
     *
     * @param \Minsal\CoreBundle\Entity\CtlEstablecimiento $ctlEstablecimientoid
     * @return CtlMovimiento
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
     * Set ctlInsumoid
     *
     * @param \Minsal\CoreBundle\Entity\CtlInsumo $ctlInsumoid
     * @return CtlMovimiento
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
     * Set ctlTipoMovimientoid
     *
     * @param \Minsal\CoreBundle\Entity\CtlTipoMovimiento $ctlTipoMovimientoid
     * @return CtlMovimiento
     */
    public function setCtlTipoMovimientoid(\Minsal\CoreBundle\Entity\CtlTipoMovimiento $ctlTipoMovimientoid = null)
    {
        $this->ctlTipoMovimientoid = $ctlTipoMovimientoid;

        return $this;
    }

    /**
     * Get ctlTipoMovimientoid
     *
     * @return \Minsal\CoreBundle\Entity\CtlTipoMovimiento 
     */
    public function getCtlTipoMovimientoid()
    {
        return $this->ctlTipoMovimientoid;
    }

    /**
     * Set establecimientoOrigen
     *
     * @param \Minsal\CoreBundle\Entity\CtlEstablecimiento $establecimientoOrigen
     * @return CtlMovimiento
     */
    public function setEstablecimientoOrigen(\Minsal\CoreBundle\Entity\CtlEstablecimiento $establecimientoOrigen = null)
    {
        $this->establecimientoOrigen = $establecimientoOrigen;

        return $this;
    }

    /**
     * Get establecimientoOrigen
     *
     * @return \Minsal\CoreBundle\Entity\CtlEstablecimiento 
     */
    public function getEstablecimientoOrigen()
    {
        return $this->establecimientoOrigen;
    }
}
