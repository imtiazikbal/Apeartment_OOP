<?php 
namespace App\Classes;
use App\Classes\Apartment;
use App\Interface\HasAmenities;

class LuxuryApartment extends Apartment implements HasAmenities

   {
    
    private $amenities;
    public function __construct($apartmentNumber, $area, $numberOfBedrooms,$amenities){
        parent::__construct($apartmentNumber, $area, $numberOfBedrooms);
        $this->amenities = $amenities;
    }
    
    public function calculateRent(){
        $this->rent = $this->area * 0.9 + $this->numberOfBedrooms * 100;
    }
    public function getAmenities(){
        return implode(", ",$this->amenities);
    }
   }