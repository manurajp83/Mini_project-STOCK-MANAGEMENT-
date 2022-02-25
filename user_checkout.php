
<?php
include('dbconnection.php');
session_start();

if(isset($_GET['id']))
  {
    $amt=$_GET['id'];
    // header("Location:admin_catmain.php");

  }


  if(isset($_POST['submit']))
  {
    
      $name=$_POST['name'];
      $address=$_POST['addr'];
      $state=$_POST['state'];
      $zip=$_POST['zip'];
      $ph=$_POST['tele'];
      $amt=$_POST['amt'];
      $pay=$_POST['pay'];
      $uid=$_SESSION['UID'];


      $sql="INSERT INTO `ordmain` (`name`, `address`, `state`, `zip`, `ph`, `amt`, `pmode`, `status`,`uid`) VALUES ('$name', '$address', '$state', '$zip', '$ph', '$amt', '$pay', 'Order','$uid')";
      // echo "$sql";
      $result=$con->query($sql);
      // echo $con->error;

      $sql="select max(ordid) as mordid from ordmain";
      $result=$con->query($sql);  
      $row=mysqli_fetch_assoc($result);
      $ordid=$row['mordid'];

      $sql="select * from cart where custid='$uid'";
      // echo "$sql";
      $result1=$con->query($sql);
      while($row=mysqli_fetch_assoc($result1))
        {

            $itm=$row['cid'];
            $qty=$row['qty'];
            $sql="INSERT INTO `orddetails` ( `ordid`, `cid`, `qty`) VALUES ( '$ordid', '$itm', '$qty')";
            $ress=$con->query($sql);

            $sql="update cat set Quantity=Quantity-$qty where cid='$itm'";
            $ress=$con->query($sql);            
            // $price=$row['qty']

        }
      $sql="delete from cart  where custid='$uid'";
      $result1=$con->query($sql);
      header("Location:customerhome.php");

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
<?php include 'menu_user.php' ?>
<!-- <form method="post"> -->


<div id="templatemo_content_wrapper_outter">

  <div id="templatemo_content_wrapper_inner">
      
        <div id="templatemo_content_top"></div>
        
        <div id="templatemo_content">
        
          <!-- <div class="section_w860"> -->
                <section id="about" class="home-section text-center">
      <!-- <div align="center"> -->
        <h1 align="center"></h1>
         <!-- <a href="services.php">Add New</a> -->
         <center>
<table  align="center"  width="100%">	

      <form method="post">
        <tr>
          <td>Full Name</td>
          <TD><input type="text" name="name" required></TD>
        </tr>
        <tr>
          <td>Address</td>
          <td>
            <textarea id="addr" name="addr" rows="4" cols="50" required>
            </textarea>
          </td>
        </tr>
        <tr>
          <td>Email</td>
          <td><input type="email" name="email" required></td>
        </tr>
        <tr>
        <tr>
          <td>State</td>
          <TD><input type="text" name="state" required></TD>
        </tr>
        <tr>
          <td>Zip Code</td>
          <TD><input type="text" name="zip" required></TD>
        </tr>
        <tr>
          <td>Phone</td>
          <TD><input type="tele" name="tele" required></TD>
        </tr>
        <tr>
          <td>Amount</td>
          <TD><input type="text" readonly name="amt" value="<?php echo $amt ?>"></TD>
        </tr>
        
        <tr>
          <td>Payment Mode</td>
          <TD><select name="pay">
            <option value="Cash On Delivery">Cash On Delivery</option>
            <option value="UPI">UPI</option>
          </select></TD>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" name="submit"></td>
        </tr>

        
      
      
      </form>
      <br>
 
 </table>
 </center>
 <div class="cleaner_h30 divider"></div>
            <div class="cleaner_h30"></div>
            
            <div class="section_w860">
        
         <!-- <table border="1" align="center"  width="60%">

    <tr>
      <td>Sid</td>
      <td>Service</td>
      <td>Description</td>
      <td>Image</td>
      
    </tr> -->

      <!--  <?php 
      while($row=mysqli_fetch_assoc($result))
      {
        ?>

        <div>
          <img src="<?php echo $row['image'] ?>" style="width:200px;height:100px;"/>

        </div>
        <br> -->
        <!-- <tr>
          



   <!--  <?php
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