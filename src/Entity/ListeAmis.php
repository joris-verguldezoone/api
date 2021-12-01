<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * ListeAmis
 *
 * @ORM\Table(name="liste_amis", indexes={@ORM\Index(name="id_user", columns={"id_user"}), @ORM\Index(name="id_user2", columns={"id_user2"})})
 *  @ORM\Entity (repositoryClass="App\Repository\ListeAmisRepository")
 * @ApiResource
 */
class ListeAmis
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
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user2", referencedColumnName="id")
     * })
     */
    private $idUser2;

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

    public function getIdUser2(): ?User
    {
        return $this->idUser2;
    }

    public function setIdUser2(?User $idUser2): self
    {
        $this->idUser2 = $idUser2;

        return $this;
    }


}
