<?php require_once('../../../private/initialize.php');?>

  <?php
    // select from db
    $sql = "SELECT * FROM subjects ";
    $sql .= "ORDER BY position ASC";
    $subject_set = find_all_subjects();
  ?>

  <?php $page_title = 'Subjects';?>

  <!-- header -->
  <?php include SHARED_PATH . '/staff_header.php';?>



  <div id="content">
    <p>
      <a href="<?php echo url_for('/staff/index.php') ?>">&laquo; Back</a>
    </p>
    <div class="subjects listing">
      <h1>Subjects</h1>
    </div>

    <div class="actions">
      <a href="<?php echo url_for('/staff/subjects/new.php'); ?>" class="action">Create New Subjects</a>
    </div>

    <table class="list">
      <tr>
        <th>ID</th>
        <th>Position</th>
        <th>Visible</th>
        <th>Name</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
      </tr>

      <?php while ($subject = mysqli_fetch_assoc($subject_set)) {?>
        <tr>
          <td>
            <?php echo h($subject['id']); ?>
          </td>
          <td>
            <?php echo h($subject['position']); ?>
          </td>
          <td>
            <?php echo $subject['visible'] == 1 ? 'true' : 'false'; ?>
          </td>
          <td>
            <?php echo h($subject['menu_name']); ?>
          </td>
          <td>
            <a href="<?php echo url_for('/staff/subjects/show.php?id=' . h(u($subject['id']))); ?>" class="action">View</a>
          </td>
          <td>
            <a href="<?php echo url_for('/staff/subjects/edit.php?id=' . h(u($subject['id']))); ?>" class="action">Edit</a>
          </td>
          <td>
            <a href="<?php echo url_for('/staff/subjects/delete.php?id=' . h(u($subject['id']))); ?>" class="action">Delete</a>
          </td>
        </tr>
      <?php }?>

    </table>
    <!-- end table -->
    
    
    <?php 
      // from memory used by db 
      mysqli_free_result($subject_set);
    ?>

  </div>
  <!-- end content -->

  <!-- footer -->
  <?php include SHARED_PATH . '/staff_footer.php';?>