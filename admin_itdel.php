<?php
include('dbconnection.php');

if(isset($_GET['id']))
  {
    $idd=$_GET['id'];
    $sql="delete from `item` where itid='$idd'";
    $result=$con->query($sql);
    header("Location:admin_itemmain.php");

  }

  ?>