<?php

namespace App\Entity;

use App\Repository\CompetenceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CompetenceRepository::class)
 */
class Competence
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
    private $IdComp;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ListeCompetences;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdComp(): ?string
    {
        return $this->IdComp;
    }

    public function setIdComp(string $IdComp): self
    {
        $this->IdComp = $IdComp;

        return $this;
    }

    public function getListeCompetences(): ?string
    {
        return $this->ListeCompetences;
    }

    public function setListeCompetences(string $ListeCompetences): self
    {
        $this->ListeCompetences = $ListeCompetences;

        return $this;
    }
}
