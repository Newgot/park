<?php

abstract class Vehicle implements VehicleInterface
{
    protected $type;

    public function __construct()
    {
        $this->type = '0 or true';
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

    public function getInfo(int $id): string
    {   
        $type = ucwords(trim($this->type, '"'));
        return "$type: {$this->getModel($id)}, {$this->getSpeed($id)}, {$this->getPrice($id)}";
    }

    protected function getVehicle (int $id): array
    {
        $idVehicle = $id > 0 ? $id : "0 or true";
        $db = new DB;
        $sql = "SELECT * FROM vehicles WHERE (id_vehicle = $idVehicle) AND (type = {$this->type})";
        return $db->query($sql)[0];
    }

    public function getVehicles() : array 
    {

        return $this->getVehicle(0);
    }
}
