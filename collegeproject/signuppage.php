<?php
include 'conn.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="MWH Team" />
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
	<title>SIGN UP</title>
    <style>
    body
    {
        background-image: url("back2.jpg");
        background-repeat: no-repeat;
        background-size : cover;
        
    }
    .a
    {   
       margin : 0 530px;  
    }
    .b
    {
        margin : 0 70px;
    }
    .c
         {
            height : 650px;
            width : 317px;
           background: rgba(239,239,191,.7); 
         }
    </style>
</head>

<body>
<div class="a">
<form class="c" name="f1" action="" method="POST">
<h1 align="center" style="padding-top: 20px;">SIGN UP</h1>
<br />
<div class="b">
<label>NAME  </label>
<br /><br />
<input type="text" name="name" placeholder="NAME" style="height: 20px;width: 150px;" required>
<br /><br />
<label>USER ID  </label>
<br /><br />
<input type="text" name="u_id" placeholder="USER ID" style="height: 20px;width: 150px;" required>
<br /><br />
<label>ROLL NO. </label>
<br /><br />
<input type="text" name="roll" placeholder="" style="height: 20px;width: 150px;" required>
<br /><br />
<label>DATE OF BIRTH </label>
<br /><br />
<input id="datepicker" type="text" name="dob" style="height: 20px;width: 150px;" required placeholder="dd/mm/yyyy" >
<br /><br />
<label>PASSWORD </label>
<br /><br />
<input type="password" name="pass" placeholder=".........." style="height: 20px;width: 150px;"required>
<br /><br />
<label>CONFIRM PASSWORD </label>
<br /><br />
<input type="password" name="cpass" placeholder="..........." style="height: 20px;width: 150px;" required>
<br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="abc" value="Join The Group" >
</div>

</form>
</div>
</body>
</html>

<?php
if(isset ($_POST['abc']))
{
if($_POST['pass']== $_POST['cpass'])
{
    $sql ="INSERT INTO signup(Name,user,roll,dob,pass,cpass) VALUES ('".$_POST['name']."','".$_POST['u_id']."','".$_POST['roll']."',
      '".$_POST['dob']."','".$_POST['pass']."','".$_POST['cpass']."')";

if (mysqli_query($conn, $sql)) 
{
      echo "<script>alert('REGISTERED SUCCESSFULLY')</script>";
} 
echo   "<script>window.location='loginpage.php'</script>";
mysqli_close($conn);

}
else
{
   echo "<script>alert('PLEASE FILL UP THE INFORMATION CORRECTLY')</script>";
   echo "<script>window.location='signuppage.php'</script>"; 
}
}
?>