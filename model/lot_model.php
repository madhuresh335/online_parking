<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require '../database.php';
date_default_timezone_set("Asia/Calcutta");

$json = file_get_contents('php://input');
$post = json_decode($json, true);

$call_function = $post['function_name'];
$call_function($post);

function add_parking_lot($post)
{
    global $conn;
    $lotname = $post['lotname'];
    $street = $post['street'];
    $city = $post['city'];
    $state = $post['state'];
    $zipcode = $post['zipcode'];
    $map_url = $post['map_url'];
    $two_wheeler_count = $post['two_wheeler_count'];
    $four_wheeler_count = $post['four_wheeler_count'];
    $two_wheeler_price = $post['two_wheeler_price'];
    $four_wheeler_price = $post['four_wheeler_price'];
    $handler = $post['handler'];
    $add_lot_query = "INSERT INTO `op_lot` (`lot_name`, `street_address`, `zip_code`, `city`, `state`, `map_url`, `four_wheeler_count`, `four_wheeler_price`, `two_wheeler_count`, `two_wheeler_price`, `handler`) VALUES ('$lotname', '$street', '$zipcode', '$city', '$state', '$map_url', '$four_wheeler_count', '$four_wheeler_price', '$four_wheeler_count', '$two_wheeler_price', '$handler')";
    $add_lot = mysqli_query($conn, $add_lot_query);
    if ($add_lot) {
        print_r(json_encode(array("status" => 'success', "message" => "")));
    } else {
        print_r(json_encode(array("status" => 'failed', "message" => "not_inserted")));
    }

}

function get_parking_lot($post)
{
    global $conn;
    $search_term = $post['search_term'] ? $post['search_term'] : "";

    $get_lot_query = "SELECT * FROM `op_lot` WHERE 1=1 ";
    if ($search_term != " ") {
        $get_lot_query .= " AND(lot_name like '%$search_term%' OR street_address like '%$search_term%' OR zip_code like '%$search_term%' OR  city like '%$search_term%' OR state like '%$search_term%'  )  ";
    }

    $get_lots = mysqli_query($conn, $get_lot_query);
    $lots_details = array();
    foreach ($get_lots as $lots_data) {
        $lot_id = $lots_data['lot_id'];
        $lots_details[$lot_id] = $lots_data;
    }
    print_r(json_encode($lots_details));

}

function update_parking_lot($post)
{
    global $conn;
    $lotname = $post['lotname'];
    $street = $post['street'];
    $city = $post['city'];
    $state = $post['state'];
    $zipcode = $post['zipcode'];
    $map_url = $post['map_url'];
    $two_wheeler_count = $post['two_wheeler_count'];
    $four_wheeler_count = $post['four_wheeler_count'];
    $two_wheeler_price = $post['two_wheeler_price'];
    $four_wheeler_price = $post['four_wheeler_price'];
    $handler = $post['handler'];
    $lot_id = $post['lot_id'];
    $lot_update_query = "UPDATE `op_lot` SET `lot_name`='$lotname',`street_address`='$street',`zip_code`='$zipcode',`city`='$city',`state`='$state',`map_url`='$map_url',`four_wheeler_count`='$two_wheeler_count',`four_wheeler_price`='$four_wheeler_price',`two_wheeler_count`='$two_wheeler_count',`two_wheeler_price`='$two_wheeler_price',`handler`='$handler' WHERE lot_id = '$lot_id'";
    $lot_update = mysqli_query($conn, $lot_update_query);

    print_r(json_encode($post));
}

function delete_parking_lot($post)
{
    global $conn;
    $lot_id = $post['lot_id'];
    $lot_delete_query = "DELETE FROM op_lot WHERE `op_lot`.`lot_id` = '$lot_id' ";
    $lot_delete = mysqli_query($conn, $lot_delete_query);
    if ($lot_delete) {
        echo "deleted";
    } else {
        echo "not deleted";
    }
}

function book_parking_lot($post)
{
    global $conn;
    $currentDate = date('Y-m-d');
    $lot_id = $post['lot_id'];
    $vehicle_type = $post['vehicle_type'];
    $booking_hour = $post['booking_hours'];
    $booking_start_time = $post['booking_time'];
    $user_id = $post['user_id'];
    $booking_start_timestamp = "$currentDate $booking_start_time:00";
    $dateTime = new DateTime($booking_start_timestamp);
    $dateTime->modify("+$booking_hour hours");
    $booking_end_timestamp = $dateTime->format('Y-m-d H:i:s');

    $insert_query = "INSERT INTO `op_booking_log`(`lot_id`,`user_id`, `number_of_hours` ,`start_time`, `end_time`) VALUES ('$lot_id','$user_id','$booking_hour','$booking_start_timestamp','$booking_end_timestamp')";

    //  echo $insert_query;

    $booking_inserted = mysqli_query($conn, $insert_query);
    if ($booking_inserted) {
        echo "booking_inserted";
    } else {
        echo "not booking_inserted";
    }
}


function find_parking_lot($post)
{
    global $conn;
    $search_term = $post['search_term'] ? $post['search_term'] : "";

    $get_lot_query = "SELECT * FROM `op_lot` WHERE 1=1 ";
    if ($search_term != " ") {
        $get_lot_query .= " AND(lot_name like '%$search_term%' OR street_address like '%$search_term%' OR zip_code like '%$search_term%' OR  city like '%$search_term%' OR state like '%$search_term%'  )  ";
    }

    $get_lots = mysqli_query($conn, $get_lot_query);
    $lots_details = array();
    foreach ($get_lots as $lots_data) {
        $lot_id = $lots_data['lot_id'];
        $lots_data['booked'] = get_booked_slot($lot_id);
        $lots_details[$lot_id] = $lots_data;
    }






    print_r(json_encode($lots_details));

}

function get_booked_slot($lot_id){
    global $conn;
$fetch_booking_query = "SELECT count(*) as booked_slots FROM `op_booking_log` WHERE status not like 'COMPLETED' AND lot_id = '$lot_id'";
$get_booking_details = mysqli_query($conn, $fetch_booking_query);
$row = mysqli_fetch_row($get_booking_details);


return $row[0];
}