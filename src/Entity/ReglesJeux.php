<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * ReglesJeux
 *
 * @ORM\Table(name="regles_jeux", indexes={@ORM\Index(name="id_jeux", columns={"id_jeux"}), @ORM\Index(name="id_difficulte", columns={"id_difficulte"})})
 *  @ORM\Entity (repositoryClass="App\Repository\ReglesJeuxRepository")
 * @ApiResource
 */
class ReglesJeux
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
     * @ORM\Column(name="nom_regle", type="text", length=65535, nullable=false)
     */
    private $nomRegle;

    /**
     * @var string
     *
     * @ORM\Column(name="regle", type="text", length=65535, nullable=false)
     */
    private $regle;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_joueur_min", type="integer", nullable=false)
     */
    private $nbJoueurMin;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_joueur_max", type="integer", nullable=false)
     */
    private $nbJoueurMax;

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
     * @var \Difficulte
     *
     * @ORM\ManyToOne(targetEntity="Difficulte")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_difficulte", referencedColumnName="id")
     * })
     */
    private $idDifficulte;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomRegle(): ?string
    {
        return $this->nomRegle;
    }

    public function setNomRegle(string $nomRegle): self
    {
        $this->nomRegle = $nomRegle;

        return $this;
    }

    public function getRegle(): ?string
    {
        return $this->regle;
    }

    public function setRegle(string $regle): self
    {
        $this->regle = $regle;

        return $this;
    }

    public function getNbJoueurMin(): ?int
    {
        return $this->nbJoueurMin;
    }

    public function setNbJoueurMin(int $nbJoueurMin): self
    {
        $this->nbJoueurMin = $nbJoueurMin;

        return $this;
    }

    public function getNbJoueurMax(): ?int
    {
        return $this->nbJoueurMax;
    }

    public function setNbJoueurMax(int $nbJoueurMax): self
    {
        $this->nbJoueurMax = $nbJoueurMax;

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

    public function getIdDifficulte(): ?Difficulte
    {
        return $this->idDifficulte;
    }

    public function setIdDifficulte(?Difficulte $idDifficulte): self
    {
        $this->idDifficulte = $idDifficulte;

        return $this;
    }


}
