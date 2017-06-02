<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlEstablecimiento
 */
class CtlEstablecimiento
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombreEstablecimiento;

    /**
     * @var \Minsal\CoreBundle\Entity\CtlMunicipio
     */
    private $ctlMunicipioid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $ctlInsumoid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ctlInsumoid = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nombreEstablecimiento
     *
     * @param string $nombreEstablecimiento
     * @return CtlEstablecimiento
     */
    public function setNombreEstablecimiento($nombreEstablecimiento)
    {
        $this->nombreEstablecimiento = $nombreEstablecimiento;

        return $this;
    }

    /**
     * Get nombreEstablecimiento
     *
     * @return string 
     */
    public function getNombreEstablecimiento()
    {
        return $this->nombreEstablecimiento;
    }

    /**
     * Set ctlMunicipioid
     *
     * @param \Minsal\CoreBundle\Entity\CtlMunicipio $ctlMunicipioid
     * @return CtlEstablecimiento
     */
    public function setCtlMunicipioid(\Minsal\CoreBundle\Entity\CtlMunicipio $ctlMunicipioid = null)
    {
        $this->ctlMunicipioid = $ctlMunicipioid;

        return $this;
    }

    /**
     * Get ctlMunicipioid
     *
     * @return \Minsal\CoreBundle\Entity\CtlMunicipio 
     */
    public function getCtlMunicipioid()
    {
        return $this->ctlMunicipioid;
    }

    /**
     * Add ctlInsumoid
     *
     * @param \Minsal\CoreBundle\Entity\CtlInsumo $ctlInsumoid
     * @return CtlEstablecimiento
     */
    public function addCtlInsumoid(\Minsal\CoreBundle\Entity\CtlInsumo $ctlInsumoid)
    {
        $this->ctlInsumoid[] = $ctlInsumoid;

        return $this;
    }

    /**
     * Remove ctlInsumoid
     *
     * @param \Minsal\CoreBundle\Entity\CtlInsumo $ctlInsumoid
     */
    public function removeCtlInsumoid(\Minsal\CoreBundle\Entity\CtlInsumo $ctlInsumoid)
    {
        $this->ctlInsumoid->removeElement($ctlInsumoid);
    }

    /**
     * Get ctlInsumoid
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCtlInsumoid()
    {
        return $this->ctlInsumoid;
    }
    /**
     * @var integer
     */
    private $idTipoEstablecimiento;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $direccion;

    /**
     * @var string
     */
    private $telefono;

    /**
     * @var string
     */
    private $fax;

    /**
     * @var string
     */
    private $latitud;

    /**
     * @var string
     */
    private $longitud;

    /**
     * @var integer
     */
    private $idInstitucion;

    /**
     * @var integer
     */
    private $anioApertura;

    /**
     * @var integer
     */
    private $idCatNivelMinsal;

    /**
     * @var string
     */
    private $codestabConsumos;

    /**
     * @var string
     */
    private $codestabSiaf;

    /**
     * @var integer
     */
    private $codUcsf;

    /**
     * @var integer
     */
    private $idCatTipoExpediente;

    /**
     * @var integer
     */
    private $idCatTipoFarmacia;

    /**
     * @var integer
     */
    private $idCatTipoConsumo;

    /**
     * @var integer
     */
    private $instMortalidad;

    /**
     * @var integer
     */
    private $digitaMortalidad;

    /**
     * @var integer
     */
    private $cvcd4;

    /**
     * @var integer
     */
    private $idCatPruebas;

    /**
     * @var boolean
     */
    private $activo;

    /**
     * @var string
     */
    private $idUsuarioReg;

    /**
     * @var \DateTime
     */
    private $fechaHoraReg;

    /**
     * @var string
     */
    private $idUsuarioMod;

    /**
     * @var \DateTime
     */
    private $fechaHoraMod;

    /**
     * @var integer
     */
    private $idestablesimow;

    /**
     * @var integer
     */
    private $idestablevigepes;

    /**
     * @var integer
     */
    private $estadoVigepes;

    /**
     * @var integer
     */
    private $estadoVacunas;

    /**
     * @var integer
     */
    private $estadoSeps;

    /**
     * @var integer
     */
    private $estadoSimow;

    /**
     * @var integer
     */
    private $idestablesumeve;

    /**
     * @var integer
     */
    private $estadoSumeve;

    /**
     * @var boolean
     */
    private $cabezaMicrored;

    /**
     * @var boolean
     */
    private $hospitalizacion;

    /**
     * @var integer
     */
    private $idmicrored;

    /**
     * @var integer
     */
    private $poblacionAsignana;

    /**
     * @var integer
     */
    private $cantidadFamilia;

    /**
     * @var integer
     */
    private $idSituacionLegal;

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
     * @var \Minsal\CoreBundle\Entity\CtlEstablecimiento
     */
    private $idEstablecimientoPadre;

    /**
     * @var \Minsal\CoreBundle\Entity\CtlMunicipio
     */
    private $idMunicipio;


    /**
     * Set idTipoEstablecimiento
     *
     * @param integer $idTipoEstablecimiento
     * @return CtlEstablecimiento
     */
    public function setIdTipoEstablecimiento($idTipoEstablecimiento)
    {
        $this->idTipoEstablecimiento = $idTipoEstablecimiento;

        return $this;
    }

    /**
     * Get idTipoEstablecimiento
     *
     * @return integer 
     */
    public function getIdTipoEstablecimiento()
    {
        return $this->idTipoEstablecimiento;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return CtlEstablecimiento
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return CtlEstablecimiento
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return CtlEstablecimiento
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return CtlEstablecimiento
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set latitud
     *
     * @param string $latitud
     * @return CtlEstablecimiento
     */
    public function setLatitud($latitud)
    {
        $this->latitud = $latitud;

        return $this;
    }

    /**
     * Get latitud
     *
     * @return string 
     */
    public function getLatitud()
    {
        return $this->latitud;
    }

    /**
     * Set longitud
     *
     * @param string $longitud
     * @return CtlEstablecimiento
     */
    public function setLongitud($longitud)
    {
        $this->longitud = $longitud;

        return $this;
    }

    /**
     * Get longitud
     *
     * @return string 
     */
    public function getLongitud()
    {
        return $this->longitud;
    }

    /**
     * Set idInstitucion
     *
     * @param integer $idInstitucion
     * @return CtlEstablecimiento
     */
    public function setIdInstitucion($idInstitucion)
    {
        $this->idInstitucion = $idInstitucion;

        return $this;
    }

    /**
     * Get idInstitucion
     *
     * @return integer 
     */
    public function getIdInstitucion()
    {
        return $this->idInstitucion;
    }

    /**
     * Set anioApertura
     *
     * @param integer $anioApertura
     * @return CtlEstablecimiento
     */
    public function setAnioApertura($anioApertura)
    {
        $this->anioApertura = $anioApertura;

        return $this;
    }

    /**
     * Get anioApertura
     *
     * @return integer 
     */
    public function getAnioApertura()
    {
        return $this->anioApertura;
    }

    /**
     * Set idCatNivelMinsal
     *
     * @param integer $idCatNivelMinsal
     * @return CtlEstablecimiento
     */
    public function setIdCatNivelMinsal($idCatNivelMinsal)
    {
        $this->idCatNivelMinsal = $idCatNivelMinsal;

        return $this;
    }

    /**
     * Get idCatNivelMinsal
     *
     * @return integer 
     */
    public function getIdCatNivelMinsal()
    {
        return $this->idCatNivelMinsal;
    }

    /**
     * Set codestabConsumos
     *
     * @param string $codestabConsumos
     * @return CtlEstablecimiento
     */
    public function setCodestabConsumos($codestabConsumos)
    {
        $this->codestabConsumos = $codestabConsumos;

        return $this;
    }

    /**
     * Get codestabConsumos
     *
     * @return string 
     */
    public function getCodestabConsumos()
    {
        return $this->codestabConsumos;
    }

    /**
     * Set codestabSiaf
     *
     * @param string $codestabSiaf
     * @return CtlEstablecimiento
     */
    public function setCodestabSiaf($codestabSiaf)
    {
        $this->codestabSiaf = $codestabSiaf;

        return $this;
    }

    /**
     * Get codestabSiaf
     *
     * @return string 
     */
    public function getCodestabSiaf()
    {
        return $this->codestabSiaf;
    }

    /**
     * Set codUcsf
     *
     * @param integer $codUcsf
     * @return CtlEstablecimiento
     */
    public function setCodUcsf($codUcsf)
    {
        $this->codUcsf = $codUcsf;

        return $this;
    }

    /**
     * Get codUcsf
     *
     * @return integer 
     */
    public function getCodUcsf()
    {
        return $this->codUcsf;
    }

    /**
     * Set idCatTipoExpediente
     *
     * @param integer $idCatTipoExpediente
     * @return CtlEstablecimiento
     */
    public function setIdCatTipoExpediente($idCatTipoExpediente)
    {
        $this->idCatTipoExpediente = $idCatTipoExpediente;

        return $this;
    }

    /**
     * Get idCatTipoExpediente
     *
     * @return integer 
     */
    public function getIdCatTipoExpediente()
    {
        return $this->idCatTipoExpediente;
    }

    /**
     * Set idCatTipoFarmacia
     *
     * @param integer $idCatTipoFarmacia
     * @return CtlEstablecimiento
     */
    public function setIdCatTipoFarmacia($idCatTipoFarmacia)
    {
        $this->idCatTipoFarmacia = $idCatTipoFarmacia;

        return $this;
    }

    /**
     * Get idCatTipoFarmacia
     *
     * @return integer 
     */
    public function getIdCatTipoFarmacia()
    {
        return $this->idCatTipoFarmacia;
    }

    /**
     * Set idCatTipoConsumo
     *
     * @param integer $idCatTipoConsumo
     * @return CtlEstablecimiento
     */
    public function setIdCatTipoConsumo($idCatTipoConsumo)
    {
        $this->idCatTipoConsumo = $idCatTipoConsumo;

        return $this;
    }

    /**
     * Get idCatTipoConsumo
     *
     * @return integer 
     */
    public function getIdCatTipoConsumo()
    {
        return $this->idCatTipoConsumo;
    }

    /**
     * Set instMortalidad
     *
     * @param integer $instMortalidad
     * @return CtlEstablecimiento
     */
    public function setInstMortalidad($instMortalidad)
    {
        $this->instMortalidad = $instMortalidad;

        return $this;
    }

    /**
     * Get instMortalidad
     *
     * @return integer 
     */
    public function getInstMortalidad()
    {
        return $this->instMortalidad;
    }

    /**
     * Set digitaMortalidad
     *
     * @param integer $digitaMortalidad
     * @return CtlEstablecimiento
     */
    public function setDigitaMortalidad($digitaMortalidad)
    {
        $this->digitaMortalidad = $digitaMortalidad;

        return $this;
    }

    /**
     * Get digitaMortalidad
     *
     * @return integer 
     */
    public function getDigitaMortalidad()
    {
        return $this->digitaMortalidad;
    }

    /**
     * Set cvcd4
     *
     * @param integer $cvcd4
     * @return CtlEstablecimiento
     */
    public function setCvcd4($cvcd4)
    {
        $this->cvcd4 = $cvcd4;

        return $this;
    }

    /**
     * Get cvcd4
     *
     * @return integer 
     */
    public function getCvcd4()
    {
        return $this->cvcd4;
    }

    /**
     * Set idCatPruebas
     *
     * @param integer $idCatPruebas
     * @return CtlEstablecimiento
     */
    public function setIdCatPruebas($idCatPruebas)
    {
        $this->idCatPruebas = $idCatPruebas;

        return $this;
    }

    /**
     * Get idCatPruebas
     *
     * @return integer 
     */
    public function getIdCatPruebas()
    {
        return $this->idCatPruebas;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return CtlEstablecimiento
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean 
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Set idUsuarioReg
     *
     * @param string $idUsuarioReg
     * @return CtlEstablecimiento
     */
    public function setIdUsuarioReg($idUsuarioReg)
    {
        $this->idUsuarioReg = $idUsuarioReg;

        return $this;
    }

    /**
     * Get idUsuarioReg
     *
     * @return string 
     */
    public function getIdUsuarioReg()
    {
        return $this->idUsuarioReg;
    }

    /**
     * Set fechaHoraReg
     *
     * @param \DateTime $fechaHoraReg
     * @return CtlEstablecimiento
     */
    public function setFechaHoraReg($fechaHoraReg)
    {
        $this->fechaHoraReg = $fechaHoraReg;

        return $this;
    }

    /**
     * Get fechaHoraReg
     *
     * @return \DateTime 
     */
    public function getFechaHoraReg()
    {
        return $this->fechaHoraReg;
    }

    /**
     * Set idUsuarioMod
     *
     * @param string $idUsuarioMod
     * @return CtlEstablecimiento
     */
    public function setIdUsuarioMod($idUsuarioMod)
    {
        $this->idUsuarioMod = $idUsuarioMod;

        return $this;
    }

    /**
     * Get idUsuarioMod
     *
     * @return string 
     */
    public function getIdUsuarioMod()
    {
        return $this->idUsuarioMod;
    }

    /**
     * Set fechaHoraMod
     *
     * @param \DateTime $fechaHoraMod
     * @return CtlEstablecimiento
     */
    public function setFechaHoraMod($fechaHoraMod)
    {
        $this->fechaHoraMod = $fechaHoraMod;

        return $this;
    }

    /**
     * Get fechaHoraMod
     *
     * @return \DateTime 
     */
    public function getFechaHoraMod()
    {
        return $this->fechaHoraMod;
    }

    /**
     * Set idestablesimow
     *
     * @param integer $idestablesimow
     * @return CtlEstablecimiento
     */
    public function setIdestablesimow($idestablesimow)
    {
        $this->idestablesimow = $idestablesimow;

        return $this;
    }

    /**
     * Get idestablesimow
     *
     * @return integer 
     */
    public function getIdestablesimow()
    {
        return $this->idestablesimow;
    }

    /**
     * Set idestablevigepes
     *
     * @param integer $idestablevigepes
     * @return CtlEstablecimiento
     */
    public function setIdestablevigepes($idestablevigepes)
    {
        $this->idestablevigepes = $idestablevigepes;

        return $this;
    }

    /**
     * Get idestablevigepes
     *
     * @return integer 
     */
    public function getIdestablevigepes()
    {
        return $this->idestablevigepes;
    }

    /**
     * Set estadoVigepes
     *
     * @param integer $estadoVigepes
     * @return CtlEstablecimiento
     */
    public function setEstadoVigepes($estadoVigepes)
    {
        $this->estadoVigepes = $estadoVigepes;

        return $this;
    }

    /**
     * Get estadoVigepes
     *
     * @return integer 
     */
    public function getEstadoVigepes()
    {
        return $this->estadoVigepes;
    }

    /**
     * Set estadoVacunas
     *
     * @param integer $estadoVacunas
     * @return CtlEstablecimiento
     */
    public function setEstadoVacunas($estadoVacunas)
    {
        $this->estadoVacunas = $estadoVacunas;

        return $this;
    }

    /**
     * Get estadoVacunas
     *
     * @return integer 
     */
    public function getEstadoVacunas()
    {
        return $this->estadoVacunas;
    }

    /**
     * Set estadoSeps
     *
     * @param integer $estadoSeps
     * @return CtlEstablecimiento
     */
    public function setEstadoSeps($estadoSeps)
    {
        $this->estadoSeps = $estadoSeps;

        return $this;
    }

    /**
     * Get estadoSeps
     *
     * @return integer 
     */
    public function getEstadoSeps()
    {
        return $this->estadoSeps;
    }

    /**
     * Set estadoSimow
     *
     * @param integer $estadoSimow
     * @return CtlEstablecimiento
     */
    public function setEstadoSimow($estadoSimow)
    {
        $this->estadoSimow = $estadoSimow;

        return $this;
    }

    /**
     * Get estadoSimow
     *
     * @return integer 
     */
    public function getEstadoSimow()
    {
        return $this->estadoSimow;
    }

    /**
     * Set idestablesumeve
     *
     * @param integer $idestablesumeve
     * @return CtlEstablecimiento
     */
    public function setIdestablesumeve($idestablesumeve)
    {
        $this->idestablesumeve = $idestablesumeve;

        return $this;
    }

    /**
     * Get idestablesumeve
     *
     * @return integer 
     */
    public function getIdestablesumeve()
    {
        return $this->idestablesumeve;
    }

    /**
     * Set estadoSumeve
     *
     * @param integer $estadoSumeve
     * @return CtlEstablecimiento
     */
    public function setEstadoSumeve($estadoSumeve)
    {
        $this->estadoSumeve = $estadoSumeve;

        return $this;
    }

    /**
     * Get estadoSumeve
     *
     * @return integer 
     */
    public function getEstadoSumeve()
    {
        return $this->estadoSumeve;
    }

    /**
     * Set cabezaMicrored
     *
     * @param boolean $cabezaMicrored
     * @return CtlEstablecimiento
     */
    public function setCabezaMicrored($cabezaMicrored)
    {
        $this->cabezaMicrored = $cabezaMicrored;

        return $this;
    }

    /**
     * Get cabezaMicrored
     *
     * @return boolean 
     */
    public function getCabezaMicrored()
    {
        return $this->cabezaMicrored;
    }

    /**
     * Set hospitalizacion
     *
     * @param boolean $hospitalizacion
     * @return CtlEstablecimiento
     */
    public function setHospitalizacion($hospitalizacion)
    {
        $this->hospitalizacion = $hospitalizacion;

        return $this;
    }

    /**
     * Get hospitalizacion
     *
     * @return boolean 
     */
    public function getHospitalizacion()
    {
        return $this->hospitalizacion;
    }

    /**
     * Set idmicrored
     *
     * @param integer $idmicrored
     * @return CtlEstablecimiento
     */
    public function setIdmicrored($idmicrored)
    {
        $this->idmicrored = $idmicrored;

        return $this;
    }

    /**
     * Get idmicrored
     *
     * @return integer 
     */
    public function getIdmicrored()
    {
        return $this->idmicrored;
    }

    /**
     * Set poblacionAsignana
     *
     * @param integer $poblacionAsignana
     * @return CtlEstablecimiento
     */
    public function setPoblacionAsignana($poblacionAsignana)
    {
        $this->poblacionAsignana = $poblacionAsignana;

        return $this;
    }

    /**
     * Get poblacionAsignana
     *
     * @return integer 
     */
    public function getPoblacionAsignana()
    {
        return $this->poblacionAsignana;
    }

    /**
     * Set cantidadFamilia
     *
     * @param integer $cantidadFamilia
     * @return CtlEstablecimiento
     */
    public function setCantidadFamilia($cantidadFamilia)
    {
        $this->cantidadFamilia = $cantidadFamilia;

        return $this;
    }

    /**
     * Get cantidadFamilia
     *
     * @return integer 
     */
    public function getCantidadFamilia()
    {
        return $this->cantidadFamilia;
    }

    /**
     * Set idSituacionLegal
     *
     * @param integer $idSituacionLegal
     * @return CtlEstablecimiento
     */
    public function setIdSituacionLegal($idSituacionLegal)
    {
        $this->idSituacionLegal = $idSituacionLegal;

        return $this;
    }

    /**
     * Get idSituacionLegal
     *
     * @return integer 
     */
    public function getIdSituacionLegal()
    {
        return $this->idSituacionLegal;
    }

    /**
     * Set registroSchema
     *
     * @param \DateTime $registroSchema
     * @return CtlEstablecimiento
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
     * @return CtlEstablecimiento
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
     * @return CtlEstablecimiento
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
     * @return CtlEstablecimiento
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
     * @return CtlEstablecimiento
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
     * @return CtlEstablecimiento
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
     * Set idEstablecimientoPadre
     *
     * @param \Minsal\CoreBundle\Entity\CtlEstablecimiento $idEstablecimientoPadre
     * @return CtlEstablecimiento
     */
    public function setIdEstablecimientoPadre(\Minsal\CoreBundle\Entity\CtlEstablecimiento $idEstablecimientoPadre = null)
    {
        $this->idEstablecimientoPadre = $idEstablecimientoPadre;

        return $this;
    }

    /**
     * Get idEstablecimientoPadre
     *
     * @return \Minsal\CoreBundle\Entity\CtlEstablecimiento 
     */
    public function getIdEstablecimientoPadre()
    {
        return $this->idEstablecimientoPadre;
    }

    /**
     * Set idMunicipio
     *
     * @param \Minsal\CoreBundle\Entity\CtlMunicipio $idMunicipio
     * @return CtlEstablecimiento
     */
    public function setIdMunicipio(\Minsal\CoreBundle\Entity\CtlMunicipio $idMunicipio = null)
    {
        $this->idMunicipio = $idMunicipio;

        return $this;
    }

    /**
     * Get idMunicipio
     *
     * @return \Minsal\CoreBundle\Entity\CtlMunicipio 
     */
    public function getIdMunicipio()
    {
        return $this->idMunicipio;
    }
    
    public function __toString(){
		return $this->getNombre();
	}
}
