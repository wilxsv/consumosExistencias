<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlIndicadores
 */
class CtlIndicadores
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Minsal\CoreBundle\Entity\CtlInsumo
     */
    private $insumo;


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
     * Set insumo
     *
     * @param \Minsal\CoreBundle\Entity\CtlInsumo $insumo
     * @return CtlIndicadores
     */
    public function setInsumo(\Minsal\CoreBundle\Entity\CtlInsumo $insumo = null)
    {
        $this->insumo = $insumo;

        return $this;
    }

    /**
     * Get insumo
     *
     * @return \Minsal\CoreBundle\Entity\CtlInsumo 
     */
    public function getInsumo()
    {
        return $this->insumo;
    }
    /**
     * @var string
     */
    private $userIpSchema;

    /**
     * @var \DateTime
     */
    private $registroSchema;

    /**
     * @var \Minsal\CoreBundle\Entity\FosUser
     */
    private $userSchema;


    /**
     * Set userIpSchema
     *
     * @param string $userIpSchema
     * @return CtlIndicadores
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
     * @return CtlIndicadores
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
     * Set userSchema
     *
     * @param \Minsal\CoreBundle\Entity\FosUser $userSchema
     * @return CtlIndicadores
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
