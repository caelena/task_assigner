<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'label')]
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

}