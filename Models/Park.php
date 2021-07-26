<?php

class Park
{
    protected $db;

    public function __construct()
    {
        $this->db = new DB;
    }

    public function addToPark(int $idVehicle, int $idPark): bool
    {
        $park = $this->getPark($idPark);
        $capacity = intval($park['capacity']);
        $count = intval($park['count']);
        if (!$this->inPark($idVehicle, $idPark) and $capacity > $count) {
            $this->incrementCountPark($idPark);
            $this->bindVehicleAndPark($idVehicle, $idPark);
            return true;
        }
        return false;
    }

    public function removeFromPark(int $idVehicle, int $idPark): bool
    {
        $park = $this->getPark($idPark);
        $count = intval($park['count']);
        if ($this->inPark($idVehicle, $idPark) and  $count > 0) {
            $this->decrementCountPark($idPark);
            $this->unBindVehicleAndPark($idVehicle);
            return true;
        }
        return false;
    }

    protected function getPark($idPark): array
    {
        $sql = "SELECT * FROM parks WHERE id_park = $idPark";
        return $this->db->query($sql)[0];
    }

    protected function inPark(int $idVehicle, int $idPark)
    {
        $sql = "SELECT * FROM vehicles WHERE id_vehicle = $idVehicle AND id_park = $idPark";
        return (bool)$this->db->query($sql);
    }

    protected function incrementCountPark(int $idPark): bool
    {
        $park = $this->getPark($idPark);
        if (!empty($park)) {
            $sql = "UPDATE parks SET count = count + 1 WHERE id_park = $idPark";
            $this->db->query($sql);
            return true;
        }
        return false;
    }

    protected function decrementCountPark(int $idPark): bool
    {
        $park = $this->getPark($idPark);
        if (!empty($park)) {
            $sql = "UPDATE parks SET count = count - 1 WHERE id_park = $idPark";
            $this->db->query($sql);
            return true;
        }
        return false;
    }

    protected function bindVehicleAndPark(int $idVehicle, int $idPark): bool
    {
        $park = $this->getPark($idPark);
        if (!empty($park)) {
            $sql = "UPDATE vehicles SET id_park = $idPark WHERE id_vehicle = $idVehicle";
            $this->db->query($sql);
            return true;
        }
        return false;
    }

    protected function unBindVehicleAndPark(int $idVehicle): bool
    {
        $sql = "UPDATE vehicles SET id_park = NULL WHERE id_vehicle = $idVehicle";
        $this->db->query($sql);
        return true;
    }
}
