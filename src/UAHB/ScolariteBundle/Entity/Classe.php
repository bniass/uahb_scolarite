<?php

namespace UAHB\ScolariteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Classe
 *
 * @ORM\Table(name="classe")
 * @ORM\Entity(repositoryClass="UAHB\ScolariteBundle\Repository\ClasseRepository")
 */
class Classe
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
     * @ORM\Column(name="libelle", type="string", length=30)
     */
    private $libelle;

    /**
     * @ORM\ManyToOne(targetEntity="UAHB\ScolariteBundle\Entity\Filiere", inversedBy="classes")
     * @ORM\JoinColumn(nullable=false)
    */
    private $filiere;

    /**
     * @var int
     *
     * @ORM\Column(name="droitInscription", type="integer")
     */
    private $droitInscription;

    /**
     * @var int
     *
     * @ORM\Column(name="mensualite", type="integer")
     */
    private $mensualite;

    /**
     * @var int
     *
     * @ORM\Column(name="fraisSoutenance", type="integer")
     */
    private $fraisSoutenance = 0;

    /**
     * @ORM\OneToMany(targetEntity="UAHB\ScolariteBundle\Entity\ClasseOption", mappedBy="classe")
     * @ORM\JoinColumn(nullable=true)
     */
    private $classeOptions;

    /**
     * @ORM\OneToMany(targetEntity="UAHB\ScolariteBundle\Entity\UniteEnseignement", mappedBy="classe")
     * @ORM\JoinColumn(nullable=true)
    */
    private $uniteenseignements; 

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
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Classe
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->classeOptions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set filiere
     *
     * @param \UAHB\ScolariteBundle\Entity\Filiere $filiere
     *
     * @return Classe
     */
    public function setFiliere(\UAHB\ScolariteBundle\Entity\Filiere $filiere)
    {
        $this->filiere = $filiere;

        return $this;
    }

    /**
     * Get filiere
     *
     * @return \UAHB\ScolariteBundle\Entity\Filiere
     */
    public function getFiliere()
    {
        return $this->filiere;
    }

    /**
     * Add classeOption
     *
     * @param \UAHB\ScolariteBundle\Entity\ClasseOption $classeOption
     *
     * @return Classe
     */
    public function addClasseOption(\UAHB\ScolariteBundle\Entity\ClasseOption $classeOption)
    {
        $this->classeOptions[] = $classeOption;

        return $this;
    }

    /**
     * Remove classeOption
     *
     * @param \UAHB\ScolariteBundle\Entity\ClasseOption $classeOption
     */
    public function removeClasseOption(\UAHB\ScolariteBundle\Entity\ClasseOption $classeOption)
    {
        $this->classeOptions->removeElement($classeOption);
    }

    /**
     * Get classeOptions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getClasseOptions()
    {
        return $this->classeOptions;
    }

    /**
     * Set droitInscription
     *
     * @param integer $droitInscription
     *
     * @return Classe
     */
    public function setDroitInscription($droitInscription)
    {
        $this->droitInscription = $droitInscription;

        return $this;
    }

    /**
     * Get droitInscription
     *
     * @return integer
     */
    public function getDroitInscription()
    {
        return $this->droitInscription;
    }

    /**
     * Set mensualite
     *
     * @param integer $mensualite
     *
     * @return Classe
     */
    public function setMensualite($mensualite)
    {
        $this->mensualite = $mensualite;

        return $this;
    }

    /**
     * Get mensualite
     *
     * @return integer
     */
    public function getMensualite()
    {
        return $this->mensualite;
    }

    /**
     * Set fraisSoutenance
     *
     * @param integer $fraisSoutenance
     *
     * @return Classe
     */
    public function setFraisSoutenance($fraisSoutenance)
    {
        $this->fraisSoutenance = $fraisSoutenance;

        return $this;
    }

    /**
     * Get fraisSoutenance
     *
     * @return integer
     */
    public function getFraisSoutenance()
    {
        return $this->fraisSoutenance;
    }

    public function __toString(){
        return $this->libelle;
    }

    /**
     * Add uniteenseignement
     *
     * @param \UAHB\ScolariteBundle\Entity\UniteEnseignement $uniteenseignement
     *
     * @return Classe
     */
    public function addUniteenseignement(\UAHB\ScolariteBundle\Entity\UniteEnseignement $uniteenseignement)
    {
        $this->uniteenseignements[] = $uniteenseignement;

        return $this;
    }

    /**
     * Remove uniteenseignement
     *
     * @param \UAHB\ScolariteBundle\Entity\UniteEnseignement $uniteenseignement
     */
    public function removeUniteenseignement(\UAHB\ScolariteBundle\Entity\UniteEnseignement $uniteenseignement)
    {
        $this->uniteenseignements->removeElement($uniteenseignement);
    }

    /**
     * Get uniteenseignements
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUniteenseignements()
    {
        return $this->uniteenseignements;
    }
}
