<?php

namespace App\Entity;

class Task
{
    private ?int $id;
    private ?string $title;
    private ?Employee $employee;
    private ?int $priority;
    private ?string $code;
    private ?\DateTimeInterface $estimatedTime;
    private ?string $details;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): Task
    {
        $this->title = $title;
        return $this;
    }


}