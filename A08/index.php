<?php
include("connect.php");
?>

<?php
include("assets/queries/query.php");
?>


<!DOCTYPE html>
<html>

<head>
  <title>Inside Out</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="icon" href="assets/img/headlogo.png" type="image/jpg">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link href="https://fonts.googleapis.com/css2?family=Anton&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oswald:wght@200..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Source+Serif+4:ital,opsz,wght@0,8..60,200..900;1,8..60,200..900&family=Wittgenstein:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

  <!-- Navbar (sit on top) -->
  <div class="w3-top" style="color:white">
    <div class="w3-bar" id="myNavbar">
      <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
        <i class="fa fa-bars"></i>
      </a>
      <a href="#home" class="w3-bar-item w3-button p-4">HOME</a>
      <a href="#islands" class="w3-bar-item w3-button w3-hide-small p-4"><i class="fa"></i> ISLANDS</a>
      <a href="#best" class="w3-bar-item w3-button w3-hide-small p-4"><i class="fa"></i> FAVORITE MEMORIES</a>
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
      <a href="#islands" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
      <a href="#best" class="w3-bar-item w3-button" onclick="toggleFunction()">FAVORITE MEMORIES</a>
    </div>
  </div>

  <a id="home"></a>
  <div class="bgimg-1 w3-display-container">
    <div class="row mx-auto">
      <img src="assets/img/io_logo1.png" class="wow animate__animated animate__fadeIn" style="width:clamp(200px, 50vh, 1000px); display: block; margin: 0 auto;">
    </div>
  </div>


  <!-- INTRO -->
  <div class="w3-content w3-container w3-padding-64 text-center p-5 mt-5">
    <h3 class="w3-center" style="font-size:clamp(5px, 40px, 40px)">Growing Up Can Be A Bumpy Road…</h3>
    <p class="w3-center"><em>I hate growing up</em></p>
    <p>Just like in Inside Out, where personality islands are created from Riley’s memories and experiences, Jeronimo’s identity is shaped by his life’s journey. Emotions—Joy, Fear, Anger, Disgust, and Sadness—reside in Headquarters, guiding him through the changes and challenges he faces. Each memory contributes to the formation of these islands, building the foundation of who he is.</p>
  </div>
  </div>

  <a id="islands"></a>
  <div class="w3-content w3-container text-center mt-5">
    <h3 class="w3-center" style="font-size:clamp(10px, 40px, 40px); letter-spacing:5px; font-weight:bolder;">PERSONALITY ISLANDS</h3>
  </div>
  </div>


  <!-- FAMILY -->
  <div class="bgimg-2 w3-display-container p-0" style="background-color:black;">
    <div class="w3-display-middle">
      <span class="w3-xxlarge w3-text-white w3-wide"><?php echo $name ?></span>
    </div>
  </div>


  <!-- FAMILY INFO-->
  <div class="w3-content w3-container w3-padding-64">
    <h3 class="w3-center"><?php echo $shortDescription ?></h3>
    <p class="w3-center"><em><?php echo $longDescription ?></em></p><br>



    <div class="w3-row-padding w3-center">
      <div class="w3-col m3">
        <img src="assets/img/<?php echo $content1Image  ?>" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="<?php echo $content1Text ?>">
      </div>

      <div class="w3-col m3">
        <img src="assets/img/<?php echo $content2Image  ?>" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="<?php echo $content2Text  ?>">
      </div>

      <div class="w3-col m3">
        <img src="assets/img/<?php echo $content3Image  ?>" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="<?php echo $content3Text  ?>">
      </div>

      <div class="w3-col m3">
        <img src="assets/img/<?php echo $content4Image  ?>" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="<?php echo $content4Text  ?>">
      </div>
    </div>
  </div>

  <p class="w3-center"><em>Click the images</em></p><br>


  <!-- DOG-->
  <div class="bgimg-3 w3-display-container p-0" style="background-color:black;">
    <div class="w3-display-middle">
      <span class="w3-xxlarge w3-text-white w3-wide mx-auto"><?php echo $dogName ?></span>
    </div>
  </div>


  <!-- DOG INFO -->
  <div class="w3-content w3-container w3-padding-64">
    <h3 class="w3-center"><?php echo $dogShortDescription ?></h3>
    <p class="w3-center"><em><?php echo $dogLongDescription ?></em></p><br>


    <div class="w3-row-padding w3-center">
      <div class="w3-col m3">
        <img src="assets/img/<?php echo $dogContent1Image ?>" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="<?php echo $dogContent1Text ?>">
      </div>

      <div class="w3-col m3">
        <img src="assets/img/<?php echo $dogContent2Image ?>" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="<?php echo $dogContent2Text ?>">
      </div>

      <div class="w3-col m3">
        <img src="assets/img/<?php echo $dogContent3Image ?>" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="<?php echo $dogContent3Text ?>">
      </div>

      <div class="w3-col m3">
        <img src="assets/img/<?php echo $dogContent4Image ?>" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="<?php echo $dogContent4Text ?>">
      </div>
    </div>
  </div>

  <p class="w3-center"><em>Click the images</em></p><br>



  <!-- GF-->
  <a id="best"></a>
  <div class="bgimg-4 w3-display-container" style="background-color:black;">
    <div class="w3-display-middle">
      <span class="w3-xxlarge w3-text-white w3-wide"><?php echo $gfName ?></span>
    </div>
  </div>



  <!-- GF INFO -->
  <div class="w3-content w3-container w3-padding-64">
    <h3 class="w3-center"><?php echo $gfShortDescription ?></h3>
    <p class="w3-center"><em><?php echo $gfLongDescription ?></em></p><br>


    <div class="w3-row-padding w3-center">
      <div class="w3-col m3">
        <img src="assets/img/<?php echo $gfContent1Image ?>" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="<?php echo $gfContent1Text ?>">
      </div>

      <div class="w3-col m3">
        <img src="assets/img/<?php echo $gfContent2Image ?>" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="<?php echo $gfContent2Text ?>">
      </div>

      <div class="w3-col m3">
        <img src="assets/img/<?php echo $gfContent3Image ?>" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="<?php echo $gfContent3Text ?>">
      </div>

      <div class="w3-col m3">
        <img src="assets/img/<?php echo $gfContent4Image ?>" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="<?php echo $gfContent4Text ?>">
      </div>
    </div>
  </div>

  <p class="w3-center"><em>Click the images</em></p><br>

  <!-- GAMING -->
  <div class="bgimg-5 w3-display-container" style="background-color: black;">
    <div class="w3-display-middle">
      <span class="w3-xxlarge w3-text-white w3-wide"><?php echo $gameName ?></span>
    </div>
  </div>

  <!-- GAMING INFO -->
  <div class="w3-content w3-container w3-padding-64">
    <h3 class="w3-center"><?php echo $gameShortDescription?></h3>
    <p class="w3-center"><em><?php echo $gameLongDescription ?></em></p><br>


    <div class="w3-row-padding w3-center">
      <div class="w3-col m3">
        <img src="assets/img/<?php echo $gameContent1Image ?>" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="<?php echo $gameContent1Text ?>">
      </div>

      <div class="w3-col m3">
        <img src="assets/img/<?php echo $gameContent2Image ?>" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="<?php echo $gameContent2Text ?>">
      </div>

      <div class="w3-col m3">
        <img src="assets/img/<?php echo $gameContent3Image ?>" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="<?php echo $gameContent3Text ?>">
      </div>

      <div class="w3-col m3">
        <img src="assets/img/<?php echo $gameContent4Image ?>" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="<?php echo $gameContent4Text ?>">
      </div>
    </div>
  </div>

  <p class="w3-center"><em>Click the images</em></p><br>

  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
    <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption" class="w3-opacity w3-large"></p>
    </div>
  </div>

  <footer class="w3-center w3-black w3-padding-64 w3-hover-opacity-off">
    <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
    <div class="w3-xlarge w3-section">
      <i class="fa fa-facebook-official w3-hover-opacity"></i>
      <i class="fa fa-instagram w3-hover-opacity"></i>
      <i class="fa fa-pinterest-p w3-hover-opacity"></i>
      <i class="fa fa-twitter w3-hover-opacity"></i>
    </div>
  </footer>

  <script>
    // Modal Image Gallery
    function onClick(element) {
      document.getElementById("img01").src = element.src;
      document.getElementById("modal01").style.display = "block";
      var captionText = document.getElementById("caption");
      captionText.innerHTML = element.alt;
    }

    // Change style of navbar on scroll
    window.onscroll = function() {
      myFunction()
    };

    function myFunction() {
      var navbar = document.getElementById("myNavbar");
      if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
      } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
      }
    }

    // Used to toggle the menu on small screens when clicking on the menu button
    function toggleFunction() {
      var x = document.getElementById("navDemo");
      if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
      } else {
        x.className = x.className.replace(" w3-show", "");
      }
    }
  </script>

  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>