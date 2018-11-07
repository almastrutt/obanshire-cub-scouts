<?php
    require_once('config/db_connect.php');
    include('includes/header.php');
    
?>
<div class="wrappergallery">
  <!--<section>
    <div class="main-image">
      <img src="images/cubscouts/image_gallery.jpg" alt="image_gallery.jpg"/>
    </div>
  </section>-->   

  <!-- Container for the image gallery -->
  <div class="container">
    <!-- Full-width images with number text -->
    <div class="mySlides">
      <div class="numbertext">1 / 6</div>
      <img src="images/football3.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 6</div>
      <img src="images/hammer.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 6</div>
      <img src="images/play.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 6</div>
      <img src="images/smile.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">5 / 6</div>
      <img src="images/football.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">6 / 6</div>
      <img src="images/write.jpg" style="width:100%">
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
        <img class="demo cursor" src="images/football3.jpg" style="width:100%" onclick="currentSlide(1)" alt="Football Fun">
      </div>
      <div class="column"> 
        <img class="demo cursor" src="images/hammer.jpg" style="width:100%" onclick="currentSlide(2)" alt="Under Construction!">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/play.jpg" style="width:100%" onclick="currentSlide(3)" alt="Friends and Fun">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/smile.jpg" style="width:100%" onclick="currentSlide(4)" alt="Happy to be a Cub Scout">
      </div>
      <div class="column">
        <img class="demo cursor" src="images/football.jpg" style="width:100%" onclick="currentSlide(5)" alt="Jump!">
      </div> 
      <div class="column">
        <img class="demo cursor" src="images/write.jpg" style="width:100%" onclick="currentSlide(6)" alt="New Skills">
      </div>
    </div>
  </div>
</div>
<?php

    include('includes/footer.php');
    
?>    