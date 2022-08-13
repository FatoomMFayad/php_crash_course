<?php
class Car
{
    public $model;
    public $engine;
    public $color;
    protected $speed;
    public $wheel;
    private $production_date;

    public function __construct($model, $engine, $color, $production_date)
    {
        $this->color = $color;
        $this->engine = $engine;
        $this->model = $model;
        $this->production_date = $production_date;
    }

    public function setWheel($Wheel)
    {
        $this->wheel = $Wheel;
    }
    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    public function getProduction_date()
    {
        return $this->production_date;
    }
}
