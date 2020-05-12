<?php
include 'conn3.php';

$sql = "SELECT * from books  where year='2nd'";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="MWH Team" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<title>SECOND YEAR BOOKS</title>
    <style>
      .row-m-t
      {
       margin-top : 20px;
      }
        body
     {
        padding: 0;
        margin: -20px 0;
        height : 100%;
        
     }
    </style>
</head>

<body>
<h2 class="lead text-center text-muted" >Full Catalogs of Books</h2>
<div class="row">
    <?php  
    
           while($row= mysqli_fetch_assoc($result))
           { 
            
           echo"<a href='abc.php?id=$row[id]'>
           <div class='col-sm-3'style='padding-bottom: 50px;padding-left:60px'> <img  src='./image/$row[book_image]' style='height: 325px;width: 200px;'></div>"; 
            }
            
         mysqli_close($conn);
           ?> 
</div>
</body>
</html>