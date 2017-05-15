<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Maladie
 *
 * @ORM\Table(name="maladie")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MaladieRepository")
 */
class Maladie
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="ma_id", type="integer", unique=true)
     */
    private $maId;

    /**
     * @var string
     *
     * @ORM\Column(name="ma_name", type="string", length=255)
     */
    private $maName;

    /**
     * @var bool
     *
     * @ORM\Column(name="ma_traitement", type="boolean")
     */
    private $maTraitement;


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
     * Set maId
     *
     * @param integer $maId
     * @return Maladie
     */
    public function setMaId($maId)
    {
        $this->maId = $maId;

        return $this;
    }

    /**
     * Get maId
     *
     * @return integer 
     */
    public function getMaId()
    {
        return $this->maId;
    }

    /**
     * Set maName
     *
     * @param string $maName
     * @return Maladie
     */
    public function setMaName($maName)
    {
        $this->maName = $maName;

        return $this;
    }

    /**
     * Get maName
     *
     * @return string 
     */
    public function getMaName()
    {
        return $this->maName;
    }

    /**
     * Set maTraitement
     *
     * @param boolean $maTraitement
     * @return Maladie
     */
    public function setMaTraitement($maTraitement)
    {
        $this->maTraitement = $maTraitement;

        return $this;
    }

    /**
     * Get maTraitement
     *
     * @return boolean 
     */
    public function getMaTraitement()
    {
        return $this->maTraitement;
    }
}
