<?php

require_once 'Highway.php';

final class ResidentialWay extends Highway
{
    private int $nbLane=2;
    private int $maxSpeed=50;
    private array $currentVehicle=[];

    public function addVehicle(?Vehicle $vehicle)
    {
        $this->currentVehicle[]=$vehicle;
    }
    
    /**
     * Get the value of currentVehicle
     */ 
    public function getCurrentVehicle():array
    {
        return $this->currentVehicle;
    }

    /**
     * Set the value of currentVehicle
     *
     * @return  self
     */ 
    public function setCurrentVehicle($currentVehicle)
    {
        $this->currentVehicle = $currentVehicle;

        return $this;
    }
}