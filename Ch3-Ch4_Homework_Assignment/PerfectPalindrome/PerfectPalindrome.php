<!DOCTYPE html>
<html>

<head>

  <!-- Meta Tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Perfect Palindrome</title>

</head>

<body>

  <form action="PerfectPalindrome.php" method="POST">
    <b>Enter a perfect palindrome:</b>
    <input type="text" name="perfectpalindrome" value="<?php if (isset($_POST['perfectpalindrome'])) echo $_POST['perfectpalindrome']; ?>">
    <input type="submit" name="submit" value="submit" />
  </form>

</body>

</html>

<?php

$perfectpalindrome = "";

if (isset($_POST['submit'])) {

  # Get the perfect palindrome that was entered by the user.
  $perfectpalindrome = $_POST['perfectpalindrome'];

  if ($_POST['perfectpalindrome']) {

    # Get the perfect palindrome that was entered by the user.
    $perfectpalindrome = $_POST['perfectpalindrome'];

    # Convert the original palindrome by reversing the string.
    $perfectpalindrome2 = strrev($perfectpalindrome);

    # If the palindrome is the same in reverse,
    # Print the following message.
    if ($perfectpalindrome == $perfectpalindrome2) {
      echo "<br>"
        . "Your entry of <strong>"
        . $perfectpalindrome
        . "</strong> is a perfect palindrome.";
    }

    # If the user did not enter a valid perfect palindrome,
    # Print the following error message.
    else {
      echo "<br>"
        . "Your entry of <strong>"
        . $perfectpalindrome
        . "</strong> is not a perfect palindrome.";
    }
  }

  # If user does not enter a palindrome,
  # echo the following error message.
  else if ($perfectpalindrome == "") {
    echo "<br>";
    echo "Please enter a valid palindrome.";
  }
} # End

?>