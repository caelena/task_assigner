<?php

namespace App\Entity;

class Label
{
    private ?int $id;
    private ?string $description;
    private ?string $abbreviation;
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


}