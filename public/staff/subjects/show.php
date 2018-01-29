<?php require_once '../../../private/initialize.php';?>

<?php
  $id = $_GET['id'] ?? '1'; // PHP > 7.0
  
  // find single record from db
  $subject = find_subject_by_id($id);
?>

  <?php $page_title = 'Show Subject';?>

  <!-- header -->
  <?php include SHARED_PATH . '/staff_header.php';?>

  <div id="content">
    <p>
      <a href="<?php echo url_for('/staff/subjects/index.php') ?>">&laquo; Back</a>
    </p>
    <div class="subjects listing">
      <h1>Show Subject</h1>
    </div>

    <div class="subject show">

      <h1>Subject Id: <?php echo h($subject['menu_name']);  ?></h1>

      <div class="attributes">
        <dl>
          <dt>Menu Name</dt>
          <dd><?php echo h($subject['menu_name']); ?></dd>
        </dl>

        <dl>
          <dt>Position</dt>
          <dd><?php echo h($subject['position']); ?></dd>
        </dl>

        <dl>
          <dt>Visible</dt>
          <dd><?php echo $subject['visible'] == '1' ? 'true' : 'false'; ?></dd>
        </dl>

      </div>

    </div>
    <!-- end subject show -->

  </div>


  <!-- footer -->
  <?php include SHARED_PATH . '/staff_footer.php';?>