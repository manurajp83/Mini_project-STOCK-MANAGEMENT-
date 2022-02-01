
<?php
  // session_start();
  // if($_SESSION['stat']=="Active")
  // {
  //   // echo "Welcome ".$_SESSION["username"];
  // }
  // else
  // {
  //   header("location:index.php");
  // }
  include('dbconnection.php');
  $sql="select * from offers";
  $result=$con->query($sql);
 
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
					<li><a href="#">Stock</a>
						<!-- <ul>
							<li><a href="admin_catmain.php">Category</a></li>
							<li><a href="admin_productmain.php">Product</a></li>
							<li><a href="admin_brandmain.php">Brand</a></li>
						</ul> -->
					</li>
					<li><a href="#">Product</a>
						<ul>
							<li><a href="admin_itemmain.php">Items</a></li>
							<li><a href="admin_catmain.php">Category</a></li>
							
						</ul>
					</li>
					<li><a href="#">Orders</a>
						<!-- <ul>
							<li><a href="#">Complaints</a></li>
							
						</ul> -->
					</li>
          <li><a href="admin_offers.php">Offers</a>
            <!-- <ul>
              <li><a href="#">Complaints</a></li>
              
            </ul> -->
          </li>
					<li><a href="#">Feedback</a>
						
						
					</li>
					<li><a href="#">Reports</a>
						
					</li>
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
	      <div class="m_contact"><span class="left_line1"> </span>Offer Page<span class="right_line1"> </span></div>

<!-- <form method="post"> -->
	
<DIV align="center" clas>
	 <a href="admin_offernew.php">Add New</a>
        
         <table border="1" align="center" width="80%">

    <tr>
      <td style="font-weight:bold">Offer</td>
      <td style="font-weight:bold">From</td>
      <td style="font-weight:bold">To</td>
      
          
      <td></td>
      <td></td>
    </tr>

       <?php 
      while($row=mysqli_fetch_assoc($result))
      {
    ?>

    <tr>
   
      <td>
        <?php echo $row['offer'] ?>
      </td>

      <td>
        <?php echo $row['vfrom'] ?>
      </td>
       <td>
        <?php echo $row['vto'] ?>
      </td>
   
      <?php $idd=$row['ofid']; ?>


      <td><a href="admin_offernew.php?id=<?php echo $idd; ?>">Edit</a></td>
      <td><a href="admin_offerdel.php?id=<?php echo $idd; ?>">Delete</a></td>
      
     

    </tr>

    <?php
      }
    ?>
    </table>

	
<!-- </form> -->
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