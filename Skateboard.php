<?php

require_once 'Vehicle.php';

final class Skateboard extends Vehicle
{
    public function __construct(string $color, int $nbSeats)
    {
        parent::__construct($color, $nbSeats);
    }
}