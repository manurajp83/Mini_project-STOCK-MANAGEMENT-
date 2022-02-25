<?php
  session_start();
  $uid=$_SESSION["UID"];
 // echo 'hello';
  echo $uid;
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
    $uid=$_SESSION["UID"];
    // $pwd=$_POST['pass'];
    // $conf=$_POST['confirm'];

    

        
	// echo "$lid";
	$sql="UPDATE `customer` SET `fname` = '$fname', `lname` = '$lname', `email` = '$email', `mobile` = '$phone', `address` = '$adr', `city` = '$city' WHERE `customer`.`cid` ='$uid'";
	$result=$con->query($sql);

	

    // header("Location:index.php");
	}
	
    $sql=" select * from customer where cid='$uid'";
    //echo $sql;
    $result=$con->query($sql);
	$row=mysqli_fetch_assoc($result);
 
 	$name=$row['fname'];
    $lname=$row['lname'];
    $email=$row['email'];
    $mob=$row['mobile'];
    $address=$row['address'];
    $city=$row['city'];



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
            document.getElementById('confirm').value = '';
            alert('password and confirm password not matching');
        }
    }
    </script>
</head>

<body>
<?php include 'menu_user.php' ?>

<!-- <form method="post"> -->



        

           


                <!-- BLOCK -->
                
                    
                <form method="post" method="">
                    <DIV align="center" clas>
                    

                        <table align="center">
                            <tr>
                                <td>
                                    First Name
                                </td>
                                <td>
                                    <input type="text" name="fname" value="<?php echo $name ?>" required placeholder="First Name">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Last Name
                                </td>
                                <td>
                                    <input type="text" name="lname" value="<?php echo $lname ?>" required placeholder="Last Name">
                                </td>
                            </tr>
                            <!-- <tr>
                                <td>
                                    Gender
                                </td>
                                <td>
                                    <select name="gender" style="width: 50%;margin-bottom: 10px;">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>
                                <td>

                            </tr> -->




                            <tr>
                                <td>
                                    Address
                                </td>
                                <td>
                                    <input type="text" value="<?php echo $address ?>" name="addr" required placeholder="Address">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Mobile
                                </td>
                                <td>
                                    <input type="text" name="mob" value="<?php echo $mob ?>" required maxlength="10" pattern="\d{10}"
                                        class="form-control" placeholder="Phone" required="required"
                                        title="Please use numbers">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    City
                                </td>
                                <td>
                                    <input type="text" name="city" value="<?php echo $city ?>" required placeholder="City">
                                </td>
                            </tr>

                             <tr>
                                <td>
                                    Email
                                </td>
                                <td>
                                    <input type="text" name="email" value="<?php echo $email ?>" required>
                                </td>
                            </tr>
                            <!--
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
                            </tr> -->

                            <tr>
                                <td></td>
                                <td><input type="submit" name="submit" value="submit"></td>
                            </tr>

                            <tr>
                                <td></td>

                                <!-- <td><a href="index.php">Back to Login page</a></td> -->
                            </tr>
                        </table>


                </form>
            </DIV>




            <!-- ENDBLOCK -->

            <div>

<!--<div class="map"><br>!-->

</body>

</html>