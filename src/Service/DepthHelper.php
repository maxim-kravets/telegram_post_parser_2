<?php


namespace App\Service;


class DepthHelper
{
    private $time;

    public function __construct()
    {
        $this->time = time();
    }

    public function setDepthInMinutes(int $minutes)
    {
        $this->time = $this->time - (60 * $minutes);
    }

    public function setDepthInHours(int $hours)
    {
        $this->time = $this->time - (60 * 60 * $hours);
    }

    public function setDepthInDays(int $days)
    {
        $this->time = $this->time - (60 * 60 * 24 * $days);
    }

    public function getDepth(): int
    {
        return $this->time;
    }
}