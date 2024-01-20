<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'archived_label')]
class ArchivedLabel extends Label
{
    #[ORM\Column(type: 'date')]
    private ?\DateTimeInterface $archiving_date;

    public function getArchivingDate(): ?DateTimeInterface
    {
        return $this->archiving_date;
    }

    public function setArchivingDate(?DateTimeInterface $archiving_date): ArchivedLabel
    {
        $this->archiving_date = $archiving_date;
        return $this;
    }
}