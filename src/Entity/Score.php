<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Score
 *
 * @ORM\Table(name="score", indexes={@ORM\Index(name="id_partie", columns={"id_partie"}), @ORM\Index(name="id_jeux", columns={"id_jeux"}), @ORM\Index(name="id_user", columns={"id_user"})})
 *  @ORM\Entity (repositoryClass="App\Repository\ScoreRepository")
 * @ApiResource
 */
class Score
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
     * @ORM\Column(name="score", type="integer", nullable=false)
     */
    private $score;

    /**
     * @var \Jeux
     *
     * @ORM\ManyToOne(targetEntity="Jeux")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_jeux", referencedColumnName="id")
     * })
     */
    private $idJeux;

    /**
     * @var \Partie
     *
     * @ORM\ManyToOne(targetEntity="Partie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_partie", referencedColumnName="id")
     * })
     */
    private $idPartie;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     * })
     */
    private $idUser;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getScore(): ?int
    {
        return $this->score;
    }

    public function setScore(int $score): self
    {
        $this->score = $score;

        return $this;
    }

    public function getIdJeux(): ?Jeux
    {
        return $this->idJeux;
    }

    public function setIdJeux(?Jeux $idJeux): self
    {
        $this->idJeux = $idJeux;

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
