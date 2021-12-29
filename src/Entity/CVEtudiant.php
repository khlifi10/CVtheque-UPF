<?php

namespace App\Entity;

use App\Repository\CVEtudiantRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CVEtudiantRepository::class)
 */
class CVEtudiant
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
    private $IdCV;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $DescE;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdCV(): ?string
    {
        return $this->IdCV;
    }

    public function setIdCV(string $IdCV): self
    {
        $this->IdCV = $IdCV;

        return $this;
    }

    public function getDescE(): ?string
    {
        return $this->DescE;
    }

    public function setDescE(string $DescE): self
    {
        $this->DescE = $DescE;

        return $this;
    }
}
