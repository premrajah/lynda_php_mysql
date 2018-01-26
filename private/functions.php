<?php

  // check if script path has a leading '/' if not add one
  // add the leading '/' if not present
  function url_for($script_path){
    if($script_path[0] != '/'){
      $script_path = "/" . $script_path;
    }

    return WWW_ROOT . $script_path;
  }


  // function to use urlencode() and rawurlencode
  function u($string=""){
    return urlencode($string);
  }

  function raw_u($string=""){
    return rawurlencode($string);
  }

  // function for htmlspecialchar()
  function h($string=""){
    return htmlspecialchars($string);
  }

  // 404 error
  function error_404(){
    header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
    echo "<h1>404 Page Not Found</h1>";
    exit();
  }

  // 500 Internal Server Error
  function error_500(){
    header($_SERVER["SERVER_PROTOCOL"] . " 500 Internal Server Error");
    echo "<h1>500 Internal Server Error</h1>";
    exit();
  }

  // redirect url
  function redirect_to($location){
    header("Location: " . $location);
    exit();
  }

  // check if POST request
  function is_post_request(){
    return $_SERVER['REQUEST_METHOD'] == 'POST';
  }

   // check if GET request
   function is_get_request(){
    return $_SERVER['REQUEST_METHOD'] == 'GET';
  }
?>