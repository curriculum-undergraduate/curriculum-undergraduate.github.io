<?php
session_start();
require_once 'db.php';

// Set Session Message
function set_message($msg)
{
    if(!empty($msg))
    {
        $_SESSION['MESSAGE']=$msg;
    }
    else
        {
            $msg = '';
        }
}

// display Session Message
function display_message()
{
    if(isset($_SESSION['MESSAGE']))
    {
        echo $_SESSION['MESSAGE'];
        unset($_SESSION['MESSAGE']);
    }
}


function register_user()
{
   global $conn;
   if(isset($_POST['btn_register']) || $_SERVER['REQUEST_METHOD']=='POST')
   {
       $username = mysqli_real_escape_string($conn,$_POST['username']);
       $email = mysqli_real_escape_string($conn,$_POST['email']);
       $password = mysqli_real_escape_string($conn,$_POST['password']);
       $cpassword = mysqli_real_escape_string($conn,$_POST['cpassword']);

       if(empty($username) || empty($email) || empty($password) || empty($cpassword))
       {
           $error = "<div> Please Fill in the Blanks</div>";
           set_message($error);
       }
       else
           {
               if($password!=$cpassword)
               {
                   $error = "<div> Password Not Matched.</div>";
                   set_message($error);
               }
               else
                   {
                       $query = "SELECT * FROM user WHERE user_username='$username'";
                       $result = mysqli_query($conn,$query);

                       if(mysqli_num_rows($result))
                       {
                           $error = "<div> User Name Already Exists.</div>";
                           set_message($error);
                       }
                       else
                           {
                               $query = "SELECT * FROM user WHERE user_email='$email'";
                               $result = mysqli_query($conn,$query);

                               if(mysqli_num_rows($result))
                               {
                                   $error = "<div> Email Already Exists.</div>";
                                   set_message($error);
                               }
                               else
                                   {
                                       $hash = md5($password);
                                       $sql = "INSERT INTO user (user_id, user_username, user_email, user_password) VALUES(NULL,'$username','$email','$hash')";
                                       $data = mysqli_query($conn, $sql);

                                       if($data)
                                       {
                                           $error = "<div> Record Successfully Registered : ) </div>";
                                           set_message($error);
                                       }
                                       else
                                           {
                                               $error = "<div> Something is Wrong; </div>";
                                               set_message($error);
                                           }
                                   }
                           }
                   }
           }
   }
}


?>