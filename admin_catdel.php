<?php
include('dbconnection.php');

if(isset($_GET['id']))
  {
    $idd=$_GET['id'];
    $sql="delete from `cat` where cid='$idd'";
    $result=$con->query($sql);
    header("Location:admin_catmain.php");

  }

  ?>