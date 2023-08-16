<?php 
include('header.php');
?>
<style type="text/css">
	body{
	margin:0;
/*	color:#6a6f8c;
	background:#c8c8c8;
	font:600 16px/18px 'Open Sans',sans-serif;*/
}

.login-box{
	width:100%;
	

}
.login-snip{
	width:100%;
	height:100%;
	position:absolute;
	padding:90px 130px 50px 130px;
	/*background:rgba(0, 77, 77,.9);*/
	overflow-y: hidden;
}
.login-snip .login,
.login-snip .sign-up-form{
	top:0;
	left:0;
	right:0;
	bottom:0;
	position:absolute;
	/*transform:rotateY(180deg);*/
	backface-visibility:hidden;
	transition:all .4s linear;
}
.login-snip .sign-in,
.login-snip .sign-up,
.login-space .group .check{
	display:none;
}
.login-snip .tab,
.login-space .group .label,
.login-space .group .button{
	text-transform:uppercase;
}
.login-snip .tab{
	font-size:22px;
	margin-right:15px;
	padding-bottom:5px;
	margin:0 15px 10px 0;
	display:inline-block;
	border-bottom:2px solid transparent;
}
.login-snip .sign-in:checked + .tab,
.login-snip .sign-up:checked + .tab{
	color:black;
	border-color:#1161ee;
}
.login-space{
	min-height:345px;
	position:relative;
	perspective:1000px;
	transform-style:preserve-3d;
}
.login-space .group{
	margin-bottom:15px;
}
.login-space .group .label,
.login-space .group .input,
.login-space .group .button{
	width:100%;
	color:#fff;
	display:block;
}
.login-space .group .input,
.login-space .group .button{
	border:none;
	padding:15px 20px;
	border-radius:25px;
	background:rgba(255,255,255,.1);
}
.login-space .group input[data-type="password"]{
	text-security:circle;
	-webkit-text-security:circle;
}
.login-space .group .label{
	color:#aaa;
	font-size:12px;
}
.login-space .group .button{
	background:#1161ee;
}
.login-space .group label .icon{
	width:15px;
	height:15px;
	border-radius:2px;
	position:relative;
	display:inline-block;
	background:rgba(255,255,255,.1);
}
.login-space .group label .icon:before,
.login-space .group label .icon:after{
	content:'';
	width:10px;
	height:2px;
	background:#fff;
	position:absolute;
	transition:all .2s ease-in-out 0s;
}
.login-space .group label .icon:before{
	left:3px;
	width:5px;
	bottom:6px;
	transform:scale(0) rotate(0);
}
.login-space .group label .icon:after{
	top:6px;
	right:0;
	transform:scale(0) rotate(0);
}
.login-space .group .check:checked + label{
	color:#fff;
}
.login-space .group .check:checked + label .icon{
	background:#1161ee;
}
.login-space .group .check:checked + label .icon:before{
	transform:scale(1) rotate(45deg);
}
.login-space .group .check:checked + label .icon:after{
	transform:scale(1) rotate(-45deg);
}
.login-snip .sign-in:checked + .tab + .sign-up + .tab + .login-space .login{
	transform:rotate(0);
}
.login-snip .sign-up:checked + .tab + .login-space .sign-up-form{
	transform:rotate(0);
}

*,:after,:before{box-sizing:border-box}
.clearfix:after,.clearfix:before{content:'';display:table}
.clearfix:after{clear:both;display:block}
a{color:inherit;text-decoration:none}


.hr{
	height:2px;
	/*margin:60px 0 50px 0;*/
	background:rgba(255,255,255,.2);
}
.foot{
	text-align:center;
}
.card{
	width: 500px;
	left: 100px;
}

::placeholder{
color: #b3b3b3;
} 
</style>
<style type="text/css">
	.login_left_block{
		background-image: url('<?php echo $site_url?>/images/carparking_banner.jpg');
		    background-repeat: no-repeat;
    height: 100vh;
    background-position: center;
    background-size: cover;
	}
.login_page_block	.form-control{
		    border: 1px solid #efe9e9 !important;
		        padding: 11px 13px !important;
    border-radius: 37px !important;
    color: black !important;
	}
	.login-space .group .check:checked + label{
		color: black !important;
	}
	.login-space .group .input{
		color: black !important;
	}
	.error{
		    color: red;
    font-size: 15px;
    height: 0px;
    text-transform: capitalize;
    text-align: left;
	}
	@media(max-width: 767px){
		h4{
			color: white;
		}
		.login-space .group .label {
    color: white;
}
.forgot_password{
	color: white;
}
.login-snip .sign-in:checked + .tab, .login-snip .sign-up:checked + .tab {
    color: white;
    }
    .login-snip .tab{
    	color: white;
    }
    .login-space .group .input{
    	    background: rgba(255,255,255,.9);
    }
    .foot label{
    	color: white;
    }
		.login_page_block{
				background-image: url('<?php echo $site_url?>/images/carparking_banner.jpg');
		    background-repeat: no-repeat;
    
    
    
    height: 100vh;
    background-position: center;
    background-size: cover;
    position: relative;
		}
		.login_page_block::before{
			content: "";
			position: absolute;
			left: 0;
			height: 100%;
			width: 100%;
			background: rgba(0,0,0,0.6);
		}
		.login-snip{
			overflow-y: auto;
			    height: auto;
			    padding: 40px;
			    position: relative;
		}
		.login_left_block{
			display: none;
		}
		.login-space {
    min-height: 500px;
}
	}


	
/*new style trial*/
	@media(min-width: 768px){
		
.login_left_block{
	display: none;
}
.login_page_block{
	    background-image: url(<?php echo $site_url?>/images/carparking_banner.jpg);
    background-repeat: no-repeat;
    height: 100vh;
    background-position: center;
    background-size: cover;
}
.login-snip{
	position: relative;
	background: rgba(0, 0, 0, 0.5);
	border-radius: 40px;
	    padding: 40px;
	   
}
.login-space{
	 min-height: 67vh;
	 
}
.login-box{
	margin-top: 45px;
	margin-bottom: 30px;
}
.login-space .group .label {
    color: white;
}
.forgot_password{
	color: white;
}
.login-snip .sign-in:checked + .tab, .login-snip .sign-up:checked + .tab {
    color: white;
    }
    .login-snip .tab{
    	color: white;
    }
    .login-space .group .input{
    	    background: rgba(255,255,255,.9);
    }
    .foot label{
    	color: white;
    }
    .forgot_password{
    	margin-top: 10px;
    }
    h4{
    	color: white;
    }
      .error{
    color:white
}
.login-space .group {
    margin-bottom: 25px;
}
	}
</style>
<div class="login_page_block col-12">
	<div class="row ">
		<div class="col-md-6 login_left_block">
			<div class="login_left_section">
				
			</div>
		</div>
		<!-- <div class="col-md-6 login_right_block px-md-0">
			<div class="login-box "> -->
				<div class="col-md-5 login_right_block pl-lg-5 offset-md-3">
			<div class="login-box pl-lg-5 ml-lg-4">
	<div class="login-snip">
		<h4>Forgot Password</h4>
		<div class="login-space mt-3">
			<div class="login">
				<div class="group">
					<label  class="label">Phone Number</label>
					<input id="phone_number" type="text" onblur="validatephone('phone_number')"class="input form-control" maxlength="10" minlength="10" placeholder="Enter your Phone Number">
					<div id="phone_number_error" class="error"></div>
				</div>
				<div class="group">
					<label class="label">Password</label>
					<input id="new_password" type="Password" class="input  form-control"  placeholder="Enter your password" onclick="validatepassword('new_password')">
					<div id="new_password_error" class="error"></div>
				</div>
				<div class="group">
					<label  class="label">OTP</label>
					<input id="otp" type="text" onblur="validateotp('otp')"class="input form-control" maxlength="10" minlength="10" placeholder="Enter your otp">
					<div id="otp_error" class="error"></div>
				</div>
				
				<div class="group mt-5">
					<button type="button" class="button" value="" onclick="Resetpassword()">Submit</button>
				</div>
			
			</div>
		
		</div>
	</div>
</div> 
		</div>
	</div>
</div>

<script type="text/javascript">
	
	



function validateotp(text) {
			var value = document.getElementById(text).value; 
			if(value == ""){
				 errorMessage = "Please Enter the OTP";
        document.getElementById(text + "_error").innerHTML = errorMessage;
       
        return false;
			}
			else{
				 errorMessage = "";
        document.getElementById(text + "_error").innerHTML = errorMessage;
       
        return true;
			}
	}
	function Resetpassword(){
		var otp = validateotp("otp");
		var phone_number = validatephone('phone_number');
		var password = validatepassword('new_password');
		if(otp ==  true && phone_number ==  true &&  password ==  true){
		window.location = "<?php echo $site_url?>/login.php"
		}
	}
</script>

