<?php
require_once '../../../private/initialize.php';

// simple test get request
$test = $_GET['test'] ?? '';

if ($test == '404') {
    error_404();
} elseif ($test == '500') {
    error_500();
} elseif ($test == 'redirect') {
  redirect_to(url_for('/staff/subjects/index.php'));
  exit();
}
?>

    <?php $page_title = "Create Subject"; ?>
    <?php include(SHARED_PATH . '/staff_header.php'); ?>

    <div id="content">
        <p>
            <a href="<?php echo url_for('/staff/subjects/index.php') ?>">&laquo; Back</a>
        </p>

        <div class="subject new">
            <h1>Create Subject</h1>

            <form action="" method="post">
                <dl>
                    <dt>Menu Name</dt>
                    <dd>
                      <input type="text" name="menu_name" value="" />
                    </dd>
                </dl>
                <dl>
                    <dt>Position</dt>
                    <dd>
                        <select name="position">
                            <option value="1">1</option>
                        </select>
                    </dd>
                </dl>
                <dl>
                  <dt>Visible</dt>
                  <dd>
                    <input type="hidden" name="visible" value="0" />
                    <input type="checkbox" name="visible" value="1">
                  </dd>
                </dl>

                <div id="operations">
                  <input type="submit" value="Create Subject" />
                </div>
            </form>
        </div>
    </div>


    <?php include(SHARED_PATH . '/staff_footer.php'); ?>