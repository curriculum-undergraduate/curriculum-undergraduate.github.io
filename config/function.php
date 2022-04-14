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

       $uppercase = preg_match('@[A-Z]@', $password);
       $lowercase = preg_match('@[a-z]@', $password);
       $number    = preg_match('@[0-9]@', $password);
       $specialChars = preg_match('@[^\w]@', $password);

       if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8)
       {
        $error="<div>Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.</div>";
        set_message($error);
       }
    else
    {
        $error="<div>Strong password.</div>";
        set_message($error);

       if(empty($username) || empty($email) || empty($password) || empty($cpassword))
       {
           $error = "<div>Please Fill in the Blanks</div>";
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
                                       $hash = SHA1($password);
                                       $sql = "INSERT INTO user (user_id, role_id, user_email, user_password, user_full_name, user_username, user_dob, user_address, user_gender, user_phone, user_profile_picture, user_social_media) VALUES (NULL, '3', '$email', '$hash', '', '$username', NULL, NULL, NULL, NULL, NULL, NULL)";
                                       $data = mysqli_query($conn, $sql);

                                       if($data)
                                       {
                                           $error = "<div> Record Successfully Registered : ) </div>";
                                           set_message($error);
                                           header('Location: login.php');
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
}



function login_user()
   {
    global $conn;
    if(isset($_POST['btn_login']) || $_SERVER['REQUEST_METHOD']=='POST')
    {
        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);

        if(empty($username)  || empty($password) )
        {
            $error = "<div> Please Fill in the Blanks</div>";
            set_message($error);
        }
        else
        {
            $query = "SELECT * FROM user WHERE user_username='$username' OR user_email='$username'";
            $result = mysqli_query($conn,$query);

            if($row=mysqli_fetch_assoc($result))
            {
                $db_pass = $row['user_password'];
                if(SHA1($password)==$db_pass)
                {
                    header("location: ./index.php");
                    $_SESSION['ID']=$row['user_id'];
                    $_SESSION['EMAIL']=$row['user_email'];
                }
                else
                    {
                        $error = "<div> Please Enter Valid Password</div>";
                        set_message($error);
                    }
            }
            else
                {
                    $error = "<div> Please Enter Valid UserName or Email</div>";
                    set_message($error);
                }

        }
    }
}
?>