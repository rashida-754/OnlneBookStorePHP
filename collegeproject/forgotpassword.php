<?php
include 'conn.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="MWH Team" />
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <style type="text/css">
div.ui-datepicker, .ui-datepicker input{font-size: smaller;z-index: -1000; }
</style>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  
  </script>
	<title>Untitled 1</title>
    <style>
     body
     {
        background-image: url("fpass.png");
        background-repeat: no-repeat;
        background-size : cover;
     }
     th,td
     {
        height : 40px;
     }
     .a
     {
        margin : 80px 250px;
     }
     .b
     {
        
            height : 300px;
            width : 400px;
            
           background: rgba(102,255,255,.5);
         
     }
     .c
     {
        margin-left: 100px;
     }
     
     
    </style>
</head>

<body>
<div class="a">
<form class="b" method="POST" action="" name="f1">
<label><h2 align="center" style="padding-top: 20px;" >Forgot Your Password ?</h2></label>
<table>
<tr>
 <td><label>ENTER YOUR NAME : </label></td>
 <td><input type="text" name="name" required PLACEHOLDER="NAME"></td>
</tr>
<td><label>ENTER YOUR ROLL NUMBER : </label></td>
 <td><input type="text" name="roll" required placeholder="ROLL NO."></td>
</tr>
<td><label>ENETR DOB : </label></td>
 <td><input id="datepicker" type="text" name="dob" required  placeholder="mm/dd/yyyy" style="height: 20px;width: 150px;"> </td>
</tr>
</table>
<br /><br />
<input type="submit" class="c" name="submit" value="KNOW YOUR PASSWORD"style="background-color: aqua;">

</form>
</div>

</body>
</html>
<?php
if(isset($_POST['submit']))  
{  
      
  
    $sqll="select * from  signup WHERE user='".$_POST['name']."' OR Name='".$_POST['name']."' AND roll='".$_POST['roll']."' AND dob='".$_POST['dob']."'" ;  
  
    $run=mysqli_query($conn,$sqll);  
    
  
    if(mysqli_num_rows($run))  
    {  
        $row= mysqli_fetch_assoc($run); 
        echo "<script> alert ('YOUR PASSWORD IS :$row[pass]')</script>"; 
        mysqli_close($conn);
    }  
    else  
    {  
      echo "<script>alert('USER ID OR Password IS INCORRECT!')</script>";  
    }  
}  
?>  