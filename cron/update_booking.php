<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
require '../database.php';
date_default_timezone_set("Asia/Calcutta");

global $conn;

$fetch_query = "SELECT * FROM `op_booking_log` WHERE status not like 'COMPLETED'";
$get_lots = mysqli_query($conn, $fetch_query);

$currentDate = strtotime(date('Y-m-d H:i:s'));

foreach ($get_lots as $lots_data) {
    $book_id = $lots_data['booking_id'];
    $start_time = strtotime($lots_data['start_time']);
    $end_time = strtotime($lots_data['end_time']);
    echo "strtotime----$start_time-----end_time-----$end_time-----currentDate-----$currentDate---<br>";
    if ($currentDate > $start_time && $currentDate < $end_time) {
        $update_status_query = "UPDATE `op_booking_log` SET `status` = 'PROCESSING' WHERE `op_booking_log`.`booking_id` = '$book_id';";
        $get_lots = mysqli_query($conn, $update_status_query);
    } elseif ($currentDate > $start_time && $currentDate > $end_time) {
        $update_status_query = "UPDATE `op_booking_log` SET `status` = 'COMPLETED' WHERE `op_booking_log`.`booking_id` = '$book_id';";
        $get_lots = mysqli_query($conn, $update_status_query);
    }

}
