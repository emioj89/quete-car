<?php

class Car
{
    private int  $nbwheels;
    private int  $currentSpeed;
    private string $color;
    private int  $nbSeats;
    private string  $energy;
    private int  $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {

        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;

    }

    public function demarrage():string
    {
        $this->currentSpeed = 100;
        $this->energyLevel = 100;
        return 'go!!!!!!!!!!!!';
    }

    public function brake() :string
    {
        $sentence ="";
        while($this->currentSpeed > 0 &&  $this->energyLevel > 0){
            echo $this->currentSpeed .' kmh ';
            echo $this->energyLevel .' litres of gasoline'. '<br>';
            $this->currentSpeed = $this->currentSpeed - 10;
            $this->energyLevel = $this->energyLevel - 5;
            $sentence .= "brake!!!!!!!";
        }
        $sentence .= "I'm stopped !";
       return $sentence;
    }
    public function getNbwheels(){

        return $this->nbwheels;

    }
    public function getCurrentSpeed(){

        return $this->currentSpeed;

    }
    public function getColor(){

        return $this->color;

    }
    public function getEnergy(){

        return $this->energy;

    }

    public function getEnergyLevel(){

        return $this->energyLevel;

    }
    public function getNbSeats(){

        return $this->nbSeats;

    }


    


}