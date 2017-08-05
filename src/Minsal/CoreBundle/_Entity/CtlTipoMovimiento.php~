<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlTipoMovimiento
 */
class CtlTipoMovimiento
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombreMovimiento;

    /**
     * @var string
     */
    private $descripcionMovmiento;

    /**
     * @var integer
     */
    private $agregaMovimiento;


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
     * Set nombreMovimiento
     *
     * @param string $nombreMovimiento
     * @return CtlTipoMovimiento
     */
    public function setNombreMovimiento($nombreMovimiento)
    {
        $this->nombreMovimiento = $nombreMovimiento;

        return $this;
    }

    /**
     * Get nombreMovimiento
     *
     * @return string 
     */
    public function getNombreMovimiento()
    {
        return $this->nombreMovimiento;
    }

    /**
     * Set descripcionMovmiento
     *
     * @param string $descripcionMovmiento
     * @return CtlTipoMovimiento
     */
    public function setDescripcionMovmiento($descripcionMovmiento)
    {
        $this->descripcionMovmiento = $descripcionMovmiento;

        return $this;
    }

    /**
     * Get descripcionMovmiento
     *
     * @return string 
     */
    public function getDescripcionMovmiento()
    {
        return $this->descripcionMovmiento;
    }

    /**
     * Set agregaMovimiento
     *
     * @param integer $agregaMovimiento
     * @return CtlTipoMovimiento
     */
    public function setAgregaMovimiento($agregaMovimiento)
    {
        $this->agregaMovimiento = $agregaMovimiento;

        return $this;
    }

    /**
     * Get agregaMovimiento
     *
     * @return integer 
     */
    public function getAgregaMovimiento()
    {
        return $this->agregaMovimiento;
    }
    
    public function __toString(){
		return $this->getNombreMovimiento();
	}
}
