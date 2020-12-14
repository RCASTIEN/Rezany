<?php

namespace App\Entity;

use App\Repository\ImagesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ImagesRepository::class)
 */
class Images
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nom_image;

    /**
     * @ORM\ManyToOne(targetEntity=Articles::class, inversedBy="images")
     * @ORM\JoinColumn(nullable=false)
     */
    private $aticles_image;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomImage(): ?string
    {
        return $this->nom_image;
    }

    public function setNomImage(?string $nom_image): self
    {
        $this->nom_image = $nom_image;

        return $this;
    }

    public function getAticlesImage(): ?Articles
    {
        return $this->aticles_image;
    }

    public function setAticlesImage(?Articles $aticles_image): self
    {
        $this->aticles_image = $aticles_image;

        return $this;
    }
}
