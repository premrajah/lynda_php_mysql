<?php
require_once '../../../private/initialize.php';

if (is_post_request()) {

    $page = [];
    $page['subject_id'] = $_POST['subject_id'] ?? '';
    $page['menu_name'] = $_POST['menu_name'] ?? '';
    $page['position'] = $_POST['position'] ?? '';
    $page['visible'] = $_POST['visible'] ?? '';
    $page['content'] = $_POST['content'] ?? '';

    $result = insert_page($page);
    $new_id = mysqli_insert_id($db);

    redirect_to(url_for('/staff/pages/show.php?id=' . $new_id));
} else {

    $page = [];
    $page['subject_id'] = '';
    $page['menu_name'] = '';
    $page['position'] = '';
    $page['visible'] = '';
    $page['content'] = '';

    $page_set = find_all_pages();
    $page_count = mysqli_num_rows($page_set) + 1;
    mysqli_free_result($page_set);
}

?>

<?php $page_title = 'Create Page';?>
<!-- header -->
<?php include SHARED_PATH . '/staff_header.php';?>

<div id="content">
  <p>
    <a href="<?php echo url_for('/staff/index.php') ?>">&laquo; Back</a>
  </p>

  <div class="page new">
    <h1>Create Page</h1>

    <form action="<?php echo url_for('/staff/pages/new.php'); ?>" method="post">

      <dl>
        <dt>
          Menu Name
          <dd>
            <input type="text" name="menu_name" value="<?php echo h($page['menu_name']); ?>" />
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
            <input type="checkbox" name="visible" value="1" <?php if ($page['visible'] == '1') {echo " checked";}?> />
          </dd>
        </dt>
      </dl>

      <div id="operations">
        <input type="submit" value="Create Page">
      </div>
    </form>

  </div>
</div>
<!-- end content -->

<!-- footer -->
<?php include SHARED_PATH . '/staff_footer.php';?>