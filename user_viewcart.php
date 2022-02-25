
<?php
  session_start();
  $uid=$_SESSION['UID'];
  // if($_SESSION['stat']=="Active")
  // {
  //   // echo "Welcome ".$_SESSION["username"];
  // }
  // else
  // {
  //   header("location:index.php");
  // }



  include('dbconnection.php');

  // if(isset($_POST['submit']))
  // {
    

  // }


  $sql="select a.*,b.brand,b.image,b.price from cart as a,cat as b where a.cid=b.cid and a.custid='$uid'";
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
					<li  class="active"><a href="customerhome.php">Home</a></li>
          
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
          <li><a href="#">My Orders</a>
            <ul>
              <li><a href="user_viewcart.php">View Cart</a></li>
              
            </ul>
          </li>
          <li><a href="user_offerview.php">Offers</a>
            <!-- <ul>
            
              <li><a href="admin_offer.php">Offers</a></li>
            </ul> -->
          </li>
          <li><a href="user_feedback.php">Feedback</a>
            
            
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
	      <div class="m_contact"><span class="left_line1"> </span>Order<span class="right_line1"> </span></div>

<!-- <form method="post"> -->
	
<DIV align="center" clas>
	 <!-- <a href="admin_catnew.php">Add New</a> -->
        
         <table border="1" align="center" width="60%">
          <!-- <tr>
            <form method="post">
              <input type="submit" name="submit">
              
            </form>
          </tr> -->

    <tr>
      <td style="font-weight:bold">Sl no.</td>
      <td style="font-weight:bold">Brand</td>
      <td style="font-weight:bold">Price</td>
     
      
      <td style="font-weight:bold">Quantity</td>
      <td style="font-weight:bold">Image</td>
          
      <td></td>
      <td></td>
    </tr>

       <?php 
       $slno=0;
       $tot=0;
      while($row=mysqli_fetch_assoc($result))
      {
        $slno=$slno+1;
        $tot=$tot+($row['qty']*$row['price'])
    ?>

    <tr>
      <td>
        <?php echo $slno ?>
      </td>
       <td>
        <?php echo $row['brand'] ?>
      </td>
      <td>
        <?php echo $row['price'] ?>
      </td>
     
      
      
      <td>
        <?php echo $row['qty'] ?>
      </td>
      <td>
        <img src="<?php echo $row['image'] ?>" style="width:200px;;height:100px;">
      </td>


      
      
      <?php $idd=$row['slno']; ?>


      <!--<td><a href="admin_catnew.php?id=<?php echo $idd; ?>">Edit</a></td> !-->
      
      <td><a href="removecart.php?id=<?php echo $idd; ?>">Remove</a></td>
      
     

    </tr>

    <?php
      }
    ?>
    <tr>
       
      <td style="font-weight:bold"></td>
      <br>

      <td style="font-weight:bold">Total</td>
     
      <td style="font-weight:bold"><?php echo $tot ?></td>
      <td style="font-weight:bold"></td>
      <td style="font-weight:bold"><a href="user_checkout.php?id=<?php echo $tot ?>">Checkout</a></td>
    </tr>
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