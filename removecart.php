<?php
include('dbconnection.php');

if(isset($_GET['id']))
  {
    $idd=$_GET['id'];
    $sql="delete from `cart` where slno='$idd'";
    $result=$con->query($sql);
    header("Location:user_viewcart.php");

  }

  ?>