<?php


class Car extends Vehicle
{
    protected $type;
    
    public function __construct()
    {
        $this->type = '"car"';
    }


}