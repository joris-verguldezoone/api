<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * User
 *
 * @ORM\Table(name="user", indexes={@ORM\Index(name="id_avatar", columns={"id_avatar"})})
 * @ORM\Entity (repositoryClass="App\Repository\UserRepository")
 * @ApiResource
 */
class User
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="pseudo", type="text", length=65535, nullable=false)
     */
    private $pseudo;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp", type="text", length=65535, nullable=false)
     */
    private $mdp;

    /**
     * @var \Avatar
     *
     * @ORM\ManyToOne(targetEntity="Avatar")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_avatar", referencedColumnName="id")
     * })
     */
    private $idAvatar;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): self
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    public function getMdp(): ?string
    {
        return $this->mdp;
    }

    public function setMdp(string $mdp): self
    {
        $this->mdp = $mdp;

        return $this;
    }

    public function getIdAvatar(): ?Avatar
    {
        return $this->idAvatar;
    }

    public function setIdAvatar(?Avatar $idAvatar): self
    {
        $this->idAvatar = $idAvatar;

        return $this;
    }


}
