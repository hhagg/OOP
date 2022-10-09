<?php

class Bicycle
{
    private string $color;
    private int $currentSpeed;
    private int $nbSeats = 1;
    private int $nbWheels = 2;

    // faire avancer
    public function forward(): string
    {
        $this->currentSpeed = 15;

        return "Go !";
    }
    // faire arreter
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
    // dumper les objets
    public function dump() : array
    {
        var_dump($this);
    }

    //getter
    public function gerCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    //setter
    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0)
        {
           $this->currentSpeed = $currentSpeed; 
        }
        
    }

}