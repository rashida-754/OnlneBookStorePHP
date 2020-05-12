<!DOCTYPE html >
     <style>
      body
     {
        padding: 0;
        margin: -22px 0;
        height : 100%;
     }
    .header{
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
        }
        ul li 
        {
          display: block;
          position: relative;
          float: left;
          background: #D0F9F9;
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
       }
        .dropdown
        {
            opacity: 1;
            visibility: visible;
            transition: ease-in .35s;
            -moz-transition: ease-in .35s;
            -webkit-transition: ease-in .35s;
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
         }
        li:hover li a:hover
         { 
            background: #7E9966;
         }
        li:hover li a:hover
         { 
              background: #7E9966;
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

<body style="height: 0px;">
<div id="navigation">
<img src="project1.png" height="45px" width="100px" align="left">
<div class="header">
<h1 style="height: 50px;">WELCOME TO BOOK SHARING WEBSITE</h1>
</div>
<div class="main-navigation">
<ul class="mainnav">
   <li><a href="destroy.php">LOGOUT</a></li> 
   <li><a href="addbooks.php">ADD BOOKS</a></li>
   <li><a href="#">MY CART</a>
   </li>
   <li><a href="#">BOOKS</a>
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
   <li><a href="profile.php">PROFILE</a></li>
</ul>
</div>
</div>
</body>
</html>