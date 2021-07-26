<?php

class Helicopter extends Vehicle
{
    protected $type;
    
    public function __construct()
    {
        $this->type = 'Helicopter';
    }
}
