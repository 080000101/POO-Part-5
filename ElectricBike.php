<?php
require_once 'Vehicle.php';
require_once 'RechargeableInterface.php';

class ElectricBike extends Vehicle implements RechargeableInterface
{
    public function charge(int $percentage): int
    {
        return $percentage;
    }

    public function unLoad(int $percentage): int
    {
        return $percentage;
    }
}