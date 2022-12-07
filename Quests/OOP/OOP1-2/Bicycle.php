<?php
require_once './Vehicle.php';
class Bicycle extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'electric',
        'manpower'
    ];
}
//Pour les utiliser, il suffit de les appeler via $this à l'interieur de la classe où elle est définie ou 
//via la variable contenant l'instance de l'objet en dehors, i.e. $bike->setCurrentSpeed(24);.


class Car extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
        'diesel',
    ];

    private int $energyLevel;

    public function __construct(int $storageCapacity, string $color, int $nbSeats, string $energy)
{
    parent::__construct($storageCapacity, $color, $nbSeats, $energy);
}

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }


}