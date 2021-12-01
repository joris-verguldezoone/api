<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Type
 *
 * @ORM\Table(name="type")
 *  @ORM\Entity (repositoryClass="App\Repository\TypeRepository")
 * @ApiResource
 */
class Type
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
     * @ORM\Column(name="type_de_jeux", type="text", length=65535, nullable=false)
     */
    private $typeDeJeux;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_cartes", type="integer", nullable=false)
     */
    private $nbCartes;

    /**
     * @var string
     *
     * @ORM\Column(name="type_de_carte", type="text", length=65535, nullable=false)
     */
    private $typeDeCarte;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeDeJeux(): ?string
    {
        return $this->typeDeJeux;
    }

    public function setTypeDeJeux(string $typeDeJeux): self
    {
        $this->typeDeJeux = $typeDeJeux;

        return $this;
    }

    public function getNbCartes(): ?int
    {
        return $this->nbCartes;
    }

    public function setNbCartes(int $nbCartes): self
    {
        $this->nbCartes = $nbCartes;

        return $this;
    }

    public function getTypeDeCarte(): ?string
    {
        return $this->typeDeCarte;
    }

    public function setTypeDeCarte(string $typeDeCarte): self
    {
        $this->typeDeCarte = $typeDeCarte;

        return $this;
    }


}
