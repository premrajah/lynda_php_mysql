<?php
  // Credentials
  $dbhost = '';
  $dbuser = '';
  $dbpass = '';
  $dbname = '';


  //1. Create db connection
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

  //2. Preform db query

  //3. user returned data (if any)

  // 4. Release returned data

  //5. close db connection
  mysqli_close($connection);
?>