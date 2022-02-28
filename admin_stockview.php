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
    <?php include 'menu_admin.php' ?>
    <div class="main">

        <DIV align="center" clas>
   
 
            <table border="1" align="center" width="80%">

 
          
                <tr >
                    <!--<td style="font-weight:bold">Catid</td>!-->
                    <td style="font-weight:bold ; margin: 10px; padding: 25px;">Brand</td>

                    <td style="font-weight:bold; margin: 10px; padding: 25px;">M-Date</td>
                    <td style="font-weight:bold; margin: 10px; padding: 25px;">E-Date</td>
                    <td style="font-weight:bold; margin: 10px; padding: 25px;">Price</td>
                    <td style="font-weight:bold; margin: 10px; padding: 25px;">Quantity</td>
                    <td style="font-weight:bold; margin: 10px; padding: 25px;">desc</td>
                    <td style="font-weight:bold; margin: 10px; padding: 25px;">Image</td>

                    <td></td>
                    <td></td>
                </tr>
                <div class="m_contact"><span class="left_line1"> </span>Products<span class="right_line1"> </span></div>
                <hr></hr>

<a href="admin_catnew.php">Add New</a>
<hr></hr>

                <?php 
                
      while($row=mysqli_fetch_assoc($result))
      {
        
    ?>



                <tr>

                    <td style=" margin: 10px; padding: 25px;">
                        <?php echo $row['brand'] ?>
                    </td>

                    <td style=" margin: 20px; padding: 25px;">
                        <?php echo $row['mdate'] ?>
                    </td>
                    <td style=" margin: 20px; padding: 25px;">
                        <?php echo $row['edate'] ?>
                    </td>
                    <td style=" margin: 10px; padding: 25px;">
                        <?php echo $row['price'] ?>
                    </td>
                    <td style=" margin: 10px; padding: 25px;">
                        <?php echo $row['Quantity'] ?>
                    </td>
                    <td style=" margin: 10px; padding: 25px;">
                        <?php echo $row['Color'] ?>
                    </td>
                    <td style=" margin: 10px; padding: 25px;">
                        <img src="<?php echo $row['image'] ?>" style="width:200px;;height:100px;">
                    </td>




                    <!-- <?php $idd=$row['cid']; ?>


                    <td><a href="admin_catnew.php?id=<?php echo $idd; ?>">Edit</a></td>
                    <td><a href="admin_catdel.php?id=<?php echo $idd; ?>">Delete</a></td> -->



                </tr>

                <?php
                
      }
      
    ?>
    
            </table>

           
            


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