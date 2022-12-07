<?php

require_once 'Highway.php';

final class PedestrianWay extends Highway
{
    private int $nbLane=1;
    private int $maxSpeed=10;
    private array $currentVehicle=[];

    public function addVehicle(?Vehicle $vehicle)
    {
        if ($vehicle instanceof Bike ||$vehicle instanceof Skateboard){
            $this->currentVehicle[]=$vehicle;
        }else{
            return "You're not allowed here.";
        }
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