<?php

namespace App\Model;

class TimeSlot
{
    /**
     * @var Time
     */
    private $startTime;

    /**
     * @var Time
     */
    private $endTime;

    /**
     * TimeSlot constructor.
     * @param $startTime
     * @param $endTime
     */
    public function __construct()
    {
        $this->startTime = new Time();
        $this->endTime = new Time();
    }

    /**
     * @return Time
     */
    public function getStartTime(): Time
    {
        return $this->startTime;
    }

    /**
     * @param Time $startTime
     */
    public function setStartTime(Time $startTime): void
    {
        $this->startTime = $startTime;
    }

    /**
     * @return Time
     */
    public function getEndTime(): Time
    {
        return $this->endTime;
    }

    /**
     * @param Time $endTime
     */
    public function setEndTime(Time $endTime): void
    {
        $this->endTime = $endTime;
    }
}
