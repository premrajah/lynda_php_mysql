<?php
  require_once('../../../private/initialize.php');

  // if id is not set
  if(!isset($_GET['id'])){
    redirect_to(url_for('/staff/subjects/index.php'));
  }

  // if id is available assign to var $id
  $id = $_GET['id'];

  // process form
  if(is_post_request()){

    //handle form values sent to new.php

    $subject = [];

    // PHP 7.0+
    $subject['id'] = $id;
    $subject['menu_name'] = $_POST['menu_name'] ?? '';
    $subject['position'] = $_POST['position'] ?? '';
    $subject['visible'] = $_POST['visible'] ?? '';

    $result = update_subject($subject);
    
    redirect_to(url_for('/staff/subjects/show.php?id=' . $id));

  } else {

     // find single record from db
    $subject = find_subject_by_id($id);
  }
?>

  <?php $page_title = "Edit Subject"; ?>
  <?php include(SHARED_PATH . '/staff_header.php'); ?>

  <div id="content">
    <p>
      <a href="<?php echo url_for('/staff/subjects/index.php') ?>">&laquo; Back</a>
    </p>

    <div class="subject edit">
      <h1>Edit Subject</h1>

      <form action="<?php echo url_for('/staff/subjects/edit.php?id=' . h(u($id))) ?>" method="post">
        <dl>
          <dt>Menu Name</dt>
          <dd>
            <input type="text" name="menu_name" value="<?php echo h($subject['menu_name']); ?>" />
          </dd>
        </dl>
        <dl>
          <dt>Position</dt>
          <dd>
            <select name="position">
              <option value="1" <?php if($subject['position'] == '1' ) { echo " selected"; } ?>>1</option>
            </select>
          </dd>
        </dl>
        <dl>
          <dt>Visible</dt>
          <dd>
            <input type="hidden" name="visible" value="0" />
            <input type="checkbox" name="visible" value="1" <?php if($subject['visible'] == '1' ) { echo " checked"; } ?> />
          </dd>
        </dl>

        <div id="operations">
          <input type="submit" value="Edit Subject" />
        </div>
      </form>
    </div>
  </div>


  <?php include(SHARED_PATH . '/staff_footer.php'); ?>