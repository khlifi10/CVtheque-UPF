<?php

namespace App\Entity;

use App\Repository\RecruteurRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RecruteurRepository::class)
 */
class Recruteur
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
    private $IdRecr;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Cevilite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Courrier;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Fonction;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $NomEtablissement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Logo;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdRecr(): ?string
    {
        return $this->IdRecr;
    }

    public function setIdRecr(string $IdRecr): self
    {
        $this->IdRecr = $IdRecr;

        return $this;
    }

    public function getCevilite(): ?string
    {
        return $this->Cevilite;
    }

    public function setCevilite(string $Cevilite): self
    {
        $this->Cevilite = $Cevilite;

        return $this;
    }

    public function getCourrier(): ?string
    {
        return $this->Courrier;
    }

    public function setCourrier(string $Courrier): self
    {
        $this->Courrier = $Courrier;

        return $this;
    }

    public function getFonction(): ?string
    {
        return $this->Fonction;
    }

    public function setFonction(string $Fonction): self
    {
        $this->Fonction = $Fonction;

        return $this;
    }

    public function getNomEtablissement(): ?string
    {
        return $this->NomEtablissement;
    }

    public function setNomEtablissement(string $NomEtablissement): self
    {
        $this->NomEtablissement = $NomEtablissement;

        return $this;
    }

    public function getLogo(): ?string
    {
        return $this->Logo;
    }

    public function setLogo(string $Logo): self
    {
        $this->Logo = $Logo;

        return $this;
    }
}
