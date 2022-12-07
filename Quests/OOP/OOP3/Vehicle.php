<?php

class Vehicle
{   
    
   /* protected int $storageCapacity;

    protected string $color;

    protected int $currentSpeed;

    protected int $nbSeats;

    protected int $nbWheels;

    protected string $energy;

    protected int $currentLoad=0;

    public function __construct(int $storageCapacity, string $color, int $nbSeats,string $energy)
    {
        $this->storageCapacity=$storageCapacity;
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy=$energy;
    }

    public function forward(): string
    {
        if ($this->hasParkBrake = true) {
            throw new Exception('Park Brake is pulled');
        }else
        $this->currentSpeed = 15;
        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }

        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    public function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0){
            $this->currentSpeed = $currentSpeed;
        }
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }

    public function getEnergy(): string
    {
        $this->energy = $energy;
    }

    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }*/
}