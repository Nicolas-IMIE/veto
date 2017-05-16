<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ClientRepository")
 */
class Client
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
     * @ORM\Column(name="cl_id", type="integer", unique=true)
     */
    private $clId;

    /**
     * @var string
     *
     * @ORM\Column(name="cl_name", type="string", length=255)
     */
    private $clName;

    /**
     * @var string
     *
     * @ORM\Column(name="cl_espece", type="string", length=255)
     */
    private $clEspece;


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
     * Set clId
     *
     * @param integer $clId
     * @return Client
     */
    public function setClId($clId)
    {
        $this->clId = $clId;

        return $this;
    }

    /**
     * Get clId
     *
     * @return integer 
     */
    public function getClId()
    {
        return $this->clId;
    }

    /**
     * Set clName
     *
     * @param string $clName
     * @return Client
     */
    public function setClName($clName)
    {
        $this->clName = $clName;

        return $this;
    }

    /**
     * Get clName
     *
     * @return string 
     */
    public function getClName()
    {
        return $this->clName;
    }

    /**
     * Set clEspece
     *
     * @param string $clEspece
     * @return Client
     */
    public function setClEspece($clEspece)
    {
        $this->clEspece = $clEspece;

        return $this;
    }

    /**
     * Get clEspece
     *
     * @return string 
     */
    public function getClEspece()
    {
        return $this->clEspece;
    }
}
