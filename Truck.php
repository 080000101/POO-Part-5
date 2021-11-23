<!-- 

La capacité de stockage doit être saisie au moment de l'Instanciation de l'objet, en plus de la couleur, du nombre de sièges et de l'énergie.
Il a également une méthode qui permet de savoir s’il est plein ou non. Celle-ci retourne in filling quand il n'est pas plein et full quand il est plein. -->

<?php

require_once 'Car.php';

class Truck  extends Car
{
    private int $capacity;

    private int $cargo = 0;

    public function __construct(string $color, int $nbSeats, string $energy, int $capacity)
    {
        parent::__construct($color, $nbSeats, $energy);
        $this->capacity = $capacity;
    }

    public function cargoStatus(): string 
    {
        $sentence = "";
        if ( $this->cargo !== $this->capacity  ) {
            $sentence .= "In filling";
        } else {
            $sentence .= "Full";
        }
        return $sentence;
    }

    public function getCargo()
    {
        return $this->cargo;
    }

    public function setCargo(int $cargo)
    {
        if ($this->capacity < $cargo) {
            $this->cargo = $cargo;
            return $this;
        }
    }

    public function getCapacity()
    {
        return $this->capacity;
    }

    public function setCapacity(int $capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }
}