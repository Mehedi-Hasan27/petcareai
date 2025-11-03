<?php
session_start();
include 'db_connect.php';

if (isset($_SESSION['session_log_id'])) {
    $session_log_id = $_SESSION['session_log_id'];
    $logout_time = date('Y-m-d H:i:s');

    // সঠিক row আপডেট
    $update = "UPDATE session_logs SET logout_time=NOW() WHERE id='$session_log_id'";
    mysqli_query($conn, $update);
}

session_unset();
session_destroy();
header("Location: login.php");
exit();

?>