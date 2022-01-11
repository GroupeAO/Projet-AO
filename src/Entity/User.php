<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 180, unique: true)]
    /**
     * @Assert\NotBlank
     * @Assert\Email(
     *     message = "L'adresse '{{ value }}' n'est pas une adresse email valide"
     * )
     */
    private $email;

    #[ORM\Column(type: 'json')]
    private $roles = [];

    #[ORM\Column(type: 'string')]
    /**
     * @Assert\NotBlank
     * @Assert\Length(
     *      min = 8,
     *      max = 40,
     *      minMessage = "Le mot de passe doit comporter au moins {{ limit }} caractères",
     *      maxMessage = "Le mot de passe doit comporter {{ limit }} caractères maximum"
     * )
     */
    private $password;

    #[ORM\Column(type: 'string', length: 45)]
    private $name;

    #[ORM\Column(type: 'string', length: 45)]
    private $firstname;

    #[ORM\Column(type: 'string', length: 500)]
    /**
     * @Assert\NotBlank
     * @Assert\Length(
     *      min = 5,
     *      minMessage = "Adresse trop courte"
     * )    
     */ 
    private $adress;

    #[ORM\Column(type: 'string')]
    /**
     * @Assert\NotBlank
     * @Assert\Length(
     *      min = 4,
     *      max = 5,
     *      minMessage = "Le Code Postal doit comporter 5 chiffres",
     *      maxMessage = "Le Code Postal doit comporter {{ limit }} chiffres"
     * )
     */
    private $zipCode;

    #[ORM\Column(type: 'string', length: 5)]
    /**
     * @Assert\NotBlank
     * @Assert\Length(
     *      min = 2,
     *      max = 100,
     *      minMessage = "Le nom de la ville doit comporter au moins {{ limit }} lettres",
     *      maxMessage = "Le nom de la ville doit comporter {{ limit }} lettres max"
     * )
     */
    private $city;

    #[ORM\Column(type: 'string', length: 10)]
    /**
     * @Assert\NotBlank
     * @Assert\Length(
     *      min = 10,
     *      max = 14,
     *      minMessage = "Le numéro de téléphone doit comporter au moins {{ limit }} chiffres",
     *      maxMessage = "Le numéro de téléphone doit comporter au plus {{ limit }} chiffres"
     * )
     */
    private $phoneNumber;

    #[ORM\Column(type: 'string', length: 10)]
    private $CPSNumber;
    /**
     * @Assert\Type(type="App\Entity\CpsCardOwner")
     * @Assert\Valid
     */
    protected $cpsCardOwner;
    

    #[ORM\ManyToOne(targetEntity: SurgicalSpecialty::class, inversedBy: 'users')]
    private $surgicalSpeciality;

    #[ORM\ManyToOne(targetEntity: Role::class, inversedBy: 'users')]
    #[ORM\JoinColumn(nullable: false)]
    private $fkRole;

    #[ORM\ManyToMany(targetEntity: SurgeryNotification::class, inversedBy: 'users')]
    private $surgery;

    #[ORM\ManyToMany(targetEntity: Clinic::class, inversedBy: 'users')]
    private $clinic;

    #[ORM\ManyToMany(targetEntity: Availability::class, inversedBy: 'users')]
    private $fkavailability;

    #[ORM\OneToMany(mappedBy: 'fkIdUser', targetEntity: SurgeryNotification::class, orphanRemoval: true)]
    private $surgeryNotifications;

    public function __construct()
    {
        $this->surgery = new ArrayCollection();
        $this->clinic = new ArrayCollection();
        $this->fkavailability = new ArrayCollection();
        $this->surgeryNotifications = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    public function setZipCode(int $zipCode): self
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(?string $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    public function getCpsCardOwner(): ?CpsCardOwner
    {
        return $this->cpsCardOwner;
    }

    public function setCpsCardOwner(?CpsCardOwner $cpsCardOwner)
    {
        $this->cpsCardOwner = $cpsCardOwner;
    }

    public function getSurgicalSpeciality(): ?SurgicalSpecialty
    {
        return $this->surgicalSpeciality;
    }

    public function setSurgicalSpeciality(?SurgicalSpecialty $surgicalSpeciality): self
    {
        $this->surgicalSpeciality = $surgicalSpeciality;

        return $this;
    }

    public function getFkRole(): ?Role
    {
        return $this->fkRole;
    }

    public function setFkRole(?Role $fkRole): self
    {
        $this->fkRole = $fkRole;

        return $this;
    }

    /**
     * @return Collection|SurgeryNotification[]
     */
    public function getSurgery(): Collection
    {
        return $this->surgery;
    }

    public function addSurgery(SurgeryNotification $surgery): self
    {
        if (!$this->surgery->contains($surgery)) {
            $this->surgery[] = $surgery;
        }

        return $this;
    }

    public function removeSurgery(SurgeryNotification $surgery): self
    {
        $this->surgery->removeElement($surgery);

        return $this;
    }

    /**
     * @return Collection|Clinic[]
     */
    public function getClinic(): Collection
    {
        return $this->clinic;
    }

    public function addClinic(Clinic $clinic): self
    {
        if (!$this->clinic->contains($clinic)) {
            $this->clinic[] = $clinic;
        }

        return $this;
    }

    public function removeClinic(Clinic $clinic): self
    {
        $this->clinic->removeElement($clinic);

        return $this;
    }

    /**
     * @return Collection|Availability[]
     */
    public function getFkavailability(): Collection
    {
        return $this->fkavailability;
    }

    public function addFkavailability(Availability $fkavailability): self
    {
        if (!$this->fkavailability->contains($fkavailability)) {
            $this->fkavailability[] = $fkavailability;
        }

        return $this;
    }

    public function removeFkavailability(Availability $fkavailability): self
    {
        $this->fkavailability->removeElement($fkavailability);

        return $this;
    }

    /**
     * @return Collection|SurgeryNotification[]
     */
    public function getSurgeryNotifications(): Collection
    {
        return $this->surgeryNotifications;
    }

    public function addSurgeryNotification(SurgeryNotification $surgeryNotification): self
    {
        if (!$this->surgeryNotifications->contains($surgeryNotification)) {
            $this->surgeryNotifications[] = $surgeryNotification;
            $surgeryNotification->setFkIdUser($this);
        }

        return $this;
    }

    public function removeSurgeryNotification(SurgeryNotification $surgeryNotification): self
    {
        if ($this->surgeryNotifications->removeElement($surgeryNotification)) {
            // set the owning side to null (unless already changed)
            if ($surgeryNotification->getFkIdUser() === $this) {
                $surgeryNotification->setFkIdUser(null);
            }
        }

        return $this;
    }

    public function getCPSNumber(): ?int
    {
        return $this->CPSNumber;
    }

    public function setCPSNumber(?int $CPSNumber): self
    {
        $this->CPSNumber = $CPSNumber;

        return $this;
    }
}
