<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require '../database.php';
date_default_timezone_set("Asia/Calcutta");

$json = file_get_contents('php://input');
$post = json_decode($json, true);

$call_function = $post['function_name'];
$call_function($post);

function register_user($post)
{
    global $conn;
    $user_name = $post['username'];
    $phone_number = $post['phone_number'];
    $email = $post['email'];
    $role = isset($post['role']) ? $post['role'] : "2";
    $user_status = isset($post['status']) ? $post['status'] : "1";
    if (isset($post['password'])) {
        $pass_signUp = $post['password'];
    } else {
        $pass_signUp = "Test@123";
    }

    $check_sql = "SELECT COUNT(u_id) as user_count FROM `op_user` WHERE `phone_number` LIKE '$phone_number'";
    $check_user = mysqli_query($conn, $check_sql);
    $user_data = mysqli_fetch_row($check_user);
    if ($user_data[0] > 0) {
        print_r(json_encode(array("status" => 'failed', "message" => "user_exist")));
    } else {
        $insert_sql = "INSERT INTO `op_user` (`user_name`, `phone_number`, `password`,`email`,`user_role`,`user_status`) VALUES ('$user_name', '$phone_number', '$pass_signUp','$email','$role','$user_status')";
        $insert_user = mysqli_query($conn, $insert_sql);
        if ($insert_user) {
            print_r(json_encode(array("status" => 'success', "message" => "")));
        } else {
            print_r(json_encode(array("status" => 'failed', "message" => "not_inserted")));
        }

    }
}

function send_otp($post)
{
    global $conn;
    $phone_number = $post['phone_number'];
    $otp_update_query = "UPDATE `op_otp` SET is_expired = '1' WHERE mobile = '$phone_number'";
    $otp_update = mysqli_query($conn, $otp_update_query);
    $digits = range(1, 9);
    shuffle($digits);
    $random_number = substr(implode('', $digits), 0, 6);
    $insert_sql = "INSERT INTO `op_otp` (`mobile`, `otp_value`) VALUES ('$phone_number','$random_number')";
    $insert_otp = mysqli_query($conn, $insert_sql);
    if ($insert_otp) {
        print_r(json_encode(array("status" => 'success', "message" => "$random_number")));
    } else {
        print_r(json_encode(array("status" => 'failed', "message" => "not_inserted")));
    }
}

function verify_otp($post)
{
    global $conn;
    $phone_number = $post['phone_number'];
    $otp = $post['otp'];
    $current_time = date('Y-m-d H:i:s', time());
    $get_otp_data_query = "SELECT * FROM `op_otp` WHERE mobile = '$phone_number' and is_expired = 0 ORDER BY otp_id DESC";
    $get_otp_data = mysqli_query($conn, $get_otp_data_query);
    // echo $get_otp_data_query;
    $otp_data = mysqli_fetch_row($get_otp_data);
    if ($otp_data) {
        $otp_value = $otp_data[2];
        $otp_time = $otp_data[3];
        $otp_time_interval = (strtotime($current_time) - strtotime($otp_time)) / 60;
        if ($otp_time_interval > 3) {
            $otp_update_query = "UPDATE `op_otp` SET is_expired = '1' WHERE mobile = '$phone_number'";
            $otp_update = mysqli_query($conn, $otp_update_query);
            print_r(json_encode(array("result" => "expired")));
            exit;

        } else {
            if ($otp_value == $otp) {
                $otp_update_query = "UPDATE `op_otp` SET is_expired = '1' WHERE mobile = '$phone_number'";
                $otp_update = mysqli_query($conn, $otp_update_query);
                print_r(json_encode(array("result" => "valid")));
                exit;
            } else {

                print_r(json_encode(array("result" => "invalid1")));
                exit;
            }
        }
    } else {
        print_r(json_encode(array("result" => "invalid2")));
        exit;
    }
}

function login_user($post)
{
    global $conn;
    $phone_number = $post['phone_number'];
    $password = $post['password'];
    $get_user_query = "SELECT * FROM `op_user` WHERE `phone_number` LIKE '$phone_number' and password = '$password' and user_status = 1";
    $get_user = mysqli_query($conn, $get_user_query);
    $user_data = mysqli_fetch_row($get_user);
    if ($user_data) {
        $user_group = $user_data[4];
        $user_name = $user_data[1];
        print_r(json_encode(array("status" => 'success', "user_name" => $user_name, "g" => "$user_group", "user_id" => $user_data[0])));
    } else {
        print_r(json_encode(array("status" => 'failed', "message" => "user_not_found")));
    }
}

function get_user_data($post)
{
    global $conn;
    $search_term = $post['search_term'] ? $post['search_term'] : "";
    $role = $post['role'] ? $post['role'] : "";
    $status = $post['status'] ? $post['status'] : "";
    $get_user_query = "SELECT * FROM `op_user` WHERE 1=1 ";
    if ($search_term != "") {
        $get_user_query .= " AND (user_name like '%$search_term%' or phone_number like '%$search_term%') ";
    }

    if ($role != '') {
        $get_user_query .= " AND user_role = '$role' ";
    }

    if ($status != '') {
        $status = $status == "active" ? "1" : "0";
        $get_user_query .= " AND user_status = '$status' ";
    }

    $get_user = mysqli_query($conn, $get_user_query);
    $user_data = mysqli_fetch_all($get_user);
    $user_details = array();
    foreach ($user_data as $user) {
        $phone = $user[2];
        $user_details[$phone] = array("user_id" => $user[0], "name" => $user[1], "role" => $user[4], "active" => $user[6]);
    }
    print_r(json_encode($user_details));
}

function edit_user($post)
{
    global $conn;

    if ($post["status"] == 'inactive') {
        $status = 0;
    }else{
        $status = 1; 
    }
    $phone_number = $post['phone_number'];
    $role = $post['role'];
    $username = $post['username'];

    $user_update_query = "UPDATE `op_user` SET `user_status` = '$status', `user_name` = '$username',`user_role` = '$role' WHERE `op_user`.`phone_number` = '$phone_number'";
    $user_update = mysqli_query($conn, $user_update_query);
    print_r($post);
}

function delete_user($post)
{
    global $conn;
    $phone_number = $post['phone_number'];
    $user_delete_query = "DELETE FROM op_user WHERE `op_user`.`phone_number` = '$phone_number' ";
    $user_delete = mysqli_query($conn, $user_delete_query);
    if ($user_delete) {
        echo "deleted";
    } else {
        echo "not deleted";
    }
}

function resetpassword($post)
{
    global $conn;
    $phone_number = $post['phone_number'];
    $otp = $post['otp'];
    $password = $post['new_password'];
    $current_time = date('Y-m-d H:i:s', time());
    $get_otp_data_query = "SELECT * FROM `op_otp` WHERE mobile = '$phone_number' and is_expired = 0 ORDER BY otp_id DESC";
    $get_otp_data = mysqli_query($conn, $get_otp_data_query);
    // echo $get_otp_data_query;
    $otp_data = mysqli_fetch_row($get_otp_data);
    if ($otp_data) {
        $otp_value = $otp_data[2];
        $otp_time = $otp_data[3];
        $otp_time_interval = (strtotime($current_time) - strtotime($otp_time)) / 60;
        if ($otp_time_interval > 3) {
            $otp_update_query = "UPDATE `op_otp` SET is_expired = '1' WHERE mobile = '$phone_number'";
            $otp_update = mysqli_query($conn, $otp_update_query);
            print_r(json_encode(array("result" => "expired otp")));
            exit;

        } else {
            if ($otp_value == $otp) {
                $otp_update_query = "UPDATE `op_otp` SET is_expired = '1' WHERE mobile = '$phone_number'";
                $otp_update = mysqli_query($conn, $otp_update_query);
                $update_password_query = "UPDATE `op_user` SET `password` = '$password' WHERE `op_user`.`phone_number` = '$phone_number';";
                $update_password = mysqli_query($conn, $update_password_query);
                if ($update_password) {
                    print_r(json_encode(array("result" => "password_update")));
                }else{
                    print_r(json_encode(array("result" => "password_not_update")));
                }

                exit;
            } else {

                print_r(json_encode(array("result" => "invalid otp")));
                exit;
            }
        }
    } else {
        print_r(json_encode(array("result" => "invalid2")));
        exit;
    }
    // print_r($otp_verified);

}
