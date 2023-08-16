<?php
require 'database.php';
date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)

if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $url = "https://";
} else {
    $url = "http://";
}

// Append the host(domain name, ip) to the URL.
$url .= $_SERVER['HTTP_HOST'];

// Append the requested resource location to the URL
$url .= $_SERVER['REQUEST_URI'];

$site_url = "http://localhost/online_parking";
if (trim($_SERVER['REQUEST_URI']) != "/online_parking/login.php") {
$user_cookie = json_decode($_COOKIE['userdata'], true);
$user_id =  $user_cookie['user_id'];
if ($user_cookie) {
$user_verify = checkuser_login($user_cookie, $url);
if (!$user_verify) {
   header("location:".$site_url.'/login.php');
}}
else
{
 header("location:".$site_url.'/login.php');
}

}

function checkuser_login($user_cookie, $path)
{
    global $conn;
    $phone = $user_cookie['value'];
    $check_sql = "SELECT * FROM `op_user` WHERE `phone_number` LIKE '$phone'";
    $check_user = mysqli_query($conn, $check_sql);
    $user_data = mysqli_fetch_row($check_user);
    $role=$user_data[4];
    $pattern = '/\/online_parking\/admin\//';
    $match = preg_match($pattern, $path);

    if ($role != 1 && $match == true) {
       return false;
    }else{
        return true;
    }

}
?>
<!DOCTYPE html>
<html  lang="en">
   <head>
      <meta name="robots" content="noindex, nofollow">
      <meta name="googlebot" content="noindex, nofollow">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;500;600;700&display=swap" rel="stylesheet">
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>











   </head>
   <style type="text/css">
     *{
   font-family: 'Mulish', sans-serif;
   }
   </style>
<!-- mobile style -->
<style type="text/css">
   @media(max-width: 767px){
       .header_sidebar{
         display: none;
      }

      /*user styling*/
      .main_block{
         padding-left: 10px !important;
         padding-right: 10px;
      }

      .listing_block table {
    border-collapse: separate;
    display: block;
    width: 100%;
    overflow-x: scroll;
}
.listing_block{
   padding: 10px !important;
   }
   .listing_block table div{
      width: max-content;
   }

}
 .modal-content_new button{
          width: auto !important;
              padding: 6px 25px !important;
   }
   .btn, .btn:active,  .btn:hover{
      background-color: transparent;
      box-shadow: none ;
      border: none ;
      outline: none ;
          padding: 0px;
   }
   .error{
      height: 0px;
      text-align: left;
      text-transform: capitalize;
   }
   select.form-control:not([size]):not([multiple]){
          height: 100%;
    padding: 12px;
   }
</style>


<script type="text/javascript">
   function validatephone(text) {
    var value = document.getElementById(text).value;

    value = value.replace(/[^0-9]/g, "");
    if (value == "") {
        errorMessage = "Phone number is required";
        document.getElementById(text + "_error").innerHTML = errorMessage;

        return false;
    } else if (value.length != 10) {
        errorMessage = "Enter valid phone number";
        document.getElementById(text + "_error").innerHTML = errorMessage;

        return false;
    } else {
errorMessage = "";
        document.getElementById(text + "_error").innerHTML = errorMessage;

        return true;
    }
}
function validatepassword(text){
    return true;
   var value = document.getElementById(text).value;
  var pattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
  if(value == "") {
        errorMessage = "password is required";
        document.getElementById(text + "_error").innerHTML = errorMessage;
       console.log("password is required")
        return false;
    }


   else if(!pattern.test(value)) {

    errorMessage = "password is not validate required";
   document.getElementById(text + "_error").innerHTML = errorMessage;
    console.log("password is not validate required")
      return false;
  }
   else {

    errorMessage = "";
   document.getElementById(text + "_error").innerHTML = errorMessage;
   console.log("password validate ")
   return true;
  }
}
function  validateuser(text) {
   var value = document.getElementById(text).value;
    if(value == "") {
        errorMessage = "username is required";
        document.getElementById(text + "_error").innerHTML = errorMessage;

        return false;
    }
    else{
          errorMessage = "";
   document.getElementById(text + "_error").innerHTML = errorMessage;
      return true
    }
}
function setLoginCookie(user,value,user_id,expires=1) {
  var cookie = {
    user: user,
    value: value,
    user_id:user_id
  };
  var expires= new Date(Date.now() + expires * 24 * 60 * 60 * 1000);
document.cookie = "userdata="+JSON.stringify(cookie)+";expires="+expires;

}
</script>


<!-- mobile menu -->

<div class="d-md-none mob_header">
    <div class="row">
        <div class="col-6">
            <img src="<?php echo $site_url ?>/images/smart-parking-logo-new.png" class="logo_img">
        </div>
             <div class="col-6 text-right">
                <svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px" viewBox="0 0 24 24" fill="none" onclick="show_menu()">
<path fill-rule="evenodd" clip-rule="evenodd" d="M4 5C3.44772 5 3 5.44772 3 6C3 6.55228 3.44772 7 4 7H20C20.5523 7 21 6.55228 21 6C21 5.44772 20.5523 5 20 5H4ZM7 12C7 11.4477 7.44772 11 8 11H20C20.5523 11 21 11.4477 21 12C21 12.5523 20.5523 13 20 13H8C7.44772 13 7 12.5523 7 12ZM13 18C13 17.4477 13.4477 17 14 17H20C20.5523 17 21 17.4477 21 18C21 18.5523 20.5523 19 20 19H14C13.4477 19 13 18.5523 13 18Z" fill="#000000"/>
</svg>
             </div>
    </div>
</div>
<style type="text/css">
    @media(max-width: 767px){
        .header_sidebar .logo_img{
            display: none;
        }
         .header_sidebar p{
            display: none;
         }
     .mob_header   .logo_img {
    width: 70px;
    padding: 0px 0px;
    margin: 0px;
    display: block;
}
.mob_header{
        background: white;
    padding: 5px 15px;
    border-bottom: 1px solid lightgrey;
    }
   .mob_header svg {
            width: 30px;
    height: auto;
    }
    h1, h2 {
    font-size: 19px !important;
    font-weight: 600;
    display: block;
    width: auto;
    align-self: center;
}
}
</style>
<script type="text/javascript">
    function show_menu(){
        $('.header_sidebar').toggle();
    }
</script>