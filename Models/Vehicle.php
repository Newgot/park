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

    /**
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return string
     */
    public function getPrice()
    {
        return $this->price . ' km/h';
    }

    /**
     * @return string
     */
    public function getSpeed()
    {
        return '$ ' . $this->speed;
    }

    /**
     * @return string
     */
    public function getInfo()
    {

    }
}