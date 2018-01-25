<?php require_once('../../../private/initialize.php');?>

<?php
  // $id = isset($_GET['id']) ? $_GET['id'] : '1'; // PHP < 7.0 (old)
  $id = $_GET['id'] ?? '1'; // PHP > 7.0

  echo h($id);
?>