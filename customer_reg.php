<?php
  session_start();
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
    // echo "hello";
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $phone=$_POST['mob'];
    $adr=$_POST['addr'];
    $city=$_POST['city'];
    $pwd=$_POST['pass'];
    $conf=$_POST['confirm'];

    

    $sql="INSERT INTO `login` ( `uname`, `pwd`, `utype`) VALUES ( '$email', '$pwd', 'customer')";
    $result=$con->query($sql);

    $sql="select max(`uid`) as logid from login";
	$result=$con->query($sql);
	$row=mysqli_fetch_assoc($result);
	$lid=$row['logid'];
	// echo "$lid";
	$sql="INSERT INTO `customer` (`fname`, `lname`, `email`, `mobile`, `address`, `city`, `uid`) VALUES ( '$fname', '$lname', '$email', '$phone', '$adr', '$city', '$lid')";
	$result=$con->query($sql);

	

    // header("Location:index.php");
	}
	
  
 
 	$name="";
    $email="";
    $phone="";
    $adr="";
    $gender="";
    $pwd="";



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
<script type="text/javascript">
	var check = function() {
  if (document.getElementById('pass').value ==
    document.getElementById('confirm').value) {
  	
    
  } else {
  	document.getElementById('confirm').value='';
    alert('password and confirm password not matching');
  }
}
</script>
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
			First Name
			</td>
			<td>
				<input type="text" name="fname" required>
			</td>
		</tr>
		<tr>
			<td>
			Last Name
			</td>
			<td>
				<input type="text" name="lname" required>
			</td>
		</tr>
		<tr>
			<td>
			Address
			</td>
			<td>
				<input type="text" name="addr" required>
			</td>
		</tr>
		<tr>
			<td>
			Mobile
			</td>
			<td>
				<input type="text" name="mob" required>
			</td>
		</tr>
		<tr>
			<td>
			City
			</td>
			<td>
				<input type="text" name="city" required>
			</td>
		</tr>

		<tr>
			<td>
			Username
			</td>
			<td>
				<input type="text" name="email" required>
			</td>
		</tr>
		<tr>
			<td>
			Password
			</td>
			<td>
				<input type="password" name="pass" id="pass" required>
			</td>
		</tr>

		<tr>
			<td>Confirm Password</td>
			<td><input type="Password" name="confirm" id="confirm" onfocusout='check();'></td>
		</tr>

			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="submit"></td>
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