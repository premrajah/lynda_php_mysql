<?php 
  require_once('../../../private/initialize.php');
  
  // if id is not set
  if(!isset($_GET['id'])){
    redirect_to(url_for('/staff/pages/index.php'));
  }
  // if id is available assign to var $id
  $id = $_GET['id'];



  if(is_post_request()){
    
    $result = delete_page($id);
    redirect_to(url_for('/staff/pages/index.php'));

  } else {
    
    $page = delete_page($id);
  }
?>

<?php $page_title = 'Delete Page'; ?>
<!-- header -->
<?php include SHARED_PATH . '/staff_header.php';?>

<div id="content">
  <p>
    <a href="<?php echo url_for('/staff/pages/index.php') ?>">&laquo; Back</a>
  </p>

  <div class="page delete">
    <h1>Delete Page</h1>
    <p>Are you sure you want to delete this page?</p>
    <p class="item"><?php echo h($page['menu_name']); ?></p>

    <form action="<?php echo url_for('/staff/pages/delete.php?id=' . h(u($page['id']))); ?>" method="POST">
    <div id="operations">
      <input type="submit" value="Delete Page" name="commit" />
    </div>
    </form>

  </div>
</div>
<!-- end content -->

<!-- footer -->
<?php include SHARED_PATH . '/staff_footer.php';?>