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

////
function find_subject_by_id($id){
  global $db;

  $sql = "SELECT * FROM subjects ";
  $sql .= "WHERE id='" . $id . "'"; // always use single quotes to avoid sql injection
  $result = mysqli_query($db, $sql);

  confirm_result_set($result);

  $subject = mysqli_fetch_assoc($result);

  mysqli_free_result($result);

  return $subject; // returns an assoc array
}

// INSERT into db
function insert_subject($menu_name, $position, $visible){

  global $db;

  $sql =  "INSERT INTO subjects ";
  $sql .= "(menu_name, position, visible) ";
  $sql .= "VALUES (";

  $sql .= "'" . $menu_name . "',";
  $sql .= "'" . $position . "',";
  $sql .= "'" . $visible . "'";

  $sql .= ")";

  // for INSERT statements, $result is true/false
  $result = mysqli_query($db, $sql);

  // if is successful
  if($result){

    return true;

  } else {

    echo mysqli_error($db); // get error
    db_disconnect($db); 
    exit;
  }

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