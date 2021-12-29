<?php

namespace App\Entity;

use App\Repository\ActivitesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ActivitesRepository::class)
 */
class Activites
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
    private $IdAct;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ListeActivite;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdAct(): ?string
    {
        return $this->IdAct;
    }

    public function setIdAct(string $IdAct): self
    {
        $this->IdAct = $IdAct;

        return $this;
    }

    public function getListeActivite(): ?string
    {
        return $this->ListeActivite;
    }

    public function setListeActivite(string $ListeActivite): self
    {
        $this->ListeActivite = $ListeActivite;

        return $this;
    }
}
