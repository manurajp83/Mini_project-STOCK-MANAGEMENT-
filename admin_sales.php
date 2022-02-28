
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
  $sql="SELECT * FROM `ordmain`";
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
<?php include 'menu_admin.php' ?>
	 <div class="main">
<!-- <form method="post"> -->
	
<DIV align="center" clas>
  <hr></hr>
	 <!-- <a href="admin_offernew.php">Add New</a> -->
        
         <table border="1" align="center" width="80%">

    <tr>
      <td style="font-weight:bold">Name</td>
      <td style="font-weight:bold">Address</td>
      <td style="font-weight:bold">State</td>
      <td style="font-weight:bold">Pin</td>
      <td style="font-weight:bold">Phone</td>
      <td style="font-weight:bold">Amount</td>
      <td style="font-weight:bold">Pay Mode</td>
      
          
      <td></td>
      <td></td>
    </tr>

       <?php 
      while($row=mysqli_fetch_assoc($result))
      {
    ?>

    <tr>
   
      <td>
        <?php echo $row['name'] ?>
      </td>

      <td>
        <?php echo $row['address'] ?>
      </td>
       <td>
        <?php echo $row['state'] ?>
      </td>
        <td>
        <?php echo $row['zip'] ?>
      </td>
        <td>
        <?php echo $row['ph'] ?>
      </td>
        <td>
        <?php echo $row['amt'] ?>
      </td>
        <td>
        <?php echo $row['pmode'] ?>
      </td>

   
      <?php $idd=$row['ordid']; ?>


      <td><a href="admin_orderdetails.php?id=<?php echo $idd; ?>">View Poducts</a></td>
      <!-- <td><a href="admin_offerdel.php?id=<?php echo $idd; ?>">Delete</a></td> -->
      
     

    </tr>

    <?php
      }
    ?>
    </table>

	
<!-- </form> -->
 </DIV>




 <!-- ENDBLOCK -->
             
 <div>

<div class="map"><br>
</div>
</div>
</div>
</div>

<div class="footer">
<div class="wrap">
<div class="clear"> </div>
</div>
</div>
		
		
</body>
</html>