
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

  }
  $sql="SELECT a.*,b.qty FROM `cat` as a, orddetails as b where a.cid=b.cid";
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
	 <!-- <a href="admin_offernew.php">Add New</a> -->
    <hr></hr>
    <hr></hr>
        
         <table border="1" align="center" width="80%">

    <tr>
      <td style="font-weight:bold">Brand</td>
      <td style="font-weight:bold">Description</td>
      <td style="font-weight:bold">Image</td>
      <td style="font-weight:bold">Price</td>
      <td style="font-weight:bold">Qty</td>
      <!-- <td style="font-weight:bold">Amount</td> -->
      
      
          
      <td></td>
      <td></td>
    </tr>

       <?php 
      while($row=mysqli_fetch_assoc($result))
      {
    ?>

    <tr>
   
      <td>
        <?php echo $row['brand'] ?>
      </td>

      <td>
        <?php echo $row['Color'] ?>
      </td>
       <td>
        <img width="200" height="100" src="<?php echo $row['image'] ?>">
        
      </td>
        <td>
        <?php echo $row['price'] ?>
      </td>
        <td>
        <?php echo $row['qty'] ?>
      
      
     

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