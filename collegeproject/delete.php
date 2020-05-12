<?php

include'conn1.php';

  if(isset($_GET['id']))
  {

    $sql4 = "DELETE  FROM books WHERE id ='".$_GET['id']."'";
    
            if(mysqli_query($conn1, $sql4))
             {
                 echo "<script>alert('Deleted Successfully')</script>";
                header("refress:1;url=profile.php");
             }
            else
             {
               die('Could not delete data: ' . mysql_error());
             }
               echo"<script>window.location='profile.php'</script>";  
            
             }

mysqli_close($conn1);

?>