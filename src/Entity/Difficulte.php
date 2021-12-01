<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Difficulte
 *
 * @ORM\Table(name="difficulte")
 *  @ORM\Entity (repositoryClass="App\Repository\DifficulteURepository")
 * @ApiResource
 */
class Difficulte
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
     * @ORM\Column(name="difficulte", type="text", length=65535, nullable=false)
     */
    private $difficulte;

    /**
     * @var int
     *
     * @ORM\Column(name="multiplicateur_score", type="integer", nullable=false)
     */
    private $multiplicateurScore;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDifficulte(): ?string
    {
        return $this->difficulte;
    }

    public function setDifficulte(string $difficulte): self
    {
        $this->difficulte = $difficulte;

        return $this;
    }

    public function getMultiplicateurScore(): ?int
    {
        return $this->multiplicateurScore;
    }

    public function setMultiplicateurScore(int $multiplicateurScore): self
    {
        $this->multiplicateurScore = $multiplicateurScore;

        return $this;
    }


}
