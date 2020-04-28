<?php

$HospitalDepts = array(
     "Anesthesia",    		// first element (0)
     "Pediatrics",   		// second element (1)
     "Molecular Biology",   // third element (2)
     "Neurology");         // fourth element (3)

array_splice($HospitalDepts, 3, 0, array("Opthalmology", "Otolaryngology"));

unset($HospitalDepts[1]);
$HospitalDepts = array_values($HospitalDepts);

rsort($HospitalDepts);

for ($i = 0; $i < count($HospitalDepts); ++$i) {
     echo "{$HospitalDepts[$i]}<br />";
}

/*
//Associative Arrays

$Territories[100] = "Nunavut";
$Territories[] = "Northwest Territories";
$Territories[] = "Yukon Territory";
echo "<pre>\n";
print_r($Territories);
echo "</pre>\n";
echo '<p>The $Territories array consists of ', count($Territories), " elements.</p>\n";
*/

/*	 
//array_slice() function
// This array is ordered by sales, high to low.
$TopSellers = array("Ford F-Series", "Chevrolet Silverado", "Toyota Camry", "Honda Accord", "Toyota Corolla", "Honda Civic", "Nissan Altima", "Chevrolet Impala", "Dodge Ram", "Honda CR-V");
$FiveTopSellers = array_slice($TopSellers, 0, 5);
echo "<p>The five best-selling vehicles for 2008 are:</p>\n";
for ($i=0; $i<count($FiveTopSellers); ++$i) {
	echo "{$FiveTopSellers[$i]}<br />\n";
}
*/


?>