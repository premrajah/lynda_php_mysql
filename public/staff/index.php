<?php require_once('../../private/initialize.php');?>

<?php $page_title = 'Staff Menu';?>

<!-- header -->
<?php include SHARED_PATH . '/staff_header.php';?>

  <div id="content">
    <!-- content goes here -->
    <div id="main-menu">
      <h2>Main Menu</h2>
      <ul>
        <li><a href="<?php echo url_for('/staff/subjects/index.php'); ?>">Subjects</a></li>
        <li><a href="<?php echo url_for('/staff/pages/index.php'); ?>">Pages</a></li>
      </ul>
    </div>
    <!-- end #main-menu -->
  </div>

<!-- footer -->
<?php include SHARED_PATH . '/staff_footer.php';?>


