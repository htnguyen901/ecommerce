<?php 

include 'header.php';

?>
<main>
<div class="main-content">

<!-----------------SLIDE SHOW------------------------>
<div class="slideshow-container">

    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="images/index1.jpg" style="width:100%;height:600px;">
      <div class="text">Welcome!</div>
    </div>
    
    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="images/index2.jpg" style="width:100%;height:600px;">
      <div class="text">It's a lifestyle!</div>
    </div>
    
    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="images/bracelet1.jpg" style="width:100%;height:600px;">
      <div class="text">It's the future!</div>
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
    
<!--    <script>
	
		var slideIndex = 1;
		showSlides(slideIndex);
		
		// Next/previous controls
		function plusSlides(n) {
		  showSlides(slideIndex += n);
		}
		
		// Thumbnail image controls
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
	</script>-->
    
    
 <!---------------------------END SLIDE SHOW---------------------->       
    <!--SHOP MEN-->
    
        <div class="shop-all">
        	<div class="shop-women" style="text-align:center;font-size:24px;padding-bottom:20px;">
                
                    <span>Shop all Men</span>
                
                <div style="margin: 3% 0 5% 5%">
                    <?php
                        getProMen();
                    ?>
                
                </div>
            </div>
         </div>
        
    
    


    <!--SHOP WOMEN-->
    
        <div class="shop-all">
        	<div class="shop-women" style="text-align:center;font-size:24px">
               
                    <span>Shop all Women</span>
                
                <div style="margin: 3% 0 5% 5%">
                    <?php
                        getProWomen();
                    ?>
                </div>
            </div>
        </div>
	
</div>
</main>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<?php
	include 'footer.php'
?>


