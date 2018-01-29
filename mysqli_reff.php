<?php
  // Credentials
  $dbhost = '';
  $dbuser = '';
  $dbpass = '';
  $dbname = '';


  //1. Create db connection
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

  // Test if connection successful 
  if(mysqli_connect_errno()){
    $msg = "Database connection failed ";
    $msg .= mysqli_connect_error();
    $msg .= " (" . mysqli_connect_errno() . ")";
    exit($msg);
  }

  //2. Preform db query
  $query = "SELECT * FROM database_name";
  $result_set = mysqli_query($connection, $query);

  // Test if query successful 
  if(!$result_set){
    exit("Database query failed.");
  }

  //3. user returned data (if any)
  while($subject = mysqli_fetch_assoc($result_set)){
    echo $subject["col_name"] . "<br/>";
  }

  // 4. Release returned data
  mysqli_free_result($result_set);

  //5. close db connection
  mysqli_close($connection);
?>