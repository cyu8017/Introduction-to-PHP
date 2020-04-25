<?php

if ($_POST) {

  # Get the cents that was entered by the user.
  $cents = $_POST['cents'];

  # Check if the user entered a negative number.
  if ($_POST['cents'] >= 0) {
    if (is_numeric($cents)) {
      # Determine how many dollars the cents make up.
      $dollars = $_POST['cents'] / 100;
      # Print the number of dollars and remaining cents.
      print ($cents . " cents makes $" . $dollars);
    }

    # If the user does not enter a valid number of cents,
    # Print the following error message.
    else {
      print ("You did not enter a valid number of cents. Please try again!");
    }
  }

  # If the user enters a negative number,
  # Print the following error message
  else {
    print ("Negative number detected. Please enter only positive numbers.");
  }

} // End

?>
