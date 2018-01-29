<?php 
require_once('../../../private/initialize.php');

if(is_post_request()){

  //handle form values sent to new.php
  // PHP 7.0+

  $subject = [];
  $subject['menu_name'] = $_POST['menu_name'] ?? '';
  $subject['position'] = $_POST['position'] ?? '';
  $subject['visible'] = $_POST['visible'] ?? '';


  $result = insert_subject($subject);

  // get ID
  $new_id = mysqli_insert_id($db);
  redirect_to(url_for('/staff/subjects/show.php?id=' . $new_id));

  
} else {
  redirect_to(url_for('/staff/subjects/new.php'));
}


?>