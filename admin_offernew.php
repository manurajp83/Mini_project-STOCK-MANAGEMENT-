
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


  if(isset($_GET['id']))
  {
    $idd=$_GET['id'];
    $sql="select * from offers where ofid=$idd";
    $cres=$con->query($sql);

    $crow=mysqli_fetch_assoc($cres);
    
    $ofid=$crow['ofid'];
    $cid=$crow['cid'];
    $offer=$crow['offer'];
    $vfom=$crow['vfrom'];
    $vto=$crow['vto'];

    $_SESSION['did']=$idd;
    $_SESSION['act']="Edit";

    // echo "<script> alert('hello');</script>";

  }
  else
  {
    $_SESSION['act']="Save";
    $ofid="";
    $cid="";
    $offer="";
    // $image=$crow['Image'];
    $vfom="";
    $vto="";
  }



if(isset($_POST['submit']))
  {
    // echo "hello";
    
    $ofid=$_POST['offer'];
    $cid=$_POST['cat'];
    $offer=$_POST['offer'];
    $vfom=$_POST['vfrom'];
    $vto=$_POST['vto'];
    
   
        if ($_SESSION['act']=="Edit")
        {
            $didd=$_SESSION['did'];
            $sql="UPDATE `offers` SET `brand`=`$brand` , `cid` = '$cid', `offer` = '$offer', `vfrom` = '$vfom', `vto` = '$vto' WHERE `offers`.`ofid` = '$didd'";
            $result=$con->query($sql);
        }
        else
        {
           $sql="INSERT INTO `offers` ( `brand`, `cid`, `offer`, `vfrom`, `vto`) VALUES ( '$brand','$cid', '$offer', '$vfom', '$vto')";
           $result=$con->query($sql);
        }

        
        header("Location:admin_offers.php");
  }
 









  $sql="select * from cat";
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
	      <div class="m_contact"><span class="left_line1"> </span>Admin Home<span class="right_line1"> </span></div>

<!-- <form method="post"> -->
	
<DIV align="center" clas>
	<form method="post" enctype="multipart/form-data">
  
  <table align="center">
    <tr>
      <td>Category:</td>
      <td height="50"><select name="cat">
         <?php 
      while($row=mysqli_fetch_assoc($result))
      {
      ?>
      <option value="<?php echo $row['cid'] ?>"><?php echo $row['brand'] ?></option>

      <?php
      }
    ?>
      </select></td>
    </tr>
    <tr>
     
      <td>offer:</td>
      <td height="50"><input type="text" name="offer" value="<?php echo $offer ?>" required class="form-control"></td>
    </tr> 
    <tr>
      <td>Valid From:</td>
      <td height="50"><input type="date" name="vfrom" value="<?php echo $vfom ?>" required class="form-control"></td>
    </tr> 
    <tr>
      <td>Valid To:</td>
      <td height="50"><input type="date" name="vto" value="<?php echo $vto ?>" required class="form-control"></td>
    </tr> 
    
    <tr>
      <td></td>
      <td height="50"><input type="submit" name="submit" value="Submit"></td>
    </tr> 
  </table>
  
</form>

	
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