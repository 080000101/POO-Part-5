<?php
require_once 'Vehicle.php';
require_once 'LightableInterface.php';
class Car  extends Vehicle implements LightableInterface
{
    public const ALLOWED_ENERGIES = [

        'fuel',

        'electric',

    ];

    protected string $energy;

    protected int $energyLevel;

    private bool $hasParkBrake = true;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        
        $this->energy = $energy;
    }

    public function start()
    {
        if ($this->hasParkBrake) {
            throw new Exception('The car is stopped');
        }
        $this->currentSpeed = 0;
        return "Vroum vroum ! <br>";
    }

    public function getEnergy()
    {
        return $this->energy;
    }

    public function setEnergy($energy)
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel()
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel($energyLevel)
    {
        $this->energyLevel = $energyLevel;

        return $this;
    }

    /**
     * Get the value of hasParkBrake
     */ 
    public function getHasParkBrake()
    {
        return $this->hasParkBrake;
    }

    /**
     * Set the value of hasParkBrake
     *
     * @return  self
     */ 
    public function setHasParkBrake($hasParkBrake)
    {
        $this->hasParkBrake = $hasParkBrake;

        return $this;
    }
    public function switchOn()
    {
        return "true";
    }
    public function switchOff()
    {   
        return "false";
    }
}
