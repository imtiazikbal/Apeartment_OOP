<?php 

namespace App\Classes;

use App\Classes\Apartment;
use App\Traits\HasBalcony;

class StandardApartment extends Apartment
{

    use HasBalcony;
     public function calculateRent(){
           $this->rent = $this->area * 0.2 + $this->numberOfBedrooms * 100;
           if($this->hasBalcony()){
               $this->rent += 50;
           }
     }
}