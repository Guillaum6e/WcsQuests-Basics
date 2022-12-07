<?php

abstract class Highway
{
    private array $currentVehicles;
    private int $nbLane;
    private int $maxSpeed;

    abstract function addVehicle(?Vehicle $vehicle);
    

    /**
     * Get the value of currentVehicules
     */ 
    public function getCurrentVehicles():array
    {
        return $this->currentVehicles;
    }

    /**
     * Set the value of currentVehicules
     *
     * @return  self
     */ 
    public function setCurrentVehicles($currentVehicles)
    {
        $this->currentVehicles = $currentVehicles;

        return $this;
    }

    /**
     * Get the value of nbLane
     */ 
    public function getNbLane():int
    {
        return $this->nbLane;
    }

    /**
     * Set the value of nbLane
     *
     * @return  self
     */ 
    public function setNbLane($nbLane)
    {
        $this->nbLane = $nbLane;

        return $this;
    }

    /**
     * Get the value of maxSpeed
     */ 
    public function getMaxSpeed():int
    {
        return $this->maxSpeed;
    }

    /**
     * Set the value of maxSpeed
     *
     * @return  self
     */ 
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;

        return $this;
    }
}