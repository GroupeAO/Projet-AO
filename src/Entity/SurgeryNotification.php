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

    #[ORM\Column(type: 'integer')]
    private $numberAoSpotLeft;

    #[ORM\ManyToMany(targetEntity: User::class, mappedBy: 'surgery')]
    private $users;

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

    public function getNumberAoSpotLeft(): ?int
    {
        return $this->numberAoSpotLeft;
    }

    public function setNumberAoSpotLeft(int $numberAoSpotLeft): self
    {
        $this->numberAoSpotLeft = $numberAoSpotLeft;

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
            $user->addSurgery($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->removeElement($user)) {
            $user->removeSurgery($this);
        }

        return $this;
    }
}
