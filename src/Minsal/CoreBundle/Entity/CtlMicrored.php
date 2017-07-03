<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlMicrored
 */
class CtlMicrored
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var integer
     */
    private $codigoc3;


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
     * Set nombre
     *
     * @param string $nombre
     * @return CtlMicrored
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
     * Set codigoc3
     *
     * @param integer $codigoc3
     * @return CtlMicrored
     */
    public function setCodigoc3($codigoc3)
    {
        $this->codigoc3 = $codigoc3;

        return $this;
    }

    /**
     * Get codigoc3
     *
     * @return integer 
     */
    public function getCodigoc3()
    {
        return $this->codigoc3;
    }
}
