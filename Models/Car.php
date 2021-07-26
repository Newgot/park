<?php

class Car extends Vehicle
{
    public $type;
    
    public function __construct()
    {
        $this->type = 'Car';
    }
}
