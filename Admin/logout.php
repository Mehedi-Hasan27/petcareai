<?php
session_start();
include 'db_connect.php';
date_default_timezone_set('Asia/Dhaka');

if (isset($_SESSION['log_id'])) {
    $log_id = $_SESSION['log_id'];
    $logout_time = date('Y-m-d H:i:s');

    $update = "UPDATE session_logs 
               SET logout_time='$logout_time' 
               WHERE id='$log_id' LIMIT 1";
    mysqli_query($conn, $update);
}

session_unset();
session_destroy();
header("Location: login.php");
exit();

?>