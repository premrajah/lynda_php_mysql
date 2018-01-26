<?php 
  require_once('../../../private/initialize.php');
  
  // if id is not set
  if(!isset($_GET['id'])){
    redirect_to(url_for('/staff/pages/index.php'));
  }
  // if id is available assign to var $id
  $id = $_GET['id'];

  $menu_name = "";
  $position = "";
  $visible = "";

  if(is_post_request()){
    $menu_name = $_POST['menu_name'] ?? '';
    $position = $_POST['position'] ?? '';
    $visible = $_POST['visible'] ?? '';

    echo "Form Parameters <br/>";
    echo "Main Menu: " . $menu_name . "<br/>";
    echo "Position: " . $position . "<br/>";
    echo "Visible: " . $visible . "<br/>";
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
              <option value="1"<?php if($position == '1'){ echo " selected"; } ?>>1</option>
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