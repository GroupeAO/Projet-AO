<?php

namespace App\Entity;

use App\Repository\SurgeryNotificationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SurgeryNotificationRepository::class)]
class SurgeryNotification
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'datetime_immutable')]
    private $startDate;

    #[ORM\Column(type: 'datetime_immutable')]
    private $enDate;

    #[ORM\Column(type: 'string', length: 255)]
    private $speciality;

    #[ORM\Column(type: 'string', length: 2000)]
    private $description;

    #[ORM\Column(type: 'integer')]
    private $numberAoNeeded;
    

    #[ORM\Column(type: 'string', length: 255)]
    private $clinicName;

    #[ORM\Column(type: 'integer')]
    private $clinicZipCode;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'surgeryNotifications')]
    #[ORM\JoinColumn(nullable: false)]
    private $fkIdUser;


    public function __construct()
    {
        $this->users = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStartDate(): ?\DateTimeImmutable
    {
        return $this->startDate;
    }

    public function setStartDate(\DateTimeImmutable $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getEnDate(): ?\DateTimeImmutable
    {
        return $this->enDate;
    }

    public function setEnDate(\DateTimeImmutable $enDate): self
    {
        $this->enDate = $enDate;

        return $this;
    }

    public function getSpeciality(): ?string
    {
        return $this->speciality;
    }

    public function setSpeciality(string $speciality): self
    {
        $this->speciality = $speciality;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }


    public function getNumberAoNeeded(): ?int
    {
        return $this->numberAoNeeded;
    }

    public function setNumberAoNeeded(int $numberAoNeeded): self
    {
        $this->numberAoNeeded = $numberAoNeeded;

        return $this;
    }

    public function getClinicName(): ?string
    {
        return $this->clinicName;
    }

    public function setClinicName(string $clinicName): self
    {
        $this->clinicName = $clinicName;

        return $this;
    }

    public function getClinicZipCode(): ?int
    {
        return $this->clinicZipCode;
    }

    public function setClinicZipCode(int $clinicZipCode): self
    {
        $this->clinicZipCode = $clinicZipCode;

        return $this;
    }

    public function getFkIdUser(): ?User
    {
        return $this->fkIdUser;
    }

    public function setFkIdUser(?User $fkIdUser): self
    {
        $this->fkIdUser = $fkIdUser;

        return $this;
    }
}
