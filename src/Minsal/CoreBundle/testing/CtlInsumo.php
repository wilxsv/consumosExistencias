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
     * @var string
     */
    private $codigoSinab;

    /**
     * @var string
     */
    private $codificacionInsumo;

    /**
     * @var integer
     */
    private $codigoSinabExt;

    /**
     * @var boolean
     */
    private $listadoOficial;

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
     * @var integer
     */
    private $venInsumo;

    /**
     * @var float
     */
    private $costoInsumo;

    /**
     * @var boolean
     */
    private $procesadoInsumo;

    /**
     * @var string
     */
    private $especificoGastoInsumo;

    /**
     * @var \Minsal\CoreBundle\Entity\CtlUnidadMedida
     */
    private $ctlUnidadMedidaid;

    /**
     * @var \Minsal\CoreBundle\Entity\CtlGrupo
     */
    private $grupoid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $ctlEstablecimientoid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $componente;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ctlEstablecimientoid = new \Doctrine\Common\Collections\ArrayCollection();
        $this->componente = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set codificacionInsumo
     *
     * @param string $codificacionInsumo
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
     * @return string 
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

    /**
     * Set venInsumo
     *
     * @param integer $venInsumo
     * @return CtlInsumo
     */
    public function setVenInsumo($venInsumo)
    {
        $this->venInsumo = $venInsumo;

        return $this;
    }

    /**
     * Get venInsumo
     *
     * @return integer 
     */
    public function getVenInsumo()
    {
        return $this->venInsumo;
    }

    /**
     * Set costoInsumo
     *
     * @param float $costoInsumo
     * @return CtlInsumo
     */
    public function setCostoInsumo($costoInsumo)
    {
        $this->costoInsumo = $costoInsumo;

        return $this;
    }

    /**
     * Get costoInsumo
     *
     * @return float 
     */
    public function getCostoInsumo()
    {
        return $this->costoInsumo;
    }

    /**
     * Set procesadoInsumo
     *
     * @param boolean $procesadoInsumo
     * @return CtlInsumo
     */
    public function setProcesadoInsumo($procesadoInsumo)
    {
        $this->procesadoInsumo = $procesadoInsumo;

        return $this;
    }

    /**
     * Get procesadoInsumo
     *
     * @return boolean 
     */
    public function getProcesadoInsumo()
    {
        return $this->procesadoInsumo;
    }

    /**
     * Set especificoGastoInsumo
     *
     * @param string $especificoGastoInsumo
     * @return CtlInsumo
     */
    public function setEspecificoGastoInsumo($especificoGastoInsumo)
    {
        $this->especificoGastoInsumo = $especificoGastoInsumo;

        return $this;
    }

    /**
     * Get especificoGastoInsumo
     *
     * @return string 
     */
    public function getEspecificoGastoInsumo()
    {
        return $this->especificoGastoInsumo;
    }

    /**
     * Set ctlUnidadMedidaid
     *
     * @param \Minsal\CoreBundle\Entity\CtlUnidadMedida $ctlUnidadMedidaid
     * @return CtlInsumo
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

    /**
     * Set grupoid
     *
     * @param \Minsal\CoreBundle\Entity\CtlGrupo $grupoid
     * @return CtlInsumo
     */
    public function setGrupoid(\Minsal\CoreBundle\Entity\CtlGrupo $grupoid = null)
    {
        $this->grupoid = $grupoid;

        return $this;
    }

    /**
     * Get grupoid
     *
     * @return \Minsal\CoreBundle\Entity\CtlGrupo 
     */
    public function getGrupoid()
    {
        return $this->grupoid;
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
}
