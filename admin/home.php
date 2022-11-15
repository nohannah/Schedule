<h1 class="">Welcome to <?php echo $_settings->info('name') ?></h1>
<hr>
<?php
 $sched_arr=array();
?>
<div class="row">
    <div class="col-lg-3 col-6">
    <!-- small box -->
    
        <?php
                $admin= $_settings->userdata('id');
                if($admin ==1 ){   
                //if(isset($_SESSION['userdata']) && (strpos($admin, 'undisabled_link.php') || strpos($admin, 'admin/')) && $_SESSION['userdata']['login_type'] !=  1){
                  require_once('undisabledhome.php');
                }else{
                  require_once('disabledhome.php');
                }  
                ?>

</div>