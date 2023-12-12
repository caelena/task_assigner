<?php

namespace App\Entity;

class Employee
{
    private ?int $id;
    private ?string $firstName;
    private ?string $lastName;
    private ?\DateTimeInterface $birthdayDate;
    private ?bool $active;

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
}