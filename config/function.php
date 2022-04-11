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
                if(md5($password)==$db_pass)
                {
                    header("location: index.php");
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