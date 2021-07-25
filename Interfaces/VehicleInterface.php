<?php

interface VehicleInterface
{
    public function getModel(int $id);
    public function getSpeed(int $id);
    public function getPrice(int $id);
    public function getInfo(int $id);
    public function getVehicles();
}