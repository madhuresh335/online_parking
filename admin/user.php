<?php 
   include('../header.php');

   ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css"
    integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
<style type="text/css">
body,
.top_header {
    background: #f6f7fb !important;
}

body {
    margin: 0;
}

button {
    cursor: pointer;
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

.main_block {
    padding-left: 270px;
}

h1,
h2 {
    font-size: 22px;
    font-weight: 600;
}

.listing_block {
    padding-left: 10px;
    border-radius: 10px;
    margin-bottom: 30px;
    box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.1);
}
</style>
<style type="text/css">
.listing_block {
    background: white;
    padding-left: 20px;
    padding: 30px 40px;
}

.listing_block td {
    padding: 10px;
    width: 20%;
}

.listing_block table {
    border-collapse: separate;
}

.listing_block thead td:nth-child(1) {
    border-radius: 5px 0 0 5px;
    border-left: 1px solid #e5ecff !important;
    padding-left: 40px;
}

.listing_block tbody td:nth-child(1) {
    padding-left: 40px;
}

.listing_block tbody td:last-child {
    padding-right: 40px;
}

.listing_block thead td {
    border-top: 1px solid #e5ecff !important;
    border-bottom: 1px solid #e5ecff !important;
    font-weight: 600;
    color: #474d58;
    text-transform: capitalize;
}

.listing_block thead td:last-child {
    border-radius: 0 5px 5px 0;
    border-right: 1px solid #e5ecff !important;
    padding-right: 40px;
}

.listing_block tbody td {
    color: #888;
    padding: 14px 10px;
    font-size: 16px;
}

.listing_block td {
    text-align: left;
}

.role_block {

    color: #2d93f9;
    ;
    border-radius: 30px;
    text-align: center;
    font-weight: 600;
    display: inline-block;
}

.active_block {
    background: #05d34e;
    color: white;
    border-radius: 30px;
    text-align: center;
    padding: 2px 24px;
    display: inline-block;
}

.inactive_block {
    background: #ff4d4d;
    color: white;
    border-radius: 30px;
    text-align: center;
    padding: 2px 18px;
    display: inline-block;
}

.listing_block svg {
    fill: #2d93f9;
    cursor: pointer;
}

.add_btn {
    margin-left: auto;
}

.filter_icon svg {
    width: 33px;
    height: 38px;
    fill: none;
    margin-left: 18px;
}

td {
    text-transform: capitalize;
}
</style>

<style type="text/css">
.input-group {
    width: 25%;
}

.input-group .form-control {
    border-radius: 0px;
    margin-left: 20px;
}

.input-group svg {
    fill: white;
    cursor: pointer;
    background: grey;
    height: 100%;
    padding: 12px;
    width: 40px;
}
</style>
<div class="">
    <?php 
    include('sidebar.php');?>
</div>
<div class="main_block mt-3 ">
    <div class="listing_block mr-md-4">
        <div class="d-flex mb-4 listing_block_wrap">
            <h1 class="mb-2">Users</h1>
            <button class="btn cta_btn add_btn " onclick="adduser()">Add User</button>
           
        </div>
        <div class="d-flex justify-content-end mb-3">
             <div class="input-group">
                <input type="text" class="form-control" placeholder="Search by name/number" id="search_term">
            </div>
            <div class=" show_advance_filter mt-3 mt-md-0">
                <div class="d-flex ">
                    <select class="form-control" id="filter_role">
                        <option value="">Select Role</option>
                        <option value="1">Admin</option>
                        <option value="2">user</option>
                    </select>
                    <select class="form-control" id="filter_status">
                        <option value="">Select Status</option>
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                    <button type="button" class="btn add_btn cta_btn ml-2" onclick="filter_user()">GO</button>
                    <!-- <div class=" filter_option_show" onclick="hide_filter()">Hide Advance</div> -->
                </div>
            </div>
            <style type="text/css">
            .filter_option,
            .filter_option_show {
                align-self: center;
                color: #007bff;
                font-size: 15px;
                text-decoration: underline;
                padding-left: 10px;
                cursor: pointer;
            }

            .show_advance_filter select {
                width: 182px;
                margin-left: 20px;
                padding: 8px !important;
            }

            .show_advance_filter {
                /*display: none;*/
            }

            .input-group .form-control {
                padding: 0px 4px;
                height: 38px;
            }

            .input-group .btn-secondary {
                padding: 0px;
            }

            .input-group svg {
                fill: white;
                cursor: pointer;
                background: grey;
                height: 100%;
                padding: 10px;
                width: 37px;
            }

            .add_btn {
                height: 40px;
            }

            @media(max-width: 767px) {
                .listing_block_wrap {
                    flex-wrap: wrap;
                }

                .input-group {
                    width: 50%;
                }

                .filter_option,
                .filter_option_show {
                    padding-left: 5px;
                    text-align: right;

                    width: 100%;
                    font-size: 12px;
                }

                .show_advance_filter select {
                    width: 117px;
                    margin-left: 3px;
                }
            }
            </style>
            <script type="text/javascript">
            // function show_filter() {
            //     $(".show_advance_filter").show();
            //     $('.filter_option').hide();
            // }

            // function hide_filter() {
            //     $(".show_advance_filter").hide();
            //     $('.filter_option').show();
            // }
            </script>
            <!-- <div class="filter_option" onclick="show_filter()">Advance</div> -->
            <!-- <button class="btn filter_icon"><svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px" viewBox="0 0 24 24" fill="none">
<path d="M19 3H5C3.58579 3 2.87868 3 2.43934 3.4122C2 3.8244 2 4.48782 2 5.81466V6.50448C2 7.54232 2 8.06124 2.2596 8.49142C2.5192 8.9216 2.99347 9.18858 3.94202 9.72255L6.85504 11.3624C7.49146 11.7206 7.80967 11.8998 8.03751 12.0976C8.51199 12.5095 8.80408 12.9935 8.93644 13.5872C9 13.8722 9 14.2058 9 14.8729L9 17.5424C9 18.452 9 18.9067 9.25192 19.2613C9.50385 19.6158 9.95128 19.7907 10.8462 20.1406C12.7248 20.875 13.6641 21.2422 14.3321 20.8244C15 20.4066 15 19.4519 15 17.5424V14.8729C15 14.2058 15 13.8722 15.0636 13.5872C15.1959 12.9935 15.488 12.5095 15.9625 12.0976C16.1903 11.8998 16.5085 11.7206 17.145 11.3624L20.058 9.72255C21.0065 9.18858 21.4808 8.9216 21.7404 8.49142C22 8.06124 22 7.54232 22 6.50448V5.81466C22 4.48782 22 3.8244 21.5607 3.4122C21.1213 3 20.4142 3 19 3Z" stroke="#1C274C" stroke-width="1.5"/>
</svg></button> -->
        </div>


        <table>
            <thead>
                <tr>
                    <td>
                        <div>
                            id
                        </div>
                    </td>
                    <td>
                        <div>
                            Username
                        </div>
                    </td>
                    <td>
                        <div>
                            Phone number
                        </div>
                    </td>
                    <td>
                        <div>
                            role
                        </div>
                    </td>
                    <td>
                        <div>
                            Status
                        </div>
                    </td>
                    <td>
                        <div>
                            Action
                        </div>
                    </td>
                </tr>
            </thead>
            <tbody id="user_table">
                <!--    <tr>
                    <td>1</td>
                    <td>test</td>
                    <td>1234567890</td>
                    <td>
                        <div class="role_block">Admin</div>
                    </td>
                    <td>
                        <div class="active_block">Active</div>
                    </td>
                    <td>
                        <span class="mr-1">
                            <svg onclick="edit_user('8888888881')" xmlns="http://www.w3.org/2000/svg" height="1em"
                                viewBox="0 0 576 512">
                               
                                <path
                                    d="M402.6 83.2l90.2 90.2c3.8 3.8 3.8 10 0 13.8L274.4 405.6l-92.8 10.3c-12.4 1.4-22.9-9.1-21.5-21.5l10.3-92.8L388.8 83.2c3.8-3.8 10-3.8 13.8 0zm162-22.9l-48.8-48.8c-15.2-15.2-39.9-15.2-55.2 0l-35.4 35.4c-3.8 3.8-3.8 10 0 13.8l90.2 90.2c3.8 3.8 10 3.8 13.8 0l35.4-35.4c15.2-15.3 15.2-40 0-55.2zM384 346.2V448H64V128h229.8c3.2 0 6.2-1.3 8.5-3.5l40-40c7.6-7.6 2.2-20.5-8.5-20.5H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V306.2c0-10.7-12.9-16-20.5-8.5l-40 40c-2.2 2.3-3.5 5.3-3.5 8.5z" />
                            </svg>
                        </span>
                        <span class="ml-1">
                            <svg onclick="delete_user('8888888881')" xmlns="http://www.w3.org/2000/svg" height="1em"
                                viewBox="0 0 448 512">
                               
                                <path
                                    d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" />
                            </svg>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>test</td>
                    <td>1234567890</td>
                    <td>
                        <div class="role_block">Admin</div>
                    </td>
                    <td>
                        <div class="inactive_block">Inactive</div>
                    </td>
                    <td>
                        <span class="mr-1">
                            <svg onclick="edit_user('1002')" xmlns="http://www.w3.org/2000/svg" height="1em"
                                viewBox="0 0 576 512">
                              
                                <path
                                    d="M402.6 83.2l90.2 90.2c3.8 3.8 3.8 10 0 13.8L274.4 405.6l-92.8 10.3c-12.4 1.4-22.9-9.1-21.5-21.5l10.3-92.8L388.8 83.2c3.8-3.8 10-3.8 13.8 0zm162-22.9l-48.8-48.8c-15.2-15.2-39.9-15.2-55.2 0l-35.4 35.4c-3.8 3.8-3.8 10 0 13.8l90.2 90.2c3.8 3.8 10 3.8 13.8 0l35.4-35.4c15.2-15.3 15.2-40 0-55.2zM384 346.2V448H64V128h229.8c3.2 0 6.2-1.3 8.5-3.5l40-40c7.6-7.6 2.2-20.5-8.5-20.5H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V306.2c0-10.7-12.9-16-20.5-8.5l-40 40c-2.2 2.3-3.5 5.3-3.5 8.5z" />
                            </svg>
                        </span>
                        <span class="ml-1">
                            <svg onclick="delete_user('1002')" xmlns="http://www.w3.org/2000/svg" height="1em"
                                viewBox="0 0 448 512">
                                
                                <path
                                    d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" />
                            </svg>
                        </span>
                    </td>
                </tr>
 -->
        </table>
        </table>
    </div>

</div>
<!-- add user block -->
<style type="text/css">
.modal-content_new h2 {
    background: #2d93f9;
    color: white;
    padding: 13px 10px;
    position: absolute;
    top: 0;
    border-radius: 10px 10px 0px 0px;
    left: 0;
    width: 100%;
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
    border: 1px solid #888;
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
    width: 42%;
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
    /*border-radius: 25px;*/
    /*background: #1161ee;*/
    color: white;
}

@media(max-width: 767px) {
    .modal-content_new {
        width: 90%;
    }
}

.form-group {
    margin-bottom: 35px;
}

.cta_btn,
.cta_btn:active,
.cta_btn:hover {
    background: #2d93f9;
    /* padding: 10px 10px 3px; */
    border-radius: 10px;
    color: white;
    border: none;
    padding: 11px;
    width: 100%;
    font-size: 18px;
    outline: none;
}

.form-control {
    padding: 11px 20px;
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
    z-index: 9999;
}

.add_btn,
.add_btn:active,
.add_btn:hover {
    padding: 6px;
    width: auto;
    font-size: 18px;
}
</style>


<section class="modal" id="modal">
    <div class="modal_new ">
        <div class="modal-content_new  ">
            <span class="close_icon" onclick="close_modal('modal')">x</span>
            <h2 class="mb-4">Add New User</h2>
            <div class="row mt-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="" placeholder="Username"
                            onblur="validateuser('username')" id="username">
                        <div class="error" id="username_error"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" onblur="validatephone('phone_number')" id="phone_number"
                            minlength="10" maxlength="10"
                            onkeypress='return event.charCode >= 48 && event.charCode <= 57' name=""
                            placeholder="Phone number">
                        <div class="error" id="phone_number_error"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="" id="role" onblur="validate_role('role')"
                            placeholder="Role">
                        <div class="error" id="role_error"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <select class="form-control" id="status">
                            <option value="active"> Active</option>
                            <option value="inactive"> Inactive</option>
                        </select>
                        <!-- <input type="text" name="" placeholder="Status"> -->
                    </div>
                </div>
                <div class="col-md-12 mt-2">
                    <button class="cta_btn btn" onclick="add_new_user()">Add New User</button>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- end -->

<!-- edit user popup -->
<style type="text/css">
#edit_modal {
    display: none;
}

.modal .no_btn {
    border: 2px solid #2d93f9;
    background: transparent;
    color: #2d93f9;
    width: 58% !important;
}

.modal .yes_btn {
    width: 58% !important;
}

@media(max-width: 767px) {

    .modal .yes_btn,
    .modal .no_btn {
        width: 100% !important;
    }
}
</style>
<input type="hidden" name="" id="edit_id" value="">
<section class="modal" id="edit_modal">
    <div class="modal_new ">
        <div class="modal-content_new  ">
            <span class="close_icon" onclick="close_modal('edit_modal')">x</span>
            <h2 class="mb-4">Edit User</h2>
            <div class="row mt-5">
                <div class="col-md-6">
                    <div class="form-group">

                        <input type="text" class="form-control edit_username" name="" placeholder="Username"
                            onblur="validateuser('username_edit')" id="username_edit" value="">
                        <div class="error" id="username_edit_error"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" onblur="validatephone('phone_number_edit')"
                            id="phone_number_edit" minlength="10" maxlength="10"
                            onkeypress='return event.charCode >= 48 && event.charCode <= 57' name=""
                            placeholder="Phone number">
                        <div class="error" id="phone_number_edit_error"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="" id="role_edit"
                            onblur="validate_role('role_edit')" placeholder="Role">
                        <div class="error" id="role_edit_error"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <select class="form-control" id="status_edit">
                            <option value="active"> Active</option>
                            <option value="inactive"> Inactive</option>
                        </select>
                        <!-- <input type="text" name="" placeholder="Status"> -->
                    </div>
                </div>
                <div class="col-md-12 mt-2">
                    <button class="cta_btn btn" onclick="edit_new_user()">Edit User</button>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- end -->


<!-- delete block -->
<style type="text/css">
#delete_modal {
    display: none;
}
</style>
<input id="delete_id" type="hidden" value="">
<section class="modal" id="delete_modal">
    <div class="modal_new ">
        <div class="modal-content_new  ">
            <span class="close_icon" onclick="close_modal('delete_modal')">x</span>
            <h2 class="mb-4">Delete the user</h2>
            <div class="row mt-5">

                <div class="col-md-6 col-6 mt-2">
                    <button class="cta_btn btn yes_btn" onclick="yes_btn()">Yes</button>
                </div>
                <div class="col-md-6 mt-2 col-6">
                    <button class="cta_btn btn no_btn" onclick="no_btn()">No</button>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- end -->


<script type="text/javascript">
get_user();

var user_data;

function get_user(search_term = "", role = "", status = "") {

    var json_data = {
        function_name: 'get_user_data',
        "search_term": search_term,
        "role": role,
        "status": status
    };
    console.log(json_data);
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "<?php echo $site_url ?>/model/user_model.php");
    xhr.setRequestHeader("Content-Type", "application/json");
    var data = JSON.stringify(json_data);
    xhr.send(data);

    xhr.onload = function() {
        if (xhr.status === 200) {
            var json_response = JSON.parse(xhr.responseText);
            user_data = json_response;
            var table_block = "";
            for (const key in user_data) {
                const user = user_data[key];
                if (user.role == '1') {
                    user.role = "admin";
                }
                if (user.role == '2') {
                    user.role = "user";
                }
                var active_class = "";
                if (user.active == '1') {
                    user.active = "Active";
                    active_class = "active_block";
                } else {
                    user.active = "Inactive";
                    active_class = "inactive_block";
                }
                table_block += `<tr><td>${user.user_id}</td><td>${user.name}</td><td>${key}</td><td><div class="role_block">${user.role}<div></td><td><div class="${active_class}">${user.active}</div></td>  <td>
                        <span class="mr-1">
                            <svg onclick="edit_user('${key}')" xmlns="http://www.w3.org/2000/svg" height="1em"
                                viewBox="0 0 576 512">
                               
                                <path
                                    d="M402.6 83.2l90.2 90.2c3.8 3.8 3.8 10 0 13.8L274.4 405.6l-92.8 10.3c-12.4 1.4-22.9-9.1-21.5-21.5l10.3-92.8L388.8 83.2c3.8-3.8 10-3.8 13.8 0zm162-22.9l-48.8-48.8c-15.2-15.2-39.9-15.2-55.2 0l-35.4 35.4c-3.8 3.8-3.8 10 0 13.8l90.2 90.2c3.8 3.8 10 3.8 13.8 0l35.4-35.4c15.2-15.3 15.2-40 0-55.2zM384 346.2V448H64V128h229.8c3.2 0 6.2-1.3 8.5-3.5l40-40c7.6-7.6 2.2-20.5-8.5-20.5H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V306.2c0-10.7-12.9-16-20.5-8.5l-40 40c-2.2 2.3-3.5 5.3-3.5 8.5z" />
                            </svg>
                        </span>
                        <span class="ml-1">
                            <svg onclick="delete_user('${key}')" xmlns="http://www.w3.org/2000/svg" height="1em"
                                viewBox="0 0 448 512">
                               
                                <path
                                    d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" />
                            </svg>
                        </span>
                    </td></tr>`;
                document.getElementById('user_table').innerHTML = table_block;

            }
        } else {
            console.log("Error: " + xhr.status);
        }
    };
    setTimeout(() => {
        console.log(user_data, "user_data");
    }, 3000);

}

function adduser() {
    $("#modal").show();
}

function edit_user(x) {
    console.log(user_data, "user_data");
    console.log(x, "x");
    $("#edit_modal").show();
    console.log(user_data[x]);
    var user = user_data[x];

    $("#username_edit").val(user.name);
    $("#phone_number_edit").val(x);
    $("#role_edit").val(user.role);
    if (user.active == 0) {
        $("#status_edit").val("active");
    } else {
        $("#status_edit").val("inactive");
    }




    // setValue(".edit_username",x)

    $("#edit_id").val(x);
}

function close_modal(x) {
    $("#" + x).hide();
}

function delete_user(x) {
    $("#delete_modal").show();
    $("#delete_id").val(x);
}

function validate_role(text) {
    var value = document.getElementById(text).value;
    if (value == "") {
        errorMessage = "Role is required";
        document.getElementById(text + "_error").innerHTML = errorMessage;

        return false;
    } else {
        errorMessage = "";
        document.getElementById(text + "_error").innerHTML = errorMessage;
        return true
    }
}

function add_new_user() {
    var username = validateuser('username');
    var phonenumber = validatephone('phone_number');
    var role = validate_role('role');
    var status = document.getElementById('status').value;
    if (username == true && phonenumber == true && role == true) {


        var phone_number = $("#phone_number").val();
        var username = $("#username").val();
        var json_data = {
            phone_number: phone_number,
            username: username,
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
                get_user();
                $("#modal").hide();
            } else {
                console.log("Error: " + xhr.status);
            }
        };

    }

}

function edit_new_user() {
    var username = validateuser('username_edit');
    var phonenumber = validatephone('phone_number_edit');
    var role = validate_role('role_edit');
    var status = document.getElementById('status_edit').value;
    var id = document.getElementById('edit_id').value;

    if (username == true && phonenumber == true && role == true) {

        var status = $("#status_edit").val();
        var role = $("#role_edit").val();
        var username = $("#username_edit").val();
        var phone_number = $("#phone_number_edit").val();

        var json_data = {
            phone_number: phone_number,
            role: role,
            status: status,
            username: username,
            function_name: 'edit_user'
        };
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "<?php echo $site_url ?>/model/user_model.php");
        xhr.setRequestHeader("Content-Type", "application/json");
        var data = JSON.stringify(json_data);
        xhr.send(data);

        xhr.onload = function() {
            if (xhr.status === 200) {
                console.log(xhr.responseText, "editblock");
                get_user();
                //  var json_response = JSON.parse(xhr.responseText);
                //  console.log(json_response);
            } else {
                console.log("Error: " + xhr.status);
            }
        };



        $("#edit_modal").hide();
    }
}

function yes_btn() {
    var phone_number = $("#delete_id").val();

    var json_data = {
        phone_number: phone_number,
        function_name: 'delete_user'
    };
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "<?php echo $site_url ?>/model/user_model.php");
    xhr.setRequestHeader("Content-Type", "application/json");
    var data = JSON.stringify(json_data);
    xhr.send(data);

    xhr.onload = function() {
        if (xhr.status === 200) {
            console.log(xhr.responseText, "delete_fun");
            get_user();
            //  var json_response = JSON.parse(xhr.responseText);
            //  console.log(json_response);
        } else {
            console.log("Error: " + xhr.status);
        }
    };

    $("#delete_modal").hide();



}

function no_btn() {
    $("#delete_modal").hide();
}

function filter_user() {
    var search_term = $("#search_term").val();
    var role = $("#filter_role").val();
    var status = $("#filter_status").val();
    get_user(search_term, role, status)
}
</script>