<?php

  // Assign file paths to PHP constants
  // __FILE__ returns the current path to this file
  // dirname() return the parth to the parent directory
  define("PRIVATE_PATH", dirname(__FILE__));
  define("PROJECT_PATH", dirname(PRIVATE_PATH));
  define("PUBLIC_PATH", PROJECT_PATH . '/public');
  define("SHARED_PATH", PRIVATE_PATH . '/shared');



  // include only once the function file
  require_once('functions.php');

?>