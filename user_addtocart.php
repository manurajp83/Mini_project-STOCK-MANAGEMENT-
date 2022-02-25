
<?php
include('dbconnection.php');
session_start();

if(isset($_GET['id']))
  {
    $idd=$_GET['id'];
    $sql="select * from `cat` where cid='$idd'";
    $result=$con->query($sql);
    $row=mysqli_fetch_assoc($result);
    $cnt=$row['Quantity'];
    $_SESSION['pid']=$idd;

    // header("Location:admin_catmain.php");

  }


  if(isset($_POST['submit']))
  {
    // echo "hello";
    $uid=$_SESSION['UID'];
    $pid=$_SESSION['pid'];
    $qty=$_POST['qt'];
    $sql="INSERT INTO `cart` (`cid`, `custid`, `qty`) VALUES ('$pid', '$uid', '$qty')";
    $result=$con->query($sql);
    header("Location:user_viewcart.php");
    // ?>

    // <script type="text/javascript">
    //   alert("Added to Cart");
    //   Location.href="customer_viewproduct.php",true;
    // </script>

    // <?php


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
            <td style="font-weight:bold ;">
            <img src="<?php echo $row['image'] ?>" style="width:250px;height:300px;" />
            <br>
           <!--  <hr style="height:10px;border: width 5px;;color:gray;background-color:gray;" width="70%" align="left"> -->
             <br>
             <hr width="70%" align="left">
            <?php echo " <b> Brand :</b> "; ?> 
            <?php echo $row['brand'] ?>
            <br>
            
            <br>
            <?php echo "<b> Price :</b>"; ?> 
            <?php echo $row['price'] ?>
            <br>
            <?php echo "<b> Manufacture Date :</b>"; ?> 
            <?php echo $row['mdate'] ?>
            <br>
            <?php echo "<b> Expiry Date :</b>"; ?> 
            <?php echo $row['edate'] ?>
            <br>
           
            <?php echo "<b> Quantity :</b>"; ?> 
            <?php echo $row['Quantity'] ?>
            <hr width="70%" align="left">
            <!-- <br> -->
            Order :
            <select name="qt">
              <?php
                for ($x = 1; $x <= $cnt; $x++) {
              ?>
              <option value="<?php echo $x ?>"><?php echo $x ?></option>
              <?php
              }
              ?>
            </select>
            <br>
            <input type="submit" name="submit" value="Add">
            <br>
            <br>
            <br>
            </td>
        
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