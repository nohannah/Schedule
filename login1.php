<?php 
include ("config.php");
/*
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
<style>
    /* CSS for login */
/* Importing fonts from Google */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

/* Reseting */


</style>
<html>
    <header>
        <title>Login - scheduler</title>
        <link rel="stylesheet" href="assets/css/css-style.css">
    </header>
    <body class="body">
   
        <div class="login text-center1 ">
            <h1 class="text-center1">Login</h1>
            <br><br>
            <?php
                if(isset($_SESSION['login']))
                    {
                        echo $_SESSION['login'];//Displaying Session Message

                        
                        unset ($_SESSION['login']);//Removing Session Message
                    }
                if(isset($_SESSION['no-login-message']))
                    {
                        echo $_SESSION['no-login-message'];//Displaying Session Message
                        unset ($_SESSION['no-login-message']);//Removing Session Message
                    }
                if(isset($_SESSION['user']))
                    {
                        echo $_SESSION['user'];//Displaying Session Message
                        unset ($_SESSION['user']);//Removing Session Message
                    }
            ?>
            <br>
            <!-- Login Form Starts Here -->
        
            <form action="" method="POST" class="container">
                <div class="form-field d-flex align-items-center">
                    Username: <br>
                    <input class="col-4" type="text" name="username" placeholder="Enter Username"><br><br>
                </div>
                
                <div class="form-field d-flex align-items-center">
                    Password:<br>
                    <input class=" col-4" type="password" name="password" placeholder="Enter Password"><br><br>
                </div>
                <div>
                    <input type="submit" name="submit" value="Login" class="btn-primary">
                </div>
                  <br>                            
                <div>
                         <!-- Login Form End Here -->
                    <p class="text-center">Create By - <a href="#">IT TEAM</a></p>
                </div>
            </form>
        </div>
            
    </body>
</html>
<?php 
    //Check whether the submit button clicked or not
    if(isset($_POST['submit']))
    {
        //Process the login
        //1. Get the Data from login form
         $username = $_POST['username'];
         $password = md5($_POST['password']);

        //2. SQL to check whether the user with username and password exists or not
        $sql ="SELECT * FROM users WHERE username='$username' AND password='$password'";

        //3. Execute the Query
        $res= mysqli_query($conn,$sql);

        //Count the rows to check whether the user axists or not
        $count=mysqli_num_rows($res);
        if($count==1)
        {
            //User Available and Login Success
            $_SESSION['login'] = "<div class='success'>Login Successfully.</div>";
            $_SESSION['user']  = $username; //To check whether the user is logged in or not and will logout unset it

            //Redirect to Home Page.Dashboard
            header( "Location: index1.php" );
        }else
        {
            //User Not Available and ligin Failed
            $_SESSION['login'] = "<div class='error text-center'>Username or password did not match.</div>";
            //Redirect to Login Page Again
            header( "Location: login1.php" );
        }
    }
?>