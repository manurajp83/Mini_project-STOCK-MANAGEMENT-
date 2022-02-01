<?php
include('dbconnection.php');

if(isset($_GET['id']))
  {
    $idd=$_GET['id'];
    $sql="delete from `offers` where ofid='$idd'";
    $result=$con->query($sql);
    header("Location:admin_offers.php");

  }

  ?>