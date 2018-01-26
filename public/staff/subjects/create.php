<?php 
require_once('../../../private/initialize.php');

if(is_post_request()){

  //handle form values sent to new.php
  // PHP 7.0+
  $menu_name = $_POST['menu_name'] ?? '';
  $position = $_POST['position'] ?? '';
  $visible = $_POST['visible'] ?? '';

  echo "Form Parameters <br/>";
  echo "Main Menu: " . $menu_name . "<br/>";
  echo "Position: " . $position . "<br/>";
  echo "Visible: " . $visible . "<br/>";

} else {
  redirect_to(url_for('/staff/subjects/new.php'));
}



?>