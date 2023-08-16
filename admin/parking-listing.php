<?php
include '../header.php';
?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;500;600;700&display=swap" rel="stylesheet">
<script
    src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js">
</script>
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
        position: sticky;
    left: 0;
    background: white;
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
</style>
<div class="">
    <?php include 'sidebar.php';?>
</div>
<div class="main_block mt-3 ">
    <div class="listing_block mr-4">
        <div class="d-flex mb-4">
            <h1 class="mb-2">Parking lot</h1>
            <button class="cta_btn  add_btn mr-2" onclick="addparking()">Add </button>
        </div>
         <div class="d-flex mb-4 justify-content-end">
            <div class="input-group mr-2">
                <input type="text" id="search_term" class="form-control" placeholder="Search By ZIP/State/Address/Name">
                <div class="">
                    <button class="btn btn-secondary" type="button"  onclick="filter_lot()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                    </button>
                </div>
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
            display: none;
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
            padding: 0px 20px !important;
        }

        .input-group {
            width: 40%;
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
        function show_filter() {
            $(".show_advance_filter").show();
            $('.filter_option').hide();
        }

        function hide_filter() {
            $(".show_advance_filter").hide();
            $('.filter_option').show();
        }
        </script>


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
                            Handler id
                        </div>
                    </td>
                    <td>
                        <div>
                            Action
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
                    <td>10001</td>

                    <td>
                        <span class="mr-1">
                            <svg onclick="edit_parking_lot(2)" xmlns="http://www.w3.org/2000/svg" height="1em"
                                viewBox="0 0 576 512">
                               
                                <path
                                    d="M402.6 83.2l90.2 90.2c3.8 3.8 3.8 10 0 13.8L274.4 405.6l-92.8 10.3c-12.4 1.4-22.9-9.1-21.5-21.5l10.3-92.8L388.8 83.2c3.8-3.8 10-3.8 13.8 0zm162-22.9l-48.8-48.8c-15.2-15.2-39.9-15.2-55.2 0l-35.4 35.4c-3.8 3.8-3.8 10 0 13.8l90.2 90.2c3.8 3.8 10 3.8 13.8 0l35.4-35.4c15.2-15.3 15.2-40 0-55.2zM384 346.2V448H64V128h229.8c3.2 0 6.2-1.3 8.5-3.5l40-40c7.6-7.6 2.2-20.5-8.5-20.5H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V306.2c0-10.7-12.9-16-20.5-8.5l-40 40c-2.2 2.3-3.5 5.3-3.5 8.5z" />
                            </svg>
                        </span>
                        <span class="ml-1">
                            <svg onclick="delete_parking_lot(1)" xmlns="http://www.w3.org/2000/svg" height="1em"
                                viewBox="0 0 448 512">
                  
                                <path
                                    d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" />
                            </svg>
                        </span>
                    </td>
                </tr> -->


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

.add_btn {
    padding: 6px;
    width: auto;
    font-size: 18px;
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
                <div class="col-md-6">
                    <!-- <div class="form-group">
               <input type="text" class="form-control" name="" placeholder="Handler Id">
            </div> -->
                    <div class="new_option">
                        <fieldset>

                            <input autocomplete="off" role="combobox" list="" id="input" name="handler"
                                placeholder="handler id" onblur="validatefield('input','handler  is required')">
                            <div class="error" id="input_error"></div>


                            <datalist id="handler" role="listbox">
                                <option value="1001">1001</option>
                                <option value="1002">1002</option>
                                <option value="1003">1003</option>
                                <option value="1004">1004</option>


                            </datalist>

                        </fieldset>
                    </div>
                </div>
                <div class="col-md-12 mt-2">
                    <button class="cta_btn" onclick="add_parking_lot()">Add Parking Lot</button>
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
        background: #1161ee;
}

@media(max-width: 767px) {

    .modal .yes_btn,
    .modal .no_btn {
        width: 100% !important;
    }
}
</style>
<section class="modal" id="edit_modal">
    <div class="modal_new ">
        <div class="modal-content_new  ">
            <span class="close_icon" onclick="close_modal('edit_modal')">x</span>
            <h2 class="mb-4">Edit Parking Lot</h2>
            <div class="row mt-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="" id="lot_name_edit"
                            onblur="validatefield('lot_name_edit','lot name is required') " placeholder="Lot Name">
                        <div class="error" id="lot_name_edit_error"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="" id="street_edit"
                            onblur="validatefield('street_edit','Street name is required')" placeholder="Street Address
               ">
                        <div class="error" id="street_edit_error"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="" placeholder="Zipcode" inputmode="numeric"
                            minlength="6" maxlength="6" id="zipcode_edit" onblur="validatezipcode('zipcode_edit')">
                        <div class="error" id="zipcode_edit_error"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="" placeholder="City" id="City_edit"
                            onblur="validatefield('City_edit','City name is required')">
                        <div class="error" id="City_edit_error"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="" placeholder="State" id="State_edit"
                            onblur="validatefield('State_edit','State name is required')">
                        <div class="error" id="State_edit_error"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="" placeholder="Map url" id="Map_url_edit"
                            onblur="validatefield('Map_url_edit','Map url is required')">
                        <div class="error" id="Map_url_edit_error"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="" placeholder="Total 4 Wheeler Slot"
                            id="4_wheeler_edit" onblur="validatefield('4_wheeler_edit','4 Wheeler Slot is required')">
                        <div class="error" id="4_wheeler_edit_error"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="" placeholder="Total 2 Wheeler Slot"
                            id="2_wheeler_edit" onblur="validatefield('2_wheeler_edit','2 Wheeler Slot is required')">
                        <div class="error" id="2_wheeler_edit_error"></div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="" placeholder="2 Wheeler Price" id="2_price_edit"
                            onblur="validatefield('2_price_edit','2 wheeler price  is required')">
                        <div class="error" id="2_price_edit_error"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="" placeholder="4 Wheeler Price
               " id="4_price_edit" onblur="validatefield('4_price_edit','4 wheeler price  is required')" value="">
                        <div class="error" id="4_price_edit_error"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- <div class="form-group">
               <input type="text" class="form-control" name="" placeholder="Handler Id">
            </div> -->
                    <div class="new_option">
                        <fieldset>

                            <input autocomplete="off" role="combobox" list="" id="input_edit" name="handler_edit"
                                placeholder="handler id" onblur="validatefield('input_edit',' handler is required')">
                            <div class="error" id="input_edit_error"></div>


                            <datalist id="handler_edit" role="listbox">
                                <option value="1001">1001</option>
                                <option value="1002">1002</option>
                                <option value="1003">1003</option>
                                <option value="1004">1004</option>


                            </datalist>

                        </fieldset>
                    </div>
                </div>
                <div class="col-md-12 mt-2">
                    <button class="cta_btn" onclick="update_parking_lot()">Edit Parking Lot</button>
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
<input type="hidden" name="" id="edit_id" value="">
<!-- end -->


<script type="text/javascript">

function addparking() {
    $("#modal").show();
}

function edit_parking_lot(id) {
        $("#edit_id").val(id);
   let parking_data = parking_lot_data[id];
   console.log(parking_data);
   var lotname_val = $('#lot_name_edit').val(parking_data.lot_name);
      $('#street_edit').val(parking_data.street_address);
         $('#City_edit').val(parking_data.city);
        $('#State_edit').val(parking_data.state);
      $('#zipcode_edit').val(parking_data.zip_code);
       $('#Map_url_edit').val(parking_data.map_url);
        $('#2_wheeler_edit').val(parking_data.two_wheeler_count);
       $('#4_wheeler_edit').val(parking_data.four_wheeler_count);
       $('#2_price_edit').val(parking_data.two_wheeler_price);
         $('#4_price_edit').val(parking_data.four_wheeler_count);
        $('#input_edit').val(parking_data.handler);
    $("#edit_modal").show();
}

function close_modal(x) {
    $("#" + x).hide();
}

function delete_parking_lot(id) {
   $("#delete_id").val(id); 
   $("#delete_modal").show();
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

function add_parking_lot() {
    var lotname = validatefield('lot_name', 'lot name is required');
    var street = validatefield('street', ' street is required');
    var City = validatefield('City', 'City is required');
    var State = validatefield('State', 'State is required');
    var Map_url = validatefield('Map_url', 'Map_url is required');
    var two_wheeler = validatefield('2_wheeler', '2_wheeler is required');
    var four_wheeler = validatefield('4_wheeler', '4_wheeler is required');
    var two_price = validatefield('2_price', ' 2_price is required');
    var four_price = validatefield('4_price', '4_price is required');
    var handler = validatefield('input', ' handler is required');
    var zipcode = validatezipcode('zipcode');
    if (lotname == true && street == true && City == true && State == true && State == true && Map_url == true &&
        two_wheeler == true && four_wheeler == true && two_price == true && four_price == true && zipcode == true &&
        handler == true) {
        var lotname_val = $('#lot_name').val();
        var street_val = $('#street').val();
        var city_val = $('#City').val();
        var state_val = $('#State').val();
        var zipcode_val = $('#zipcode').val();
        var map_url_val = $('#Map_url').val();
        var two_wheeler_val = $('#2_wheeler').val();
        var four_wheeler_val = $('#4_wheeler').val();
        var two_price_val = $('#2_price').val();
        var four_price_val = $('#4_price').val();
        var handler_val = $('#input').val();

        var json_data = {
            "lotname":lotname_val,
            "street":street_val,
            "city":city_val,
            "state":state_val,
            "zipcode":zipcode_val,
            "map_url":map_url_val,
            "two_wheeler_count":two_wheeler_val,
            "four_wheeler_count":four_wheeler_val,
            "two_wheeler_price":two_price_val,
            "four_wheeler_price":four_price_val,
            "handler":handler_val,
            function_name: 'add_parking_lot'
        };
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "<?php echo $site_url ?>/model/lot_model.php");
        xhr.setRequestHeader("Content-Type", "application/json");
        var data = JSON.stringify(json_data);
        xhr.send(data);

        xhr.onload = function() {
            if (xhr.status === 200) {
                console.log(xhr.responseText);
                get_parking_lot();
                //  var json_response = JSON.parse(xhr.responseText);
                //  console.log(json_response);
            } else {
                console.log("Error: " + xhr.status);
            }
        };




        $("#modal").hide();
    }

}

function update_parking_lot() {
 var id = document.getElementById('edit_id').value;
    var lotname = validatefield('lot_name_edit', 'lot name is required');
    var street = validatefield('street_edit', ' street is required');
    var City = validatefield('City_edit', 'City is required');
    var State = validatefield('State_edit', 'State is required');
    var Map_url = validatefield('Map_url_edit', 'Map_url is required');
    var two_wheeler = validatefield('2_wheeler_edit', '2_wheeler is required');
    var four_wheeler = validatefield('4_wheeler_edit', '4_wheeler is required');
    var two_price = validatefield('2_price_edit', ' 2_price is required');
    var four_price = validatefield('4_price_edit', '4_price is required');
    var handler = validatefield('input_edit', ' handler is required');
    var zipcode = validatezipcode('zipcode_edit');
    if (lotname == true && street == true && City == true && State == true && State == true && Map_url == true &&
        two_wheeler == true && four_wheeler == true && two_price == true && four_price == true && zipcode == true &&
        handler == true) {

        var lotname_val_edit = $('#lot_name_edit').val();
        var street_val_edit= $('#street_edit').val();
        var city_val_edit = $('#City_edit').val();
        var state_val_edit = $('#State_edit').val();
        var zipcode_val_edit = $('#zipcode_edit').val();
        var map_url_val_edit = $('#Map_url_edit').val();
        var two_wheeler_val_edit = $('#2_wheeler_edit').val();
        var four_wheeler_val_edit = $('#4_wheeler_edit').val();
        var two_price_val_edit = $('#2_price_edit').val();
        var four_price_val_edit = $('#4_price_edit').val();
        var handler_val_edit = $('#input_edit').val();

         var json_data = {
            "lot_id" :id,
            "lotname":lotname_val_edit,
            "street":street_val_edit,
            "city":city_val_edit,
            "state":state_val_edit,
            "zipcode":zipcode_val_edit,
            "map_url":map_url_val_edit,
            "two_wheeler_count":two_wheeler_val_edit,
            "four_wheeler_count":four_wheeler_val_edit,
            "two_wheeler_price":two_price_val_edit,
            "four_wheeler_price":four_price_val_edit,
            "handler":handler_val_edit,
            function_name: 'update_parking_lot'
      }
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "<?php echo $site_url ?>/model/lot_model.php");
        xhr.setRequestHeader("Content-Type", "application/json");
        var data = JSON.stringify(json_data);
        xhr.send(data);

        xhr.onload = function() {
            if (xhr.status === 200) {
                  // var json_response = JSON.parse(xhr.responseText);
                  get_parking_lot();
                  console.log(xhr.responseText);
            } else {
                console.log("Error: " + xhr.status);
            }
        };

        $("#edit_modal").hide();
    }
}

function yes_btn() {
  var id = $("#delete_id").val(); 

  var json_data = {
    lot_id: id,
    function_name: 'delete_parking_lot'
};
var xhr = new XMLHttpRequest();
xhr.open("POST", "<?php echo $site_url ?>/model/lot_model.php");
xhr.setRequestHeader("Content-Type", "application/json");
var data = JSON.stringify(json_data);
xhr.send(data);

xhr.onload = function() {
    if (xhr.status === 200) {
        console.log(xhr.responseText);
        get_parking_lot();
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
get_parking_lot();
var parking_lot_data;
function get_parking_lot(search_term = "") {
      //  var lotname_val = $('#lot_name').val();
      //   var street_val = $('#street').val();
      //   var city_val = $('#City').val();
      //   var state_val = $('#State').val();
      //   var zipcode_val = $('#zipcode').val();
      //   var map_url_val = $('#Map_url').val();
      //   var two_wheeler_val = $('#2_wheeler').val();
      //   var four_wheeler_val = $('#4_wheeler').val();
      //   var two_price_val = $('#2_price').val();
      //   var four_price_val = $('#4_price').val();
      //   var handler_val = $('#input').val();

      //   var json_data = {
      //       "lotname":lotname_val,
      //       "street":street_val,
      //       "city":city_val,
      //       "state":state_val,
      //       "zipcode":zipcode_val,
      //       "map_url":map_url_val,
      //       "two_wheeler_count":two_wheeler_val,
      //       "four_wheeler_count":four_wheeler_val,
      //       "two_wheeler_price":two_price_val,
      //       "four_wheeler_price":four_price_val,
      //       "handler":handler_val,
      //       function_name: 'add_parking_lot'
      //   };

      var json_data = {
         function_name: 'get_parking_lot',
         search_term:search_term
      }
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "<?php echo $site_url ?>/model/lot_model.php");
        xhr.setRequestHeader("Content-Type", "application/json");
        var data = JSON.stringify(json_data);
        xhr.send(data);

        xhr.onload = function() {
            if (xhr.status === 200) {
                  var json_response = JSON.parse(xhr.responseText);
                  console.log(xhr.responseText);
                  parking_lot_data = json_response;
                  console.log(parking_lot_data);
                  var table_block ="";
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
                    <td>${parking_lot.handler}</td>

                    <td>
                        <span class="mr-1">
                            <svg onclick="edit_parking_lot('${key}')" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                                <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M402.6 83.2l90.2 90.2c3.8 3.8 3.8 10 0 13.8L274.4 405.6l-92.8 10.3c-12.4 1.4-22.9-9.1-21.5-21.5l10.3-92.8L388.8 83.2c3.8-3.8 10-3.8 13.8 0zm162-22.9l-48.8-48.8c-15.2-15.2-39.9-15.2-55.2 0l-35.4 35.4c-3.8 3.8-3.8 10 0 13.8l90.2 90.2c3.8 3.8 10 3.8 13.8 0l35.4-35.4c15.2-15.3 15.2-40 0-55.2zM384 346.2V448H64V128h229.8c3.2 0 6.2-1.3 8.5-3.5l40-40c7.6-7.6 2.2-20.5-8.5-20.5H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V306.2c0-10.7-12.9-16-20.5-8.5l-40 40c-2.2 2.3-3.5 5.3-3.5 8.5z"></path>
                            </svg>
                        </span>
                        <span class="ml-1">
                            <svg onclick="delete_parking_lot('${key}')" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"></path>
                            </svg>
                        </span>
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

<!-- <div style="margin-left: 40em;">
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Datalist</title>
</head>
<body>
  <fieldset>

    <input  autocomplete="off" role="combobox" list="" id="input" name="browsers" placeholder="Select your fav browser">
Its important that you keep list attribute empty to hide the default dropdown icon and the browser's default datalist
  <datalist id="browsers" role="listbox">
    <option value="Internet Explorer">Internet Explorer</option>
  <option value="Chrome">Chrome</option>
  <option value="Safari">Safari</option>
    <option value="Microsoft Edge">Microsoft Edge</option>
    <option value="Firefox">Firefox</option><option value="Microsoft Edge">Microsoft Edge</option>
    <option value="Firefox">Firefox</option><option value="Microsoft Edge">Microsoft Edge</option>
    <option value="Firefox">Firefox</option><option value="Microsoft Edge">Microsoft Edge</option>
    <option value="Firefox">Firefox</option><option value="Microsoft Edge">Microsoft Edge</option>
    <option value="Firefox">Firefox</option><option value="Microsoft Edge">Microsoft Edge</option>
    <option value="Firefox">Firefox</option><option value="Microsoft Edge">Microsoft Edge</option>
    <option value="Firefox">Firefox</option><option value="Microsoft Edge">Microsoft Edge</option>
    <option value="Firefox">Firefox</option><option value="Microsoft Edge">Microsoft Edge</option>
    <option value="Firefox">Firefox</option><option value="Microsoft Edge">Microsoft Edge</option>
    <option value="Firefox">Firefox</option>
  </datalist>
   <br>
    <br>
    <label for="pwd"> Password </label>
    <input id="pwd" type="password">

  </fieldset>
</body>
</html>
</div>
<script type="text/javascript">
  input.onfocus = function () {
  browsers.style.display = 'block';
  input.style.borderRadius = "5px 5px 0 0";
};
for (let option of browsers.options) {
  option.onclick = function () {
    input.value = option.value;
    browsers.style.display = 'none';
    input.style.borderRadius = "5px";
  }
};

input.oninput = function() {
  currentFocus = -1;
  var text = input.value.toUpperCase();
  for (let option of browsers.options) {
    if(option.value.toUpperCase().indexOf(text) > -1){
      option.style.display = "block";
  }else{
    option.style.display = "none";
    }
  };
}
var currentFocus = -1;
input.onkeydown = function(e) {
  if(e.keyCode == 40){
    currentFocus++
   addActive(browsers.options);
  }
  else if(e.keyCode == 38){
    currentFocus--
   addActive(browsers.options);
  }
  else if(e.keyCode == 13){
    e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (browsers.options) browsers.options[currentFocus].click();
        }
  }
}

function addActive(x) {
    if (!x) return false;
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    x[currentFocus].classList.add("active");
  }
  function removeActive(x) {
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("active");
    }
  }
</script>
<style type="text/css">
  fieldset {
  border: 1px solid blue;
  width: 360px;
  border-radius: 5px;
}

legend, label{
  color: blue;
  font-size: 24px;
  font-family: sans-serif;
}

input {
  font-size: 18px;
  padding: 5px;
  height: 35px;
  width: 350px;
  border: 1px solid blue;
  outline: none;
  border-radius: 5px;
  color: blue;
/*   border-bottom: none; */
}
datalist {
  position: absolute;
  background-color: white;
  border: 1px solid blue;
  border-radius: 0 0 5px 5px;
  border-top: none;
  font-family: sans-serif;
  width: 350px;
  padding: 5px;
  max-height: 10rem;
  overflow-y: auto

}

option {
  background-color: white;
  padding: 4px;
  color: blue;
  margin-bottom: 1px;
   font-size: 18px;
  cursor: pointer;
}

option:hover,  .active{
  background-color: lightblue;
}
</style> -->
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
<script id="rendered-js">
input.onfocus = function() {
    handler.style.display = 'block';
    input.style.borderRadius = "5px 5px 0 0";
};
for (let option of handler.options) {
    option.onclick = function() {
        input.value = option.value;
        handler.style.display = 'none';
        input.style.borderRadius = "5px";
    };
};

input.oninput = function() {
    currentFocus = -1;
    var text = input.value.toUpperCase();
    for (let option of handler.options) {
        if (option.value.toUpperCase().indexOf(text) > -1) {
            option.style.display = "block";
        } else {
            option.style.display = "none";
        }
    };
};
var currentFocus = -1;
input.onkeydown = function(e) {
    if (e.keyCode == 40) {
        currentFocus++;
        addActive(handler.options);
    } else
    if (e.keyCode == 38) {
        currentFocus--;
        addActive(handler.options);
    } else
    if (e.keyCode == 13) {
        e.preventDefault();
        if (currentFocus > -1) {
            /*and simulate a click on the "active" item:*/
            if (handler.options) handler.options[currentFocus].click();
        }
    }
};

function addActive(x) {
    if (!x) return false;
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = x.length - 1;
    x[currentFocus].classList.add("active");
}

function removeActive(x) {
    for (var i = 0; i < x.length; i++) {
        if (window.CP.shouldStopExecution(0)) break;
        x[i].classList.remove("active");
    }
    window.CP.exitedLoop(0);
}
//# sourceURL=pen.js




input_edit.onfocus = function() {
    handler_edit.style.display = 'block';
    input_edit.style.borderRadius = "5px 5px 0 0";
};
for (let option of handler_edit.options) {
    option.onclick = function() {
        input_edit.value = option.value;
        handler_edit.style.display = 'none';
        input_edit.style.borderRadius = "5px";
    };
};

input_edit.oninput = function() {
    currentFocus = -1;
    var text = input_edit.value.toUpperCase();
    for (let option of handler_edit.options) {
        if (option.value.toUpperCase().indexOf(text) > -1) {
            option.style.display = "block";
        } else {
            option.style.display = "none";
        }
    };
};
var currentFocus = -1;
input.onkeydown = function(e) {
    if (e.keyCode == 40) {
        currentFocus++;
        addActive(handler_edit.options);
    } else
    if (e.keyCode == 38) {
        currentFocus--;
        addActive(handler_edit.options);
    } else
    if (e.keyCode == 13) {
        e.preventDefault();
        if (currentFocus > -1) {
            /*and simulate a click on the "active" item:*/
            if (handler_edit.options) handler.options[currentFocus].click();
        }
    }
};

function filter_lot(){
    var search_term = $("#search_term").val();
    console.log(search_term);
    get_parking_lot(search_term);
}
</script>