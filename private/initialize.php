<?php

  // Assign file paths to PHP constants
  // __FILE__ returns the current path to this file
  // dirname() return the parth to the parent directory
  define("PRIVATE_PATH", dirname(__FILE__));
  define("PROJECT_PATH", dirname(PRIVATE_PATH));
  define("PUBLIC_PATH", PROJECT_PATH . '/public');
  define("SHARED_PATH", PRIVATE_PATH . '/shared');

  // Assign the root URL to a PHP constant
  // *Do not need to include domain
  // *Use same document root as webserver
  // *Can set a hadcoded value:
  // define(WWW_ROOT, 'http://localhost/lynda/globe_bank/public/');
  // define(WWW_ROOT, '');
  // * Can dynamically find everything in URL up to "/public"
  $public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
  $doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
  define("WWW_ROOT", $doc_root);

  // include only once the function file
  require_once('functions.php');

?>