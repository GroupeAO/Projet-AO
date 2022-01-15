<?php

namespace App\Entity;

use App\Repository\SurgeryNotificationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: SurgeryNotificationRepository::class)]
class SurgeryNotification
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'datetime_immutable')]
    /**
     * @Assert\NotBlank(message="Veuillez remplir ce champ"),
     * @Assert\GreaterThan("today"),
     * message="le {{ value }} est une date révolu."
     */
    private $startDate;

    #[ORM\Column(type: 'datetime_immutable')]
    /**
     * @Assert\NotBlank(message="Veuillez remplir ce champ"),
     * @Assert\GreaterThan("today"),
     * message="le {{ value }} est une date révolu."
     */
    private $enDate;

    #[ORM\Column(type: 'string', length: 255)]
    /**
     * @Assert\NotBlank(message="Veuillez remplir ce champ")
     */
    private $speciality;

    #[ORM\Column(type: 'string', length: 2000)]
    private $description;

    #[ORM\Column(type: 'integer')]
    /**
     * @Assert\NotBlank(message="Veuillez remplir ce champ")
     */
    private $numberAoNeeded;
    

    #[ORM\Column(type: 'string', length: 255)]
    /**
     * @Assert\NotBlank(message="Veuillez remplir ce champ")
     * @Assert\Length(
     *   min = 3,
     *   minMessage = "Le nom de la clinic doit faire au moins 3 caractères")
     */
    private $clinicName;

    #[ORM\Column(type: 'integer')]
    /**
     * @Assert\NotBlank(message="Veuillez remplir ce champ")
     * @Assert\Length(
     *  min = 5,
     *  max = 5,
     *  exactMessage = "Le Code Postal doit comporter 5 chiffres"
     * )
     */
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
