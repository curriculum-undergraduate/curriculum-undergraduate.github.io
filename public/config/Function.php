<?php
// menghubungkan dengan file db.php 
require_once 'DB.php';

// inisiasi session
session_start();

$messages = '';
$validate = '';

function userRegister()
{
    global $conn, $messages;

    if (isset($_POST['submit'])) {

        // Mengamankan dari XSS
        $username = htmlspecialchars($_POST['username']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $confirm_password = htmlspecialchars($_POST['confirm_password']);

        // Menghilangkan backslash
        $username = stripslashes($username);
        $email = stripslashes($email);
        $password = stripslashes($password);
        $confirm_password = stripslashes($confirm_password);

        // Mengamankan dari SQL Injection
        $username = mysqli_real_escape_string($conn, $username);
        $email = mysqli_real_escape_string($conn, $email);
        $password = mysqli_real_escape_string($conn, $password);
        $confirm_password = mysqli_real_escape_string($conn, $confirm_password);

        // Mengecek apakah form yang diinput kosong atau tidak
        if (!empty(trim($username)) && !empty(trim($email)) && !empty(trim($password)) && !empty(trim($confirm_password))) {
            if ($password == $confirm_password) {

                // select data berdasarkan input dari user
                $query = "SELECT * FROM user WHERE user_username='$username' OR user_email='$email'";
                $result = mysqli_query($conn, $query);
                $rows = mysqli_num_rows($result);
    
                // Memeriksa apakah email dan username sudah terdaftar atau belum
                $length = 0;
                if ($rows != $length) {
                    $messages = "Akun dengan username/email sudah ada";
                }
                else {
    
                    // Mengecek lenth password harus lebih dari 8 karakter
                    $length = 8;
                    if (strlen($password) < $length) {
                        $messages = "Password harus minimal 8 karakter";
                    }
                    else {
                        // Menambahkan user/akun baru
                        $hash = sha1($password);
                        $role_id = 3;
                        $status_id = 0;
                        $query = "INSERT INTO user (user_id, role_id, status_id, user_email, user_password, user_full_name, user_username, user_dob, user_address, user_gender, user_phone, user_profile_picture) VALUES (NULL, $role_id, $status_id, '$email', '$hash', '', '$username', NULL, NULL, NULL, NULL, NULL)";
                        $result = mysqli_query($conn, $query);
    
                        // Jika akun berhasil didaftarkan, maka system akan mengalihkan ke Login Page
                        if ($result) {
                            $messages = "Akun berhasil terdaftar!";
                            header('Location: Login.php');
                        }
                        else {
                            $messages = mysqli_error($conn);
                        }
                    }
    
                }
    
            }
            else {
                $messages = "Password tidak sama";
            }
        } 
        else {
            $messages = "Harus dilengkapi";
        }


    }

}

function userLogin()
{

    global $conn, $messages;
    // if (isset($_SESSION['email'])) header('Location: index.php');

    if (isset($_POST['submit'])) {

        // menghilangkan backslash
        $email = stripslashes($_POST['email']);
        $password = sha1(stripslashes($_POST['password']));

        // Cara sederhana secure from sql_injection
        $email = mysqli_real_escape_string($conn, $email);
        $password = mysqli_real_escape_string($conn, $password);

        // Mengecek apakah form yang diinput user kosong atau tidak
        if (!empty(trim($email)) && !empty(trim($password))) {

            // select data berdasarkan email di database
            $query = "SELECT * FROM user WHERE user_email = '$email' and user_password = '$password'";
            $result = mysqli_query($conn, $query);
            $data = mysqli_fetch_assoc($result);

            // Mengecek credentials akun yang diinput user 
            $hash = $data['user_password'];
            if ($password == $hash) {
                $_SESSION['EMAIL'] = $email;
                header('Location: Index.php');
            }
            else {
                $messages = 'Email atau password salah, silahkan periksa kembali.';
            }

        }
        else {
            $messages = "Form wajib diisi ya!";
        }

    }

}