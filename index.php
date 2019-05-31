
<!DOCTYPE html>
<html>
  <head>
    <title>Elite Handcrafts</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet'>
  </head>
 
<?php
 require "header.php";
  ?>
  

    <body>
    <!-- Slideshow container -->
 <div class="slider">

    <div id="img">
      <img src="images/slide1.jpg">
    </div>

  </div>

  <script src="slider.js">

  </script>
  <style type="text/css">
    
    .slider {
      width: 90%;
      height: 400px;
      margin: 20px auto;
      box-sizing: border-box;
      overflow: hidden;
      box-shadow: 5px 5px 10px grey;

    }

    img {
      width: 100%;
      height: 100%;
      animation: ani 5s linear;

    }
    

    @keyframes ani {
      0% {
        transform: scale(1.2);
      }
      10% {
        transform: scale(1);
      }
      100% {
        transform: scale(1);
      }
    }
  </style>
</div>
    <div class="pageHeading">
      <h3>OUR STORY</h3>
      <p>
        We are wholesale as well as retail and have a wide variety of Indian
        products, smaller and bigger Salt lamps, Home decor, clothing etc made
        lovingly by artisans. Elite Handcrafts is a well-established family based wholesale business based in Brisbane, Queensland. We have been supplying our customers since 1986 with unique, high quality and very different products imported from India.
      </p>

<p>The main benefits of dealing with Elite Handcrafts are the fast moving, great value range of authentic artefacts that we source from India. Our range will give you colourful, culturally correct items that sell fast, delivering great profit margins for your store. Our extensive range of incense includes the ever popular Nag Champa just as one part of our current selection of genuine Indian incense.
      </p>
    </div>
    <div class="flex-container">
      <div>
        <img src="images/salt.jpg" class="hpimage" />
        <p><a href="himalayan_salt.php" class="linkBtn" style="color: gold"> HIMALAYAN SALT </a></p>
      </div>
      <div>
        <img src="images/bedroom.jpg" class="hpimage" />
        <p> <a href="bedroom.php" class="linkBtn" style="color: gold"> BEDROOM AND LIVING </a></p>
      </div>
      <div>
        <img src="images/outdoor.jpg" class="hpimage" />
        <p> <a href="outdoor.php" class="linkBtn" style="color: gold">OUTDOOR</a></p>
      </div>
      <div>
        <img src="images/others.jpg" class="hpimage" />
        <p> <a href="others.php" class="linkBtn" style="color: gold">OTHERS</a></p>
      </div>
  </div>
<?php
 require "footer.php";
  ?>
  </body>
</html>