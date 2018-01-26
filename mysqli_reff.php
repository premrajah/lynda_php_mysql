<?php
  // Credentials
  $dbhost = '';
  $dbuser = '';
  $dbpass = '';
  $dbname = '';


  //1. Create db connection
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

  //2. Preform db query
  $query = "SELECT * FROM database_name";
  $result_set = mysqli_query($connection, $query);

  //3. user returned data (if any)

  // 4. Release returned data
  mysqli_free_result($result_set);

  //5. close db connection
  mysqli_close($connection);
?>