<html>
    <head>
        <title>MoAswani</title>
        <link rel="stylesheet" href="moaswani.css">
    </head>
    <div class="one">
        <div id="logo">
            <img src="images/logo.jpg" height="100" width="120">
        </div>

        <div id="glob">
            <b>TELS TECHNOLOGIES</b><br> Globalizing the world
        </div>
    </div>    
    
    <nav>
            <ul>
                <li><a href="home.php">HOME</a></li>
                <li><a href="aboutus.php">ABOUT US</a>
                        <ul>
                            <li><a href="vission.php">VISION</a></li>
                            <li><a href="corevalues.php">CORE VALUES</a></li>
                        </ul>
                </li>
                <li><a href="mission.php">MISSION</a></li>
                <li><a href="gallery.php">GALLERY</a></li>
                <li><a href="products.php">PRODUCTS</a>
                        <ul>
                            <li><a href="shoppingcart.php">SHOPPING CART</a></li>
                            <li><a href="pricelist.php">PRICE LIST</a></li>
                        </ul>
                </li>
                <li><a href="contactus.php">CONTACT US</a></li>
            </ul>
        </nav>        
    
    <body>
        <br><br><br><br><br><br><br><br>
               <script>
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
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
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
  captionText.innerHTML = dots[slideIndex-1].alt;
}
               </script>

        <!-- Container for the image gallery -->
<div class="container">

    <!-- Full-width images with number text -->
    <div class="mySlides">
      <div class="numbertext">1 / 10</div>
        <img src="images/galaxy.jpg" width="80%" height="350px">
    </div>
  
    <div class="mySlides">
      <div class="numbertext">2 / 10</div>
        <img src="images/babylon.jpg" width="80%" height="350px">
    </div>
  
    <div class="mySlides">
      <div class="numbertext">3 / 10</div>
        <img src="images/space.jpg" width="80%" height="350px">
    </div>
  
    <div class="mySlides">
      <div class="numbertext">4 / 10</div>
        <img src="images/stars.jpg" style=width="80%" height="350px">
    </div>
  
    <div class="mySlides">
      <div class="numbertext">5 / 10</div>
        <img src="images/sandstone.jpg" width="80%" height="350px">
    </div>
  
    <div class="mySlides">
      <div class="numbertext">6 / 10</div>
        <img src="images/international_students.jpg" width="80%" height="350px">
    </div>

    <div class="mySlides">
      <div class="numbertext">7 / 10</div>
        <img src="images/fridge.jpg" width="80%" height="350px">
    </div>

    <div class="mySlides">
      <div class="numbertext">8 / 10</div>
        <img src="images/iOS_Phones-m.png" width="80%" height="350px">
    </div>

    <div class="mySlides">
      <div class="numbertext">9 / 10</div>
        <img src="images/children happy.jpg" width="80%" height="350px">
    </div>

    <div class="mySlides">
      <div class="numbertext">10 / 10</div>
        <img src="images/micro.jpg" width="80%" height="350px">
    </div>
  
    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  
    <!-- Image text -->
    <div class="caption-container">
      <p id="caption"></p>
    </div>
  
    <!-- Thumbnail images -->
    <div class="row">
      <div class="column">
        <img class="demo cursor" src="images/galaxy.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Galaxy">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/babylon.jpg" style="width:100%" onclick="currentSlide(2)" alt="Babylon">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/space.jpg" style="width:100%" onclick="currentSlide(3)" alt="space">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/stars.jpg" style="width:100%" onclick="currentSlide(4)" alt="Stars">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/sandstone.jpg" style="width:100%" onclick="currentSlide(5)" alt="sandstone">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/international_students.jpg" style="width:100%" onclick="currentSlide(6)" alt="students">
      </div>
    </div>
  </div>
        <hr>
        <footer>
            <p>&COPY;Copyrights     to     Tels     @2022 &ensp; <b>    Email:</b> tels@gmail.com</p>
        </footer>
    </body>
</html>