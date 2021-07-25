<?php

abstract class Vehicle implements VehicleInterface
{
    protected $type;

    public function __construct()
    {
        $this->type = '*';
    }

    public function getModel(int $id): string
    {
        $vecicle = $this->getVehicle($id);
        return $vecicle['model'];
    }

    public function getPrice(int $id): string
    {
        $vecicle = $this->getVehicle($id);
        return '$ ' . $vecicle['price'];
    }

    public function getSpeed(int $id): string
    {
        $vecicle = $this->getVehicle($id);
        return $vecicle['speed'] . ' km/h';
    }

    public static function getInfo($id)
    {
        self::getInfo($id);
    } 

    protected function getVehicle ($id)
    {
        $db = new DB;
        $sql = "SELECT * FROM vehicles WHERE id_vehicle = $id AND type = {$this->type}";
        return $db->query($sql);
    }
}
