<!DOCTYPE html>
<html>

<head>

  <!-- Meta Tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Passenger Train</title>

</head>

<body>

  <form action="PassengerTrain.php" method="POST">
    <b>Enter Miles The Train Traveled:</b>
    <br>
    <input type="text" name="numOfMiles" value="<?php if (isset($_POST['numOfMiles'])) echo $_POST['numOfMiles']; ?>" />
    <br><br>
    <b>Enter Number of Stops The Train Makes:</b>
    <br>
    <input type="text" name="numOfStops" value="<?php if (isset($_POST['numOfStops'])) echo $_POST['numOfStops']; ?>" />
    <br><br>
    <b>Select a weather condition:</b>
    <br>
    <input type="radio" name="weatherCondition" value="Good" <?php if (isset($_POST["weatherCondition"]) && $_POST["weatherCondition"] == "Good") echo 'checked="checked"'; ?> />Good
    <br>
    <input type="radio" name="weatherCondition" value="Bad" <?php if (isset($_POST["weatherCondition"]) && $_POST["weatherCondition"] == "Bad") echo 'checked="checked"'; ?> />Bad
    <br><br>
    <input type="submit" name="submit" value="submit" />
    <br><br>
  </form>

</body>

</html>

<?php

if (isset($_POST["submit"])) {

  $numOfMiles = $_POST['numOfMiles'];
  $numOfStops = $_POST['numOfStops'];
  $weatherCondition = $_POST['weatherCondition'];

  # If the user enters a numeric value for numOfMiles and numOfStops
  # Do the following:
  if (is_numeric($numOfMiles) && is_numeric($numOfStops)) {

    # If the user selects good weather condition,
    # Do the following:
    if ($weatherCondition == "Good") {

      # Define and calculate the time that is traveled.
      # Divide numOfMiles by average of 50 miles and multiply by 60 minutes.
      # Add product to 5 minutes * numOfStops.
      $goodTraveledTime = (($numOfMiles / 50) * 60);

      # If the traveled time is greater than 1 hour:
      # Do the following:
      if ($goodTraveledTime >= 0) {
        $distanceInHours = $goodTraveledTime / 60;
        echo "<b>You have entered: </b> <br><br>";
        echo "<b>Number of Miles: </b>" . $numOfMiles . "<br>";
        echo "<b>Number of Stops: </b>" . $numOfStops . "<br>";
        echo "<b>Weather Condition: </b>" . $weatherCondition . "<br>";
        echo "----------------------------------------------------------------------------------";
        echo "<br>";

        # Print result
        echo "You will arrive at your destination in <strong>" . round($distanceInHours, 0) . "</strong> hour and <strong>" . round(5 * $numOfStops) . "</strong> minutes.";
      } else {
        echo "Invalid entries detected";
      }
    } # End good weather condition.

    # If the user selects bad weather condition,
    # Do the following:
    if ($weatherCondition == "Bad") {

      # Define and calculate the time that is traveled.
      # Divide numOfMiles by average of 40 miles and multiply by 60 minutes.
      # Add product to 5 minutes * numOfStops.
      $badTraveledTime = (($numOfMiles / 40) * 60);

      if ($badTraveledTime >= 0) {
        echo "<b>You have entered: </b> <br><br>";
        echo "<b>Number of Miles: </b>" . $numOfMiles . "<br>";
        echo "<b>Number of Stops: </b>" . $numOfStops . "<br>";
        echo "<b>Weather Condition: </b>" . $weatherCondition . "<br>";
        echo "----------------------------------------------------------------------------------";
        echo "<br>";
        $distanceInHours = $badTraveledTime / 60;

        # Print result
        echo "You will arrive at your destination in <strong>" . round($distanceInHours, 0) . "</strong> hour and <strong>" . round(5 * $numOfStops) . "</strong> minutes.";
      }
    } # End bad weather condition.

    if ($numOfMiles == "") {
      echo "You forgot to enter the number of miles the train is traveling.";
    }
  } # End is_numeric.
}

?>