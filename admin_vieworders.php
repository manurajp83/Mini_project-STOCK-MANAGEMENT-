
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
  $sql="SELECT * FROM `ordmain` where status!='rejected'";
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
   <div class="m_contact"><span class="left_line1"> </span>view orders<span class="right_line1"> </span></div>

<!-- <form method="post"> -->
<div>
<hr></hr>

<DIV align="center" clas>
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
      
     
    

    <td>
      <?php 
      if($row['status']=='Order')
      {?>

    <a href="?aid=<?php echo $idd; ?>">accept</a> <a href="?rid=<?php echo $idd; ?>">reject</a></td>

    <?php
      }else
      {
        ?>
<h6>  accepted  </h6>
        <?php
      }
    ?>
      
      
     
    </tr>

    <?php
      }
    ?>
    </table>

	<?php
if(isset($_GET['rid']))
{
  $sql="update ordmain set status='rejected' where ordid=$_GET[rid]";
  $result=$con->query($sql);
  echo "<script>window.location='admin_vieworders.php';</script>";
}

if(isset($_GET['aid']))
{
  $sql="update ordmain set status='accepted' where ordid=$_GET[aid]";
  $result=$con->query($sql);
  echo "<script>window.location='admin_vieworders.php';</script>";
}



?>
<!-- </form> -->
 </DIV>


 <hr></hr>


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