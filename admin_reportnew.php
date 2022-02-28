
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
   if(isset($_POST['submit']))
  {
    
    $sql="SELECT a.*,b.name FROM `cat` as a,item as b where b.itid=a.itid";
    $result=$con->query($sql);
    echo $sql;
  }
  else
  {
    $sql="SELECT a.*,b.name FROM `cat` as a,item as b where b.itid=a.itid and a.cid=0";
    $result=$con->query($sql);
    echo $sql;
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
<?php include 'menu_admin.php' ?>
	 <div class="main">
<!-- <form method="post"> -->
	
<DIV align="center" clas>
  <hr></hr>
	 <!-- <a href="admin_offernew.php">Add New</a> -->

        
         <table border="1" align="center" width="80%">
          <form method="post">
            <tr>

              <td>From</td>
              <td><input type="date" name="from" required></td>
               <td>To</td>
              <td><input type="date" name="to" required>
                <input type="submit" name="submit">
              </td>
       
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              
                  
              <td></td>
              <td></td>
            </tr>
          </form>

    <tr>
      <td style="font-weight:bold">Brand</td>
      <td style="font-weight:bold">Item</td>
      <td style="font-weight:bold">Stock</td>
      <td style="font-weight:bold">Price</td>
      <td style="font-weight:bold">Sales</td>
      <td style="font-weight:bold">Amount</td>
     
      
          
      <td></td>
      <td></td>
    </tr>

       <?php 
      while($row=mysqli_fetch_assoc($result))
      {
        $cid=$row['cid'];

        $sql="select sum(qty) as sqty from orddetails where cid='$cid'";
        $res1=$con->query($sql);
        $nrows=mysqli_num_rows($res1);
        if($nrows>0)
        {
          $srow=mysqli_fetch_assoc($res1);
          $sales=$srow['sqty'];
        }
        else
        {
          $sales=0;
        }
        $pr=$row['price'];
        $amt=$pr*$sales;

    ?>

    <tr>
   
      <td>
        <?php echo $row['name'] ?>
      </td>

      <td>
        <?php echo $row['brand'] ?>
      </td>
       <td>
        <?php echo $row['Quantity'] ?>
      </td>
        <td>
        <?php echo $row['price'] ?>
      </td>
        <td>
        <?php echo $sales ?>
      </td>
        <td>
        <?php echo $amt ?>
      </td>
       <!--  <td>
        <?php echo $row['pmode'] ?>
      </td> -->

   
      <!-- <?php $idd=$row['ordid']; ?> -->


      <td><a href="admin_orderdetails.php?id=<?php echo $idd; ?>">View Poducts</a></td>
       <td><a href="admin_offerdel.php?id=<?php echo $idd; ?>">Delete</a></td> 
      
     

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