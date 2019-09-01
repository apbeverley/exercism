<?php

class Clock
{
    private $time;

    public function __construct($h = '00', $m = '00')
    {
        $this->time = $this->genTime("+$h hours $m minutes", '00:00');
    }

    public function __toString(): string
    {
        return $this->time;
    }

    public function add($m)
    {
        $this->time = $this->genTime("+$m minutes", $this->time);

        return $this;
    }

    public function sub($m)
    {
        $this->time = $this->genTime("-$m minutes", $this->time);

        return $this;
    }

    protected function gentime($endTime, $startTime)
    {
        return date('H:i', strtotime($endTime, strtotime($startTime)));
    }
}