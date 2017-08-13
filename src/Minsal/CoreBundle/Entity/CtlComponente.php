<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlComponente
 */
class CtlComponente
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombreComponente;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $insumo;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->insumo = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set nombreComponente
     *
     * @param string $nombreComponente
     * @return CtlComponente
     */
    public function setNombreComponente($nombreComponente)
    {
        $this->nombreComponente = $nombreComponente;

        return $this;
    }

    /**
     * Get nombreComponente
     *
     * @return string 
     */
    public function getNombreComponente()
    {
        return $this->nombreComponente;
    }

    /**
     * Add insumo
     *
     * @param \Minsal\CoreBundle\Entity\CtlInsumo $insumo
     * @return CtlComponente
     */
    public function addInsumo(\Minsal\CoreBundle\Entity\CtlInsumo $insumo)
    {
        $this->insumo[] = $insumo;

        return $this;
    }

    /**
     * Remove insumo
     *
     * @param \Minsal\CoreBundle\Entity\CtlInsumo $insumo
     */
    public function removeInsumo(\Minsal\CoreBundle\Entity\CtlInsumo $insumo)
    {
        $this->insumo->removeElement($insumo);
    }

    /**
     * Get insumo
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getInsumo()
    {
        return $this->insumo;
    }
    /**
     * @var \Minsal\CoreBundle\Entity\CtlRol
     */
    private $roleRegistraComponente;


    /**
     * Set roleRegistraComponente
     *
     * @param \Minsal\CoreBundle\Entity\CtlRol $roleRegistraComponente
     * @return CtlComponente
     */
    public function setRoleRegistraComponente(\Minsal\CoreBundle\Entity\CtlRol $roleRegistraComponente = null)
    {
        $this->roleRegistraComponente = $roleRegistraComponente;

        return $this;
    }

    /**
     * Get roleRegistraComponente
     *
     * @return \Minsal\CoreBundle\Entity\CtlRol 
     */
    public function getRoleRegistraComponente()
    {
        return $this->roleRegistraComponente;
    }
    /**
     * @var integer
     */
    private $presicionComponente;


    /**
     * Set presicionComponente
     *
     * @param integer $presicionComponente
     * @return CtlComponente
     */
    public function setPresicionComponente($presicionComponente)
    {
        $this->presicionComponente = $presicionComponente;

        return $this;
    }

    /**
     * Get presicionComponente
     *
     * @return integer 
     */
    public function getPresicionComponente()
    {
        return $this->presicionComponente;
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
     * @return CtlComponente
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
     * @return CtlComponente
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
     * @return CtlComponente
     */
     //
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
