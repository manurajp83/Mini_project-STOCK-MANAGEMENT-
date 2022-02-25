
<?php
include('dbconnection.php');
session_start();




  if(isset($_POST['submit']))
  {
    
      
      $address=$_POST['addr'];
     
      $sql="INSERT INTO `feedback` ( `feedback`) VALUES ( '$address')";
      // echo "$sql";
      $result=$con->query($sql);
      
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
          <td>Feedback</td>
          <td>
            <textarea id="addr" name="addr" rows="4" cols="50" required>
            </textarea>
          </td>
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