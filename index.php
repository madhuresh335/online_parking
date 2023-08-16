<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage carparking
 * @since carparking
 */


?>
<?php 
include('header.php');
?>
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
    width: 20%;
}

.listing_block table {
    border-collapse: separate;
    width: 100%;
    display: block;
    overflow-x: scroll;
    height: 480px;
    overflow-y: scroll;
}

.listing_block thead td:nth-child(1) {
    border-radius: 5px 0 0 5px;
    border-left: 1px solid #e5ecff !important;
    padding-left: 10px;
}

.listing_block thead {
    position: sticky;
    top: 0;
    z-index: 99999;
    background: white;
}

.listing_block thead div {
    width: max-content;
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

select.form-control:not([size]):not([multiple]) {
    height: auto;
}
</style>
<div class="">
    <?php include('sidebar.php');?>
</div>
<div class="main_block mt-3 ">
    <div class="listing_block mr-md-4">
        <div class="d-flex mb-4 flex-wrap">
            <h1 class="mb-2">Parking lot</h1>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search here">
                <div class="">
                    <button class="btn btn-secondary" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class=" show_advance_filter mt-3 mt-md-2">
                <div class="d-flex ">
                    <div class="">
                        <label class="w-100">Zipcode state</label>
                        <input type="text" name="" placeholder="Zipcode state" id="search_term" value="" class="form-control">
                    </div>
                    <div class="ml-md-3 ">
                        <label class="w-100">From Date:</label>
                        <input type="" name="" placeholder="from date" value="" class="form-control">
                    </div>
                    <div class="ml-md-3 ">
                        <label class="w-100">parking hours</label>
                        <input id="search_parking_hour" class="form-control" type="number" step="1" value="1" min="1" max="24"
                            oninput="validateInput(this)"
                            onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57">
                    </div>
                    <div class="ml-md-3 ">
                        <label class="w-100">Select Wheeler Type</label>
                        <select class="form-control" id="search_vechicle_type">

                            <option value="2">2 Wheeler</option>
                            <option value="4">4 Wheeler</option>
                        </select>
                    </div>


                    <button type="button" class="btn add_btn cta_btn ml-2 mt-4 mt-md-0" onclick="filter_parking()">GO</button>
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
                margin-left: auto;
            }

            .show_advance_filter .form-control {
                padding: 4px 20px;
            }

            .input-group {
                width: 25%;
                margin-left: 20px;
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
                padding: 10px;
            }

            .show_advance_filter label {
                margin-right: 10px;
                align-self: center;
            }

            @media(max-width: 767px) {
                .listing_block_wrap {
                    flex-wrap: wrap;
                }

                .input-group {
                    width: 44%;
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
                    width: 134px;
                    margin-right: 10px;
                    padding: 5px;
                }

                .filter_option_show {
                    position: absolute;
                    top: 0;
                }

                .show_advance_filter .d-flex {
                    position: relative;
                    flex-wrap: wrap;
                }
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


        <table>
            <thead>
                <tr>

                    <td>
                        <div>
                            Lot name

                        </div>
                    </td>
                    <td>
                        <div>
                            street address
                        </div>
                    </td>
                    <td>
                        <div>
                            Zip Code
                        </div>
                    </td>
                    <td>
                        <div>
                            City
                        </div>
                    </td>
                    <td>
                        <div>
                            state
                        </div>
                    </td>
                    <td>
                        <div>
                            Map URL
                        </div>
                    </td>
                    <td>
                        <div>
                            Total 4 wheeler slot
                        </div>
                    </td>
                    <td>
                        <div>
                            Total 2 wheeler slot
                        </div>
                    </td>

                    <td>
                        <div>
                            2 wheeler price
                        </div>
                    </td>
                    <td>
                        <div>
                            4 wheeler price
                        </div>
                    </td>

                    <td>
                        <div>
                            Book now
                        </div>
                    </td>
                </tr>
            </thead>
            <tbody id="parking_lot_table">
                <!-- <tr>

      <td>A1</td>
      <td>test</td>
      <td>574356</td>
      <td>Banglore</td>
      <td>Karnataka</td>
      <td>https://www.google.com/maps?ll=38.882147,-76.99017</td>
      <td>4</td>
      <td>10</td>

      <td>130</td>
      <td>300</td>
     

      <td>
         <span class="mr-1">
            <svg onclick="edit_user()" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
               
               <path d="M402.6 83.2l90.2 90.2c3.8 3.8 3.8 10 0 13.8L274.4 405.6l-92.8 10.3c-12.4 1.4-22.9-9.1-21.5-21.5l10.3-92.8L388.8 83.2c3.8-3.8 10-3.8 13.8 0zm162-22.9l-48.8-48.8c-15.2-15.2-39.9-15.2-55.2 0l-35.4 35.4c-3.8 3.8-3.8 10 0 13.8l90.2 90.2c3.8 3.8 10 3.8 13.8 0l35.4-35.4c15.2-15.3 15.2-40 0-55.2zM384 346.2V448H64V128h229.8c3.2 0 6.2-1.3 8.5-3.5l40-40c7.6-7.6 2.2-20.5-8.5-20.5H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V306.2c0-10.7-12.9-16-20.5-8.5l-40 40c-2.2 2.3-3.5 5.3-3.5 8.5z"/>
            </svg>
         </span>
         <span class="ml-1">
            <svg onclick="delete_user()" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
               
               <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/>
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

.modal {
    z-index: 9999999999999;
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
    width: 50%;
    padding: 20px;
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

.form-group {
    margin-bottom: 35px;
}

.cta_btn {
    background: #2d93f9 !important;
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

.add_btn {
    padding: 6px;
    width: auto;
    font-size: 18px;
}
</style>
<style type="text/css">
/* Style for radio button container */
.radio-group {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 20px;
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
</style>

<section class="modal" id="modal">
    <div class="modal_new ">
        <div class="modal-content_new  ">
            <span class="close_icon" onclick="close_modal('modal')">x</span>
            <h2 class="mb-5">Add Parking Lot</h2>
            <div class="row mt-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="" id="lot_name"
                            onblur="validatefield('lot_name','lot name is required') " placeholder="Lot Name">
                        <div class="error" id="lot_name_error"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="" id="street"
                            onblur="validatefield('street','Street name is required')" placeholder="Street Address
               ">
                        <div class="error" id="street_error"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="" placeholder="Zipcode" inputmode="numeric"
                            minlength="6" maxlength="6" id="zipcode" onblur="validatezipcode('zipcode')">
                        <div class="error" id="zipcode_error"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="" placeholder="City" id="City"
                            onblur="validatefield('City','City name is required')">
                        <div class="error" id="City_error"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="" placeholder="State" id="State"
                            onblur="validatefield('State','State name is required')">
                        <div class="error" id="State_error"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="" placeholder="Map url" id="Map_url"
                            onblur="validatefield('Map_url','Map url is required')">
                        <div class="error" id="Map_url_error"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="" placeholder="Total 4 Wheeler Slot"
                            id="4_wheeler" onblur="validatefield('4_wheeler','4 Wheeler Slot is required')">
                        <div class="error" id="4_wheeler_error"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="" placeholder="Total 2 Wheeler Slot"
                            id="2_wheeler" onblur="validatefield('2_wheeler','2 Wheeler Slot is required')">
                        <div class="error" id="2_wheeler_error"></div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="" placeholder="2 Wheeler Price" id="2_price"
                            onblur="validatefield('2_price','2 wheeler price  is required')">
                        <div class="error" id="2_price_error"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="" placeholder="4 Wheeler Price
               " id="4_price" onblur="validatefield('4_price','4 wheeler price  is required')" value="">
                        <div class="error" id="4_price_error"></div>
                    </div>
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

.book_now {
    background: #2d93f9;
    /* padding: 10px 10px 3px; */
    border-radius: 10px;
    color: white;
    border: none;
    padding: 5px;
    width: 100%;
    font-size: 18px;
    outline: none;
    text-align: center;
}
</style>
<input type="hidden" name="" id="edit_id" value="">
<input type="hidden" name="" id="two_wheeler_price" value="">
<input type="hidden" name="" id="four_wheeler_price" value="">

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
                    <input class='form-control' type="time" id="booking_time">
                </div>
                <div class="col-md-6">
                    <label>Number of Hours</label>
                    <!--    <input id="test" type="range" value="0" min="1" max="10"> -->
                    <input id="booking_hours" class='form-control' type="number" step="1" value="1" min="1" max="24"
                        oninput="validateInput(this)"
                        onkeypress="return event.charCode >= 48 && event.charCode <= 57" />



                </div>
                <div class="col-md-6 mt-4 text-left">
                    <label>Price</label>
                    <input type="text" name="" class='form-control' id="book_price" value="">
                    <span id="book_price_error" class="error"></span>
                </div>
                <div class="col-md-6 mt-4">
                    <label>Wheeler Type</label>
                    <div class="radio-group">
                        <label class="radio">
                            <input type="radio" name="vehicle" value="four_wheeler" checked onclick="calculate_price('four_wheeler')">
                            <span class="radio-custom" ></span>
                            4-Wheeler
                        </label>
                        <label class="radio">
                            <input type="radio" name="vehicle" value="two_wheeler" onclick="calculate_price('two_wheeler')">
                            <span class="radio-custom"></span>
                            2-Wheeler
                        </label>

                    </div>
                    <div class="vehicle_type error">Please select the vehicle type</div>
                </div>

                <div class="col-md-12 mt-4">
                    <button class="cta_btn" onclick="book_now_block()">Book Now</button>
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
        <div class="modal-content_new py-5  ">
            <span class="close_icon" onclick="close_modal('delete_modal')">x</span>
            <h2 class="mb-4">Delete the Parking lot</h2>
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
find_parking_lot();
var parking_lot_data;

function find_parking_lot(search_term = "") {
    var json_data = {
        function_name: 'find_parking_lot',
        search_term: search_term
    }
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "<?php echo $site_url ?>/model/lot_model.php");
    xhr.setRequestHeader("Content-Type", "application/json");
    var data = JSON.stringify(json_data);
    xhr.send(data);

    xhr.onload = function() {
        if (xhr.status === 200) {
         console.log(xhr.responseText);
            var json_response = JSON.parse(xhr.responseText);
            parking_lot_data = json_response;
            console.log(parking_lot_data);
            var table_block = "";
            for (const key in parking_lot_data) {
                const parking_lot = parking_lot_data[key];
                table_block += `<tr>

                    <td>${parking_lot.lot_name}</td>
                    <td>${parking_lot.street_address}</td>
                    <td>${parking_lot.zip_code}</td>
                    <td>${parking_lot.city}</td>
                    <td>${parking_lot.state}</td>
                    <td>${parking_lot.map_url}</td>
                    <td>${parking_lot.four_wheeler_count}</td>
                    <td>${parking_lot.two_wheeler_count}</td>

                    <td>${parking_lot.two_wheeler_price}</td>
                    <td>${parking_lot.four_wheeler_price}</td>
                   

                    <td>
                        <span class="mr-1">
                        <div onclick="book_now('${key}')" class='book_now'>Book Now</div>
                                       </td>
                </tr>`;
                document.getElementById('parking_lot_table').innerHTML = table_block;

            }
        } else {
            console.log("Error: " + xhr.status);
        }
    };

}
</script>

<script type="text/javascript">
function edit_user() {
    $("#edit_modal").show();
}

function close_modal(x) {
    $("#" + x).hide();
}

function delete_user() {
    $("#delete_modal").show();
}

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

function validatezipcode(text) {
    var value = document.getElementById(text).value;
    if (value == "") {
        errorMessage = "Zipcode is required";
        document.getElementById(text + "_error").innerHTML = errorMessage;

        return false;
    }
    if (value.length < 6) {
        errorMessage = "Please enter a valid ZIP code";

        document.getElementById(text + "_error").innerHTML = errorMessage;


        return false;
    } else {
        errorMessage = "";
        document.getElementById(text + "_error").innerHTML = errorMessage;
        return true
    }
}

function validatefield(text, errorMessage = 'Is Required') {
    console.log(text, errorMessage);
    var value = document.getElementById(text).value;
    if (value == "") {
        // errorMessage = "Role is required";
        document.getElementById(text + "_error").innerHTML = errorMessage;

        return false;
    } else {
        errorMessage = "";
        document.getElementById(text + "_error").innerHTML = errorMessage;
        return true
    }
}



function yes_btn() {
    $("#delete_modal").hide();
}

function no_btn() {
    $("#delete_modal").hide();
}

function book_now(x) {
    $("#edit_modal").show();
    $("#edit_id").val(x);
    // Get the current time using JavaScript
    var now = new Date();
    var currentHour = now.getHours();
    var currentMinute = now.getMinutes();
    var temp_data = parking_lot_data[x];
    $("#two_wheeler_price").val(temp_data.two_wheeler_price);
    $("#four_wheeler_price").val(temp_data.four_wheeler_price);
    
    // Format the time for input field
    var formattedTime = (currentHour < 10 ? "0" : "") + currentHour + ":" + (currentMinute < 10 ? "0" : "") +
        currentMinute;

    // Set the max attribute dynamically
    document.getElementById("booking_time").max = formattedTime;
    calculate_price('four_wheeler'); 
}

function book_now_block() {
    var id = document.getElementById('edit_id').value;
    var booking_time = document.getElementById('booking_time').value;
    var vehicle_type = $('input[name="vehicle"]:checked').val();
    var booking_hours = $('#booking_hours').val();



    console.log(vehicle_type, booking_time, id)
    var check_wheeler_type = check_type();
    if (check_wheeler_type == true) {
        console.log("success");
        $("#edit_modal").hide();
        var json_data = {
            function_name: 'book_parking_lot',
            user_id: "<?php echo $user_id  ?>",
            vehicle_type: vehicle_type,
            booking_time: booking_time,
            booking_hours: booking_hours,
            lot_id: id
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

            } else {
                console.log("Error: " + xhr.status);
            }
        };




        //   find_parking_lot();

    }
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

function filter_parking() {
  
   
}

function calculate_price(type) {
 
   var base_price =     $('#'+type+'_price').val();
   var booking_hours =     $("#booking_hours").val();
    $("#book_price").val(base_price*booking_hours);
   
}
</script>


<style type="text/css">
.new_option fieldset {
    border: 1px solid lightgrey;
    width: 100%;
    border-radius: 5px;
}

.new_option legend,
.new_option label {
    color: black;
    font-size: 24px;
    font-family: sans-serif;
}

.new_option input {
    font-size: 18px;
    padding: 5px;
    height: 35px;
    width: 100%;
    border: navajowhite;
    border-bottom: 1px solid lightgrey;
    outline: none;
    border-radius: 5px;
    color: black;
    /*   border-bottom: none; */
}

.new_option datalist {
    position: absolute;
    background-color: white;
    border: 1px solid lightgrey;
    border-radius: 0 0 5px 5px;
    border-top: none;
    font-family: sans-serif;
    width: 100%;
    padding: 5px;
    max-height: 10rem;
    overflow-y: auto;
    z-index: 33;

}

.new_option option {
    background-color: white;
    padding: 4px;
    color: black;
    margin-bottom: 1px;
    font-size: 18px;
    cursor: pointer;
    text-align: left;
}

.new_option option:hover,
.new_option .active {
    background-color: lightblue;
}
</style>