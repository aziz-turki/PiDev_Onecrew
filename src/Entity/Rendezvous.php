<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Rendezvous
 *
 * @ORM\Table(name="rendezvous", indexes={@ORM\Index(name="id_user", columns={"id_user"})})
 * @ORM\Entity
 */
class Rendezvous
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_rendezvous", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRendezvous;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_rendezvous", type="string", length=255, nullable=false)
     */
    private $nomRendezvous;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_rendezvous", type="string", length=255, nullable=false)
     */
    private $prenomRendezvous;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_rendezvous", type="string", length=255, nullable=false)
     */
    private $lieuRendezvous;

    /**
     * @var string
     *
     * @ORM\Column(name="email_rendezvous", type="string", length=255, nullable=false)
     */
    private $emailRendezvous;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_rendezvous", type="date", nullable=false)
     */
    private $dateRendezvous;

    /**
     * @var int
     *
     * @ORM\Column(name="prix_rendezvous", type="integer", nullable=false)
     */
    private $prixRendezvous;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     * })
     */
    private $idUser;

    public function getIdRendezvous(): ?int
    {
        return $this->idRendezvous;
    }

    public function getNomRendezvous(): ?string
    {
        return $this->nomRendezvous;
    }

    public function setNomRendezvous(string $nomRendezvous): self
    {
        $this->nomRendezvous = $nomRendezvous;

        return $this;
    }

    public function getPrenomRendezvous(): ?string
    {
        return $this->prenomRendezvous;
    }

    public function setPrenomRendezvous(string $prenomRendezvous): self
    {
        $this->prenomRendezvous = $prenomRendezvous;

        return $this;
    }

    public function getLieuRendezvous(): ?string
    {
        return $this->lieuRendezvous;
    }

    public function setLieuRendezvous(string $lieuRendezvous): self
    {
        $this->lieuRendezvous = $lieuRendezvous;

        return $this;
    }

    public function getEmailRendezvous(): ?string
    {
        return $this->emailRendezvous;
    }

    public function setEmailRendezvous(string $emailRendezvous): self
    {
        $this->emailRendezvous = $emailRendezvous;

        return $this;
    }

    public function getDateRendezvous(): ?\DateTimeInterface
    {
        return $this->dateRendezvous;
    }

    public function setDateRendezvous(\DateTimeInterface $dateRendezvous): self
    {
        $this->dateRendezvous = $dateRendezvous;

        return $this;
    }

    public function getPrixRendezvous(): ?int
    {
        return $this->prixRendezvous;
    }

    public function setPrixRendezvous(int $prixRendezvous): self
    {
        $this->prixRendezvous = $prixRendezvous;

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
