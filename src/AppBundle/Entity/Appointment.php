<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Appointment
 *
 * @ORM\Table(name="appointment")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AppointmentRepository")
 */
class Appointment
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
     * @ORM\Column(name="app_id", type="integer")
     */
    private $appId;

    /**
     * @var string
     *
     * @ORM\Column(name="app_client", type="string", length=255)
     */
    private $appClient;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="app_date", type="datetime")
     */
    private $appDate;


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
     * Set appId
     *
     * @param integer $appId
     * @return Appointment
     */
    public function setAppId($appId)
    {
        $this->appId = $appId;

        return $this;
    }

    /**
     * Get appId
     *
     * @return integer 
     */
    public function getAppId()
    {
        return $this->appId;
    }

    /**
     * Set appClient
     *
     * @param string $appClient
     * @return Appointment
     */
    public function setAppClient($appClient)
    {
        $this->appClient = $appClient;

        return $this;
    }

    /**
     * Get appClient
     *
     * @return string 
     */
    public function getAppClient()
    {
        return $this->appClient;
    }

    /**
     * Set appDate
     *
     * @param \DateTime $appDate
     * @return Appointment
     */
    public function setAppDate($appDate)
    {
        $this->appDate = $appDate;

        return $this;
    }

    /**
     * Get appDate
     *
     * @return \DateTime 
     */
    public function getAppDate()
    {
        return $this->appDate;
    }
}
