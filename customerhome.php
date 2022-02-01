<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php

	session_start();

	if($_SESSION['stat']=="Active")
	{
		// echo "Welcome ".$_SESSION["username"];
	}
	else
	{
	  header("location:index.php");
	}


?>



<!DOCTYPE HTML>
<html>
<head>
<title>SR COLORS</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Lato:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script src="js/jquery.min.js"></script>
</head>
<body>
<div class="wrap"> 
	<div class="pages-top">
	        <div class="logo">
			<a href="#"><img src="images/sr.png" alt=""/></a> 
			 </div>
		     <div class="h_menu4"><!-- start h_menu4 -->
				<a class="toggleMenu" href="#">Menu</a>
				<ul class="nav">
					<li  class="active"><a href="#">Home</a></li>
					
						<!-- <ul>
							<li><a href="admin_catmain.php">Category</a></li>
							<li><a href="admin_productmain.php">Product</a></li>
							<li><a href="admin_brandmain.php">Brand</a></li>
						</ul> -->
					</li>
					<li><a href="customer_viewproduct.php">Product</a>
						<!-- <ul>
							<li><a href="admin_itemmain.php">Items</a></li>
							<li><a href="admin_catmain.php">Category</a></li>
							
						</ul> -->
					</li>
					<li><a href="#">Orders</a>
						<!-- <ul>
							<li><a href="#">Complaints</a></li>
							
						</ul> -->
					</li>
					<li><a href="admin_offer.php">Offers</a>
						<!-- <ul>
						
							<li><a href="admin_offer.php">Offers</a></li>
						</ul> -->
					</li>
					<li><a href="#">Feedback</a>
						
						
					</li>
					<li><a href="#">Profile</a>
						
					</li>
					<li><a href="index.php">Logout</a>
						
					</li>
					
				</ul>
				<script type="text/javascript" src="js/nav.js"></script>
			</div><!-- end h_menu4 -->
			<div class="clear"></div>
		</div><!-- end header_main4 -->
     </div>
	 <div class="main">
	    
	 	    <div class="contact">

  <div class="wrap">


  	<!-- BLOCK -->
	      <div class="m_contact"><span class="left_line1"> </span>User Home<span class="right_line1"> </span></div>

<form method="post">
	
<DIV align="center" clas>
	

	
</form>
 </DIV>




 <!-- ENDBLOCK -->
             
              <div >
           
               <div class="map"><br>
                 </div>		
            </div>
		   </div>
		</div>
		</div>
		
</div>
  
		
		
</body>
</html>