<?php

namespace CodeHqDk\Calendar;

use DateTime;

class Birthday implements CalendarEntry
{
    public function __construct(
        private readonly int $birthdate,
        private readonly string $name,
        private readonly ?string $description = null,
        private readonly ?string $photo_url = null
    ) {
    }

    public function getUnitTimeStamp(): int
    {
        return $this->birthdate;
    }

    public function getShortDescription(): string
    {
        return $this->name;
    }

    public function getLongDescription(): ?string
    {
        return $this->description;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        $from = new DateTime(date('Y-m-d', $this->birthdate));
        $to   = new DateTime('today');
        return $from->diff($to)->y; // TODO + 1 ?
    }

    public function getLink(): ?string
    {
        return null;
    }

    public function getPhotoUrl(): ?string
    {
        return $this->photo_url;
    }

    public function getAddress(): ?string
    {
        return null;
    }
}