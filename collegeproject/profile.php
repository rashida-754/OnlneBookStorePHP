<?php
error_reporting(0);
include 'conn1.php';
include 'session.php';
$sql = "SELECT * from books where dob = '". $_SESSION['dob1']."' AND uname = '". $_SESSION['user1']."' ";
$result = mysqli_query($conn1, $sql);
?>
;<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="MWH Team" />
    

	<title>Untitled 4</title>
    <style>

body
{
   background: rgba(229, 255,153,.5);
    text-align: center;
     background-repeat: no-repeat;
        background-size : cover;
        
    
}
table
{
    margin: 10px 300px;
}
td,th,table{
    text-align: center;
    border-collapse: collapse;
    border: 2px solid gray;
   background-color: white;    
    height : 70px;
    font-size: 22px;
    width: 200px;
    
}
th
{
    color: blue;
}

</style>
<script language='JavaScript'>

function validate()
{
	conf = confirm("Are you sure you want to delete?");
	if (conf)
		return true
	else
		return false;
}

</script>
</head>

<body>
<h1 style="color: #F4AD09;">BOOKS ADDED</h1>
<table style="padding-left: 50px;">
<th>SI.No</th><th>BOOK TITLE</th><th>BOOK AUTHOR</th><th>BOOK IMAGE</th><th>BOOK DESCRIPTION</th><th>PUBLISHER</th><th>BOOK PRICE</th>
<th colspan="2">MODIFY</th>

<?php

$si_no=1;
if (mysqli_num_rows($result) > 0) 
{
    // output data of each row
    while($row= mysqli_fetch_assoc($result)) 
    
    {
     echo"<tr><td>$si_no</td>";
     echo"<td>$row[book_title]</td>";     
     echo"<td>$row[book_author]</td>"; 
     echo"<td> <img  src='./image/$row[book_image]' style='height: 125px;width: 100px;'></td>"; 
     echo"<td>$row[book_descr]</td>"; 
     echo"<td>$row[publisher]</td>"; 
     echo"<td>$row[book_price]</td>"; 
     echo"<td><a href='edit.php?id=$row[id]'><img src='edit.png'style='height: 25px;width: 40px;'></img></a></td>";
     echo"<td><a href='delete.php?id=$row[id]'><img src='delete.png'style='height: 25px;width: 40px;'></img></a></td>";   
       $si_no++; 
      
    }
}

mysqli_close($conn1);

?>

</table>
</body>
</html>