<?php 
  require_once('../../../private/initialize.php');
  
  // if id is not set
  if(!isset($_GET['id'])){
    redirect_to(url_for('/staff/pages/index.php'));
  }
  // if id is available assign to var $id
  $id = $_GET['id'];



  if(is_post_request()){
    $page = [];
    $page['id'] = $id;
    $page['subject_id'] = $_POST['subject_id'] ?? '';
    $page['menu_name'] = $_POST['menu_name'] ?? '';
    $page['position'] = $_POST['position'] ?? '';
    $page['visible'] = $_POST['visible'] ?? '';
    $page['content'] = $_POST['content'] ?? '';

    $result = update_page($page);
    redirect_to(url_for('/staff/pages/show.php?id=' . $id));
  } else {
    
    $page = find_page_by_id($id);

    $page_set = find_all_pages();
    $page_count = mysqli_num_rows($page_set);

    mysqli_free_result($page_set);
  }
?>

<?php $page_title = 'Edit Page'; ?>
<!-- header -->
<?php include SHARED_PATH . '/staff_header.php';?>

<div id="content">
  <p>
    <a href="<?php echo url_for('/staff/index.php') ?>">&laquo; Back</a>
  </p>

  <div class="page new">
    <h1>Edit Page</h1>

    <form action="<?php echo url_for('/staff/pages/edit.php?id' . h(u($id))); ?>" method="post">
      <dl>
        <dt>
          Menu Name
          <dd>
            <input type="text" name="menu_name" value="<?php echo h($menu_name); ?>" />
          </dd>
        </dt>
      </dl>

      <dl>
        <dt>
          Position
          <dd>
            <select name="position">
              <?php
                for ($i = 1; $i <= $page_count; $i++) {
                    echo "<option value='{$i}'";
                    if ($page['position'] == $i) {
                        echo " selected";
                    }
                    echo ">{$i}</option>";
                }
              ?>
            </select>
          </dd>
        </dt>
      </dl>

      <dl>
        <dt>
          Visible
          <dd>
            <input type="hidden" name="visible" value="0" />
            <input type="checkbox" name="visible" value="1" <?php if($visible == '1') { echo " checked"; } ?> />
          </dd>
        </dt>
      </dl>

      <div id="operations">
        <input type="submit" value="Edit Page">
      </div>
    </form>

  </div>
</div>
<!-- end content -->

<!-- footer -->
<?php include SHARED_PATH . '/staff_footer.php';?>