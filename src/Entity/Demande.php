<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Demande
 *
 * @ORM\Table(name="demande", indexes={@ORM\Index(name="id_user", columns={"id_user"}), @ORM\Index(name="id_offre", columns={"id_offre"})})
 * @ORM\Entity
 */
class Demande
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_demande", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDemande;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_demande", type="string", length=255, nullable=false)
     */
    private $nomDemande;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_demande", type="string", length=255, nullable=false)
     */
    private $prenomDemande;

    /**
     * @var string
     *
     * @ORM\Column(name="cv_demande", type="string", length=255, nullable=false)
     */
    private $cvDemande;

    /**
     * @var string
     *
     * @ORM\Column(name="description_demande", type="string", length=255, nullable=false)
     */
    private $descriptionDemande;

    /**
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_offre", referencedColumnName="id_offre")
     * })
     */
    private $idOffre;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     * })
     */
    private $idUser;

    public function getIdDemande(): ?int
    {
        return $this->idDemande;
    }

    public function getNomDemande(): ?string
    {
        return $this->nomDemande;
    }

    public function setNomDemande(string $nomDemande): self
    {
        $this->nomDemande = $nomDemande;

        return $this;
    }

    public function getPrenomDemande(): ?string
    {
        return $this->prenomDemande;
    }

    public function setPrenomDemande(string $prenomDemande): self
    {
        $this->prenomDemande = $prenomDemande;

        return $this;
    }

    public function getCvDemande(): ?string
    {
        return $this->cvDemande;
    }

    public function setCvDemande(string $cvDemande): self
    {
        $this->cvDemande = $cvDemande;

        return $this;
    }

    public function getDescriptionDemande(): ?string
    {
        return $this->descriptionDemande;
    }

    public function setDescriptionDemande(string $descriptionDemande): self
    {
        $this->descriptionDemande = $descriptionDemande;

        return $this;
    }

    public function getIdOffre(): ?Offre
    {
        return $this->idOffre;
    }

    public function setIdOffre(?Offre $idOffre): self
    {
        $this->idOffre = $idOffre;

        return $this;
    }

    public function getIdUser(): ?User
    {
        return $this->idUser;
    }

    public function setIdUser(?User $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }


}
