<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'task')]
class Task
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'AUTO')]
    #[ORM\Column(type: 'integer')]
    private ?int $id;
    #[ORM\Column(type: 'string')]
    private ?string $title;
    #[ORM\Column(type: 'string')]
    private ?string $employee;
    #[ORM\Column(type: 'integer')]
    private ?int $priority;
    #[ORM\Column(type: 'string', unique: true)]
    private ?string $code;
    #[ORM\Column(type: 'time', nullable: true)]
    private ?\DateTimeInterface $estimatedTime;
    #[ORM\Column(type: 'text')]
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