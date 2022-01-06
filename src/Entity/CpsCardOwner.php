<?php

namespace App\Entity;

use App\Repository\CpsCardOwnerRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CpsCardOwnerRepository::class)]
class CpsCardOwner
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 12)]
    private $identificationNationalPP;

    #[ORM\Column(type: 'string', length: 255)]
    private $nomDexercice;

    #[ORM\Column(type: 'string', length: 255)]
    private $prenomDexercice;

    #[ORM\Column(type: 'integer')]
    private $codeProfession;

    #[ORM\Column(type: 'string', length: 1)]
    private $codeCategorieProfessionnelle;

    #[ORM\Column(type: 'string', length: 10)]
    private $numeroCarte;

    #[ORM\Column(type: 'date')]
    private $dateDebutValidite;

    #[ORM\Column(type: 'date')]
    private $dateFinValidite;

    #[ORM\Column(type: 'date', nullable: true)]
    private $dateOpposition;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdentificationNationalPP(): ?string
    {
        return $this->identificationNationalPP;
    }

    public function setIdentificationNationalPP(string $identificationNationalPP): self
    {
        $this->identificationNationalPP = $identificationNationalPP;

        return $this;
    }

    public function getNomDexercice(): ?string
    {
        return $this->nomDexercice;
    }

    public function setNomDexercice(string $nomDexercice): self
    {
        $this->nomDexercice = $nomDexercice;

        return $this;
    }

    public function getPrenomDexercice(): ?string
    {
        return $this->prenomDexercice;
    }

    public function setPrenomDexercice(string $prenomDexercice): self
    {
        $this->prenomDexercice = $prenomDexercice;

        return $this;
    }

    public function getCodeProfession(): ?int
    {
        return $this->codeProfession;
    }

    public function setCodeProfession(int $codeProfession): self
    {
        $this->codeProfession = $codeProfession;

        return $this;
    }

    public function getCodeCategorieProfessionnelle(): ?string
    {
        return $this->codeCategorieProfessionnelle;
    }

    public function setCodeCategorieProfessionnelle(string $codeCategorieProfessionnelle): self
    {
        $this->codeCategorieProfessionnelle = $codeCategorieProfessionnelle;

        return $this;
    }

    public function getNumeroCarte(): ?string
    {
        return $this->numeroCarte;
    }

    public function setNumeroCarte(string $numeroCarte): self
    {
        $this->numeroCarte = $numeroCarte;

        return $this;
    }

    public function getDateDebutValidite(): ?\DateTimeInterface
    {
        return $this->dateDebutValidite;
    }

    public function setDateDebutValidite(\DateTimeInterface $dateDebutValidite): self
    {
        $this->dateDebutValidite = $dateDebutValidite;

        return $this;
    }

    public function getDateFinValidite(): ?\DateTimeInterface
    {
        return $this->dateFinValidite;
    }

    public function setDateFinValidite(\DateTimeInterface $dateFinValidite): self
    {
        $this->dateFinValidite = $dateFinValidite;

        return $this;
    }

    public function getDateOpposition(): ?\DateTimeInterface
    {
        return $this->dateOpposition;
    }

    public function setDateOpposition(?\DateTimeInterface $dateOpposition): self
    {
        $this->dateOpposition = $dateOpposition;

        return $this;
    }
}
