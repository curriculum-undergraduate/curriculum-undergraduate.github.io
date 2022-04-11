<?php 

$host = "103.129.221.147";
$database = "lumintu_db";
$user = "admin";
$password = "rahasia";
$port = "3308";

// membuat koneksi
$db = mysqli_connect($host, $user, $password, $database, $port);


// READ
// function query($query) {
//     global $db;
//     $result = mysqli_query($db, $query);
//     $rows = [];
//     while ( $row = mysqli_fetch_assoc($result) ) {
//         $rows[] = $row;
//     }
//     return $rows;
// }


// $users = query("SELECT * FROM user");
// var_dump($users);