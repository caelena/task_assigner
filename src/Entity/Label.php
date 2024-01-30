<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: 'App\Repository\LabelRepository')]
#[ORM\InheritanceType("SINGLE_TABLE")]
#[ORM\DiscriminatorColumn(name: "state", type: "string")]
class Label
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'AUTO')]
    #[ORM\Column(type: 'integer')]
    private ?int $id;
    #[ORM\Column(type: 'string')]
    private ?string $description;
    #[ORM\Column(type: 'string', unique: true)]
    private ?string $abbreviation;
    #[ORM\Column(type: 'boolean')]
    private ?bool $archived;
    #[ORM\ManyToOne(targetEntity: Employee::class, inversedBy: 'labels')]
    private ?Employee $employee;
    #[ORM\ManyToMany(targetEntity: Task::class, inversedBy: 'labels')]
    private ?Collection $tasks;

    public function __construct()
    {
        $this->tasks = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): Label
    {
        $this->description = $description;
        return $this;
    }

    public function getAbbreviation(): ?string
    {
        return $this->abbreviation;
    }

    public function setAbbreviation(?string $abbreviation): Label
    {
        $this->abbreviation = $abbreviation;
        return $this;
    }

    public function getArchived(): ?bool
    {
        return $this->archived;
    }

    public function setArchived(?bool $archived): Label
    {
        $this->archived = $archived;
        return $this;
    }

    public function getEmployee(): Employee
    {
        return $this->employee;
    }

    public function setEmployee(Employee $employee): Label
    {
        $this->employee = $employee;
        return $this;
    }

    /**
     * @return Collection<int, Label>
     */
    public function getTasks(): Collection
    {
        return $this->tasks;
    }

    public function addTask(Task $task): Label
    {
        if (!$this->getTasks()->contains($task)) {
            $this->getTasks()->add($task);
            $task->addLabel($this);
        }
        return $this;
    }

    public function removeTask(Task $task): Label
    {
        if ($this->getTasks()->contains($task)) {
            $this->getTasks()->remove($task);
            $task->removeLabel($this);
        }
        return $this;
    }

}