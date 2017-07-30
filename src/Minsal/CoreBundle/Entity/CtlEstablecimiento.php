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
     * @var \DateTime
     */
    private $registroSchema;

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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $insumo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="CtlInsumo", inversedBy="CtlEstablecimiento")
     * @ORM\JoinTable(name="cuadro_basico",
     *   joinColumns={
     *     @ORM\JoinColumn(name="ctl_establecimientoid", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="ctl_insumoid", referencedColumnName="id")
     *   }
     * )
     */
    private $ctlInsumoid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->insumo = new \Doctrine\Common\Collections\ArrayCollection();
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

    /**
     * Add insumo
     *
     * @param \Minsal\CoreBundle\Entity\CtlInsumo $insumo
     * @return CtlEstablecimiento
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
    
    public function __toString(){
		return $this->getNombre();
	}
}
