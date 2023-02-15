<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation", indexes={@ORM\Index(name="id_user", columns={"id_user"}), @ORM\Index(name="id_ressource", columns={"id_ressource"})})
 * @ORM\Entity
 */
class Reservation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_reservation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idReservation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="date", nullable=false)
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="date", nullable=false)
     */
    private $dateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="description_reservation", type="string", length=255, nullable=false)
     */
    private $descriptionReservation;

    /**
     * @var \Ressource
     *
     * @ORM\ManyToOne(targetEntity="Ressource")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ressource", referencedColumnName="id_ressource")
     * })
     */
    private $idRessource;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     * })
     */
    private $idUser;

    public function getIdReservation(): ?int
    {
        return $this->idReservation;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getDescriptionReservation(): ?string
    {
        return $this->descriptionReservation;
    }

    public function setDescriptionReservation(string $descriptionReservation): self
    {
        $this->descriptionReservation = $descriptionReservation;

        return $this;
    }

    public function getIdRessource(): ?Ressource
    {
        return $this->idRessource;
    }

    public function setIdRessource(?Ressource $idRessource): self
    {
        $this->idRessource = $idRessource;

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
