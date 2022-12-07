<?php 
require_once './Vehicle.php';

class Truck extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
        'diesel',
    ];

    private int $energyLevel;

    public function __construct(int $storageCapacity, string $color, int $nbSeats, string $energy)
    {
        parent::__construct($storageCapacity,$color, $nbSeats, $energy);
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function getCurrentLoad(): int
    {
        return $this->currentLoad;
    }

    public function setCurrentLoad(int $currentLoad): void
    {
        $this->currentLoad = $currentLoad;
    }

    public function fill():string
    {
        $sentence = "";
        if ($this->currentLoad===0){
            $sentence.="The truck is empty";
        }elseif($this->currentLoad===$this->storageCapacity){
            $sentence.="Truck is full";
        }else{
            $sentence.="Truck is filling";
        }
        return $sentence;
    }
}