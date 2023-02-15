<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_user", type="string", length=255, nullable=false)
     */
    private $nomUser;

    /**
     * @var string
     *
     * @ORM\Column(name="role_user", type="string", length=255, nullable=false)
     */
    private $roleUser;

    /**
     * @var string
     *
     * @ORM\Column(name="email_user", type="string", length=255, nullable=false)
     */
    private $emailUser;

    /**
     * @var int
     *
     * @ORM\Column(name="mdp_user", type="integer", nullable=false)
     */
    private $mdpUser;

    /**
     * @var int
     *
     * @ORM\Column(name="tel_user", type="integer", nullable=false)
     */
    private $telUser;

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function getNomUser(): ?string
    {
        return $this->nomUser;
    }

    public function setNomUser(string $nomUser): self
    {
        $this->nomUser = $nomUser;

        return $this;
    }

    public function getRoleUser(): ?string
    {
        return $this->roleUser;
    }

    public function setRoleUser(string $roleUser): self
    {
        $this->roleUser = $roleUser;

        return $this;
    }

    public function getEmailUser(): ?string
    {
        return $this->emailUser;
    }

    public function setEmailUser(string $emailUser): self
    {
        $this->emailUser = $emailUser;

        return $this;
    }

    public function getMdpUser(): ?int
    {
        return $this->mdpUser;
    }

    public function setMdpUser(int $mdpUser): self
    {
        $this->mdpUser = $mdpUser;

        return $this;
    }

    public function getTelUser(): ?int
    {
        return $this->telUser;
    }

    public function setTelUser(int $telUser): self
    {
        $this->telUser = $telUser;

        return $this;
    }


}
