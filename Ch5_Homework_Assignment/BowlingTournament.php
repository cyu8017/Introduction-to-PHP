<!DOCTYPE html>
<html>
<head>
  <title>Bowling Tournament Registration</title>
</head>
<body>
  <form action="BowlingTournament.php" method="POST">
    <h5>Bowling Tournament Registration</h5>
    <hr>
    <br>
    <label>First Name:</label><br>
    <input type="text" name="first_name">
    <br><br>
    <label>Last Name:</label><br>
    <input type="text" name="last_name">
    <br><br>
    <label>Age:</label><br>
    <input type="text" name="age">
    <br><br>
    <label>Average:</label><br>
    <input type="text" name="average">
    <br></br>
    <input type="submit" value="Submit">
  </form>
</body>
</html>

<?php

if (isset($_POST['first_name']) && isset($_POST['last_name']) && is_numeric($_POST['age']) && is_numeric($_POST['average'])) {

  # If this field is empty,
  # Display the following error message.
  if (empty($_POST["first_name"])) {
    echo "First name is required.";
  }

  # If this field is empty,
  # Display the following error message.
  else if (empty($_POST["last_name"])) {
    echo "Last name is required.";
  }

  # If this field is empty,
  # Display the following error message.
  else if (empty($_POST['age'])) {
    echo "Age is required.";
  }

  # If this field is empty,
  # Display the following error message.
  else if (empty($_POST['average'])) {
    echo "Average is required.";
  }

  else {
    # Gather the following values from the user.
    $FirstName = $_POST['first_name'];
    $LastName = $_POST['last_name'];
    $Age = $_POST['age'];
    $Average = $_POST['average'];

    # Create a text file New Bowler,
    # Add $FirstName, LastName, Age, and Average to that file.
    $CreateNewBowler = $FirstName . ", " . $LastName . ", " . $Age . ", " . $Average . "\r\n";
    $BowlerRegistration = "NewBowlerRegistration.txt";

    # Authentication:
    # If the bowler was successfully added to $BowlerRegistration
    # Print the following message.
    if (file_put_contents($BowlerRegistration, $CreateNewBowler, FILE_APPEND) > 0)
      echo "<br>" . "New bowler <strong>" . $FirstName . " " . $LastName . "</strong> has been registered.";

    # If the bowler was not successfully added,
    # Print the following error message.
    else
      echo "<br> " . "There was an error processing your registration.";
  }
} # End

?>
