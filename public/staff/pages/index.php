<?php require_once('../../../private/initialize.php');?>

<?php
$page_set = find_all_pages();
?>

<?php $page_title = 'Pages'; ?>

<!-- header -->
<?php include SHARED_PATH . '/staff_header.php';?>

<div id="content">
  <p><a href="<?php echo url_for('/staff') ?>">&laquo; Back</a></p>
    <div class="Page listing">
      <h1>Pages</h1>
    </div>

    <div class="actions">
      <a href="<?php echo url_for('/staff/pages/new.php'); ?>" class="action">Create New Pages</a>
    </div>

    <table class="list">
      <tr>
        <th>ID</th>
        <th>Subject ID</th>
        <th>Position</th>
        <th>Visible</th>
        <th>Name</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
      </tr>

      <?php while($page = mysqli_fetch_assoc($page_set)) {?>
        <tr>
          <td><?php echo h($page['id']); ?></td>
          <td><?php echo h($page['subject_id']); ?></td> 
          <td><?php echo h($page['position']); ?></td>
          <td><?php echo $page['visible'] == 1 ? 'true' : 'false'; ?></td>
          <td><?php echo h($page['menu_name']); ?></td>
          <td><a href="<?php echo url_for('/staff/pages/show.php?id=' . h(u($page['id']))); ?>" class="action">View</a></td>
          <td><a href="<?php echo url_for('/staff/pages/edit.php?id=' . h(u($page['id']))); ?>" class="action">Edit</a></td>
          <td><a href="" class="action">Delete</a></td>
        </tr>
      <?php }?>

    </table>
    <!-- end table -->

    <?php mysqli_free_result($page_set) ?> <!-- free memory -->

  </div>
  <!-- end content -->

<!-- footer -->
<?php include SHARED_PATH . '/staff_footer.php';?>