<?php
  include('dbconnection.php');

  if(isset($_POST['submit']))
  {
    echo "hello";
    $uname=$_POST['uname'];
    $pass=$_POST['password'];
    $sql="select * from login where uname='$uname' and pwd='$pass'";
    $result=$con->query($sql);
    $nrows=mysqli_num_rows($result);
    if($nrows>0)
    {
      echo "hiiiii";
      $utype=mysqli_fetch_assoc($result);
      if($utype['utype']=="admin")
      {
        session_start();
        $_SESSION['UID']="0";
        $_SESSION['stat']="Active";
        header("Location:adminhome.php");

      }
      elseif($utype['utype']=="customer")
      {
      	session_start();
        $lid=$row['uid'];
        $sql="select cid from customer where uid='$lid'";
		$result=$con->query($sql);
		$row=mysqli_fetch_assoc($result);
		
		
        $_SESSION['UID']=$row['uid'];
        $_SESSION['stat']="Active";
        header("Location:customerhome.php");

      }
    }

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
<div class="wrap"> 
	<div class="pages-top">
	        <div class="logo">
			<a href="#"><img src="images/sr.png" alt=""/></a> 
			 </div>
		     <div class="h_menu4"><!-- start h_menu4 -->
				<a class="toggleMenu" href="#">Menu</a>
				<ul class="nav">
					
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
	      <div class="m_contact"><span class="left_line1"> </span>LOGIN<span class="right_line1"> </span></div>

<form method="post" method="">
<DIV align="center" clas>
	<table align="center">
		<tr>
			<td>
			Username
			</td>
			<td>
				<input type="text" name="uname">
			</td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="Password" name="password"></td>
		</tr>

			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="submit"></td>
			</tr>
			<tr>
				<td></td>
				<td><a href="customer_reg.php">New Customer</a></td>
			</tr>

	</table>


</form>
 </DIV>




 <!-- ENDBLOCK -->
             
              <div >
           
               <div class="map"><br>
                 </div>		
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