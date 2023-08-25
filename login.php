<?php
include 'header.php';
?>
<style type="text/css">
body {
    margin: 0;
    /*	color:#6a6f8c;
	background:#c8c8c8;
	font:600 16px/18px 'Open Sans',sans-serif;*/
}

button {
    cursor: pointer;
}

.login-box {
    width: 100%;


}

.login-snip {
    width: 100%;
    height: 100%;
    position: absolute;
    padding: 90px 130px 50px 130px;
    /*background:rgba(0, 77, 77,.9);*/
    overflow-y: hidden;
}

.login-snip .login,
.login-snip .sign-up-form {
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    position: absolute;
    transform: rotateY(180deg);
    backface-visibility: hidden;
    transition: all .4s linear;
}

.login-snip .sign-in,
.login-snip .sign-up,
.login-space .group .check {
    display: none;
}

.login-snip .tab,
.login-space .group .label,
.login-space .group .button {
    text-transform: uppercase;
}

.login-snip .tab {
    font-size: 22px;
    margin-right: 15px;
    padding-bottom: 5px;
    margin: 0 15px 10px 0;
    display: inline-block;
    border-bottom: 2px solid transparent;
}

.login-snip .sign-in:checked+.tab,
.login-snip .sign-up:checked+.tab {
    color: black;
    border-color: #1161ee;
}

.login-space {
    min-height: 345px;
    position: relative;
    perspective: 1000px;
    transform-style: preserve-3d;
}

.login-space .group {
    margin-bottom: 15px;
}

.login-space .group .label,
.login-space .group .input,
.login-space .group .button {
    width: 100%;
    color: #fff;
    display: block;
}

.login-space .group .input,
.login-space .group .button {
    border: none;
    padding: 15px 20px;
    border-radius: 25px;
    background: rgba(255, 255, 255, .1);
}

.login-space .group input[data-type="password"] {
    text-security: circle;
    -webkit-text-security: circle;
}

.login-space .group .label {
    color: #aaa;
    font-size: 12px;
    font-weight:bold;
}

.login-space .group .button {
    background: #1161ee;
}

.login-space .group label .icon {
    width: 15px;
    height: 15px;
    border-radius: 2px;
    position: relative;
    display: inline-block;
    background: rgba(255, 255, 255, .1);
}

.login-space .group label .icon:before,
.login-space .group label .icon:after {
    content: '';
    width: 10px;
    height: 2px;
    background: #fff;
    position: absolute;
    transition: all .2s ease-in-out 0s;
}

.login-space .group label .icon:before {
    left: 3px;
    width: 5px;
    bottom: 6px;
    transform: scale(0) rotate(0);
}

.login-space .group label .icon:after {
    top: 6px;
    right: 0;
    transform: scale(0) rotate(0);
}

.login-space .group .check:checked+label {
    color: #fff;
}

.login-space .group .check:checked+label .icon {
    background: #1161ee;
}

.login-space .group .check:checked+label .icon:before {
    transform: scale(1) rotate(45deg);
}

.login-space .group .check:checked+label .icon:after {
    transform: scale(1) rotate(-45deg);
}

.login-snip .sign-in:checked+.tab+.sign-up+.tab+.login-space .login {
    transform: rotate(0);
}

.login-snip .sign-up:checked+.tab+.login-space .sign-up-form {
    transform: rotate(0);
}

*,
:after,
:before {
    box-sizing: border-box
}

.clearfix:after,
.clearfix:before {
    content: '';
    display: table
}

.clearfix:after {
    clear: both;
    display: block
}

a {
    color: inherit;
    text-decoration: none
}


.hr {
    height: 2px;
    /*margin:60px 0 50px 0;*/
    background: rgba(255, 255, 255, .2);
}

.foot {
    text-align: center;
}

.card {
    width: 500px;
    left: 100px;
}

::placeholder {
    color: #b3b3b3;
}

.login_left_block {
    background-image: url('<?php echo $site_url ?>/images/carparking_banner.jpg');
    background-repeat: no-repeat;
    height: 100vh;
    background-position: center;
    background-size: cover;
}

.login_page_block .form-control {
    border: 1px solid #efe9e9 !important;
    padding: 11px 13px !important;
    border-radius: 37px !important;
    color: black !important;
}

.login-space .group .check:checked+label {
    color: black !important;
}

.login-space .group .input {
    color: black !important;
}

.error {
    opacity: 1 !important;
    font-weight: bold;
    color: #ff0f0f;
    font-size: 15px;
    height: 0px;
    text-transform: capitalize;
    text-align: left;
}

.forgot_password,
.forgot_password:hover,
.forgot_password:active {
    background: none;
    border: none;
    outline: none;
    box-shadow: none;
}

@media(max-width: 767px) {
    .login-space .group .label {
        color: white;
    }

    .forgot_password {
        color: white;
    }

    .login-snip .sign-in:checked+.tab,
    .login-snip .sign-up:checked+.tab {
        color: white;
    }

    .login-snip .tab {
        color: white;
    }

    .login-space .group .input {
        background: rgba(255, 255, 255, .9);
    }

    .foot label {
        color: white;
    }

    .login_page_block {
        background-image: url('<?php echo $site_url ?>/images/carparking_banner.jpg');
        background-repeat: no-repeat;



        height: 100vh;
        background-position: center;
        background-size: cover;
        position: relative;
    }

    .login_page_block::before {
        content: "";
        position: absolute;
        left: 0;
        height: 100%;
        width: 100%;
        background: rgba(0, 0, 0, 0.1);
    }

    .login-snip {
        overflow-y: auto;
        height: auto;
        padding: 20px !important;
        position: relative;
    }

    .login_left_block {
        display: none;
    }

    .login-space {
        min-height: 499px !important;
    }
}

@media(min-width: 768px) and (max-width: 991px) {
    .login-snip {
        padding: 50px;
    }

}


/*new style trial*/
.login_left_block {
    display: none;
}

.login_page_block {
    background-image: url(<?php echo $site_url ?>/images/carparking_banner.jpg);
    background-repeat: no-repeat;
    height: 100vh;
    background-position: center;
    background-size: cover;
}

.login-snip {
    position: relative;
    background: rgba(0, 0, 0, 0.5);
    border-radius: 40px;
    padding: 40px;

}

.login-space {
    min-height: 74vh;

}

.login-box {
    margin-top: 10px;
    margin-bottom: 10px;
}

.login-space .group .label {
    color: white;
}

.forgot_password {
    color: white;
}

.login-snip .sign-in:checked+.tab,
.login-snip .sign-up:checked+.tab {
    color: white;
}

.login-snip .tab {
    color: white;
}

.login-space .group .input {
    background: rgba(255, 255, 255, .9);
}

.foot label {
    color: white;
}

.forgot_password {
    margin-top: 10px;
}

.error {
  
    opacity: 0.8;
}

.login-space .group {
    margin-bottom: 20px;
}

.foot label {
    font-size: 15px;
}




.modal .error {
    color: red;
}

#modal {
    display: none;
}

.modal_new {
    position: fixed;
    z-index: 50000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0, 0, 0);
    background-color: rgba(0, 0, 0, 0.4);
    display: flex;
}

.modal-content_new {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #000;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s border-radius: 0.3rem;
}

@-webkit-keyframes animatetop {
    from {
        top: -300px;
        opacity: 0
    }

    to {
        top: 0;
        opacity: 1
    }
}

@keyframes animatetop {
    from {
        top: -300px;
        opacity: 0
    }

    to {
        top: 0;
        opacity: 1
    }
}

.modal-content_new {
    width: 35%;
    padding: 40px;
    border-radius: 14px;
    text-align: center;
}

.modal-content_new label {
    text-align: left;
    display: block;
    font-size: 17px;
    text-transform: capitalize;
    font-weight: 600;
}

.modal-content_new button {
    border: none;
    padding: 10px 40px;
    border-radius: 25px;
    background: #1161ee;
    color: white;
}

@media(max-width: 767px) {
    .modal-content_new {
        width: 90%;
    }
}

.close_icon {
    position: absolute;
    right: -10px;
    top: -9px;
    background: rgba(0, 0, 0, 0.7);
    border-radius: 29px;
    color: white;
    padding: 1px 9px;
    cursor: pointer;
}


.modal_forgot_password {
    display: none;
}
#invalid_user_password{
    display: none;
}
.sign-up-form .group .input {
    background: rgba(255, 255, 255, .9);
    padding: 6px 11px !important;
}
.sign-up-form .group .button {
    background: #1161ee;
    padding: 10px;
}
</style>
<div class="login_page_block col-12">
    <div class="row ">
        <div class="col-md-6 login_left_block">
            <div class="login_left_section">

            </div>
        </div>
        <div class="col-md-5 login_right_block pl-lg-5 offset-md-3">
            <div class="login-box pl-lg-5 ml-lg-4">
                <div class="login-snip">
                    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1"
                        class="tab">Login</label>
                    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign
                        Up</label>
                    <div class="login-space ">
                        <div class="login mt-4">
                            <div class="mt-4">


                                <div class="group">
                                    <label class="label">Phone Number</label>
                                    <input id="phone_number" type="text" onblur="validatephone('phone_number')"
                                        inputmode="numeric"
                                        onkeypress='return event.charCode >= 48 && event.charCode <= 57'
                                        class="input form-control" maxlength="10" minlength="10"
                                        placeholder="Enter your Phone Number">
                                    <div id="phone_number_error" class="error"></div>
                                </div>
                                <div class="group">
                                    <label for="pass" class="label">Password</label>
                                    <input id="password" type="password" class="input  form-control"
                                        placeholder="Enter your password" onblur="validatepassword('password')">
                                    <div id="password_error" class="error"></div>
                                </div>
                                <!-- <div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div> -->
                <div id="invalid_user_password" class="error">Invalid username and password</div>
                                <div class="group mt-5">
                                    <button type="button" class="button" onclick="login()">Login</button>
                                </div>
                                <div class="hr"></div>
                                <div class="foot">

                                    <button type="button" class="button forgot_password"
                                        onclick="forgotpassword()">Forgot Password?</button>
                                </div>
                            </div>
                        </div>
                        <div class="sign-up-form">
                            <div class="group">
                                <label class="label">Username</label>
                                <input id="username" type="text" class="input  form-control"
                                    placeholder="Create your Username" onclick="validateuser('username')">
                                <div id="username_error" class="error"></div>
                            </div>
                            <div class="group">
                                <label for="" class="label">Phone Number</label>
                                <input id="phone_number_new" type="text" class="input  form-control"
                                    placeholder="Enter your Phone Number" onblur="validatephone('phone_number_new')"
                                    maxlength="10" minlength="10">
                                <div id="phone_number_new_error" class="error"></div>
                            </div>
                            
                             <div class="group">
                                <label for="email_new" class="label">Email</label>
                                <input id="email_new" onclick="validateemail('email_new')" type="text"
                                    class="input  form-control" placeholder="Create your Email">
                                <div id="email_new_error" class="error"></div>
                            </div>
                            <div class="group">
                                <label for="pass" class="label">Password</label>
                                <input id="password_new" onclick="validatepassword('password_new')" type="password"
                                    class="input  form-control" placeholder="Create your password">
                                <div id="password_new_error" class="error"></div>
                            </div>
                            <div class="group">
                                <label for="pass" class="label">Repeat Password</label>
                                <input id="password_renew" onclick="validatepasswordmatch('password_renew')"
                                    type="password" class="input  form-control" data-type="password"
                                    placeholder="Repeat your password">
                                <div id="password_renew_error" class="error"></div>
                            </div>

                            <div class="group">
                                <button type="button" class="button" value="" onclick="signup()">Sign Up</button>
                            </div>
                            <div class="hr"></div>
                            <div class="foot">
                                <label for="tab-1">Already Member?</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="modal" id="modal">
    <div class="modal_new ">
        <div class="modal-content_new  ">
            <span class="close_icon" onclick="close_modal('modal')">x</span>
            <div class="group">
                <label class="label">Enter the OTP</label>
                <input id="otp" type="text" class="input  form-control" placeholder="Enter the otp"
                    onclick="validateotp('otp')">
                <div id="otp_error" class="error"></div>
            </div>
            <div class="group mt-4">
                <button type="button" class="button" value="" onclick="submit_otp()">Submit</button>
            </div>
        </div>
    </div>
</section>


<section class="modal" id="modal_forgot_password">
    <div class="modal_new ">
        <div class="modal-content_new  ">
            <span class="close_icon" onclick="close_modal('modal_forgot_password')">x</span>
            <div class="group">
                <label class="label">Enter the phone number</label>
                <input id="phone_number_password" type="text" class="input  form-control"
                    placeholder="Enter the phone number" onclick="validatephone('phone_number_password')" minlength="10"
                    maxlength="10">
                <div id="phone_number_password_error" class="error"></div>
            </div>
            <div class="group mt-4">
                <button type="button" class="button" value="" onclick="submit_forgotpassword()">Submit</button>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
function login() {
    var validate_phone_number = validatephone('phone_number');
    var validate_password = validatepassword('password');
    var phone_number = $("#phone_number").val();
    var password = $("#password").val();

    if (validate_phone_number == true && validate_password == true) {
        var json_data = {
            phone_number: phone_number,
            password: password,
            function_name: 'login_user'
        };
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "<?php echo $site_url ?>/model/user_model.php");
        xhr.setRequestHeader("Content-Type", "application/json");
        var data = JSON.stringify(json_data);
        xhr.send(data);

        xhr.onload = function() {
            if (xhr.status === 200) {
				console.log(xhr.responseText);
                 var json_response = JSON.parse(xhr.responseText);
            
				if (json_response.status == "success") {
					setLoginCookie(json_response.user_name,phone_number, json_response.user_id, expires=1)
					if (json_response.g == 1) {
						 window.location = "<?php echo $site_url ?>/admin/";
					}else if(json_response.g == 2){
						window.location = "<?php echo $site_url ?>/";
					}
                    $("#invalid_user_password").hide();

				}else{
					// alert("invalid username and password");
                    $("#invalid_user_password").show();
				}
            } else {
                console.log("Error: " + xhr.status);
            }
        };
        // window.location = "<?php //echo $site_url ?>/admin/user.php";
    }
}

function validatepasswordmatch(text) {
    var password = document.getElementById(text).value;

    var value = document.getElementById('password_new').value;
    if (password == value) {
        errorMessage = "";
        document.getElementById(text + "_error").innerHTML = errorMessage;
        return true
    } else {
        errorMessage = "password is not mathching";
        document.getElementById(text + "_error").innerHTML = errorMessage;
        return false;
    }
}


function validateemail(text) {
 var value = document.getElementById(text).value;

    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

    if (value == "") {
        errorMessage = "Email is required";
        // setText(textId + '-error', errorMessage);
      document.getElementById(text + "_error").innerHTML = errorMessage;
    

        return false;
    } else if (!emailPattern.test(value)) {
        errorMessage = "Please enter a valid email address";
        document.getElementById(text + "_error").innerHTML = errorMessage;
      

        // setText(textId + '-error', errorMessage);

        return false;
    } else {
        // addClass(textId + '-error', 'white');
        // document.getElementById('pe_email').placeholder = "Enter your email ID";

        // setText(textId + '-error', ' ');
         errorMessage = "";
  document.getElementById(text + "_error").innerHTML= errorMessage;
        return true;
    }
}
function validatepassword(text){
    // return true;
   var value = document.getElementById(text).value;
  var pattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
  if(value == "") {
        errorMessage = "password is required";
        document.getElementById(text + "_error").innerHTML = errorMessage;
       console.log("password is required")
        return false;
    }


   else if(!pattern.test(value)) {

    errorMessage = "password must contain AlphaNumeric and special characters(@$!%*?&)";
   document.getElementById(text + "_error").innerHTML = errorMessage;
      return false;
  }
   else {

    errorMessage = "";
   document.getElementById(text + "_error").innerHTML = errorMessage;
   console.log("password validate ")
   return true;
  }
}
function signup() {
    var validate_phone_number = validatephone('phone_number_new');
    var validate_password = validatepassword('password_new');
    var validate_username = validateuser('username');
    var validate_passwordmatch = validatepasswordmatch('password_renew');

    var validate_email = validateemail('email_new');


    if (validate_phone_number == true && validate_password == true && validate_username == true &&
        validate_passwordmatch == true && validate_email == true) {

        var phone_number = $("#phone_number_new").val();
        var json_data = {
            phone_number: phone_number,
            function_name: 'send_otp'
        };
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "<?php echo $site_url ?>/model/user_model.php");
        xhr.setRequestHeader("Content-Type", "application/json");
        var data = JSON.stringify(json_data);
        xhr.send(data);

        xhr.onload = function() {
            if (xhr.status === 200) {
                // var data = JSON.parse(xhr.responseText);
                console.log(xhr.responseText);
            } else {
                console.log("Error: " + xhr.status);
            }
        };


        $("#modal").show();


        // $("#tab-1").prop("checked", true)


    }
}

function validateotp(text) {

    return promise = new Promise((resolve, reject) => {

        var value = document.getElementById(text).value;
        if (value == "") {
            errorMessage = "Please Enter the OTP";
            document.getElementById(text + "_error").innerHTML = errorMessage;
            resolve(false);
        } else {
            var phone_number = $("#phone_number_new").val();
            var json_data = {
                phone_number: phone_number,
                otp: value,
                function_name: 'verify_otp'
            };
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "<?php echo $site_url ?>/model/user_model.php");
            xhr.setRequestHeader("Content-Type", "application/json");
            var data = JSON.stringify(json_data);
            xhr.send(data);
            xhr.onload = function() {
                if (xhr.status === 200) {
                    console.log(xhr.responseText);
                    var response = JSON.parse(xhr.responseText);

                    if (response.result == "valid") {
                        errorMessage = "";
                        document.getElementById(text + "_error").innerHTML = errorMessage;
                        resolve(true);
                    } else if (response.result == "expired") {
                        errorMessage = "OTP Expired, Please resend OTP";
                        document.getElementById(text + "_error").innerHTML = errorMessage;
                        resolve(false);
                    } else {
                        errorMessage = "Please Enter Valid OTP";
                        document.getElementById(text + "_error").innerHTML = errorMessage;
                        resolve(false);
                    }
                } else {
                    resolve(false);
                }
            };


        }
    })
}




async function submit_otp() {
    var otp = await validateotp("otp");
    console.log(otp);
    if (otp == true) {
        var phone_number = $("#phone_number_new").val();
        var password = $("#password_new").val();
        var username = $("#username").val();
        var email = $("#email_new").val();
        var json_data = {
            phone_number: phone_number,
            password: password,
            username: username,
            email:email,
            function_name: 'register_user'
        };
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "<?php echo $site_url ?>/model/user_model.php");
        xhr.setRequestHeader("Content-Type", "application/json");
        var data = JSON.stringify(json_data);
        xhr.send(data);

        xhr.onload = function() {
            if (xhr.status === 200) {
                var json_response = JSON.parse(xhr.responseText);
                console.log(json_response);
            } else {
                console.log("Error: " + xhr.status);
            }
        };
        $("#modal").hide();
        $("#tab-1").prop("checked", true)
    }
}

function close_modal(x) {
    $("#" + x).hide();
}

function forgotpassword() {

    

    $("#modal_forgot_password").show();
}

function submit_forgotpassword() {
    var phone_number = validatephone("phone_number_password");
    if (phone_number == true) {

        var phone_number = $("#phone_number_password").val();
        var json_data = {
            phone_number: phone_number,
            function_name: 'send_otp'
        };
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "<?php echo $site_url ?>/model/user_model.php");
        xhr.setRequestHeader("Content-Type", "application/json");
        var data = JSON.stringify(json_data);
        xhr.send(data);

        xhr.onload = function() {
            if (xhr.status === 200) {
                // var data = JSON.parse(xhr.responseText);
                console.log(xhr.responseText);
                window.location = "<?php echo $site_url ?>/forgot-password.php"

            } else {
                console.log("Error: " + xhr.status);
            }
        };


    }
}

</script>

<!-- The Modal -->