<?php


// Vehicle.php

abstract class Vehicle
{
    protected string $color;

    protected int $currentSpeed;
    
    protected int $nbSeats;
    
    protected int $nbWheels;
    
    public function __construct(string $color, int $nbSeats)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
    }

    public function forward(): string
    {
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

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {   
        if ($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }


}