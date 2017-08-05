<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlUnidadMedida
 */
class CtlUnidadMedida
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $unidadesUnidad;

    /**
     * @var \DateTime
     */
    private $registroSchema;

    /**
     * @var string
     */
    private $detalleSchema;

    /**
     * @var integer
     */
    private $userIdSchema;

    /**
     * @var string
     */
    private $ipUserSchema;

    /**
     * @var integer
     */
    private $estadoSchema;

    /**
     * @var integer
     */
    private $enableSchema;

    /**
     * @var string
     */
    private $nombreUnidad;

    /**
     * @var string
     */
    private $detalleUnidadMedida;

    /**
     * @var \Minsal\CoreBundle\Entity\CtlUnidadMedida
     */
    private $ctlUnidadMedidaid;


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
     * Set unidadesUnidad
     *
     * @param integer $unidadesUnidad
     * @return CtlUnidadMedida
     */
    public function setUnidadesUnidad($unidadesUnidad)
    {
        $this->unidadesUnidad = $unidadesUnidad;

        return $this;
    }

    /**
     * Get unidadesUnidad
     *
     * @return integer 
     */
    public function getUnidadesUnidad()
    {
        return $this->unidadesUnidad;
    }

    /**
     * Set registroSchema
     *
     * @param \DateTime $registroSchema
     * @return CtlUnidadMedida
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
     * Set detalleSchema
     *
     * @param string $detalleSchema
     * @return CtlUnidadMedida
     */
    public function setDetalleSchema($detalleSchema)
    {
        $this->detalleSchema = $detalleSchema;

        return $this;
    }

    /**
     * Get detalleSchema
     *
     * @return string 
     */
    public function getDetalleSchema()
    {
        return $this->detalleSchema;
    }

    /**
     * Set userIdSchema
     *
     * @param integer $userIdSchema
     * @return CtlUnidadMedida
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
     * @return CtlUnidadMedida
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
     * Set estadoSchema
     *
     * @param integer $estadoSchema
     * @return CtlUnidadMedida
     */
    public function setEstadoSchema($estadoSchema)
    {
        $this->estadoSchema = $estadoSchema;

        return $this;
    }

    /**
     * Get estadoSchema
     *
     * @return integer 
     */
    public function getEstadoSchema()
    {
        return $this->estadoSchema;
    }

    /**
     * Set enableSchema
     *
     * @param integer $enableSchema
     * @return CtlUnidadMedida
     */
    public function setEnableSchema($enableSchema)
    {
        $this->enableSchema = $enableSchema;

        return $this;
    }

    /**
     * Get enableSchema
     *
     * @return integer 
     */
    public function getEnableSchema()
    {
        return $this->enableSchema;
    }

    /**
     * Set nombreUnidad
     *
     * @param string $nombreUnidad
     * @return CtlUnidadMedida
     */
    public function setNombreUnidad($nombreUnidad)
    {
        $this->nombreUnidad = $nombreUnidad;

        return $this;
    }

    /**
     * Get nombreUnidad
     *
     * @return string 
     */
    public function getNombreUnidad()
    {
        return $this->nombreUnidad;
    }

    /**
     * Set detalleUnidadMedida
     *
     * @param string $detalleUnidadMedida
     * @return CtlUnidadMedida
     */
    public function setDetalleUnidadMedida($detalleUnidadMedida)
    {
        $this->detalleUnidadMedida = $detalleUnidadMedida;

        return $this;
    }

    /**
     * Get detalleUnidadMedida
     *
     * @return string 
     */
    public function getDetalleUnidadMedida()
    {
        return $this->detalleUnidadMedida;
    }

    /**
     * Set ctlUnidadMedidaid
     *
     * @param \Minsal\CoreBundle\Entity\CtlUnidadMedida $ctlUnidadMedidaid
     * @return CtlUnidadMedida
     */
    public function setCtlUnidadMedidaid(\Minsal\CoreBundle\Entity\CtlUnidadMedida $ctlUnidadMedidaid = null)
    {
        $this->ctlUnidadMedidaid = $ctlUnidadMedidaid;

        return $this;
    }

    /**
     * Get ctlUnidadMedidaid
     *
     * @return \Minsal\CoreBundle\Entity\CtlUnidadMedida 
     */
    public function getCtlUnidadMedidaid()
    {
        return $this->ctlUnidadMedidaid;
    }
}
