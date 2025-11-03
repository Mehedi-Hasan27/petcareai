<?php
session_start();
include 'db_connect.php';
date_default_timezone_set('Asia/Dhaka');
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $logout_time = date('Y-m-d H:i:s');

    // লগআউট টাইম আপডেট করা
    $update = "UPDATE session_logs 
               SET logout_time='$logout_time' 
               WHERE user_id='$user_id' 
               ORDER BY id DESC LIMIT 1";
    mysqli_query($conn, $update);
}
session_unset();
session_destroy();
header("Location: login.php");
exit();
?>