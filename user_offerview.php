
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
  $sql="select a.*,b.brand from offers as a,cat as b where a.cid=b.cid";
  $result=$con->query($sql);
  $colnum=3;

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





<table  align="center"  width="100%">	

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
          
             
            <td style="font-weight:bold ;">
            <img src="images/offer.jpg" style="width:250px;height:300px;" />
            
           
        
          
            
      
            <br>
            <hr style="height:10px;border: width 5px;;color:gray;background-color:gray;" width="70%" align="left">
             
            <?php echo " <b> Offer :</b> "; ?> 
            <?php echo $row['offer'] ?>
            <br>
            <?php echo "<b> From :</b>"; ?> 
            <?php echo $row['vfrom'] ?>
            <br>
            <?php echo "<b> To :</b>"; ?> 
            <?php echo $row['vto'] ?>
            <br>
            <?php echo "<b> Brand :</b>"; ?> 
            <?php echo $row['brand'] ?>
            <br>
            
            <hr width="70%" align="left">
            <br>
            <br>
            <br>
            <br>
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
      <br>
    <?php
      }
    ?>
 

    
 </table>
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