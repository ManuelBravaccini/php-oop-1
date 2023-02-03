<?php
class MetaData
{
    public $rate;
    public $duration;
    public $year;
    public $isReleased;

    public function __construct($_rate, $_duration, $_year, $_isReleased)
    {
        $this->rate = $_rate;
        $this->duration = $_duration;
        $this->year = $_year;
        $this->isReleased = $_isReleased;
    }
}
