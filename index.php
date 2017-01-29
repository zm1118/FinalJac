<html>
<head>
<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style.css" rel="stylesheet">

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
			
<link href="css/navside.css" rel="stylesheet">
<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>

<script src="js/jquery.navside.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<!-------------------CSS Code to put link on top of images------------------------------------->
<style>
.itemwrapper {
    position: relative;
    width: 50%;
}

.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%)
}

.itemwrapper:hover .image {
  opacity: 0.3;
}

.itemwrapper:hover .middle {
  opacity: 1;
}

.text {
  background-color: none;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}
</style>
</head>
<body>
<!-- 				image links       -->




<div id="mySidenav" class="sidenav">
<img src="images/logo-jac.png">
  
  
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <ul>
  <li><a href="#">Home Page</a></li>
  
 <li> <a href="#">Custom Solutions</a></li>
  <li><a href="#">Trends</a></li>
 <li> <a href="#">Product Single</a></li>
  <li><a href="#">Product Subpage</a></li>
 <li> <a href="#">Contact Page</a></li>
 <li> <a href="#">About Us</a></li>
  <li><a href="#">Latest Overview</a></li>
  <li><a href="#">News Overview</a></li>
  <li><a href="#">Promotion Page</a></li>
  <li><a href="#">Event overview with pagination</a></li>
  <li><a href="#">Single Event View</a></li>
 <li> <a href="#">Promotion Single</a></li>
  <li><a href="#">Gallery Overview</a></li>
  <li><a href="#">Help Center</a></li>
  
  </ul>
</div>
<header>
<nav> 

<ul>

<li><a href="#"> <img src = "images/twitter.png"></a></li>
<li><a href="#"><img src = "images/facebook.png"></a> </li>

<li> <a href="#">CONTACT</a></li>
<li> <a href="#">HELP CENTER</a></li>
<li> <a href="#">THE LATEST</a></li>
</ul>
</nav>
</header>
<div class = "main">
<nav>
	<ul>




<li><a href="#">Outdoor</a></li>
<li><a href="#">Inserts</a></li>
<li><a href="#">Fire Places</a></li>
<li><a href="#">Stoves</a></li>
<li ><a href="#">Trends</a></li>
</ul>
</nav>

 <div class="banner">
	
</div>
</div>
<div class="logo">
<!--=========================Beggining of main Content=====================================-->
<span style="font-size:50px;cursor:pointer" onclick="openNav()" name ="menusidebar">&#9776; </span>
</div>

			

<script>
//THis function is for the side nav bar
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

</script>
    
<div id="First">
  <div id="outer">
 <div class="itemwrapper">
     
	   <img src="images/1.jpg"  alt="Planets" class="image" usemap="#planetmap">
	    <div class="middle">
    <div class="text"><a href="#"><img src="images/go.png"></a></div>
  </div>


    </div>   
   <div class="itemwrapper">
      <img src="images/2.jpg" class="image"  alt="bag" />
	  
    </div>
   
  </div>
</div>

<div id="Second">
  <div id="outer">
   
   <div class="itemwrapper">
      <img src="images/3.jpg" class="image"  alt="bag" />
	  
    </div>
	<div class="itemwrapper">
      <img src="images/4.jpg" class="image"  alt="pen" />
	  
	   <div class="middle">
    <div class="text"><a href="#"><img src="images/go.png"></a></div>
  </div>
    </div>
    
  </div>
</div>

<div id="Third">
  <div id="outer">
   
    <div class="itemwrapper">
      <img src="images/5.jpg" class="image"  alt="pen" />
	   <div class="middle">
    <div class="text"><a href="#"><img src="images/go.png"></a></div>
  </div>
    </div>
	
	 <div class="itemwrapper">
      <img src="images/6.jpg" class="image" alt="bag" />
	   
    </div>
  </div>
</div>



<div id="Fourth">
  <div id="outer">
  
	 
 <div class="itemwrapper">
      <img src="images/78.png" class="image"  alt="pen" />
	   <div class="middle">
    <div class="text"><a href="#"> <a class="popup-youtube" href="http://www.youtube.com/watch?v=0O2aH4XLbto"><img src="images/playbutton1.png"></a></div>
  </div>

    </div>
	
  </div>
</div>
 <script>
	 // THis function is for youtube
$(document).ready(function() {
	$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
		disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,

		fixedContentPos: false
	});
});
	 
	 </script>

<!--=====================================End of Main Content=================================-->

<div class ="bottom">

 </div>
<footer>
<div class="top">
<nav> 

<ul>

<li><a href="#"> <img src = "images/twitter.png"></a></li>
<li><a href="#"><img src = "images/facebook.png"></a> </li>

<li> <a href="#">Sitemap</a></li>
<li> <a href="#">Legal</a></li>
<li> <a href="#">About Us</a></li>
</ul>
</nav> </div>
<div class="bottom">
 <br><Br>
 <p>
      Copyright &copy; 2015 Emberly

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 72 Sherose Island Lane | Mount Pearl |  A13 2E3 &nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Design and Technology | JAC
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp

     

         
</div>
</footer>
</body>

</html>