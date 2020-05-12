<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ADSINR</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

   <style>
    body
     {
        padding: 0;
        margin: -18px 0;
        height : 100%;
     
     }
    .header
      {
        height: 50px;
        text-align: center;
        background-color: #15B0A9;
        
      }
         
     ul 
      {
        list-style: none;
        padding: 0;
        margin: 0;
        background: #D0F9F9;
        text-decoration:none;
      }
     ul li 
      {
          display: block;
          position: relative;
          float: left;
          background: #D0F9F9;
          text-decoration:none;
      }
     li ul 
     {
        display: none;
     }
    .mainnav li
      {
       float: right;
       padding: 5px;
       position:relative;
       z-index:1000;
       text-decoration:none;
      }
    .dropdown
      {
       opacity: 1;
       visibility: visible  
       transition: ease-in .35s;
       -moz-transition: ease-in .35s;
       -webkit-transition: ease-in .35s;
       text-decoration:none;
      }
      ul li a
       {
         display: block;
         padding: 1em;
         text-decoration: none;
         white-space: nowrap;
         color: white;
        }
         ul li a 
         {
             background: #7E9966;
          }
            li:hover > ul 
            {
              display: block;
              position: absolute;
            }
          
         li:hover a 
         {
            background: #BCC4BB;
            text-decoration:none;
         }
        li:hover li a:hover
         { 
            background: #7E9966;
            text-decoration:none;
         }
        li:hover li a:hover
         { 
              background: #7E9966;
              text-decoration:none;
         }
    
      ul ul ul
       {
           left: 100%;
           top: 0;
        }
      ul:before,
      ul:after 
      {
        content: " "; /* 1 */
        display: table; /* 2 */
     }
      ul:after 
      {
        clear: both;
      }
      
    </style>
</head>
<body>
<img src="project1.png" height="45px" width="100px" align="left">
<div class="header">
<h1 style="height: 50px;">WELCOME TO BOOK SHARING WEBSITE</h1>
</div>
<ul class="mainnav">
 
   <li><a href="#" >CONTACT US</a></li>
   <li><a >BOOKS</a>
   <ul class="dropdown">
        <li><a href="book1.php">1<sup>ST</sup>YEAR</a>
        </li>
        <li><a href="book2.php">2<sup>ND</sup>YEAR</a>
        </li>
        <li><a href="book3.php">3<sup>RD</sup>YEAR</a>
        </li>
        <li><a href="book4.php">4<sup>TH</sup>YEAR</a>
        </li>
   </ul></li>
   <li><a href="aboutus.php">ABOUT US</a></li>
   
   
</ul>
</html>
</body>