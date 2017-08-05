<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlSuministro
 */
class CtlSuministro
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombreSuministro;

    /**
     * @var \DateTime
     */
    private $registroSchema;

    /**
     * @var integer
     */
    private $enableSchema;

    /**
     * @var \Minsal\CoreBundle\Entity\CtlRol
     */
    private $roleRegistra;


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
     * Set nombreSuministro
     *
     * @param string $nombreSuministro
     * @return CtlSuministro
     */
    public function setNombreSuministro($nombreSuministro)
    {
        $this->nombreSuministro = $nombreSuministro;

        return $this;
    }

    /**
     * Get nombreSuministro
     *
     * @return string 
     */
    public function getNombreSuministro()
    {
        return $this->nombreSuministro;
    }

    /**
     * Set registroSchema
     *
     * @param \DateTime $registroSchema
     * @return CtlSuministro
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
     * Set enableSchema
     *
     * @param integer $enableSchema
     * @return CtlSuministro
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
     * Set roleRegistra
     *
     * @param \Minsal\CoreBundle\Entity\CtlRol $roleRegistra
     * @return CtlSuministro
     */
    public function setRoleRegistra(\Minsal\CoreBundle\Entity\CtlRol $roleRegistra = null)
    {
        $this->roleRegistra = $roleRegistra;

        return $this;
    }

    /**
     * Get roleRegistra
     *
     * @return \Minsal\CoreBundle\Entity\CtlRol 
     */
    public function getRoleRegistra()
    {
        return $this->roleRegistra;
    }
}
