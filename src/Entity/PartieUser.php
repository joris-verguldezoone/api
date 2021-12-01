<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * PartieUser
 *
 * @ORM\Table(name="partie_user", indexes={@ORM\Index(name="id_user", columns={"id_user"}), @ORM\Index(name="id_partie", columns={"id_partie"})})
 *  @ORM\Entity (repositoryClass="App\Repository\PartieUserRepository")
 * @ApiResource
 */
class PartieUser
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
     * @var int
     *
     * @ORM\Column(name="statut", type="integer", nullable=false)
     */
    private $statut;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     * })
     */
    private $idUser;

    /**
     * @var \Partie
     *
     * @ORM\ManyToOne(targetEntity="Partie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_partie", referencedColumnName="id")
     * })
     */
    private $idPartie;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStatut(): ?int
    {
        return $this->statut;
    }

    public function setStatut(int $statut): self
    {
        $this->statut = $statut;

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

    public function getIdPartie(): ?Partie
    {
        return $this->idPartie;
    }

    public function setIdPartie(?Partie $idPartie): self
    {
        $this->idPartie = $idPartie;

        return $this;
    }


}
