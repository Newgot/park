<?php


abstract class Vehicle implements VehicleInterface
{
    protected $model;
    protected $speed;
    protected $price;

    public function __construct($model, $speed, $price)
    {
        $this->model = $model;
        $this->speed = $speed;
        $this->price = $price;
    }

    public function getModel() : string
    {
        return $this->model;
    }

    public function getPrice() : string
    {
        return $this->price . ' km/h';
    }

    public function getSpeed() : string
    {
        return '$ ' . $this->speed;
    }

    public function getInfo()
    {

    }
}