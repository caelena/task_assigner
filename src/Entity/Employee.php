<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'employee')]
class Employee
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'AUTO')]
    #[ORM\Column(type: 'integer')]
    private ?int $id;
    #[ORM\Column(type: 'string')]
    private ?string $firstName;
    #[ORM\Column(type: 'string')]
    private ?string $lastName;
    #[ORM\OneToOne(targetEntity: Employee::class)]
    private ?Employee $substitute;
    #[ORM\Column(type: 'date', nullable: true)]
    private ?\DateTimeInterface $birthdayDate;
    #[ORM\Column(type: 'boolean')]
    private ?bool $active;

    #[ORM\OneToMany(targetEntity: Task::class, mappedBy: 'employee')]
    private ?Collection $tasks;
    #[ORM\OneToMany(targetEntity: Label::class, mappedBy: 'employee')]
    private ?Collection $labels;

    public function __construct()
    {
        $this->tasks = new ArrayCollection();
        $this->labels = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): Employee
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): Employee
    {
        $this->lastName = $lastName;
        return $this;
    }

    public function getBirthdayDate(): ?\DateTimeInterface
    {
        return $this->birthdayDate;
    }

    public function setBirthdayDate(?\DateTimeInterface $birthdayDate): Employee
    {
        $this->birthdayDate = $birthdayDate;
        return $this;
    }

    public function isActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(?bool $active): Employee
    {
        $this->active = $active;
        return $this;
    }

    public function getSubstitute(): ?Employee
    {
        return $this->substitute;
    }

    public function setSubstitute(?Employee $substitute): Employee
    {
        if (!$this->isActive()) {
            $this->substitute = $substitute;
        }
        return $this;
    }

    /**
     * @return Collection<int, Task>
     */
    public function getTasks(): Collection
    {
        return $this->tasks;
    }

    /**
     * @return Collection<int, Task>
     */
    public function getLabels(): Collection
    {
        return $this->labels;
    }


}