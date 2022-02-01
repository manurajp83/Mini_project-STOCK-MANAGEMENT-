
<?php
  session_start();
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
    $sql="select * from item where itid=$idd";
    $cres=$con->query($sql);

    $crow=mysqli_fetch_assoc($cres);

    $name=$crow['name'];
   
    $_SESSION['did']=$idd;
    $_SESSION['act']="Edit";

    // echo "<script> alert('hello');</script>";

  }
  else
  {
    $_SESSION['act']="Save";
    $name="";
  
  }



if(isset($_POST['submit']))
  {
    // echo "hello";
    $name=$_POST['name'];
   
   
      
    

        if ($_SESSION['act']=="Edit")
        {
          $didd=$_SESSION['did'];
          $sql="update `item` set name='$name' where itid='$didd'";
          $result=$con->query($sql);
        }
        else
        {
       
			$sql="INSERT INTO `item` (`name`) VALUES ('$name')";

          	$result=$con->query($sql);
    	}
        header("Location:admin_itemmain.php");
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
					<li><a href="#">Stock</a>
						<!-- <ul>
							<li><a href="admin_catmain.php">Category</a></li>
							<li><a href="admin_productmain.php">Product</a></li>
							<li><a href="admin_brandmain.php">Brand</a></li>
						</ul> -->
					</li>
					<li><a href="#">Product</a>
						<ul>
							<li><a href="admin_viewusers.php">Category</a></li>
							<li><a href="admin_catmain.php">Items</a></li>
							
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
	      <div class="m_contact"><span class="left_line1"> </span>Category page<span class="right_line1"> </span></div>

<form method="post">
	
<DIV align="center" clas>
	 <!-- <a href="admin_itemmain.php">Add New</a> -->
        
    <table border="1" align="center" width="80%">

    <tr>
      <td>Name</td>
       <td><input type="text" required value="<?php echo $name ?>" name="name"></td>
    </tr>
    <tr>
    	<td></td>
    	<td><input type="submit" name="submit"></td>
    </tr>
   


    </table>

	
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