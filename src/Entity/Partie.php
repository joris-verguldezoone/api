<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Partie
 *
 * @ORM\Table(name="partie", indexes={@ORM\Index(name="id_difficulte", columns={"id_difficulte"}), @ORM\Index(name="id_jeux", columns={"id_jeux"})})
 *  @ORM\Entity (repositoryClass="App\Repository\PartieRepository")
 * @ApiResource
 */
class Partie
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
     * @ORM\Column(name="nb_joueurs", type="integer", nullable=false)
     */
    private $nbJoueurs;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="finished_at", type="datetime", nullable=false)
     */
    private $finishedAt;

    /**
     * @var \Difficulte
     *
     * @ORM\ManyToOne(targetEntity="Difficulte")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_difficulte", referencedColumnName="id")
     * })
     */
    private $idDifficulte;

    /**
     * @var \Jeux
     *
     * @ORM\ManyToOne(targetEntity="Jeux")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_jeux", referencedColumnName="id")
     * })
     */
    private $idJeux;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNbJoueurs(): ?int
    {
        return $this->nbJoueurs;
    }

    public function setNbJoueurs(int $nbJoueurs): self
    {
        $this->nbJoueurs = $nbJoueurs;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getFinishedAt(): ?\DateTimeInterface
    {
        return $this->finishedAt;
    }

    public function setFinishedAt(\DateTimeInterface $finishedAt): self
    {
        $this->finishedAt = $finishedAt;

        return $this;
    }

    public function getIdDifficulte(): ?Difficulte
    {
        return $this->idDifficulte;
    }

    public function setIdDifficulte(?Difficulte $idDifficulte): self
    {
        $this->idDifficulte = $idDifficulte;

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


}
