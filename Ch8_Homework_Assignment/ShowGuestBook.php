<!DOCTYPE html>
<html>

<head>

  <!-- Meta Tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Show Guest Book</title>

</head>

<body>

  <?php

  $DBConnect = @mysql_connect("localhost", "root", "");
  if ($DBConnect === FALSE)
    echo "<p>Unable to connect to the database server.</p>"
      . "<p>Error code " . mysql_errno()
      . ": " . mysql_error() . "</p>";
  else {
    $DBName = "guestbook";
    if (!@mysql_select_db($DBName, $DBConnect))
      echo "<p>There are no entries in the guestbook!</p>";

    else {
      $TableName = "visitors";
      $SQLstring = "SELECT * FROM $TableName";
      $QueryResult = @mysql_query($SQLstring, $DBConnect);
      if (mysql_num_rows($QueryResult) == 0)
        echo "<p>There are no entries in the guestbook!</p>";

      else {
        echo "<p>The following visitors have signed our guestbook:</p>";
        echo "<table width='100%' border='1'>";
        echo "<tr><th>First Name</th><th>Last Name</th></tr>";
        while (($Row = mysql_fetch_assoc($QueryResult)) !== FALSE) {
          echo "<tr><td>{$Row['first_name']}</td>";
          echo "<td>{$Row['last_name']}</td></tr>";
        }
      }

      mysql_free_result($QueryResult);
    }
    mysql_close($DBConnect);
  }

  ?>



</body>

</html>