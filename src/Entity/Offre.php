<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Offre
 *
 * @ORM\Table(name="offre")
 * @ORM\Entity
 */
class Offre
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_offre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOffre;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_offre", type="string", length=255, nullable=false)
     */
    private $nomOffre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datepub_offre", type="date", nullable=false)
     */
    private $datepubOffre;

    public function getIdOffre(): ?int
    {
        return $this->idOffre;
    }

    public function getNomOffre(): ?string
    {
        return $this->nomOffre;
    }

    public function setNomOffre(string $nomOffre): self
    {
        $this->nomOffre = $nomOffre;

        return $this;
    }

    public function getDatepubOffre(): ?\DateTimeInterface
    {
        return $this->datepubOffre;
    }

    public function setDatepubOffre(\DateTimeInterface $datepubOffre): self
    {
        $this->datepubOffre = $datepubOffre;

        return $this;
    }


}
