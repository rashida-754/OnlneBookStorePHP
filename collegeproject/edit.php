<?php
include 'conn1.php';
include 'session.php';
$sql = "SELECT * from signup where Name = '".$_SESSION['User_id']."' OR user ='".$_SESSION['User_id']."' ";
$result = mysqli_query($conn1, $sql);
$row = mysqli_fetch_assoc($result);
        $_SESSION['dob1'] = $row['dob'];
        $_SESSION['user1'] = $row['user'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="MWH Team" />

	<title>Untitled 1</title>
    <style>
     body
    {
        background-image: url("back3.png") ;
        background-repeat: no-repeat;
        background-size : cover;

    }
    .a
    {   
       margin : 0 530px;  
    }
   
    .c
         {
            height : 510px;
            width : 417px;
            color: blue;
           background: rgba(239,239,191,.7); 
         }
    </style>
</head>

<body>
<div class="a">
<form method="post" action="addbooks.php" enctype="multipart/form-data" class="c">
<h1 align="center" style="padding-top: 20px; color: navy;">ADD NEW BOOK</h1>
<table cellspacing="10">
<tr>
 <td>ISBN</td>
 <td><input type="text" name="isbn"  style="height: 20px;width: 150px;"required ></td>
 </tr>
 <tr>
 <td>Title</td>
 <td><input type="text" name="title" style="height: 20px;width: 150px;"  required></td>
 </tr>
 <tr>
 <td>Author</td>
 <td><input type="text" name="author" style="height: 20px;width: 150px;" required></td>
 </tr>
 <td>Year</td>
 <td><select name="s3" requied>
               <option>SELECT</option>
               <option >1st</option>
               <option >2nd</option>
               <option >3rd</option>
               <option >4th</option>
               </select></td>
 </tr>
 <td>Semester</td>
 <td><select name="s4" required>
               <option>SELECT</option>
               <option >1st SEM</option>
               <option >2nd SEM</option>
               <option >3rd SEM</option>
               <option >4th SEM</option>
               <option >5th SEM</option>
               <option >6th SEM</option>
               <option >7th SEM</option>
               <option >8th SEM</option></select></td></tr>
 </tr>
 <tr>
 <td>Image</td>
 <td><input type="file" name="image" style="height: 20px;width: 250px;" ></td>
 </tr>
 <tr>
 <td>Description</td>
 <td><textarea name="descr" cols="30" rows="5"></textarea></td>
 </tr>
 <tr>
 <td>Price</td>
 <td><input type="text" name="price" style="height: 20px;width: 150px;" required></td>
 </tr>
 <tr>
 <td>Publisher</td>
 <td><input type="text" name="publisher" style="height: 20px;width: 150px;" required></td>
 </tr>
<tr>
 <td><input type="submit" name="add" value="Add new book" class="btn btn-primary"></td>
 <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="reset" value="cancel" class="btn btn-default"></td>
 </tr>
  </table>
 </form>
 <br/>
</div>

</body>
</html>

<?php

	if(isset($_POST['add']))
    {
        if($_POST['s3']!="SELECT" && $_POST['s4']!="SELECT")
        {
		$title = trim($_POST['title']);
        $author = trim($_POST['author']);
        $descr = trim($_POST['descr']);	
		$price = floatval(trim($_POST['price']));	
		$publisher = trim($_POST['publisher']);

		// add image
		if(isset($_FILES['image']) && $_FILES['image']['name'] != ""){
			$image = rand(1000,100000)."-".$_FILES['image']['name'];
			$directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);
			$uploadDirectory = $_SERVER['DOCUMENT_ROOT'] . $directory_self . "image/";
			$uploadDirectory .= $image;
			move_uploaded_file($_FILES['image']['tmp_name'], $uploadDirectory);}
	

		$query = "INSERT INTO books(year,sem,book_title,book_author,book_image,book_descr,book_price,publisher,dob,uname) VALUES 
        ('" . $_POST['s3'] . "', '" . $_POST['s4'] . "','" . $title. "', '" . $author . "', '" . $image . "', '" . $descr . "', '" . $price . "', '" . $publisher . "','" . $row[dob] . "'
        ,'" . $row[user]. "')";
		  echo "<script>alert('HELLO3')</script>";
		if( mysqli_query($conn1, $query))
        {
			echo "<script>alert('Add Successfully')</script>";
            
		 
        mysqli_close($conn1);
        }
        else
         {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn1);
		}
        
		
      mysqli_close($conn1);
	}
    
    else if($_POST['s3']=="SELECT" && $_POST['s4']=="SELECT")
     echo "<script>alert('PLEASE FILL FORM CAREFULLY')</script>";
     }
?>