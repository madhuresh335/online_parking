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
   .listing_block td{
   padding: 10px;
   width: 15%;
   }
   .listing_block table{
   border-collapse: separate;
   width: 100%;
   display: block;
   overflow-x: scroll;
   height: 480px;
   overflow-y: scroll;
   }
   .listing_block thead td:nth-child(1){
   border-radius: 5px 0 0 5px;
   border-left: 1px solid #e5ecff!important;
   padding-left: 10px;
   }
     .listing_block thead{
      position: sticky;
      top: 0;
      z-index: 99999;
      background: white;
     }
    .listing_block thead div{
      width: max-content;
    }
   .listing_block tbody td:nth-child(1){
   padding-left: 10px;
       position: sticky;
    left: 0;
    background: white;
   } 
   .listing_block tbody td:last-child {
   padding-right: 10px;
   }
   .listing_block thead td{
   border-top: 1px solid #e5ecff!important;
   border-bottom: 1px solid #e5ecff!important;
   font-weight: 600;
   color: #000000;
   text-transform: capitalize;
   }
   .listing_block thead td:last-child {
   border-radius: 0 5px 5px 0;
   border-right: 1px solid #e5ecff!important;
   padding-right: 40px;
   }
   .listing_block tbody td{
   color: #000;
   padding: 14px 10px;
   font-size: 16px;
   }
   .listing_block td{
   text-align: left;
   }
   .role_block{
   background: #2d93f9;
   color: white;
   border-radius: 30px;
   text-align: center;
   padding: 2px 24px;
   display: inline-block;
   }
   .listing_block svg{
   fill: #2d93f9;
   cursor: pointer;
   }
   .add_btn{
          margin-left: auto;
   }
    .listing_block table::-webkit-scrollbar-thumb
        {
            border-radius: 10px;
            -webkit-box-shadow: inset 0 0 3px rgba(0,0,0,.3);
            background-color: #637099;
        }
        .listing_block  table::-webkit-scrollbar {
   height: 4px;  
   }
        .listing_block table::-webkit-scrollbar-track
        {
            -webkit-box-shadow: inset 0 0 3px rgba(0,0,0,0.3);
            border-radius: 10px;
            background-color: #f1f1f1;
        }

        .listing_block table::-webkit-scrollbar
        {
            width: 3px !important;
            background-color: #f1f1f1;
        }
         .listing_block tbody tr{
            border-bottom: 1px solid lightgrey;
         }
         .listing_block td:last-child{
            position: sticky;
            right: 0;
            background: white;
         }
         .active_block {
    background: #05d34e;
    color: white;
    border-radius: 30px;
    text-align: center;
    padding: 2px 24px;
    display: inline-block;
}
.inactive_block{
 background: #ff4d4d;
   color: white;
   border-radius: 30px;
   text-align: center;
   padding: 2px 18px;
   display: inline-block;
   }
</style>
<div class="">
   <?php include('sidebar.php');?>
</div>
<div class="main_block mt-3 ">
   <div class="listing_block mr-md-4">
      <div class="d-flex mb-4 listing_block_wrap">
          <h1 class="mb-2"> History</h1>
            <div class="input-group">
    <input type="text" class="form-control" placeholder="Search here">
    <div class="">
      <button class="btn btn-secondary" type="button">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg>
      </button>
    </div>
  </div>
  <div class=" show_advance_filter mt-3 mt-md-0">
     <div class="d-flex ">
      <div class="ml-md-3 d-md-flex">
         <label class="w-100">From Date:</label>
          <input type="date"  name="" placeholder="from date" id="booking_from_date" value="" class="form-control">
      </div>
     <div class="ml-md-3 d-md-flex">
         <label class="w-100">To Date:</label>
         <input type="date"  name="" placeholder="to date" id="booking_to_date" class="form-control"> 
      </div>
       
        
        <button type="button" class="btn add_btn cta_btn ml-2 mt-4 mt-md-0"  >GO</button>
          <div class=" filter_option_show" onclick="hide_filter()">Hide Advance</div>
     </div>
  </div>
  <style type="text/css">
   .show_advance_filter label{
      align-self: center;
      margin-right: 10px;
          margin-bottom: 0px;
   }
     .filter_option,.filter_option_show{
   align-self: center;
      color: #007bff;
      font-size: 15px;
      text-decoration: underline;
      padding-left: 10px;
      cursor: pointer;
     }
     .show_advance_filter select{
          width: 182px;
    margin-left: 20px;
        padding: 8px !important;
     }
     .show_advance_filter{
      display: none;
     }
     .input-group .form-control{
          padding: 0px 4px;
    height: 38px;
     }
    .input-group .btn-secondary{
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
.add_btn{
   height: 40px;
}
.input-group{
       width: 20%;
    margin-left: auto;
}
@media(max-width: 767px){
   .listing_block_wrap{
      flex-wrap: wrap;
   }
   .input-group {
    width: 50%;
}
.filter_option, .filter_option_show{
       padding-left: 5px;
    text-align: right;
  
    width: 100%;
    font-size: 12px;
}
.show_advance_filter select {
    width: 117px;
    margin-left: 3px;
    }
  .show_advance_filter  .form-control{
          width: 150px;
              margin-right: 10px;
    }
    .filter_option_show{
      position: absolute;
      top: 0;
    }
    .show_advance_filter  .d-flex{
      position: relative;
    }
}
.cta_btn,.cta_btn:active, .cta_btn:hover {
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
.add_btn,.add_btn:active, .add_btn:hover {
  padding: 6px;
  width: auto !important;
  font-size: 18px;
}
  </style>
  <script type="text/javascript">
     function show_filter(){
      $(".show_advance_filter").show();
      $('.filter_option').hide();
     }
     function hide_filter(){
       $(".show_advance_filter").hide();
        $('.filter_option').show();
     }
  </script>
  <div class="filter_option" onclick="show_filter()">Advance</div>
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
                    Type of vehicle

                  </div>
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
         <tbody>
            <tr>
              
               <td>A1</td>
               <td>test</td>
               <td>1234567890</td>
               <td>2 wheeler</td>
               <td>11-04-2023</td>
               <td>23-04-2023</td>
               <td>40</td>
              <td><div class="active_block">Active</div></td>
                 
           </tr>
            <tr>
              
               <td>A1</td>
               <td>test</td>
               <td>1234567890</td>
               <td>2 wheeler</td>
               <td>11-04-2023</td>
               <td>23-04-2023</td>
                <td>40</td>
              <td><div class="inactive_block">Inactive</div></td>
                 
           </tr>
      </tbody>
      </table>
   </div>

</div>

  