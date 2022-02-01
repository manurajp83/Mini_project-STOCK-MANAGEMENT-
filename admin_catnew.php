
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
    $sql="select * from cat where cid=$idd";
    $cres=$con->query($sql);

    $crow=mysqli_fetch_assoc($cres);

    $item=$crow['itid'];
    $price=$crow['price'];
    $brand=$crow['brand'];
    // $image=$crow['Image'];
    $mdate=$crow['mdate'];
    $edate=$crow['edate'];

    $Color=$crow['Color'];
    $Quantity=$crow['Quantity'];

    $_SESSION['did']=$idd;
    $_SESSION['act']="Edit";

    // echo "<script> alert('hello');</script>";

  }
  else
  {
    $_SESSION['act']="Save";
    $item="";
    $price="";
    $brand="";
    // $image=$crow['Image'];
    $mdate="";
    $edate="";
    $Color="";
    $Quantity="";
  }



if(isset($_POST['submit']))
  {
    // echo "hello";
    $item=$_POST['item'];
    $price=$_POST['price'];
    $brand=$_POST['brand'];
    $mdate=$_POST['mdate'];
    $edate=$_POST['edate'];
    $Color=$_POST['Color'];
    $Quantity=$_POST['Quantity'];
    
    $filename= basename($_FILES["file1"]["name"]);

        $ext = pathinfo($filename, PATHINFO_EXTENSION);

        $fnn=date("YmdHis").".".$ext;

        $target_dir = "uploads/";
      // $target_file = $target_dir . basename($_FILES["file1"]["name"]);
        $target_file = $target_dir.$fnn;
        if (move_uploaded_file($_FILES["file1"]["tmp_name"], $target_file)) {
          // echo "The file ". htmlspecialchars( basename( $_FILES["file1"]["name"])). " has been uploaded.";
          // echo "<script>alert('ok')</script>";
        }
        else
        {
          // echo "<script>alert('error')</script>";
        }
      
    

        if ($_SESSION['act']=="Edit")
        {
            $didd=$_SESSION['did'];
            $sql="UPDATE `cat` SET `price` = '$price', `brand` = '$brand', `mdate` = '$mdate', `edate` = '$edate',`Color` = '$Color',`Quantity` = '$Quantity',`image` = '$target_file' WHERE `cat`.`cid` ='$didd'";
            $result=$con->query($sql);
        }
        else
        {
           $sql="INSERT INTO `cat` (`itid`, `price`, `brand`, `mdate`, `edate`,`Color`,`Quantity`,`image`) VALUES ( '$item', '$price', '$brand', '$mdate', '$edate','$Color','$Quantity', '$target_file')";
           $result=$con->query($sql);
        }

        
        header("Location:admin_catmain.php");
  }
 









  $sql="select * from item";
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
      <td>Item:</td>
      <td height="50"><select>
         <?php 
      while($row=mysqli_fetch_assoc($result))
      {
      ?>
      <option value="<?php echo $row['itid'] ?>"><?php echo $row['name'] ?></option>

      <?php
      }
    ?>
      </select></td>
    </tr>
    <tr>
      <td>Price:</td>
      <td height="50"><input type="text" name="price" value="<?php echo $price ?>" required class="form-control"></td>
    </tr> 
    <tr>
      <td>Brand:</td>
      <td height="50"><input type="text" name="brand" value="<?php echo $brand ?>" required class="form-control"></td>
    </tr> 
    <tr>
      <td>MFD:</td>
      <td height="50"><input type="date" name="mdate" value="<?php echo $mdate ?>" required class="form-control"></td>
    </tr> 
    <tr>
      <td>EXP:</td>
      <td height="50"><input type="date" name="edate" value="<?php echo $edate ?>" required class="form-control"></td>
    </tr> 
    <tr>
      <td>COLOR:</td>
      <td height="50"><input type="text" name="Color" value="<?php echo $Color ?>" required class="form-control"></td>
    </tr> 
    <tr>
      <td>Quantity:</td>
      <td height="50"><input type="text" name="Quantity" value="<?php echo $Quantity ?>" required class="form-control"></td>
    </tr> 

    <tr>
      <td>Image:</td>
      <td height="50"><input type="file" name="file1" class="form-control"></td>
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