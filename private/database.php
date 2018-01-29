<?php 
  require_once('db_credentials.php');

  // open a connection to db
  function db_connect(){
    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    confirm_db_connect(); // func
    return $connection;
  }


  // close db
  function db_disconnect($connection){
    if(isset($connection)){
      mysqli_close($connection);
    }
  }


  // Check if connect to database is successful 
  function confirm_db_connect(){
     // Test if connection successful 
    if(mysqli_connect_errno()){
      $msg = "Database connection failed ";
      $msg .= mysqli_connect_error();
      $msg .= " (" . mysqli_connect_errno() . ")";
      exit($msg);
    }
  }

  // Check database query successful
  function confirm_result_set($result_set){
    // Test if query successful 
    if(!$result_set){
      exit("Database query failed.");
    }
  }

?>