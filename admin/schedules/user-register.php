
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
    $db_Select = mysqli_select_db($conn,DB_NAME)or die(mysqli_error()); //Select Database
?>
<link rel="stylesheet" href="../../assets/css/user-register.css">


<div class="main-content">
    <div class="wrapper">
        <h1> User Login</h1>
        <br><br>
        <?php 
            if(isset($_SESSION['Exist']))
                {
                    echo $_SESSION['Exist'];//Displaying Session Message
                    unset ($_SESSION['Exist']);//Removing Session Message 
                }
            
        ?>
        <form id="login-frm" action="" method="POST" >
        <table class="tbl-30">
            <tr>
                <td>First name:</td>
                <td><input type="text" class="form-control" name="firstname" placeholder="Firstname"></td>
            </tr>

            <tr>
                <td>Last Name:</td>
                <td><input type="text" class="form-control" name="lastname" placeholder="Lastname"></td>
            </tr>
            <tr>
                <td>Username:</td>
                <td><input  type="text" class="form-control" name="username" placeholder="Username"></td>
            </tr>

            <tr>
                <td>Password:</td>
                <td>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </td>
            </tr>
            
            <tr>
                <td>Avatar:</td>
                <td>
                  <input type="file" name="img" placeholder="Insert the file"></input>
                </td>
            </tr>
            
            <tr>
                <td colspan="2">
                    <input type="submit" name="submit" value="Register" class="btn-secondary">
                </td>
            </tr>

           
        </table>
        </form>
        
    </div>
</div>


<?php 
    //Process the Value from form and Save it in Databse

    //Check whether the submit button is clicked or not

    if(isset($_POST['submit']))
    {
        //Button Clicked
        //echo "Button Clicked!";

        //1. Get the Data from form
         $firstname = $_POST['firstname'];
         $lastname=$_POST['lastname'];
         $username  = $_POST['username'];
         $password  = md5($_POST['password']); //Password Encription with MD5
         $avatar=$_POST['img'];
         $login_date =date('Y-m-d h:i:s');
         echo "$firstname";
         echo "$lastname";
         echo "$username";
         echo "$password";
         echo "$avatar";
         echo "$login_date";


        /*if(isset($_POST['active']))
        {
            $status=1;
        }
        else{
            $status=0;
        }*/
        //Select usename colum which show exist
         $select =mysqli_query($conn,"SELECT*FROM users WHERE username='$username'");
         $count=mysqli_num_rows($select);
         if($count==1)
          {

            $_SESSION['Exist'] = "<div class='success'>User name already Exist.</div>";
            //Redirect Page To Manage Admin
            header("location:".SITEURL.'user-register.php');
            die();
         }
         
        
         //SQL Queury to save the data into database
         $slq = "INSERT INTO users SET 
                firstname = '$firstname',
                lastname  ='$lastname',
                username  = '$username',
                password  = '$password',
                avatar    ='$avatar',
                date_added ='$login_date'";
        
       
         //3. Executing Query and Saving Data into Database
         $res = mysqli_query($conn,$slq) or die(mysqli_error());
         
         if($res==TRUE)
         {
            //Data Inserted
            //echo "Data Inserted";
            //Create a Session Variable to display message
            $_SESSION['add'] = "<div class='success'>User Added Successfully.</div>";
            //Redirect Page To Manage Admin
            header( "Location: ../index.php" );
         }else{
            //Failed to Insert Data
            //echo "Faile to Inserte Data";
                //Create a Session Variable to display message
                $_SESSION['add'] = "<div class='error'>Failed to Add Admin</div>";
                //Redirect Page To Add Admin
                header("location:".SITEURL.'#');
         }
         
           /* $select =mysqli_query($conn,"SELECT*FROM users WHERE username='".$_POST['username']."'");
            if(mysqli_num_rows($select))
             {
                exit('This username already exists');
            }
   
        //3. Executing Query and Saving Data into Database
         $res = mysqli_query($conn,$slq) or die(mysqli_error());
         
         if($res==TRUE)
         {
            //Data Inserted
            //echo "Data Inserted";
            //Create a Session Variable to display message
            $_SESSION['add'] = "<div class='success'>Admin Added Successfully.</div>";
            //Redirect Page To Manage Admin
            header("location:".SITEURL.'admin/admin.php');
         }else{
            //Failed to Insert Data
            //echo "Faile to Inserte Data";
                //Create a Session Variable to display message
                $_SESSION['add'] = "<div class='error'>Failed to Add Admin</div>";
                //Redirect Page To Add Admin
                header("location:".SITEURL.'admin/add-admin.php');
         }*/
         
    }
?>