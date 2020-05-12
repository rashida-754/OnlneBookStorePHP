<?php
error_reporting(0);
  include "conn3.php";
  $book_isbn = $_GET['id'];
  $query = "SELECT * FROM books WHERE id = '$book_isbn'";
  $result = mysqli_query($conn, $query);
  if(!$result){
    echo "Can't retrieve data " . mysqli_error($conn);
    exit;
  }
  
  $row = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="MWH Team" />

	<title>BOOK DETAILS</title>
    <style>
     body
     {
        background: rgba(255,255,204,.2);
         padding: 0;
        margin: -20px 0;
        height : 100%;
     }
    table
    {
        margin : 50px 350px;
        width : 600px;
    }
    </style>
</head>

<body>
 <table cellpadding="10">
  
  
  <tr>
  <td rowspan="2"> <?php 
 echo "<div class='col-sm-3'style='padding-bottom: 50px;padding-left:60px'> <img  src='./image/$row[book_image]' style='height: 325px;width: 200px;'></div>";
 ?></td>
    <td><h4>Book Description</h4>
          <p><?php echo $row['book_descr']; ?></p></td>
    
    
  </tr>
  <tr>
    <td><h4>Book Details</h4>
     <p>AUTHOR :  <?php echo $row[book_author]?><br /><br />
     YEAR    : <?php echo $row[year]?><br /><br />
     SEMESTER : <?php echo $row[sem]?><br /><br />
     PRICE   : <?php echo $row[book_price]?><br /><br />
     UPLOADED BY : <?php echo $row[uname]?></p><br />
     
     </td>
    
  </tr>
</table>
 <form method="post" action="cart" >
            <input type="hidden" name="bookisbn" value="<?php echo $book_isbn;?>">
            <input type="submit" value="Purchase / Add to cart" name="cart" class="btn btn-primary">
          </form>


</body>
</html>
 <?php  if(isset($conn)) {mysqli_close($conn); }?>