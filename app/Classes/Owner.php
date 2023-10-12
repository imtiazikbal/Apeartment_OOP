<?php 
namespace App\Classes;

use App\Classes\Apartment;

class Owner
{
    private $name;
    private $apartment;

    public function __construct($name, Apartment $apartment){
        $this->name = $name;
        $this->apartment = $apartment;

    }

    public function displayDetails(){
        echo "Owner Name: " . $this->name . "\n";
        echo "Apartment Number: " . $this->apartment->getApeartmentNumber() . "\n";
    }
}