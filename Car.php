<?php

class Car
{
    // ATTRIBUTES
    private int $nbWheels;
    private int $currentSpeed;
    private string $color ;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel ;

    //METHODS
    public function __construt(string $color, int $nbSeats, string $energy)
    {

    }
    public function start(): string
    {
        return "Go !";
    }
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }
    // public function setCurrentSpeed(int $currentSpeed): void
    // {
    //     if($currentSpeed >= 0)
    //     {
    //        $this->currentSpeed = $currentSpeed; 
    //     }
        
    // }
    public function forward(): string
    {
        $this->currentSpeed = 60;
        return "Run ..";
    }
    public function brake(): string
    {
        $sentence="";
        while ($this->currentSpeed > 0)
        {
            $this->currentSpeed--;
        }
        $sentence .= "Brake !!!";
        return $sentence;
    }
    public function getColor(): string
    {
        return $this->color;
    }
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }
    public function getEnergy(): string
    {
        return $this->energy;
    }
    public function getEnergyLevel(): int
    {  
        return $this->energyLevel;       
    }
}