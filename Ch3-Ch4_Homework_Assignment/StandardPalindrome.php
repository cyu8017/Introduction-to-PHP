<!DOCTYPE html>
<html>
<head>
  <title>Standard Palindrome</title>
</head>
<body>
  <form action="StandardPalindrome.php" method="POST">
    <b>Enter a palindrome:</b>
    <input type="text" name="standardpalindrome" value="<?php if ( isset($_POST['standardpalindrome']) ) echo $_POST['standardpalindrome']; ?>">
    <input type="submit" name="submit" value="submit" />
  </form>
</body>
</html>

<?php

$standardpalindrome = "";

if (isset($_POST['submit'])) {

  if ($_POST['standardpalindrome']) {

    # Get the standard palindrome that was entered by the user.
    $standardpalindrome = $_POST['standardpalindrome'];

    # Convert the original palindrome to lowercase letters.
    # Compare palindrome entry with palindrome2.
    $palindrome = strtolower(preg_replace("([^A-Za-z0-9])", "", $standardpalindrome));
    $palindrome2 = strtolower(strrev($palindrome));

    # If the user enters a valid standard palindrome,
    # Print the following success message.
    if ($palindrome == $palindrome2) {
      echo "<br>";
      echo "Your entry of: <strong>" . $palindrome . "</strong> is a standard palindrome of <strong>" . $palindrome2 . "</strong>.";
    }

    # If the user entry is not a standard palindrome,
    # Print the following error message.
    else {
      echo "<br>";
      echo $palindrome . " is <strong> not </strong> a Standard Palindromes of " . $palindrome2 . ".";
    }
  }

  # If user does not enter a palindrome,
  # echo the following error message.
  else if ($standardpalindrome == "") {
    echo "<br>";
    echo "Please enter a valid standard palindrome";
  }

} // End

?>
