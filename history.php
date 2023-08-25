<?php
include 'header.php';
?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;500;600;700&display=swap" rel="stylesheet">
<style type="text/css">
body,
.top_header {
    background: #f6f7fb !important;
}

* {
    font-family: 'Mulish', sans-serif;
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
    min-height: 95vh;
}
</style>
<style type="text/css">
.listing_block {
    background: white;
    padding-left: 20px;
    padding: 20px 10px 10px;
}

.listing_block td {
    padding: 10px;
    width: 15%;
}

.listing_block table {
    border-collapse: separate;
    width: 100%;
    display: block;
    overflow-x: auto;
    height: 505px;
    overflow-y: auto;
}

.listing_block thead td:nth-child(1) {
    border-radius: 5px 0 0 5px;
    border-left: 1px solid #e5ecff !important;
    padding-left: 10px;
    position: sticky;
    left: 0;
    background: white;
}

.listing_block thead {
    position: sticky;
    top: 0;
    z-index: 5;
    background: white;
}

.listing_block thead div {
    /*width: max-content;*/
    width: 117px;
}

.listing_block tbody td:nth-child(1) {
    padding-left: 10px;
    position: sticky;
    left: 0;
    background: white;
}

.listing_block tbody td:last-child {
    padding-right: 10px;
}

.listing_block thead td {
    border-top: 1px solid #e5ecff !important;
    border-bottom: 1px solid #e5ecff !important;
    font-weight: 600;
    color: #000000;
    text-transform: capitalize;
}

.listing_block thead td:last-child {
    border-radius: 0 5px 5px 0;
    border-right: 1px solid #e5ecff !important;
    padding-right: 40px;
}

.listing_block tbody td {
    color: #000;
    padding: 14px 10px;
    font-size: 16px;
}

.listing_block td {
    text-align: left;
}

.role_block {
    background: #2d93f9;
    color: white;
    border-radius: 30px;
    text-align: center;
    padding: 2px 24px;
    display: inline-block;
}

.listing_block svg {
    fill: #2d93f9;
    cursor: pointer;
}

.add_btn {
    margin-left: auto;
}

.listing_block table::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 3px rgba(0, 0, 0, .3);
    background-color: #637099;
}

.listing_block table::-webkit-scrollbar {
    height: 4px;
}

.listing_block table::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 3px rgba(0, 0, 0, 0.3);
    border-radius: 10px;
    background-color: #f1f1f1;
}

.listing_block table::-webkit-scrollbar {
    width: 3px !important;
    background-color: #f1f1f1;
}

.listing_block tbody tr {
    border-bottom: 1px solid lightgrey;
}

.listing_block td:last-child {
    position: sticky;
    right: 0;
    background: white;
}

.active_block {
    background: #05d34e;
    color: white;
    border-radius: 30px;
    text-align: center;
    padding: 5px 24px;
    width: 100%;
    display: inline-block;
}

.inactive_block {
    background: blue;
    color: white;
    border-radius: 30px;
    text-align: center;
    padding: 5px 18px;
    display: inline-block;
    width: 100%;
}

.booked_block {
    background: orange;
    color: white;
    border-radius: 30px;
    text-align: center;
    padding: 5px 18px;
    display: inline-block;
    width: 100%;
}

.cancel_block {
    background: #ff4d4d;
    color: white;
    border-radius: 30px;
    text-align: center;
    padding: 5px 18px;
    display: inline-block;
    width: 100%;
}

.canceled_block span {
    font-size: 14px;
    margin-right: 10px;
    color: blue;
    text-transform: capitalize;
    cursor: pointer;
}

.form-control:disabled,
.form-control[readonly] {
    background-color: white;
    opacity: 1;
}
</style>
<div class="">
    <?php include 'sidebar.php';?>
</div>
<div class="main_block mt-3 ">
    <div class="listing_block mr-md-4">
        <div class="d-flex mb-4 listing_block_wrap">
            <h1 class="mb-2"> History</h1>
           <!--  <div class="input-group">
                <input type="text" class="form-control" placeholder="Search here">

            </div> -->
            <div class=" show_advance_filter mt-3 mt-md-0 w-100">
                <div class="d-flex justify-content-end">
                    <div class="ml-md-3 d-md-flex">
                        <label class="w-100">From Date:</label>
                        <input type="date" name="" placeholder="from date" value="" id="booking_from_date"
                            class="form-control">
                    </div>
                    <div class="ml-md-3 d-md-flex">
                        <label class="w-100">To Date:</label>
                        <input type="date" name="" placeholder="to date" id="booking_to_date" class="form-control">
                    </div>


                    <button type="button" class="btn add_btn cta_btn ml-2 mt-4 mt-md-0"
                        onclick="filter_log()">GO</button>
                    <!--         <div class=" filter_option_show" onclick="hide_filter()">Hide Advance</div> -->
                </div>
            </div>
            <style type="text/css">
            .show_advance_filter label {
                align-self: center;
                margin-right: 10px;
                margin-bottom: 0px;
            }

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

            /* .show_advance_filter{
      display: none;
     }*/
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

            .input-group {
                width: 20%;
                margin-left: auto;
            }

            @media(max-width: 767px) {
                .listing_block_wrap {
                    flex-wrap: wrap;
                }

                .input-group {
                    width: 50%;
                }

                .listing_block td:last-child {
                    position: relative;
                }

                .listing_block table div {
                    width: 100px;
                }

                .listing_block table td:last-child div {
                    width: 100%;
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

                .show_advance_filter .form-control {
                    width: 145px;
                    margin-right: 1px;
                }

                .filter_option_show {
                    position: absolute;
                    top: 0;
                }

                .show_advance_filter .d-flex {
                    position: relative;
                }
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

            .add_btn,
            .add_btn:active,
            .add_btn:hover {
                padding: 6px;
                width: auto !important;
                font-size: 18px;
            }
            </style>
            <script type="text/javascript">
            function show_filter() {
                $(".show_advance_filter").show();
                $('.filter_option').hide();
            }

            function hide_filter() {
                $(".show_advance_filter").hide();
                $('.filter_option').show();
            }
            </script>
            <!-- <div class="filter_option" onclick="show_filter()">Advance</div> -->
        </div>
        <style type="text/css">
            .no_data_block{
                display: none;
                font-size: 25px;
            }
        </style>
<div class="no_data_block text-center mt-5 font-weight-bold">No data found</div>

        <table class="table_block">
            <thead>
                <tr>

                    <td>
                        <div>
                            Lot name

                        </div>
                    </td>
                   
                    <td>
                        <div>
                            Type of vehicle

                        </div>
                    </td>
                    <td>
                        <div>Booking time</div>
                    </td>
                    <td>
                        <div>
                            Start time

                        </div>
                    </td>
                    <td>
                        <div>
                            End time
                        </div>
                    </td>
                    <td>
                        <div>
                            Number of Hours
                        </div>
                    </td>
                    <td>
                        <div>
                            Price
                        </div>
                    </td>
                    <td>
                        <div>
                            Status
                        </div>
                    </td>

                </tr>
            </thead>
            <tbody id="parking_lot_table">
                
            </tbody>
          <!--   <tbody>
                <tr>

                    <td>A1</td>
                    <td>test</td>
                    <td>1234567890</td>
                    <td>2 wheeler</td>
                    <td> 2023-08-16 19:42:31</td>
                    <td> 2023-08-16 19:42:31</td>
                    <td> 2023-08-16 22:34:20</td>
                    <td>3</td>
                    <td>40</td>
                    <td>
                        <div class="booked_block">BOOKED</div>
                        <div class="d-flex canceled_block mt-2">
                            <span onclick="cancel_book('11')">cancel</span>
                            <span onclick="book_parking('11')">reschedule</span>
                        </div>

                    </td>

                </tr>
                <tr>

                    <td>A1</td>
                    <td>test</td>
                    <td>1234567890</td>
                    <td>2 wheeler</td>
                    <td> 2023-08-16 19:42:31</td>
                    <td> 2023-08-16 19:42:31</td>
                    <td> 2023-08-16 22:34:20</td>
                    <td>3</td>
                    <td>40</td>
                    <td>
                        <div class="active_block">COMPLETED</div>
                    </td>

                </tr>
                <tr>

                    <td>A1</td>
                    <td>test</td>
                    <td>1234567890</td>
                    <td>2 wheeler</td>
                    <td> 2023-08-16 19:42:31</td>
                    <td> 2023-08-16 19:42:31</td>
                    <td> 2023-08-16 22:34:20</td>
                    <td>3</td>
                    <td>40</td>
                    <td>
                        <div class="inactive_block">PROCESSING</div>
                    </td>

                </tr>
                <tr>

                    <td>A1</td>
                    <td>test</td>
                    <td>1234567890</td>
                    <td>2 wheeler</td>
                    <td> 2023-08-16 19:42:31</td>
                    <td> 2023-08-16 19:42:31</td>
                    <td> 2023-08-16 22:34:20</td>
                    <td>3</td>
                    <td>40</td>
                    <td>
                        <div class="cancel_block">CANCELLED</div>
                    </td>

                </tr>
            </tbody> -->
        </table>
    </div>

</div>

<script type="text/javascript">
function cancel_book(id) {
    $('#delete_modal').show();
    $('#cancel_booking_id').val(id)
}

function close_modal(x) {
    $("#" + x).hide();
}

function yes_btn() {
    $('#delete_modal').hide();
    var cancel_booking_id = $('#cancel_booking_id').val();
    var json_data = {
            function_name: 'cancel_booking',
            cancel_booking_id: cancel_booking_id,
        }
        console.log(json_data);
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "<?php echo $site_url ?>/model/lot_model.php");
        xhr.setRequestHeader("Content-Type", "application/json");
        var data = JSON.stringify(json_data);
        xhr.send(data);

        xhr.onload = function() {
            if (xhr.status === 200) {
                // var json_response = JSON.parse(xhr.responseText);
                console.log(xhr.responseText,"cancel_btn");
get_booking_history();
            } else {
                console.log("Error: " + xhr.status);
            }
        };
}

function no_btn() {
    $('#delete_modal').hide();
}

function book_parking(id) {
    $('#edit_modal').show()
    $('#rescheduled_booking_id').val(id)
    var temp_data = parking_lot_data[id];
    $("#two_wheeler_price").val(temp_data.two_wheeler_price);
    $("#four_wheeler_price").val(temp_data.four_wheeler_price);
    
    
}

function calculate_price(type) {

    var base_price = $('#' + type + '_price').val();
    var booking_hours = $("#booking_hours").val();
    $("#book_price").val(base_price * booking_hours);

}
</script>

<!-- delete block -->
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

.modal .no_btn {
    border: 2px solid #2d93f9;
    background: transparent;
    color: #2d93f9;

}
</style>

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
            <input type="hidden" name="" id="cancel_booking_id" value="">
            <h2 class="mb-4">Cancel the parking</h2>
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


<!-- reschedule popup -->
<style type="text/css">
.radio-group {
    display: flex;
    justify-content: center;
    align-items: center;

}

/* Style for individual radio buttons */
.radio {
    display: flex;
    align-items: center;
    margin-right: 20px;
    cursor: pointer;
}

/* Hide default radio button input */
.radio input[type="radio"] {
    position: absolute;
    opacity: 0;
}

/* Style for custom radio button */
.radio-custom {
    width: 20px;
    height: 20px;
    border: 2px solid #ccc;
    border-radius: 50%;
    margin-right: 10px;
    position: relative;
    display: inline-block;
    top: 4px;
}

/* Style for custom radio button when selected */
.radio input[type="radio"]:checked+.radio-custom {
    background-color: #007bff;
    border-color: #007bff;
}

/* Optional: Style for the label text */
.radio label {
    font-size: 16px;
}

.vehicle_type {
    display: none;
}

.form-control:disabled,
.form-control[readonly] {
    background-color: white;
    opacity: 1;
}
</style>
<section class="modal" id="edit_modal">
    <div class="modal_new ">
        <div class="modal-content_new  ">
            <span class="close_icon" onclick="close_modal('edit_modal')">x</span>
            <h2 class="mb-4">Book Now</h2>
            <div class="row mt-5">
                <div class="col-md-6">
                    <label>From date</label>
                    <?php
$current_time = date("H:i");
$max_time = date("H:i", strtotime("+2 hours"));
?>
                    <input class='form-control' type="time" id="booking_time" min="16:00" max="22:00"
                        value="<?php echo $current_time ?>">
                </div>
                <div class="col-md-6">
                    <label>Number of Hours</label>
                    <!--    <input id="test" type="range" value="0" min="1" max="10"> -->
                    <input id="booking_hours" class='form-control' type="text" step="1" value="1" min="0" max="24"
                        oninput="validateInput(this)"
                        onkeypress="return event.charCode >= 48 && event.charCode <= 57" />



                </div>

                <div class="col-md-12 mt-4">
                    <div class="d-md-flex">
                        <label>Wheeler Type</label>
                        <div class="radio-group d-md-flex ml-4">
                            <label class="radio">
                                <input type="radio" name="vehicle" value="four_wheeler" checked
                                    onclick="calculate_price('four_wheeler')">
                                <span class="radio-custom"></span>
                                4-Wheeler
                            </label>
                            <label class="radio ml-4">
                                <input type="radio" name="vehicle" value="two_wheeler"
                                    onclick="calculate_price('two_wheeler')">
                                <span class="radio-custom"></span>
                                2-Wheeler
                            </label>

                        </div>
                    </div>

                    <div class="vehicle_type error">Please select the vehicle type</div>
                </div>
                <div class="col-md-12 mt-4 text-left">
                    <label>Price</label>
                    <input type="text" name="" class='form-control' id="book_price" value="" readonly>
                    <span id="book_price_error" class="error"></span>
                </div>

                <div class="col-md-12 mt-4">
                <input type="hidden" name="" id="rescheduled_booking_id" value="">
                <input type="hidden" name="" id="two_wheeler_price" value="">
                <input type="hidden" name="" id="four_wheeler_price" value="">
                    <button class="cta_btn" onclick="reschedule_block()">Book Now</button>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- end -->
<script>
const currentTime = new Date();
const currentHours = currentTime.getHours();
const currentMinutes = currentTime.getMinutes();

const inputField = document.getElementById("booking_time");
inputField.min = `${currentHours.toString().padStart(2, "0")}:${currentMinutes.toString().padStart(2, "0")}`;
inputField.max = "24:00"; // Max limit is 24 hours

inputField.addEventListener("input", function() {
    const enteredTime = inputField.value;
    const enteredHours = parseInt(enteredTime.split(":")[0]);
    const enteredMinutes = parseInt(enteredTime.split(":")[1]);

    if (enteredHours < currentHours || (enteredHours === currentHours && enteredMinutes <= currentMinutes)) {
        inputField.value = inputField.min;
    }
});

function validateInput(inputElement) {
    const minValue = parseInt(inputElement.min);
    const maxValue = parseInt(inputElement.max);
    let value = parseInt(inputElement.value);

    if (isNaN(value)) {
        value = minValue;
    } else if (value < minValue) {
        value = minValue;
    } else if (value > maxValue) {
        value = maxValue;
    }

    inputElement.value = value;
}

function reschedule_block(type) {
    var id = document.getElementById('rescheduled_booking_id').value;
    var booking_time = document.getElementById('booking_time').value;
    var vehicle_type = $('input[name="vehicle"]:checked').val();
    var booking_hours = $('#booking_hours').val();



    console.log(vehicle_type, booking_time, id)
    var check_wheeler_type = check_type();
    if (check_wheeler_type == true) {
        console.log("success");
        $("#edit_modal").hide();
        var json_data = {
            function_name: 'reschedule_block',
            user_id: "<?php echo $user_id ?>",
            vehicle_type: vehicle_type,
            booking_time: booking_time,
            booking_hours: booking_hours,
            rescheduled_booking_id: id,
        }
        console.log(json_data);
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "<?php echo $site_url ?>/model/lot_model.php");
        xhr.setRequestHeader("Content-Type", "application/json");
        var data = JSON.stringify(json_data);
        xhr.send(data);

        xhr.onload = function() {
            if (xhr.status === 200) {
                // var json_response = JSON.parse(xhr.responseText);
                console.log(xhr.responseText);
get_booking_history();

            } else {
                console.log("Error: " + xhr.status);
            }
        };

    }
}

get_booking_history()
var parking_lot_data;

function filter_log() {
    var booking_from_date = $("#booking_from_date").val()
    var booking_to_date = $("#booking_to_date").val()
    get_booking_history(booking_from_date, booking_to_date)
}


function get_booking_history(booking_from_date = "", booking_to_date = "") {


    console.log("success");
    $("#edit_modal").hide();
    var json_data = {
        function_name: 'get_booking_history',
        user_id: "<?php echo $user_id ?>",
        booking_from_date: booking_from_date,
        booking_to_date: booking_to_date

    }
    console.log(json_data);
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "<?php echo $site_url ?>/model/lot_model.php");
    xhr.setRequestHeader("Content-Type", "application/json");
    var data = JSON.stringify(json_data);
    xhr.send(data);

    xhr.onload = function() {
        if (xhr.status === 200) {
            parking_lot_data = JSON.parse(xhr.responseText);
            console.log(parking_lot_data,"parking_lot_data");
            
            if(parking_lot_data == ""){
               
                $(".no_data_block").show();
                $(".table_block").hide();
            }
            else{
                 $(".no_data_block").hide();
                  $(".table_block").show();
 var table_block = "";
            for (const key in parking_lot_data) {
                const parking_lot = parking_lot_data[key];
                table_block += `<tr>

                    <td>${parking_lot.lot_id}</td>
                    <td>${parking_lot.vehicle_type}</td>
                    <td>${parking_lot.booking_time}</td>
                    <td>${parking_lot.start_time}</td>
                    <td>${parking_lot.end_time}</td>
                    <td>${parking_lot.number_of_hours}</td>
                    <td>${parking_lot.price}</td>`;

                  if(parking_lot.status == 'BOOKED'){
   table_block += ` 

<td>
                        <div class="booked_block">${parking_lot.status}</div>
                        <div class="d-flex canceled_block mt-2">
                            <span onclick="cancel_book(${parking_lot.booking_id})">cancel</span>
                            <span onclick="book_parking(${parking_lot.booking_id})">reschedule</span>
                        </div>

                    </td>
`;
}
 if(parking_lot.status == 'COMPLETED'){
table_block += ` 

<td>
                        <div class="active_block">${parking_lot.status}</div>
                        

                    </td>`;
}
     if(parking_lot.status == 'CANCELLED'){
        table_block += ` 

<td>
                        <div class="cancel_block">${parking_lot.status}</div>
                        

                    </td>`;
    
}                
                 
                   
   if(parking_lot.status == 'PROCESSING'){
        table_block += ` 

<td>
                        <div class="inactive_block">${parking_lot.status}</div>
                        

                    </td>`;
    
} 
                
               table_block += `</tr>`;
                document.getElementById('parking_lot_table').innerHTML = table_block;

         }
     }
        } else {
            console.log("Error: " + xhr.status);
        }
    };




    //   find_parking_lot();


}


function check_type(x) {

    const radioButtons = document.getElementsByName('vehicle');
    let checkedValue = '';
    for (const radioButton of radioButtons) {
        if (radioButton.checked) {
            checkedValue = radioButton.value;
            break;
        }
    }
    if (!checkedValue) {
        $('.vehicle_type').show();
        return false;
    } else {
        $('.vehicle_type').hide();
        return true;
    }
}
</script>