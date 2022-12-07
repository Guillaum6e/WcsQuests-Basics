<?php

require_once 'Highway.php';

final class MotorWay extends Highway
{
    private int $nbLane=4;
    private int $maxSpeed=130;
    private array $currentVehicle=[];

    public function addVehicle(?Vehicle $vehicle)
    {
        if ($vehicle instanceof Car ||$vehicle instanceof Moto ||$vehicle instanceof Truck){
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