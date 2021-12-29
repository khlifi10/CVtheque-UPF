<?php

namespace App\Entity;

use App\Repository\ClasseRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClasseRepository::class)
 */
class Classe
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Promotion;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Filiere;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPromotion(): ?string
    {
        return $this->Promotion;
    }

    public function setPromotion(string $Promotion): self
    {
        $this->Promotion = $Promotion;

        return $this;
    }

    public function getFiliere(): ?string
    {
        return $this->Filiere;
    }

    public function setFiliere(string $Filiere): self
    {
        $this->Filiere = $Filiere;

        return $this;
    }
}
