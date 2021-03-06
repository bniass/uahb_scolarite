<?php

namespace UAHB\ScolariteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AnneeScolaire
 *
 * @ORM\Table(name="annee_scolaire")
 * @ORM\Entity(repositoryClass="UAHB\ScolariteBundle\Repository\AnneeScolaireRepository")
 */
class AnneeScolaire
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
     * @var string
     *
     * @ORM\Column(name="anneeAccademique", type="string", length=10, unique=true)
     */
    private $anneeAccademique;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datedebut", type="date", unique=true)
     */
    private $datedebut;

    /**
     * @var int
     *
     * @ORM\Column(name="oeuvreSocial", type="integer")
     */
    private $oeuvreSocial;

    /**
     * @var int
     *
     * @ORM\Column(name="dureeFormation", type="integer")
     */
    private $dureeFormation;
    
    /**
     * @var int
     *
     * @ORM\Column(name="moisDebut", type="integer")
     */
    private $moisDebut;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set anneeAccademique
     *
     * @param string $anneeAccademique
     *
     * @return AnneeScolaire
     */
    public function setAnneeAccademique($anneeAccademique)
    {
        $this->anneeAccademique = $anneeAccademique;

        return $this;
    }

    /**
     * Get anneeAccademique
     *
     * @return string
     */
    public function getAnneeAccademique()
    {
        return $this->anneeAccademique;
    }

    /**
     * Set datedebut
     *
     * @param \DateTime $datedebut
     *
     * @return AnneeScolaire
     */
    public function setDatedebut($datedebut)
    {
        $this->datedebut = $datedebut;

        return $this;
    }

    /**
     * Get datedebut
     *
     * @return \DateTime
     */
    public function getDatedebut()
    {
        return $this->datedebut;
    }

    /**
     * Set oeuvreSocial
     *
     * @param integer $oeuvreSocial
     *
     * @return AnneeScolaire
     */
    public function setOeuvreSocial($oeuvreSocial)
    {
        $this->oeuvreSocial = $oeuvreSocial;

        return $this;
    }

    /**
     * Get oeuvreSocial
     *
     * @return int
     */
    public function getOeuvreSocial()
    {
        return $this->oeuvreSocial;
    }

    /**
     * Set dureeFormation
     *
     * @param integer $dureeFormation
     *
     * @return AnneeScolaire
     */
    public function setDureeFormation($dureeFormation)
    {
        $this->dureeFormation = $dureeFormation;

        return $this;
    }

    /**
     * Get dureeFormation
     *
     * @return integer
     */
    public function getDureeFormation()
    {
        return $this->dureeFormation;
    }

    /**
     * Set moisDebut
     *
     * @param integer $moisDebut
     *
     * @return AnneeScolaire
     */
    public function setMoisDebut($moisDebut)
    {
        $this->moisDebut = $moisDebut;

        return $this;
    }

    /**
     * Get moisDebut
     *
     * @return integer
     */
    public function getMoisDebut()
    {
        return $this->moisDebut;
    }
}
