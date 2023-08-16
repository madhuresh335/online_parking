<?php 
   include('../header.php');
   ?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;500;600;700&display=swap" rel="stylesheet">
<style type="text/css">
   body ,.top_header{
    background: #f6f7fb !important;
}
   *{
   font-family: 'Mulish', sans-serif;
   }
   body{
   margin:0;
   }
   button{
   cursor: pointer;
   }
   *,:after,:before{box-sizing:border-box}
   .clearfix:after,.clearfix:before{content:'';display:table}
   .clearfix:after{clear:both;display:block}
   a{color:inherit;text-decoration:none}
   .main_block{
   padding-left: 270px;
   }
   h1,h2{
   font-size: 22px;
   font-weight: 600;
   }
   .listing_block{
   padding-left: 10px;
   border-radius: 10px;
   margin-bottom: 30px;
   box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.1);
   }
</style>
<style type="text/css">
   .listing_block{
   background: white;
   padding-left: 20px;
   padding:20px 10px 10px;
   }
   @media(min-width: 1199px){
    .listing_block{
        padding: 40px;
    }
    .listing_block_border{
          border: 1px solid #e5e4e4;
    padding: 10px 30px;
    border-radius: 10px;
    }
   }

 .user_block  p{
        font-weight: 600;
    font-size: 20px;
    
 }
 .user_block label{
    color: #808080;
    text-transform: capitalize;
    font-weight: 600;
 }
  .user_block input,.user_block input:focus,.user_block input:hover,.user_block input:active{
       /*text-transform: capitalize;*/
    border: none;
    margin-bottom: 21px;
    font-weight: 600;
    box-shadow: none;
    font-size: 16px;
    outline: none;
 }
 .reset_password input,.reset_password input:focus,.reset_password input:hover,.reset_password input:active{
      border: 1px solid lightgrey;
    padding: 10px 12px;
    width: 100%;
    border-radius: 5px;
        margin-bottom: 0px;
 }
 .cta_btn {
        background: #2d93f9 !important;
    /* padding: 10px 10px 3px; */
    border-radius: 10px;
    color: white;
    border: none;
    padding: 7px 11px;
    width: auto;
    font-size: 18px;
    outline: none;
 }
 .error {
    height: 0px;
    text-align: left;
    text-transform: capitalize;
    color: red;
    font-size: 14px;
}
</style>
<div class="">
   <?php include('sidebar.php');?>
</div>
<div class="main_block mt-3 ">
     <h1 class="mb-4">My Profile</h1>
     <div class="col-12 ">
         

     <div class="row">
         <div class="col-md-7 ">
            <div class="listing_block">
                
           
             <h2>User Details</h2>
             <div class="listing_block_border">
                 
                  <div class="user_block d-flex mt-4">
                      <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon" style="width: 1em; height: 1em;vertical-align: middle;fill: currentColor;overflow: hidden;    width: 41px;
    position: relative;
    top: -9px;
    height: auto;" viewBox="0 0 1024 1024" version="1.1"><path d="M843.282963 870.115556c-8.438519-140.515556-104.296296-257.422222-233.908148-297.14963C687.881481 536.272593 742.4 456.533333 742.4 364.088889c0-127.241481-103.158519-230.4-230.4-230.4S281.6 236.847407 281.6 364.088889c0 92.444444 54.518519 172.183704 133.12 208.877037-129.611852 39.727407-225.46963 156.634074-233.908148 297.14963-0.663704 10.903704 7.964444 20.195556 18.962963 20.195556l0 0c9.955556 0 18.299259-7.774815 18.962963-17.73037C227.745185 718.506667 355.65037 596.385185 512 596.385185s284.254815 122.121481 293.357037 276.195556c0.568889 9.955556 8.912593 17.73037 18.962963 17.73037C835.318519 890.311111 843.946667 881.019259 843.282963 870.115556zM319.525926 364.088889c0-106.287407 86.186667-192.474074 192.474074-192.474074s192.474074 86.186667 192.474074 192.474074c0 106.287407-86.186667 192.474074-192.474074 192.474074S319.525926 470.376296 319.525926 364.088889z"></path></svg>
    <p>Test Name</p>
                  </div>
             </div>
              <div class="listing_block_border user_block mt-4">
                <p>Personal Information</p>
                <div class="row">
                    <div class="col-md-6">
                        <label>Name</label>
                       <input type="" name="" value="Test" readonly>
                    </div>
                     <div class="col-md-6">
                        <label>phone number</label>
                       <input type="" name="" value="9900778899" readonly>
                    </div>
                     <div class="col-md-6">
                        <label>Email Address</label>
                       <input type="" name="" value="test@gmail.com" readonly>
                    </div>
                    
                </div>
              </div>
               </div>
         </div>
         <div class="col-md-5 ">
            <div class="listing_block">
            <h2>Reset Password</h2>
             <div class="listing_block_border user_block reset_password">
                <div class="row mt-4">
                    <form>
                    <div class="col-md-12">
                        <label>Old Password</label>
                       <input id="old_password" type="Password" class="input  form-control"  placeholder="Enter your password" onblur="validatepassword('old_password')">
                    <div id="old_password_error" class="error"></div>
                    </div>
                     <div class="col-md-12 mt-4">
                        <label>New Password</label>
                      <input id="new_password" type="Password" class="input  form-control"  placeholder="Enter your password" onblur="validatepassword('new_password')">
                    <div id="new_password_error" class="error"></div>
                    </div>
                    <div class="col-md-12 text-center mb-4 mt-4">
                        <button class="cta_btn" type="button" onclick="reset_password()">Reset Now</button>
                    </div>
                    </form>
                    
                    </div>
                </div>
             </div>
         </div>
     </div>
          </div>
</div>
<script type="text/javascript">
    function validatepassword(text){
  
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

    function reset_password() {
  var old_password = validatepassword('old_password');
    var new_password = validatepassword('new_password');
    if(old_password == true && new_password == true){
        console.log("success");
    }
    }
</script>