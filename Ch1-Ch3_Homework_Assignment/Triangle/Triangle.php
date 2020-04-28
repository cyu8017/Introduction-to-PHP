<?php

if ($_POST) {

  # Get the sides that was entered by the user.
  $sideA = $_POST['sideA'];
  $sideB = $_POST['sideB'];
  $sideC = $_POST['sideC'];

  # Check if the user entered a negative number.
  if (($_POST['sideA'] > 0) && ($_POST['sideB'] > 0) && ($_POST['sideC'] > 0)) {

    /* The combined length of any two sides of a triangle must be
     * greater than the length of the third side for the segments to form
     * a triangle.
     *
     * Test Cases:
     * Sides 6, 8, and 12 can form a triangle.
     * Sides 25, 5, and 15 cannot form a triangle.
     */

     # If the user enters a valid number for sideA, sideB, and sideC
     # Do the following:
     if (is_numeric($sideA) && is_numeric($sideB) && is_numeric($sideC)) {

       if ($sideA + $sideB > $sideC) {
         if ($sideB + $sideC > $sideA) {
           if ($sideA + $sideC > $sideB) {

             # Print this message if the sides are a valid triangle.
             print ("Sides " .
                      $sideA . ", " .
                      $sideB . ", and " .
                      $sideC . " makes a valid triangle. ");
           }

           else {
              # Print this message if the sides are NOT a valid triangle.
              print ("Sides " .
                       $sideA . ", " .
                       $sideB . ", and " .
                       $sideC . " does not make a valid triangle.");
           }
         }

         else {
           # Print this message if the sides are NOT a valid triangle.
           print ("Sides " .
                    $sideA . ", " .
                    $sideB . ", and " .
                    $sideC . " does not make a valid triangle.");
         }
       }

       else {
         # Print this message if the sides are NOT a valid triangle.
         print("Sides " .
                $sideA . ", " .
                $sideB . ", and " .
                $sideC . " does not make a valid triangle.");
       }

       return 0;
     }

     # If the user does not enter a valid number for sideA, sideB, and sideC
     # Print the following error message.
     else {
       print ("You did not enter a vaid number for each side of the triangle. "
              . "Please try again.");
     }
   }

   # If the user enters a negative numner,
   # Print the following error message.
   else {
      print ("Negative number detected. Please enter only positive numbers.");
   }

} // End

?>
