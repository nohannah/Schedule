<?php 
    //Start Session
    session_start(); 
    //Create Constants to Store Non Repeating Values
    define('SITEURL','http://localhost/scheduling_db/');
    //define('SITEURL','http://localhost/scheduling_db/');
    define('LOCALHOST','localhost');
    define('DB_USERNAME','root');
    define('DB_PASSWORD','');
    define('DB_NAME','scheduling_db');
    date_default_timezone_set('Asia/Phnom_Penh');    
    $conn = mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD)  or die(mysqli_error()); //Database Connection
    $db_Select = mysqli_select_db($conn,DB_NAME)or die(mysqli_error()); //Select Database*/
?>