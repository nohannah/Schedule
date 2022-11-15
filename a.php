<form action="" method="post"> 
    <div> 
        <input type="submit" name="submit"> 
    </div> 
</form> 
<?php  
    if(isset($_POST['submit'])) 
    { 
        $start_date = date_create("2022-11-01T09:12"); //start  date $_start_date
        $current_date=date("Y/m/d"); 
        echo strtotime($current_date)  ."<br>";  
        echo strtotime(date_format($start_date,"Y/m/d")); 
    } 
?>

