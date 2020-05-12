<?php
include 'conn.php';
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
        background-image: url("back1.jpg") ;
        background-repeat: no-repeat;
        background-size : cover;

    }
   .a
      {
            margin : 100px 550px ;    
      }
         .b 
         {
            margin : 0 30px;
         }
         .c
         {
            height : 400px;
            width : 320px;
           background: rgba(204, 229,255,.5); 
         }
         .d
         {
            height : 30px;
            width : 200px;
            background-color: #DC7572;
            margin-left: 15px;
         }   
         
         
    </style>
</head>

<body >
<div class="a"> 
<form  class="c" method="POST" action="" name="f0">
<h1 align="center" style="padding-top: 20px;">USER LOGIN</h1>
<br /><br />
<div class="b">
<label>USER NAME/USER ID</label>
<br /><br />
<input type="text" name="uname" placeholder="User Name/User Id" style="height: 20px;width: 220px;" required>
<br /><br />
<label>PASSWORD</label>
<br /><br />
<input type="password" name="pass" placeholder="Password" style="height: 20px; width : 220px" required>
<br /><br />
&nbsp;&nbsp;
<input type="submit" name="login" value="CONTINUE" class="d">
<br /><br /><br />
<input type="submit" name="cancel" value="CANCEL">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span>Forgot <a href="forgotpassword.php">password?</a></span>
</div>
</form>
</div>
</body>
</html>
<?php  
if(isset($_POST['login']))  
{  
      
  
    $sqll="select * from  signup WHERE (user='".$_POST['uname']."'  AND pass='".$_POST['pass']."') OR  (Name='".$_POST['uname']."'  AND pass='".$_POST['pass']."')";  
  
    $run=mysqli_query($conn,$sqll);  
  
    if(mysqli_num_rows($run))  
    {  
        echo "<script>window.location='profile.php'</script>"; 
        
        session_start();
  
        $_SESSION['User_id']=$_POST['uname'];//here session is used and value of $user_email store in $_SESSION.  
        
    }  
    else  
    {  
      echo "<script>alert('USER ID OR Password IS INCORRECT!')</script>";  
    }  
}  
?>  
