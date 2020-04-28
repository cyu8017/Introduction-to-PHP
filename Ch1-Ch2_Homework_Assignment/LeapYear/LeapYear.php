<?php

if ($_POST) {

  # Get the year that was entered by the user.
  $yearEntered = $_POST['yearEntered'];

  # Check if the user entered a negative number.
  if ($_POST['yearEntered'] >= 0) {

    # If the user enters a valid numeric year,
    # Do the following:
    if (is_numeric($yearEntered)) {

      /* The following conditions will validate a leap year.
       * Check if the year entered is divisible by 4.
       * Check if the year entered is divisible by 100.
       * Check if the year entered is divisible by 400.
       */

      if (($yearEntered % 4 == 0) and
          ($yearEntered % 100 != 0) or
          ($yearEntered % 400 == 0)) {

          # When a valid leap year is entered, print the following message.
          print ($yearEntered . " is a Leap Year.");
        }

        else {
          # When a non leap year is entered, print the following message.
          print ($yearEntered . " is not a Leap Year.");
       }
     }

     # If the user does not enter a valid year,
     # Print the following error message.
     else {
       print ("You did not enter a valid year. Please try again!");
     }

   }

   # If the user enters a negative number,
   # Print the following error message.
   else {
     print ("Negative number detected. Please enter only positive numbers.");
   }

} // End

?>
