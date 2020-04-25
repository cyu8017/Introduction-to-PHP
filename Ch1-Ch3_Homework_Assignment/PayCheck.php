<?php

if ($_POST) {

  # Get the number of hours worked.
  $numOfHours = $_POST['numOfHours'];
  $hourlyWage = $_POST['hourlyWage'];

  # Check if the user entered a negative number.
  if (($_POST['numOfHours'] >= 0) && ($_POST['hourlyWage'] >= 0)) {

    # If the user enters a valid number of hours,
    # Do the following:
    if (is_numeric($numOfHours)) {

      # Calculates gross pay if the user enters a number higher than 40 hours.
      if ($numOfHours > 40) {
        # Calculate gross pay
        $gross = $hourlyWage * 40;
        $overtime = ($numOfHours - 40) * ($hourlyWage * 1.5);
        $totalPayment = $gross + $overtime;

        # Print pay check total.
        print("Pay Check Total: $" . $totalPayment);
      }

      # If the user does not enter a number higher than 40 hours,
      # Do the following:
      else {
        # Calculate gross pay.
        $gross = $hourlyWage * $numOfHours;
        # Print pay check total.
        print("Pay Check Total: $" . $gross);
      }
    }

    # If the user does not enter a valid number of hours worked,
    # Print the following error message.
    else {
      print ("You did not enter a valid number of hours. Please try again!");
    }

  }

  # If the user enters a negative number,
  # Print the following error message.
  else {
     print ("Negative number detected. Please enter only positive numbers.");
  }

} // End

?>
