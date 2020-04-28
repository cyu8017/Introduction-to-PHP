<?php

if ($_POST) {

  # Set Entry range 1 - 999
  $min = 0;
  $max = 1000;

  # Get number input from user.
  $primeNum = $_POST['primeNum'];
  $y = 0;

  # Check if the user entered a negative number.
  if ($_POST['primeNum'] >= 0) {

    /* A prime number is a number that can only be divided by itself or by one.
     * Examples of prime numbers include 1, 3, 5, 13, and 17.
     */

     # If the user enters a valid prime number,
     # Do the folowing:
     if (is_numeric($primeNum)) {

       if ($primeNum > $min && $primeNum < $max) {
         for ($i = 2; $i < $primeNum; $i++) {
           if ($primeNum % $i == 0) {
             $y = 1;
             break;
           }
         }

         # If the number entered is a prime number,
         # Print the following message.
         if ($y == 0)
           print ("Your entry of " . $primeNum . " is a prime number.");

         # If the number entered is not a prime number,
         # Print the following message.
         else
           print ("Your entry of " . $primeNum . " is NOT a prime number.");

       } else {
         print ("Please enter a number within the range of 1 and 999.");
       }
     }

     # If the user did not enter a valid number,
     # Print the following error message.
     else {
       print ("You did not enter a valid numeric number. Please try again!");
     }

   }

   # If the user enters a negative number,
   # Print the following error message.
   else {
      print ("Negative number detected. Please enter only positive numbers.");
   }

} // End

?>
