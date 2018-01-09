<?php

  // check if script path has a leading '/' if not add one
  // add the leading '/' if not present
  function url_for($script_path){
    if($script_path[0] != '/'){
      $script_path = "/" . $script_path;
    }

    return WWW_ROOT . $script_path;
  }

?>