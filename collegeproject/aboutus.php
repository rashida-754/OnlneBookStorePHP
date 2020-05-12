<?php
include 'conn.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>
</title>

<script>
$(document).ready(function(){
    $("#link1").click (function(){
    $path=$("#about").offset().top;
$('body').animate({scrollTop:$path},1000);
});
});
</script>

</head>
<style>
*{
  margin:10px 0px;
  padding:0px;
  }
 #n
 {
  border:0px solid black;
  height:1300px;
  width:1200px;
  margin:auto;
 }
 #h
 {
  background: linear-gradient(blue,white);
  height:75px;
  text-align:center;
  line-height:75px;
  color:black;
 }
 #menu
 {
   background:#000000;
   width:100%;
   box-shadow:0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);
 }
#r{
  float:right;
  }
 ul
 {
   text-align:center;
   display:inline;
   list-style:none;

 }
 ul li{
 font:bold 18px;
 display:inline-block;
  position:relative;
  padding:15px 10px;
  background:#6699cc;
  }
 ul li a{
   text-decoration:none;
   padding:15px 10px;
   font-size:18px;
   color:white;
  }
ul li:hover
{
  background:#4dd0e1;
  color:white;
  }
  
ul li ul{
 position:absolute;
 top:50px;
 left:0;
 width:100px;
 display:none;
 visibility:hidden;
 }
ul li ul li{
 background:#00acc1:
 display:block;
 }
 ul li ul li:hover{
  background:#4dd0e1;
  }
 ul li:hover ul{
  display:block;
  visibility:visible;
  }
 ul ul ul li{
   display:none;
   }
 ul ul li:hover li{
 display:block;
 }
 ul ul ul{
 left:100%;
 top:0;
 }
  #k{
   text-align:centre;
   color:green;
  font-weight:bold;
   margin-top:10px;
   }
  
 #main
 {
   width:1150px;
   height:280px;
   border:0px solid red;
   margin:auto;
   margin-top:20px;
   background-color:#eeeeee;
 }
 #main1
 {
   width:1150px;
   height:340px;
   border:0px solid red;
   margin:auto;
   background-color:#eeeeee;
 }
 #first{
    height:300px;
	width:310px;
	float:left;
	margin-left:10px;
	}
#second{
                  height:300px;
	width:315px;
	float:left;
	
	}
#third{
    height:300px;
	width:320px;
	float:left;
	
	}
#fourth{
    height:330px;
	width:0px;
	float:left;
	margin-right:0px
	}
#fifth{
    height:300px;
	width:300px;
	margin:5px;
                    margin-left:10px;
	float:left;
	}
#sixth{
    height:300px;
	width:310px;
	margin:5px;
	float:left;

	}
#seventh{
    height:300px;
	width:310px;
	margin:5px;
	float:left;
	}
#eighth{
    height:300px;
	width:0px;
	margin:5px;
	float:left;
	}
#title{
	color:orange;
	font-size:18px;
	font-weight:bold;
                   
	}
#about
{
  width:1150px;
   height:200px;
   border:0px solid red;
   margin:auto;
   margin-top:20px;
   }
 #content{
   text-align:justify;
   padding:5px;
   font-size:18px;
   }
 #contact{
  width:1150px;
   height:150px;
   border:0px solid red;
   margin:auto;
   margin-top:10px;
 }
 #contact1{ 
   width:1150px;
   height:150px;
   border:0px solid red;
   margin:auto;
 }
 #n1{
   width:300px;
   height:120px;
   margin:auto;
   float:left;
   background-color:#eeeeee;
 }
 #n2{
   width:300px;
   height:120px;
   margin:auto;
   margin-left:120px;
   float:left;
   background-color:#eeeeee;
 }
 #n3{
   width:300px;
   height:120px;
   margin:auto;
   margin-left:120px;
   margin-right:0px;
   float:left;
   background-color:#eeeeee;
 }
 
</style>
<body>

   
	<div id="k">
	 <marquee>ALL WBUT BOOKS ARE AVAILABLE HERE</marquee>
	</div>
	<div id="main">
	    
	                     <div id="first">
		 <img src="p.jpg"/>
		</div>
	                     <div id="second">
		 <img src="l.jpg"/>
		</div>
	                        <div id="third">
		 <img src="c.jpg"/>
		</div>
	                      <div id="fourth">
		 <img src="u.jpg"/>
		</div>
	</div>
                         <div id="main1">
		
		<div id="fifth">
		 <img src="dmb.jpg"/>
		 </div>
		<div id="sixth">
		 <img src="g.jpg"/>
		 </div>
		 
		 <div id="seventh">
		 <img src="i.jpg"/>
		 </div>
		 
		  <div id="eighth">
		 <img src="ph.jpg"/>
		 </div>
                            </div>
	
	<div id="about">
	<p id="title">ABOUT US</p>
                    <p id="content">The success and final outcome of this assignment is due to efforts made by each and every member of our group. We respect and thank our teacher for giving this opportunity to do the assignment work and providing all support and guidance which made us complete the assignment on time. The assignment has been completed with the effort and co-operation from our group members. Group member's Arkes Ray,Sheikh Iqbal Sikandar,Nitish Prasad,Rashida Jahan,Debjani Mondal and Shailza Kumari.</p> 
	  <p id="content">This is a platform where anyone can share their books. One can find all wbut books available here.In order to find any book click "books" option and according to the semester, you can see all books available here. For any queries please contact anyone of us. The information is given below.</p>
	</div>
	<div id="contact">
	<div id="n1">
	 <p id="content">Name : Rashida Jahan</p>
	 <p id="content">Email-id : </p>
	 <p id="content">Contact No: </p>
	</div>
	<div id="n2">
	<p id="content">Name : Debjani Mondal</p>
	 <p id="content">Email-id : </p>
	 <p id="content">Contact No: </p>
	</div>
	
	<div id="n3">
	<p id="content">Name : Shailza kumari</p>
	 <p id="content">Email-id : </p>
	 <p id="content">Contact No: </p>
	</div>
	</div>
	 
	<div id="contact1">
	<div id="n1">
	<p id="content">Name : Nitish Prasad</p>
	 <p id="content">Email-id : </p>
	 <p id="content">Contact No: </p>
	</div>
	<div id="n2">
	<p id="content">Name : Sheikh Iqbal Sikandar</p>
	 <p id="content">Email-id : </p>
	 <p id="content">Contact No: </p>
	</div>
	<div id="n3">
	<p id="content">Name : Arkes Ray</p>
	 <p id="content">Email-id : </p>
	 <p id="content">Contact No: </p>
	</div>
</div>
</div>

</body>
</html>