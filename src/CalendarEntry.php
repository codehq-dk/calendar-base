<?php

namespace CodeHqDk\Calendar;

interface CalendarEntry
{
    public function getUnitTimeStamp(): int;

    public function getShortDescription(): string;

    public function getLongDescription(): ?string;

    public function getLink(): ?string;

    public function getPhotoUrl(): ?string;

    public function getAddress(): ?string;
}