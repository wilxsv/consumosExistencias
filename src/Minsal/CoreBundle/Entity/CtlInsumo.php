<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlInsumo
 */
class CtlInsumo
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $codigoNu;

    /**
     * @var string
     */
    private $codigoSinab;

    /**
     * @var string
     */
    private $codigoEcri;

    /**
     * @var string
     */
    private $codigoAtc;

    /**
     * @var boolean
     */
    private $listadoOficial;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_largo_insumo", type="string", length=500, nullable=false)
     */
    private $nombreLargo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $componente;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $ctlEstablecimientoid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->componente = new \Doctrine\Common\Collections\ArrayCollection();
        $this->ctlEstablecimientoid = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set codigoNu
     *
     * @param string $codigoNu
     * @return CtlInsumo
     */
    public function setCodigoNu($codigoNu)
    {
        $this->codigoNu = $codigoNu;

        return $this;
    }

    /**
     * Get codigoNu
     *
     * @return string 
     */
    public function getCodigoNu()
    {
        return $this->codigoNu;
    }

    /**
     * Set codigoSinab
     *
     * @param string $codigoSinab
     * @return CtlInsumo
     */
    public function setCodigoSinab($codigoSinab)
    {
        $this->codigoSinab = $codigoSinab;

        return $this;
    }

    /**
     * Get codigoSinab
     *
     * @return string 
     */
    public function getCodigoSinab()
    {
        return $this->codigoSinab;
    }

    /**
     * Set codigoEcri
     *
     * @param string $codigoEcri
     * @return CtlInsumo
     */
    public function setCodigoEcri($codigoEcri)
    {
        $this->codigoEcri = $codigoEcri;

        return $this;
    }

    /**
     * Get codigoEcri
     *
     * @return string 
     */
    public function getCodigoEcri()
    {
        return $this->codigoEcri;
    }

    /**
     * Set codigoAtc
     *
     * @param string $codigoAtc
     * @return CtlInsumo
     */
    public function setCodigoAtc($codigoAtc)
    {
        $this->codigoAtc = $codigoAtc;

        return $this;
    }

    /**
     * Get codigoAtc
     *
     * @return string 
     */
    public function getCodigoAtc()
    {
        return $this->codigoAtc;
    }

    /**
     * Set listadoOficial
     *
     * @param boolean $listadoOficial
     * @return CtlInsumo
     */
    public function setListadoOficial($listadoOficial)
    {
        $this->listadoOficial = $listadoOficial;

        return $this;
    }

    /**
     * Get listadoOficial
     *
     * @return boolean 
     */
    public function getListadoOficial()
    {
        return $this->listadoOficial;
    }

    /**
     * Set nombreLargo
     *
     * @param string $nombreLargo
     * @return CtlInsumo
     */
    public function setNombreLargo($nombreLargo)
    {
        $this->nombreLargo = $nombreLargo;

        return $this;
    }

    /**
     * Get nombreLargo
     *
     * @return string 
     */
    public function getNombreLargo()
    {
        return $this->nombreLargo;
    }

    /**
     * Add componente
     *
     * @param \Minsal\CoreBundle\Entity\CtlComponente $componente
     * @return CtlInsumo
     */
    public function addComponente(\Minsal\CoreBundle\Entity\CtlComponente $componente)
    {
        $this->componente[] = $componente;

        return $this;
    }

    /**
     * Remove componente
     *
     * @param \Minsal\CoreBundle\Entity\CtlComponente $componente
     */
    public function removeComponente(\Minsal\CoreBundle\Entity\CtlComponente $componente)
    {
        $this->componente->removeElement($componente);
    }

    /**
     * Get componente
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComponente()
    {
        return $this->componente;
    }

    /**
     * Add ctlEstablecimientoid
     *
     * @param \Minsal\CoreBundle\Entity\CtlEstablecimiento $ctlEstablecimientoid
     * @return CtlInsumo
     */
    public function addCtlEstablecimientoid(\Minsal\CoreBundle\Entity\CtlEstablecimiento $ctlEstablecimientoid)
    {
        $this->ctlEstablecimientoid[] = $ctlEstablecimientoid;

        return $this;
    }

    /**
     * Remove ctlEstablecimientoid
     *
     * @param \Minsal\CoreBundle\Entity\CtlEstablecimiento $ctlEstablecimientoid
     */
    public function removeCtlEstablecimientoid(\Minsal\CoreBundle\Entity\CtlEstablecimiento $ctlEstablecimientoid)
    {
        $this->ctlEstablecimientoid->removeElement($ctlEstablecimientoid);
    }

    /**
     * Get ctlEstablecimientoid
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCtlEstablecimientoid()
    {
        return $this->ctlEstablecimientoid;
    }
    /**
     * @var integer
     */
    private $ctlProductoid;

    /**
     * @var integer
     */
    private $ctlNivelUsoid;

    /**
     * @var integer
     */
    private $ctlFormaFarmaceuticaId;

    /**
     * @var integer
     */
    private $ctlPresentacionid;

    /**
     * @var integer
     */
    private $ctlProgramaid;

    /**
     * @var integer
     */
    private $ctlUnidadMedidaid;

    /**
     * @var integer
     */
    private $grupoid;

    /**
     * @var integer
     */
    private $codificacionInsumo;

    /**
     * @var integer
     */
    private $codigoSinabExt;

    /**
     * @var string
     */
    private $nombreLargoInsumo;

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
    private $detalleInsumo;


    /**
     * Set ctlProductoid
     *
     * @param integer $ctlProductoid
     * @return CtlInsumo
     */
    public function setCtlProductoid($ctlProductoid)
    {
        $this->ctlProductoid = $ctlProductoid;

        return $this;
    }

    /**
     * Get ctlProductoid
     *
     * @return integer 
     */
    public function getCtlProductoid()
    {
        return $this->ctlProductoid;
    }

    /**
     * Set ctlNivelUsoid
     *
     * @param integer $ctlNivelUsoid
     * @return CtlInsumo
     */
    public function setCtlNivelUsoid($ctlNivelUsoid)
    {
        $this->ctlNivelUsoid = $ctlNivelUsoid;

        return $this;
    }

    /**
     * Get ctlNivelUsoid
     *
     * @return integer 
     */
    public function getCtlNivelUsoid()
    {
        return $this->ctlNivelUsoid;
    }

    /**
     * Set ctlFormaFarmaceuticaId
     *
     * @param integer $ctlFormaFarmaceuticaId
     * @return CtlInsumo
     */
    public function setCtlFormaFarmaceuticaId($ctlFormaFarmaceuticaId)
    {
        $this->ctlFormaFarmaceuticaId = $ctlFormaFarmaceuticaId;

        return $this;
    }

    /**
     * Get ctlFormaFarmaceuticaId
     *
     * @return integer 
     */
    public function getCtlFormaFarmaceuticaId()
    {
        return $this->ctlFormaFarmaceuticaId;
    }

    /**
     * Set ctlPresentacionid
     *
     * @param integer $ctlPresentacionid
     * @return CtlInsumo
     */
    public function setCtlPresentacionid($ctlPresentacionid)
    {
        $this->ctlPresentacionid = $ctlPresentacionid;

        return $this;
    }

    /**
     * Get ctlPresentacionid
     *
     * @return integer 
     */
    public function getCtlPresentacionid()
    {
        return $this->ctlPresentacionid;
    }

    /**
     * Set ctlProgramaid
     *
     * @param integer $ctlProgramaid
     * @return CtlInsumo
     */
    public function setCtlProgramaid($ctlProgramaid)
    {
        $this->ctlProgramaid = $ctlProgramaid;

        return $this;
    }

    /**
     * Get ctlProgramaid
     *
     * @return integer 
     */
    public function getCtlProgramaid()
    {
        return $this->ctlProgramaid;
    }

    /**
     * Set ctlUnidadMedidaid
     *
     * @param integer $ctlUnidadMedidaid
     * @return CtlInsumo
     */
    public function setCtlUnidadMedidaid($ctlUnidadMedidaid)
    {
        $this->ctlUnidadMedidaid = $ctlUnidadMedidaid;

        return $this;
    }

    /**
     * Get ctlUnidadMedidaid
     *
     * @return integer 
     */
    public function getCtlUnidadMedidaid()
    {
        return $this->ctlUnidadMedidaid;
    }

    /**
     * Set grupoid
     *
     * @param integer $grupoid
     * @return CtlInsumo
     */
    public function setGrupoid($grupoid)
    {
        $this->grupoid = $grupoid;

        return $this;
    }

    /**
     * Get grupoid
     *
     * @return integer 
     */
    public function getGrupoid()
    {
        return $this->grupoid;
    }

    /**
     * Set codificacionInsumo
     *
     * @param integer $codificacionInsumo
     * @return CtlInsumo
     */
    public function setCodificacionInsumo($codificacionInsumo)
    {
        $this->codificacionInsumo = $codificacionInsumo;

        return $this;
    }

    /**
     * Get codificacionInsumo
     *
     * @return integer 
     */
    public function getCodificacionInsumo()
    {
        return $this->codificacionInsumo;
    }

    /**
     * Set codigoSinabExt
     *
     * @param integer $codigoSinabExt
     * @return CtlInsumo
     */
    public function setCodigoSinabExt($codigoSinabExt)
    {
        $this->codigoSinabExt = $codigoSinabExt;

        return $this;
    }

    /**
     * Get codigoSinabExt
     *
     * @return integer 
     */
    public function getCodigoSinabExt()
    {
        return $this->codigoSinabExt;
    }

    /**
     * Set nombreLargoInsumo
     *
     * @param string $nombreLargoInsumo
     * @return CtlInsumo
     */
    public function setNombreLargoInsumo($nombreLargoInsumo)
    {
        $this->nombreLargoInsumo = $nombreLargoInsumo;

        return $this;
    }

    /**
     * Get nombreLargoInsumo
     *
     * @return string 
     */
    public function getNombreLargoInsumo()
    {
        return $this->nombreLargoInsumo;
    }

    /**
     * Set registroSchema
     *
     * @param \DateTime $registroSchema
     * @return CtlInsumo
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
     * @return CtlInsumo
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
     * @return CtlInsumo
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
     * @return CtlInsumo
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
     * @return CtlInsumo
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
     * @return CtlInsumo
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
     * Set detalleInsumo
     *
     * @param string $detalleInsumo
     * @return CtlInsumo
     */
    public function setDetalleInsumo($detalleInsumo)
    {
        $this->detalleInsumo = $detalleInsumo;

        return $this;
    }

    /**
     * Get detalleInsumo
     *
     * @return string 
     */
    public function getDetalleInsumo()
    {
        return $this->detalleInsumo;
    }
    public function __toString(){
		return $this->getNombreLargoInsumo();
	}
}