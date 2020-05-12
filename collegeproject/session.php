<?php
session_start();
if($_SESSION['User_id']=="" || $_SESSION['User_id']=="1")
{
    echo"<script>window.location='loginpage.php'</script>";
}

?>

