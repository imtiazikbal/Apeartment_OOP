<?php 
namespace App\Classes;

abstract class Apartment{
    protected  $apartmentNumber;
    protected $area;
     protected $numberOfBedrooms ;
      protected $rent;

      public function __construct($apartmentNumber,$area,$numberOfBedrooms){
          $this->apartmentNumber=$apartmentNumber;
          $this->area=$area;
          $this->numberOfBedrooms=$numberOfBedrooms;
          $this->calculateRent();    
      }

      abstract public function calculateRent();

      public function displayApartmentDetails(){
          echo "Apartment Number: " . $this->apartmentNumber . "\n";
          echo "Area(sq.ft): " . $this->area . "\n";
          echo "Number of Bedrooms: " . $this->numberOfBedrooms . "\n";
          echo "Rent: " . $this->rent . "\n";
      }

      public function getApeartmentNumber(){
          return $this->apartmentNumber;
      }
      
}