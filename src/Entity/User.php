<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 180, unique: true)]
    private $email;

    #[ORM\Column(type: 'json')]
    private $roles = [];

    #[ORM\Column(type: 'string')]
    private $password;

    #[ORM\Column(type: 'string', length: 45)]
    private $name;

    #[ORM\Column(type: 'string', length: 45)]
    private $firstname;

    #[ORM\Column(type: 'string', length: 500)]
    private $adress;

    #[ORM\Column(type: 'integer')]
    private $postaCode;

    #[ORM\Column(type: 'string', length: 255)]
    private $city;

    #[ORM\Column(type: 'string', length: 20, nullable: true)]
    private $phoneNumber;

    #[ORM\Column(type: 'integer')]
    private $RPPS;

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

    public function __construct()
    {
        $this->surgery = new ArrayCollection();
        $this->clinic = new ArrayCollection();
        $this->fkavailability = new ArrayCollection();
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

    public function getPostaCode(): ?int
    {
        return $this->postaCode;
    }

    public function setPostaCode(int $postaCode): self
    {
        $this->postaCode = $postaCode;

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

    public function getRPPS(): ?int
    {
        return $this->RPPS;
    }

    public function setRPPS(int $RPPS): self
    {
        $this->RPPS = $RPPS;

        return $this;
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
}
