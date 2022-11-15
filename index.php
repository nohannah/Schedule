<?php/* require_once('config.php'); 
redirect('admin/');*/
?>

<?php require_once('config.php'); ?>
<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
<?php require_once('./admin/inc/header1.php') ?>
  <body class="sidebar-mini layout-fixed control-sidebar-slide-open layout-navbar-fixed sidebar-mini-md sidebar-mini-xs" data-new-gr-c-s-check-loaded="14.991.0" data-gr-ext-installed="" style="height: auto;">
    <div class="wrapper">
     <?php require_once('./admin/inc/topBarNav1.php') ?>
     <?php require_once('./admin/inc/navigation1.php') ?>
    
      </div>
 
    </div> 
    <div class="content-wrapper pt-3" style="min-height: 567.854px;">
    <?php require_once('./admin/schedules/index1.php') ?>
      
          </div>
      <!-- /.content-wrapper -->
      <?php require_once('./admin/inc/footer.php') ?>
  </body>
</html>