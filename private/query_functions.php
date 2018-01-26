<?php 

// find all subjects
function fine_all_subjects(){

  // give $db global scope
  global $db;

  // select from db
  $sql = "SELECT * FROM subjects ";
  $sql .= "ORDER BY position ASC";
  $result = mysqli_query($db, $sql);

  return $result;
}

?>