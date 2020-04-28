<!DOCTYPE html>
<html>

<head>

  <!-- Meta Tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Compare Strings</title>

</head>

<body>

  <h1>Compare Strings</h1>
  <hr>

  <form action="CompareStrings.php" method="POST">
    <b>Enter first string: </b>
    <input type="text" name="firstString" value="<?php if (isset($_POST['firstString'])) echo $_POST['firstString']; ?>">
    <br><br>
    <b>Enter second string: </b>
    <input type="text" name="secondString" value="<?php if (isset($_POST['secondString'])) echo $_POST['secondString']; ?>">
    <br><br>
    <input type="submit" name="submit" value="submit" />
  </form>

</body>

</html>

<?php
if (isset($_POST["submit"])) {

  $firstString = $_POST['firstString'];
  $secondString = $_POST['secondString'];

  if ($firstString == $secondString)
    echo "<p>Both strings are the same.</p>";

  else {
    echo "<p>Both strings have "
      . similar_text($firstString, $secondString)
      . " character(s) in common.</p>";

    echo "<p>You must change "
      . levenshtein($firstString, $secondString)
      . " character(s) to make strings the same. </p>";
  }
} # End

?>