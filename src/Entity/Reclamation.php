<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation", indexes={@ORM\Index(name="id_user", columns={"id_user"})})
 * @ORM\Entity
 */
class Reclamation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_reclamation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idReclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_reclamation", type="string", length=255, nullable=false)
     */
    private $nomReclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_reclamation", type="string", length=255, nullable=false)
     */
    private $prenomReclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="destination_reclamation", type="string", length=255, nullable=false)
     */
    private $destinationReclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="description_reclamation", type="string", length=255, nullable=false)
     */
    private $descriptionReclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="type_reclamation", type="string", length=255, nullable=false)
     */
    private $typeReclamation;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     * })
     */
    private $idUser;

    public function getIdReclamation(): ?int
    {
        return $this->idReclamation;
    }

    public function getNomReclamation(): ?string
    {
        return $this->nomReclamation;
    }

    public function setNomReclamation(string $nomReclamation): self
    {
        $this->nomReclamation = $nomReclamation;

        return $this;
    }

    public function getPrenomReclamation(): ?string
    {
        return $this->prenomReclamation;
    }

    public function setPrenomReclamation(string $prenomReclamation): self
    {
        $this->prenomReclamation = $prenomReclamation;

        return $this;
    }

    public function getDestinationReclamation(): ?string
    {
        return $this->destinationReclamation;
    }

    public function setDestinationReclamation(string $destinationReclamation): self
    {
        $this->destinationReclamation = $destinationReclamation;

        return $this;
    }

    public function getDescriptionReclamation(): ?string
    {
        return $this->descriptionReclamation;
    }

    public function setDescriptionReclamation(string $descriptionReclamation): self
    {
        $this->descriptionReclamation = $descriptionReclamation;

        return $this;
    }

    public function getTypeReclamation(): ?string
    {
        return $this->typeReclamation;
    }

    public function setTypeReclamation(string $typeReclamation): self
    {
        $this->typeReclamation = $typeReclamation;

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
