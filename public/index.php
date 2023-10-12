<?php 
include "autoload.php";
use App\Classes\Owner;
use App\Classes\LuxuryApartment;
use App\Classes\StandardApartment;
$standardApartment  = new StandardApartment("501", 1800, 2);
$luxuryApartment     = new LuxuryApartment("502", 1900, 3,["Swimung", "Gym", "Spa"]);

// Set balcony for a standard apartment
$standardApartment->setBalcony( true );
$standardApartment->calculateRent();

$owner1 = new Owner("John", $standardApartment);
$owner2 = new Owner("Jane", $luxuryApartment);

// Display apartment details
echo "Standard Apartment Details:\n";
$standardApartment->displayApartmentDetails();

echo "\nLuxury Apartment Details:\n";
$luxuryApartment->displayApartmentDetails();
echo "Amenities: " . $luxuryApartment->getAmenities(). "\n";

echo "\nOwner Details:\n";
$owner1->displayDetails();
$owner2->displayDetails();
