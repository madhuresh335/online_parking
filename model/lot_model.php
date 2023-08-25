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



function find_parking_lot($post)
{
    global $conn;
    $search_term = $post['search_term'] ? $post['search_term'] : "";
    $vehicle_type = $post['vehicle_type'] ? $post['vehicle_type'] : "";
    $booking_hours = $post['booking_hours'] ? $post['booking_hours'] : "";

    $get_lot_query = "SELECT * FROM `op_lot` WHERE 1=1 ";
    if ($search_term != "") {
        $get_lot_query .= " AND(lot_name like '%$search_term%' OR street_address like '%$search_term%' OR zip_code like '%$search_term%' OR  city like '%$search_term%' OR state like '%$search_term%'  )  ";
    }

    $get_lots = mysqli_query($conn, $get_lot_query);
    $lots_details = array();
    foreach ($get_lots as $lots_data) {
        $lot_id = $lots_data['lot_id'];
        // echo $lot_id."-";
        $verify_availabilty = true;
        if ($vehicle_type != "" && $booking_hours != "") {
            $verify_availabilty = check_availablity(array("lot_id" => $lot_id, "booking_hours" => $booking_hours, "booking_time" => date("H:i"), "vehicle_type" => $vehicle_type, "fun_type" => "internal"));
        }
        if ($verify_availabilty == true) {
            $booked_slot_data = get_booked_slot($lot_id);
            $four_wheeler_booking = isset($booked_slot_data['four_wheeler']) ? $booked_slot_data['four_wheeler'] : 0;
            $two_wheeler_booking = isset($booked_slot_data['two_wheeler']) ? $booked_slot_data['two_wheeler'] : 0;
            $lots_data['available_four_slots'] = $lots_data['four_wheeler_count'] - $four_wheeler_booking;
            $lots_data['available_two_slots'] = $lots_data['two_wheeler_count'] - $two_wheeler_booking;
            $lots_data['verify_availabilty'] = $verify_availabilty;
            $lots_details[$lot_id] = $lots_data;
        }
    }

    print_r(json_encode($lots_details));

}

function get_booked_slot($lot_id, $hour = 1)
{
    global $conn;
    $booking_start_time = date("Y-m-d H:i:s");
    $booking_end_timestamp = date("Y-m-d H:i:s", strtotime($booking_start_time . " +$hour hours"));

    $fetch_booking_query = "SELECT vehicle_type, COUNT(vehicle_type)  as booked_slots FROM `op_booking_log` WHERE status not like 'COMPLETED' AND lot_id = '$lot_id' AND ((start_time <= '$booking_start_time' and  end_time >= '$booking_end_timestamp' )OR (start_time >= '$booking_start_time' and  start_time <= '$booking_end_timestamp' ) OR (end_time >= '$booking_start_time' and  end_time <= '$booking_end_timestamp' )) GROUP by vehicle_type";
    // echo $fetch_booking_query ;
    $get_booking_details = mysqli_query($conn, $fetch_booking_query);
    $temp_availability = array();
    foreach ($get_booking_details as $booking) {
        $booked_v_type = $booking['vehicle_type'];
        $temp_availability[$booked_v_type] = $booking['booked_slots'];
    }
    return $temp_availability;

}

function check_availablity($post)
{
    global $conn;
    $lot_id = $post['lot_id'];
    $booking_hour = $post['booking_hours'];
    $vehicle_type = $post['vehicle_type'];
    $currentDate = date('Y-m-d');
    $booking_start_time = $post['booking_time'];
    $booking_start_timestamp = "$currentDate $booking_start_time:00";
    $dateTime = new DateTime($booking_start_timestamp);
    $dateTime->modify("+$booking_hour hours");
    $booking_end_timestamp = $dateTime->format('Y-m-d H:i:s');
    $fetch_booking_query = "SELECT COUNT(vehicle_type)  as booked_slots FROM `op_booking_log` WHERE status not like 'COMPLETED' AND lot_id = '$lot_id' AND ((start_time <= '$booking_start_time' and  end_time >= '$booking_end_timestamp' )OR (start_time >= '$booking_start_time' and  start_time <= '$booking_end_timestamp' ) OR (end_time >= '$booking_start_time' and  end_time <= '$booking_end_timestamp' )) AND vehicle_type = '$vehicle_type'";
    $get_booking_details = mysqli_query($conn, $fetch_booking_query);
    $get_booking_details = mysqli_fetch_row($get_booking_details);
    if ($vehicle_type == 'two_wheeler') {
        $column_name = "two_wheeler_count";
    } else {
        $column_name = "four_wheeler_count";
    }
    $get_total_slot = " SELECT $column_name FROM `op_lot` where lot_id = $lot_id";
    $get_slot_details = mysqli_query($conn, $get_total_slot);
    $get_slot_details = mysqli_fetch_row($get_slot_details);
    $current_available_slot = $get_slot_details[0] - $get_booking_details[0];
    // echo $current_available_slot;
    if ($current_available_slot > 0) {
        if (isset($post['fun_type'])) {
            return true;
        } else {
            echo true;
        }
    } else {
        if (isset($post['fun_type'])) {
            return false;
        } else {
            echo false;
        }
    }
}

function get_booking_history($post)
{
    global $conn;
    $get_booking_history_query = "SELECT op_booking_log.*, op_lot.four_wheeler_price, op_lot.two_wheeler_price FROM `op_booking_log` JOIN op_lot on op_booking_log.lot_id = op_lot.lot_id  WHERE 1=1 ";
    if (isset($post['user_id'])) {
        $user_id = $post['user_id'];
        $get_booking_history_query .= " AND user_id = '$user_id'";
    }

    if (isset($post['booking_from_date']) &&  !empty($post['booking_from_date']) ) {
        $booking_from_date = $post['booking_from_date'];
        $get_booking_history_query .= " AND start_time >= '$booking_from_date 00:00:00'";
    }
    if (isset($post['booking_to_date']) && !empty($post['booking_to_date'])) {
        $booking_to_date = $post['booking_to_date'];
        $get_booking_history_query .= " AND start_time <= '$booking_from_date 23:59:59'";
    }

    $get_booking_data = mysqli_query($conn, $get_booking_history_query);

    $lots_details = array();
    foreach ($get_booking_data as $lots_data) {
        $lot_id = $lots_data['booking_id'];
        $lots_details[$lot_id] = $lots_data;
    }
    print_r(json_encode($lots_details));

}


function reschedule_block($post)
{
    global $conn;
    $currentDate = date('Y-m-d');
    $rescheduled_booking_id = $post['rescheduled_booking_id'];
    $vehicle_type = $post['vehicle_type'];
    $booking_hour = $post['booking_hours'];
    $booking_start_time = $post['booking_time'];
    $user_id = $post['user_id'];
    $current_time  = date('Y-m-d H:i:s');
    $booking_start_timestamp = "$currentDate $booking_start_time:00";
    $dateTime = new DateTime($booking_start_timestamp);
    $dateTime->modify("+$booking_hour hours");
    $booking_end_timestamp = $dateTime->format('Y-m-d H:i:s');

    $update_query = "UPDATE `op_booking_log` SET `vehicle_type`='$vehicle_type',`number_of_hours`='$booking_hour',`booking_time`='$current_time',`start_time`='$booking_start_timestamp',`end_time`='$booking_end_timestamp',`status`='BOOKED' WHERE booking_id = '$rescheduled_booking_id'";

    //  echo $insert_query;

    $booking_updated = mysqli_query($conn, $update_query);
    if ($booking_updated) {
        echo "booking_updated";
    } else {
        echo "not booking_updated";
    }
}

function cancel_booking ($post){
    global $conn;
    $cancel_booking_id = $post['cancel_booking_id'];
    $update_query = "UPDATE `op_booking_log` SET `status` = 'CANCELLED'  WHERE booking_id = '$cancel_booking_id'";
    $booking_updated = mysqli_query($conn, $update_query);
    if ($booking_updated) {
        echo "booking_updated";
    } else {
        echo "not booking_updated";
    }
}



function get_booking_history_admin($post)
{
    global $conn;
    $get_booking_history_query = "SELECT op_booking_log.*, op_user.user_name, op_user.phone_number,op_lot.lot_name  FROM `op_booking_log` JOIN op_user on op_booking_log.user_id = op_user.u_id join op_lot on op_booking_log.lot_id = op_lot.lot_id WHERE 1=1 ";

    if (isset($post['booking_from_date']) &&  !empty($post['booking_from_date']) ) {
        $booking_from_date = $post['booking_from_date'];
        $get_booking_history_query .= " AND start_time >= '$booking_from_date 00:00:00'";
    }
    if (isset($post['booking_to_date']) && !empty($post['booking_to_date'])) {
        $booking_to_date = $post['booking_to_date'];
        $get_booking_history_query .= " AND start_time <= '$booking_from_date 23:59:59'";
    }

    if (isset($post['search_term']) && !empty($post['search_term'])) {
        $search_term = $post['search_term'];
        $get_booking_history_query .= " AND (op_user.user_name  = '$search_term' OR op_user.phone_number = '$search_term' OR op_lot.lot_name = '$search_term'  )";
    }




    $get_booking_data = mysqli_query($conn, $get_booking_history_query);

    $lots_details = array();
    foreach ($get_booking_data as $lots_data) {
        $lot_id = $lots_data['booking_id'];
        $lots_details[$lot_id] = $lots_data;
    }
    print_r(json_encode($lots_details));

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

    $insert_query = "INSERT INTO `op_booking_log`(`lot_id`,`user_id`,`vehicle_type` ,`number_of_hours` ,`start_time`, `end_time`) VALUES ('$lot_id','$user_id','$vehicle_type','$booking_hour','$booking_start_timestamp','$booking_end_timestamp')";

    //  echo $insert_query;

    $booking_inserted = mysqli_query($conn, $insert_query);
    if ($booking_inserted) {
        echo "booking_inserted";
    } else {
        echo "not booking_inserted";
    }
}