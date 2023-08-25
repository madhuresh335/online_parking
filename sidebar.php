<style type="text/css">
	body{
		background: #edeff7;
	}
	.header_sidebar{
		position: fixed;
		left: 0;
		top: 0;
		border-right: 1px solid lightgrey;
		height: 100%;
		    min-width: 250px;
		    padding: 0px 15px;
		    z-index: 1111111;
    background: white;

	}
	.logo_img{
		    width: 130px;
    padding: 20px 0px;
    margin: auto;
    display: block;
	}
	.header_item ul{
list-style: none;
padding-left: 0px;
margin-top: 30px;
	}
	.header_item ul li a{
		fill: 16px;
		padding: 10px 10px 3px;
		display: block;
	}
	.header_item ul li{
		position: relative;
		margin: 25px 0px;
		 /*padding: 10px 10px 3px;*/
	}
	.header_item svg{
		width: 30px;
		height: 30px;
	}
	.header_item span{
		position: relative;
    margin-left: 15px;
    display: inline-block;
    top: -8px;
    font-size: 18px;
    font-weight: 600;
	}
	.header_item svg path{
		fill: #646464 !important;
	}
/*	.header_item li:hover {
		 background: #2d93f9;
   
    border-radius: 10px;
	}
		.header_item li:hover  a{
			color: white;
	opacity: 0.9;
		}*/
	.header_item li:hover 	svg path {
    fill: #ffffff!important;
    opacity: 0.6;
}
	.active{
		    background: #2d93f9;
    /*padding: 10px 10px 3px;*/
    border-radius: 10px;
	}
	.active svg path {
    fill: #ffffff!important;
    opacity: 0.6;
}
.active {
	color: white;
	opacity: 0.9;
}
.user_logout,.user_logout:active,.user_logout:hover,.user_logout:focus{
	    background: none !important;
    border: none !important;
    outline: none !important;
    box-shadow: none !important;
       color: white;
    position: absolute;
    bottom: -200px;
    left: 9px;
}
.shrink-btn svg{ 
width: 29px;
    height: auto;
    position: absolute;
    left: 90px;
    position: absolute;
    /* top: 50%; */
    /* height: 27px; */
    padding: 8px;
    background-color: #3d5af1;
    /* border-radius: 6px; */
    cursor: pointer;
    box-shadow: 0 3px 10px -3px rgba(70,46,118,.3);
    right: 9.35rem;
    transform: translateY(-50%) translateX(-8px);
    /* opacity: 0; */
    /* pointer-events: none; */
    transition: 0.2s ease-in;
    border-radius: 7px;
    fill: white;
}
.tooltip_block{
position: absolute;
    left: 110px;
    top: 20px;
    transform: translate(-29%, -50%);
    border-radius: 6px;
    height: 35px;
    width: 160px;
    background: #3d5af1;
    line-height: 35px;
    text-align: center;
    box-shadow: 0 5px 10px rgba(0,0,0,0.2);
   
    opacity: 0;
    color: white;
    pointer-events: none;
    display: inline-block;
    padding: 0px;
    width: max-content;
    padding: 1px 20px;
    word-break: keep-all;
        transition: all .3s;
}
}
.tooltip_block::before {
    content: '';
    width: 0;
    height: 0;
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
    border-right: 10px solid var(--white-color);
    position: absolute;
    left: -8px;
    top: 7px;
}
</style>
	<div class="">
      <span class="shrink-btn" onclick="show_sidebar()">
       <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" height="800px" width="800px" version="1.1" id="Layer_1" viewBox="0 0 330 330" xml:space="preserve">
<path id="XMLID_222_" d="M250.606,154.389l-150-149.996c-5.857-5.858-15.355-5.858-21.213,0.001  c-5.857,5.858-5.857,15.355,0.001,21.213l139.393,139.39L79.393,304.394c-5.857,5.858-5.857,15.355,0.001,21.213  C82.322,328.536,86.161,330,90,330s7.678-1.464,10.607-4.394l149.999-150.004c2.814-2.813,4.394-6.628,4.394-10.606  C255,161.018,253.42,157.202,250.606,154.389z"/>
</svg>
      </span>
      
    </div>
<div class="header_sidebar">

	<div class="header_block pl-2">
		<!-- <img src="<?php echo $site_url?>/images/smart-parking-logo-new-transparent.png" class="logo_img "> -->
		<div class="logo_img ">
			<img src="<?php echo $site_url?>/images/smart-parking-logo-icon-transparent.png" >
			<p>SmartParking</p>
		</div>
		<img src="<?php echo $site_url?>/images/smart-parking-logo-icon-transparent.png" class="logo_icon mt-2 mb-4 pb-5 ml-2">
		
	</div>
	<div class="header_item">
		<div>
			<ul>
			<!-- 	<li >
					<a href="<?php echo $site_url?>/dashboard.php" onclick="setActive(0)"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6.35 6.35" width="256" height="256"><path d="M.793 2.117A.796.796 0 0 0 0 2.909v1.323c0 .435.358.795.793.795h1.324c.436 0 .793-.36.793-.795V2.909a.796.796 0 0 0-.793-.792zm3.44 0a.796.796 0 0 0-.793.792v1.323c0 .435.357.795.793.795h1.324c.435 0 .793-.36.793-.795V2.909a.796.796 0 0 0-.793-.792zm-3.44 3.44A.796.796 0 0 0 0 6.349v1.325c0 .435.358.793.793.793h1.324a.796.796 0 0 0 .793-.793V6.349a.796.796 0 0 0-.793-.792zm3.44 0a.796.796 0 0 0-.793.792v1.325c0 .435.357.793.793.793h1.324a.796.796 0 0 0 .793-.793V6.349a.796.796 0 0 0-.793-.792z" color="#000" font-family="sans-serif" font-weight="400" overflow="visible" transform="translate(0 -2.117)" style="line-height:normal;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-feature-settings:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;text-orientation:mixed;shape-padding:0;isolation:auto;mix-blend-mode:normal" fill="#000000" class="color000 svgShape"></path></svg><span>Dashboard</span></a>
				</li> -->
				
				<li >
					<a  onclick="setActive(2)" href="<?php echo $site_url?>/" class="active_history"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.083 144" width="256" height="256"><path d="M126.5 27.075H18.768a1.5 1.5 0 0 0-1.5 1.5v13.15a1.5 1.5 0 0 0 1.5 1.5h4v73.166a1.5 1.5 0 0 0 1.5 1.5H121a1.5 1.5 0 0 0 1.5-1.5V43.226h4a1.5 1.5 0 0 0 1.5-1.5v-13.15a1.5 1.5 0 0 0-1.5-1.501zm-62.115 87.817h-4.726v-6.781h4.726v6.781zm-11.617-9.782V92.36h4.446a1.5 1.5 0 0 0 1.452-1.125l2.94-11.375H83.66l2.941 11.375c.17.662.768 1.125 1.451 1.125H92.5v12.75H52.768zm25.113 9.782H67.385v-6.781h10.497v6.781zm7.727 0h-4.727v-6.781h4.727v6.781zm18.892 0H88.608v-6.781H94a1.5 1.5 0 0 0 1.5-1.5V90.86a1.5 1.5 0 0 0-1.5-1.5h-4.785l-2.941-11.375a1.499 1.499 0 0 0-1.451-1.125H60.445a1.5 1.5 0 0 0-1.452 1.125l-2.94 11.375h-4.785a1.5 1.5 0 0 0-1.5 1.5v15.75a1.5 1.5 0 0 0 1.5 1.5h5.392v6.781H40.768V70.247H104.5v44.645zm15 0h-12V68.747a1.5 1.5 0 0 0-1.5-1.5H39.268a1.5 1.5 0 0 0-1.5 1.5v46.145h-12V43.226H119.5v71.666zm5.5-74.666H20.268v-10.15H125v10.15z" fill="#000000" class="color000 svgShape"></path><path d="M56.732 51.075h-14.6v9h14.6v-9zm-3 6h-8.6v-3h8.6v3zm26.202-6h-14.6v9h14.6v-9zm-3 6h-8.6v-3h8.6v3zm26.199-6h-14.6v9h14.6v-9zm-3 6h-8.6v-3h8.6v3zM59.154 97.277h5.736v3h-5.736zM80.377 97.277h5.736v3h-5.736z" fill="#000000" class="color000 svgShape"></path></svg><span>Parking lot</span></a>
					<div class="tooltip_block">
						Parking lot
					</div>
				</li>
				
				<li>
					<a href="<?php echo $site_url?>/history.php" onclick="setActive(4)"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" width="256" height="256"><path d="M8.454,8.245a.5.5,0,0,1,.5-.5h7.092a.5.5,0,1,1,0,1H8.954A.5.5,0,0,1,8.454,8.245Zm.5,3.337h7.092a.5.5,0,0,0,0-1H8.954a.5.5,0,0,0,0,1Zm0,2.836h7.092a.5.5,0,0,0,0-1H8.954a.5.5,0,0,0,0,1ZM14.42,16.26H8.95a.5.5,0,0,0,0,1h5.47a.5.5,0,0,0,0-1Zm8.341,3.185a3.777,3.777,0,0,1-7.28,1.415H7.7a2.5,2.5,0,0,1-2.5-2.5V6.64a2.5,2.5,0,0,1,2.5-2.5h9.6a2.5,2.5,0,0,1,2.5,2.5v9.12A3.784,3.784,0,0,1,22.761,19.445Zm-7.519.415A3.607,3.607,0,0,1,18.8,15.683V6.64a1.484,1.484,0,0,0-1.5-1.5H7.7a1.484,1.484,0,0,0-1.5,1.5V18.36a1.484,1.484,0,0,0,1.5,1.5Zm6.519-.415a2.781,2.781,0,1,0-2.781,2.781A2.783,2.783,0,0,0,21.761,19.445Zm-2.781-2a.5.5,0,0,0-.5.5V19.1l-.6.234a.5.5,0,0,0,.363.932l.918-.359a.5.5,0,0,0,.318-.466v-1.5A.5.5,0,0,0,18.98,17.446Z" fill="#000000" class="color000 svgShape"></path></svg><span>History</span></a>
					<div class="tooltip_block">
						History
					</div>
				</li>
				<li>
					<a href="<?php echo $site_url?>/user-profile.php" onclick="setActive(5)"><svg xmlns="http://www.w3.org/2000/svg" class="svg-icon" style="width: 1em; height: 1em;vertical-align: middle;fill: currentColor;overflow: hidden;    width: 30px;
    position: relative;
    top: -9px;
    height: auto;" viewBox="0 0 1024 1024" version="1.1"><path d="M843.282963 870.115556c-8.438519-140.515556-104.296296-257.422222-233.908148-297.14963C687.881481 536.272593 742.4 456.533333 742.4 364.088889c0-127.241481-103.158519-230.4-230.4-230.4S281.6 236.847407 281.6 364.088889c0 92.444444 54.518519 172.183704 133.12 208.877037-129.611852 39.727407-225.46963 156.634074-233.908148 297.14963-0.663704 10.903704 7.964444 20.195556 18.962963 20.195556l0 0c9.955556 0 18.299259-7.774815 18.962963-17.73037C227.745185 718.506667 355.65037 596.385185 512 596.385185s284.254815 122.121481 293.357037 276.195556c0.568889 9.955556 8.912593 17.73037 18.962963 17.73037C835.318519 890.311111 843.946667 881.019259 843.282963 870.115556zM319.525926 364.088889c0-106.287407 86.186667-192.474074 192.474074-192.474074s192.474074 86.186667 192.474074 192.474074c0 106.287407-86.186667 192.474074-192.474074 192.474074S319.525926 470.376296 319.525926 364.088889z"/></svg><span class="pt-2">User Name</span></a>
    <div class="tooltip_block">
						User Name
					</div>
				</li>

				 <li class="text-center  mt-5 user_logout_block" ><button onclick="user_logout()" class="user_logout"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M16 13v-2H7V8l-5 4l5 4v-3z"/><path fill="currentColor" d="M20 3h-9c-1.103 0-2 .897-2 2v4h2V5h9v14h-9v-4H9v4c0 1.103.897 2 2 2h9c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2z"/></svg><span>logout</span></button><div class="tooltip_block">
						logout
					</div> </li>
			</ul>
		</div>
	</div>
</div>
<!-- <style type="text/css">
	.top_header{
		    background: #edeff7;
    border-bottom: 1px solid lightgrey;
    padding-left: 250px;
    padding-top: 10px;
    padding-bottom: 7px;

       /* position: fixed;
    left: 0;
    right: 0;
    z-index: -2;*/
	}
	.top_header svg{
		width: 43px;
    height: auto;
	}
	.user_icon_blokc{
		    display: flex;
    align-items: center;
    justify-content: end;
	}
</style>
<div class="top_header">
	<div class="container">
		<div class="text-right">
			<div class="user_icon_blokc">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" height="800px" width="800px" version="1.1" id="Layer_1" viewBox="0 0 512 512" xml:space="preserve">
<g>
	<g>
		<path d="M256,0c-65.733,0-119.211,53.479-119.211,119.211S190.267,238.423,256,238.423s119.211-53.479,119.211-119.211    S321.733,0,256,0z M256,218.024c-54.486,0-98.813-44.328-98.813-98.813S201.515,20.398,256,20.398s98.813,44.328,98.813,98.813    S310.485,218.024,256,218.024z"/>
	</g>
</g>
<g>
	<g>
		<path d="M426.272,331.529c-45.48-45.48-105.952-70.529-170.272-70.529c-64.32,0-124.791,25.047-170.273,70.529    c-45.48,45.48-70.529,105.952-70.529,170.272c0,5.632,4.566,10.199,10.199,10.199h461.204c5.632,0,10.199-4.567,10.199-10.199    C496.801,437.482,471.752,377.01,426.272,331.529z M35.831,491.602C41.179,374.789,137.889,281.398,256,281.398    s214.821,93.391,220.17,210.204H35.831z"/>
	</g>
</g>
<g>
	<g>
		<path d="M182.644,457.944H66.295c-5.633,0-10.199,4.567-10.199,10.199s4.566,10.199,10.199,10.199h116.349    c5.633,0,10.199-4.567,10.199-10.199S188.277,457.944,182.644,457.944z"/>
	</g>
</g>
<g>
	<g>
		<path d="M225.621,457.944h-7.337c-5.633,0-10.199,4.567-10.199,10.199s4.566,10.199,10.199,10.199h7.337    c5.633,0,10.199-4.567,10.199-10.199S231.254,457.944,225.621,457.944z"/>
	</g>
</g>
</svg>
<span>Username</span>
			</div>
			
		</div>
	</div>
</div>
 -->
<script type="text/javascript">
	// JavaScript code to add active class on click and persist it after page refresh
// function setActive(index) {
//   const navbarItems = document.querySelectorAll(".header_item li");

//   // Remove the "active" class from all navbar items
//   navbarItems.forEach(item => {
//     item.classList.remove("active");
//   });

//   // Add the "active" class to the clicked navbar item
//   navbarItems[index].classList.add("active");

//   // Store the index of the active item in localStorage
//   localStorage.setItem("activeNavItem", index);
// }

// // Restore active class on page load
// window.addEventListener("DOMContentLoaded", function() {
//   const activeIndex = localStorage.getItem("activeNavItem");

//   if (activeIndex !== null) {
//     setActive(parseInt(activeIndex));
//   }
// });


// JavaScript code to add active class to navbar li
// const currentPath = window.location.pathname; // Get the current page path
// console.log(currentPath);
// // Find the navbar <a> element that matches the current page
// const activeElement = document.querySelector(`.header_item a[href="${currentPath}"]`);
// console.log(activeElement);
// // Add the "active" class to the parent <li> element
// if (activeElement) {
//   activeElement.parentNode.classList.add("active");
// }
var currentUrl = window.location.href;

var anchors = document.querySelectorAll('.header_item a');
console.log(anchors,"anchors");
// Loop through the anchor elements
for (var i = 0; i < anchors.length; i++) {
	
  if (anchors[i].href === currentUrl) {

    // Add the active class to the matching anchor element
    anchors[i].classList.add('active');
   if(currentUrl == "http://localhost/online_parking/" || anchors[i].href == "http://localhost/online_parking/"){
// addClass(".active_history",'active');
  $( ".active_history" ).addClass( 'active');
  }
  else{
  		$( ".active_history" ).removeClass( 'active');
  	}
    break; // Exit the loop since we only need to add the class to one element
  }
}
function user_logout() {
	console.log("userdata");
	const cookieName = "userdata";

document.cookie = `${cookieName} =; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/online_parking`;

window.location.href = "http://localhost/online_parking/login.php";


}
function show_sidebar(){
	  $(".header_sidebar").toggleClass("active_header");
	  	  $(".shrink-btn").toggleClass("shrink_btn_active");
	  	   	  $(".main_block").toggleClass("main_block_active");
}
</script>


<style type="text/css">
	.main_block{
		transition: 0.1s ease-in;
	}
	.main_block_active{
		    padding-left: 270px !important;
		     transition: 0.1s ease-in;

	}
	.shrink_btn_active svg{
    left: 250px;
	}
.logo_img{
	display: none;
}
.logo_img  img{
	    width: 52px;
    display: block;
    margin: auto;
}
.logo_img  p{
	color: white;
    font-size: 22px;
    text-align: center;
    font-weight: 600;
}
	.logo_icon{
		    width: 38px;
    height: auto;
	}
	.active_header .logo_icon{
		display: none;
	}
	.active_header .logo_img{
		display: block;
	}
	/*.header_sidebar:hover .logo_icon{
		display: none;
	}
	.header_sidebar:hover .logo_img{
		display: block;
	}*/
	.active{
		border-radius: 0px;
	}
		.header_item li:hover {
	border-radius: 0px;
		}
				.header_item li:hover .tooltip_block{
					opacity: 1;
				}
	.main_block {
    padding-left: 120px;
}
	.header_item span{
		display: none;
	}
	.header_sidebar {
       z-index: 999999;
    position: fixed;
    width: 60px;
    padding-top: 0px;
    height: 100%;
        transition: width 0.1s ease-in-out;
    /*overflow-y: auto !important;*/
    min-width: auto;
    padding: 0px;
    /*overflow-x: hidden;*/
}
/*.header_sidebar:hover {
    width: 240px;
}*/
.active_header{
    width: 240px;
}
.header_item span {
  
         transition: width 0.4s ease-in-out;
}
.active_header .header_item span {
    display: inline-block;
         transition: width 0.4s ease-in-out;
}
/*.header_sidebar:hover .header_item span {
    display: inline-block;
}*/
/*.logo_img{
	display: none;
}
.user_logout{
	display: none;
}*/
::-webkit-scrollbar {
   width: 5px;
   }
   /* Track */
   .header_sidebar::-webkit-scrollbar-track {
   box-shadow: inset 0 0 5px grey; 
   border-radius: 5px;
   }
   /* Handle */
   .header_sidebar::-webkit-scrollbar-thumb {
   background: #4F46E5; 
   border-radius: 5px;
   }
   .header_sidebar::-webkit-scrollbar {
   height: 4px;  
   }
   /* Handle on hover */
   .header_sidebar::-webkit-scrollbar-thumb:hover {
   background: #4F46E5; 
   }

/*new header color*/
   .header_sidebar{
   	background: #3d5af1;
width: 80px;   }
.header_item ul li{
	margin: 25px 13px;
}
.header_item li:hover svg path{
	fill: #ffffff!important;
	opacity: 1;
}
.header_item svg path{
	fill: #ffffff!important;
	opacity: 1;
}
.active {
    background: #3651d4;
    border-radius: 10px !important;
}
.active_header{
    width: 240px;
}
.active_header .header_item span{
	color: white;
}
	.header_item li:hover {
 background: #3651d4;
    border-radius: 10px !important;
	}
		.header_item li:hover  a{
			color: white;
	opacity: 0.9;
		}
		.active_header .tooltip_block{
			display: none;
		}
		body{
			background: #e4e2f5 !important;
		}
		.user_logout_block .tooltip_block{
			    top: 160px;

		}
		.active_header .header_item span {
    color: white;
    opacity: 0.7;
}
.active span,.active_header .header_item li:hover span{
	    opacity: 1 !important;
}
</style>