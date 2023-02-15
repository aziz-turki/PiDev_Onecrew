<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ressource
 *
 * @ORM\Table(name="ressource")
 * @ORM\Entity
 */
class Ressource
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_ressource", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRessource;

    /**
     * @var string
     *
     * @ORM\Column(name="type_ressource", type="string", length=255, nullable=false)
     */
    private $typeRessource;

    /**
     * @var string
     *
     * @ORM\Column(name="disponibilite_ressource", type="string", length=255, nullable=false)
     */
    private $disponibiliteRessource;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_ressource", type="string", length=255, nullable=false)
     */
    private $nomRessource;

    public function getIdRessource(): ?int
    {
        return $this->idRessource;
    }

    public function getTypeRessource(): ?string
    {
        return $this->typeRessource;
    }

    public function setTypeRessource(string $typeRessource): self
    {
        $this->typeRessource = $typeRessource;

        return $this;
    }

    public function getDisponibiliteRessource(): ?string
    {
        return $this->disponibiliteRessource;
    }

    public function setDisponibiliteRessource(string $disponibiliteRessource): self
    {
        $this->disponibiliteRessource = $disponibiliteRessource;

        return $this;
    }

    public function getNomRessource(): ?string
    {
        return $this->nomRessource;
    }

    public function setNomRessource(string $nomRessource): self
    {
        $this->nomRessource = $nomRessource;

        return $this;
    }


}
