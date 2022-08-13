<?php
class Bus extends Car
{
    public $weight;
    public $passenger;

    public function __construct($model, $engine, $color, $production_date, $weight, $passenger)
    {
        $c = new Car($model, $engine, $color, $production_date);
        $this->model = $c->model;
        $this->engine = $c->engine;
        $this->color = $c->color;
        $this->weight = $weight;
        $this->passenger = $passenger;
    }
}
