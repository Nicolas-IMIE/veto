<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Docteur
 *
 * @ORM\Table(name="docteur")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DocteurRepository")
 */
class Docteur
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
     * @ORM\Column(name="doc_id", type="integer", unique=true)
     */
    private $docId;

    /**
     * @var string
     *
     * @ORM\Column(name="doc_name", type="string", length=255)
     */
    private $docName;


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
     * Set docId
     *
     * @param integer $docId
     * @return Docteur
     */
    public function setDocId($docId)
    {
        $this->docId = $docId;

        return $this;
    }

    /**
     * Get docId
     *
     * @return integer 
     */
    public function getDocId()
    {
        return $this->docId;
    }

    /**
     * Set docName
     *
     * @param string $docName
     * @return Docteur
     */
    public function setDocName($docName)
    {
        $this->docName = $docName;

        return $this;
    }

    /**
     * Get docName
     *
     * @return string 
     */
    public function getDocName()
    {
        return $this->docName;
    }
}
