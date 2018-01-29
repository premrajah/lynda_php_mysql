<?php 

// Query db for all subjects
function fine_all_subjects(){

  // give $db global scope
  global $db;

  // select from db
  $sql = "SELECT * FROM subjects ";
  $sql .= "ORDER BY position ASC";

  // show query on page
  // echo $sql . "<br/>"; 

  $result = mysqli_query($db, $sql);

  confirm_result_set($result); // check if query successful

  return $result;
}

// Query db for all pages
function find_all_pages(){
  global $db;

  $sql = "SELECT * FROM pages ";
  $sql .= "ORDER BY subject_id ASC, position ASC";
  $result = mysqli_query($db, $sql);

  confirm_result_set($result);

  return $result;

}

?>