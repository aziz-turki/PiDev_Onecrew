<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Facture
 *
 * @ORM\Table(name="facture", indexes={@ORM\Index(name="id_rendezvous", columns={"id_rendezvous"})})
 * @ORM\Entity
 */
class Facture
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_facture", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFacture;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_consultation", type="date", nullable=false)
     */
    private $dateConsultation;

    /**
     * @var int
     *
     * @ORM\Column(name="prix_facture", type="integer", nullable=false)
     */
    private $prixFacture;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_science", type="integer", nullable=false)
     */
    private $nbScience;

    /**
     * @var string
     *
     * @ORM\Column(name="type_de_paiement", type="string", length=255, nullable=false)
     */
    private $typeDePaiement;

    /**
     * @var \Rendezvous
     *
     * @ORM\ManyToOne(targetEntity="Rendezvous")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_rendezvous", referencedColumnName="id_rendezvous")
     * })
     */
    private $idRendezvous;

    public function getIdFacture(): ?int
    {
        return $this->idFacture;
    }

    public function getDateConsultation(): ?\DateTimeInterface
    {
        return $this->dateConsultation;
    }

    public function setDateConsultation(\DateTimeInterface $dateConsultation): self
    {
        $this->dateConsultation = $dateConsultation;

        return $this;
    }

    public function getPrixFacture(): ?int
    {
        return $this->prixFacture;
    }

    public function setPrixFacture(int $prixFacture): self
    {
        $this->prixFacture = $prixFacture;

        return $this;
    }

    public function getNbScience(): ?int
    {
        return $this->nbScience;
    }

    public function setNbScience(int $nbScience): self
    {
        $this->nbScience = $nbScience;

        return $this;
    }

    public function getTypeDePaiement(): ?string
    {
        return $this->typeDePaiement;
    }

    public function setTypeDePaiement(string $typeDePaiement): self
    {
        $this->typeDePaiement = $typeDePaiement;

        return $this;
    }

    public function getIdRendezvous(): ?Rendezvous
    {
        return $this->idRendezvous;
    }

    public function setIdRendezvous(?Rendezvous $idRendezvous): self
    {
        $this->idRendezvous = $idRendezvous;

        return $this;
    }


}
