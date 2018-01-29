<?php require_once('../../../private/initialize.php');?>

<?php
  $id = $_GET['id'] ?? '1'; // PHP > 7.0

  $page = find_page_by_id($id);
?>

<?php $page_title = "Show Page"; ?>
<!-- header -->
<?php include SHARED_PATH . '/staff_header.php';?>

  <div id="content">
    <p>
      <a href="<?php echo url_for('/staff/pages/index.php') ?>">&laquo; Back</a>
    </p>
    <div class="page show">
      <h1>Page: <?php echo h($page['menu_name']); ?></h1>
    </div>

    <div class="attributes">
      <?php $subject = find_subject_by_id($page['subject_id']); ?>

      <dl>
        <dt>Subject</dt>
        <dd><?php echo h($subject['menu_name']); ?></dd>
      </dl>

      <dl>
        <dt>Menu Name</dt>
        <dd><?php echo h($page['menu_name']); ?></dd>
      </dl>

      <dl>
        <dt>Position</dt>
        <dd><?php echo h($page['position']); ?></dd>
      </dl>

      <dl>
        <dt>Visible</dt>
        <dd><?php echo h($page['visible'] == '1' ? 'true' : 'false'); ?></dd>
      </dl>

      <dl>
        <dt>Content</dt>
        <dd><?php echo h($page['content']); ?></dd>
      </dl>

    </div>
  </div>




















  <!-- footer -->
  <?php include SHARED_PATH . '/staff_footer.php';?>