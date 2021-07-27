<?php

interface ParkInterface 
{
    public function addToPark(int $idVehicle, int $idPark);
    public function removeFromPark(int $idVehicle, int $idPark);
    public function getVehicleToHightPrice();
    public function getAvgSum();
    public function getAllSum();
    public function getAllVehicles();
}