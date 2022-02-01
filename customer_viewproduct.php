
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
  $colnum=4;

  $rnum=mysqli_num_rows($result);
  // $trws=$rnum/4;
  $trws=intdiv($rnum,$colnum);

  $r=$rnum%$colnum;

  if($r>0)
  {
    $trws=$trws+1;
  }
  
  echo "$trws";
 
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
          
            <!-- <ul>
              <li><a href="admin_catmain.php">Category</a></li>
              <li><a href="admin_productmain.php">Product</a></li>
              <li><a href="admin_brandmain.php">Brand</a></li>
            </ul> -->
          </li>
          <li><a href="#">Product</a>
            <!-- <ul>
              <li><a href="admin_itemmain.php">Items</a></li>
              <li><a href="admin_catmain.php">Category</a></li>
              
            </ul> -->
          </li>
          <li><a href="#">Orders</a>
            <!-- <ul>
              <li><a href="#">Complaints</a></li>
              
            </ul> -->
          </li>
          <li><a href="#">Offers</a>
            <!-- <ul>
              <li><a href="admin_offernew.php">Offer</a></li>
            </ul> -->
          </li>
          <li><a href="#">Feedback</a>
            
            
          </li>
          <li><a href="#">Profile</a>
            
          </li>
          <li><a href="index.php">Logout</a>
            
          </li>
          </ul>    


          
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
	      <div class="m_contact"><span class="left_line1"> </span><span class="right_line1"> </span></div>

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
<table >	
<?php
      $i=0;
      $rc=0;
      while ($i<$trws) {
        $j=0;
    ?>
      <tr>
        <?php 
        while ($j<$colnum) {
          $row=mysqli_fetch_assoc($result);
          // $res=$row['image'];
          ?>
            <td style="margin: 10px; padding: 5px;" >
            <img src="<?php echo $row['image'] ?>" style="width:200px;height:200px;" />
            
            <br>
            <br>
          
            
      
             <br>
             <br>

            <?php echo $row['brand'] ?> 
            <br>
        
            <?php echo $row['Color'] ?>
            <br>
            <?php echo $row['price'] ?>
            <br>
            <?php echo $row['mdate'] ?>
            <br>
            <?php echo $row['edate'] ?>
            <br>
            
            <?php echo $row['Quantity'] ?>
            </td>
          <?php
          // echo "<td><a href='#'><img src='uploads/$res' width='300' height='300'></a></td>";
          $rc=$rc+1;
          if($rc>=$rnum)
          {
            break;
          }
          
          $j=$j+1;
        }
        // print('hello');
        $i=$i+1;
        ?>
      </tr>
    <?php
      }
    ?>
 

    
 </table>
        
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