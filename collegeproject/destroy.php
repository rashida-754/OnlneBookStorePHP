<?php
session_start();
$_SESSION['User_id']=1;
$_SESSION['User_id']="";

echo"<script>window.location='loginpage.php'</script>";
?>