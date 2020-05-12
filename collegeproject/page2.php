<?php
include'page1.html';
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<style>

/* Slideshow container */
  .slideshow-container 
   {
     max-width: 1500px;
     position: relative;
     margin: auto;
     z-index:50;
}
    }

/* Next & previous buttons */
  .prev, .next 
  {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;  
    padding: 16px;
    margin-top: -22px;
    color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  }

/* Position the "next button" to the right */
   .next
    {
     right: 0;
     border-radius: 3px 0 0 3px;
    }

/* On hover, add a black background color with a little bit see-through */
  .prev:hover, .next:hover 
  {
     background-color: rgba(0,0,0,0.8);
  }
/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
  }

 .active, .dot:hover
  {
    background-color: pink;
  }


</style>
</head>
<body>

<div class="slideshow-container" style="padding-top: 25px;">

<div class="mySlides fade">
<img src="download1.jpg" style="width:100%;height: 450px;">
  
</div>

<div class="mySlides fade"><img src="download2.jpg" style="width:100%;height: 450px;">
  
</div>

<div class="mySlides fade">
  <img src="download3.jpg" style="width:100%;height: 450px;">
  
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html> 
