<?php

namespace App\Entity;

use App\Repository\AdresseRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AdresseRepository::class)
 */
class Adresse
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
    private $rue;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $code_postal;

    /**
     * @ORM\Column(type="string", length=160, nullable=true)
     */
    private $departement;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ville;

    /**
     * @ORM\OneToOne(targetEntity=User::class, mappedBy="adresse", cascade={"persist", "remove"})
     */
    private $nom_adresse;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRue(): ?string
    {
        return $this->rue;
    }

    public function setRue(string $rue): self
    {
        $this->rue = $rue;

        return $this;
    }

    public function getCodePostal(): ?string
    {
        return $this->code_postal;
    }

    public function setCodePostal(string $code_postal): self
    {
        $this->code_postal = $code_postal;

        return $this;
    }

    public function getDepartement(): ?string
    {
        return $this->departement;
    }

    public function setDepartement(string $departement): self
    {
        $this->departement = $departement;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getNomAdresse(): ?User
    {
        return $this->nom_adresse;
    }

    public function setNomAdresse(?User $nom_adresse): self
    {
        // unset the owning side of the relation if necessary
        if ($nom_adresse === null && $this->nom_adresse !== null) {
            $this->nom_adresse->setAdresse(null);
        }

        // set the owning side of the relation if necessary
        if ($nom_adresse !== null && $nom_adresse->getAdresse() !== $this) {
            $nom_adresse->setAdresse($this);
        }

        $this->nom_adresse = $nom_adresse;

        return $this;
    }
}
