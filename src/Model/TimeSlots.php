<?php

namespace App\Model;

class TimeSlots
{
    private $timeSlots = [];

    public function append(TimeSlot $timeSlot): self
    {
        $this->timeSlots[] = $timeSlot;

        return $this;
    }

    public function getTimeSlots(): array
    {
        return $this->timeSlots;
    }
}
