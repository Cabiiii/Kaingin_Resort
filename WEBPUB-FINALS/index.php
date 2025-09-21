<!-- 
Cabe, Justin D.
Galang, Marius Kevin D.
WD - 301 
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaingin Resort - HOME</title>
    <link rel="icon" type="image/png" href="/images/logo.png">
    <?php require('includes/links.php'); ?>
</head>

<!-- HEADER/NAVBAR -->
<header>
  <nav class="navbar navbar-expand-lg" data-bs-theme="dark">
    <div class="container-fluid">
      <a href="index.php"><img src="/images/logo.png" alt="Kaingin Resort" id="logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav ms-auto"> 
          <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="feature.php">Features</a></li>
          <li class="nav-item"><a class="nav-link" href="rooms.php">Rooms</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<body>
    <!-- SLIDESHOW -->
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-inner">
            
            <div class="carousel-item active slide-item">
            <img src="/images/slide1.jpg" class="d-block w-100 slide-img" alt="First slide">
            <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                <h2 class="slide-text">Welcome to Kaingin Resort</h2>
                <p class="slide-text2">Relax. Enjoy. Escape.</p>
            </div>
            </div>

            <div class="carousel-item slide-item">
            <img src="/images/slide2.jpg" class="d-block w-100 slide-img" alt="Second slide">
            <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                <h2 class="slide-text">Enjoy Our Features</h2>
                <p class="slide-text2">Memories & Comfort Await</p>
            </div>
            </div>

            <div class="carousel-item slide-item">
            <img src="/images/slide3.jpg" class="d-block w-100 slide-img" alt="Third slide">
            <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                <h2 class="slide-text">Book Your Stay</h2>
                <p class="slide-text2">Experience Paradise</p>
            </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

<!-- INTRODUCTION -->
  <div id="intro">
    <h1 id="welcome">🌴 Welcome to Kaingin Resort 🌞</h1>
    <p id="res-info">
        Kaingin Resort is your perfect tropical escape, where relaxation meets adventure. Surrounded by lush greenery and refreshing waters, it offers a serene getaway for families, friends, and groups who want to unwind and enjoy nature. From its inviting pools and cozy cottages to fun activities under the sun, Kaingin Resort brings you the perfect mix of leisure and excitement. Whether you’re here for a quick day trip or a longer stay, every moment at Kaingin Resort is made for lasting memories.
    </p>
    <!-- LEARN MORE BUTTON -->
    <div id="button-container">
    <a href="rooms.php" id="button">Book Now!</a>
    </div>
    <!-- OFFERS -->
<div id="offers">
  <h1 id="offer-head">Services We Offer</h1>
  <div class="offer-con">
    <div class="offer-item">
      <a href="feature.php"><img src="/images/offer2.jpg" alt="Stores" class="offer-img2"></a>
      <p>Stores</p>
    </div>
    <div class="offer-item">
      <a href="feature.php"><img src="/images/offer1.jpg" alt="Rent Resort" class="offer-img"></a>
      <p id="feature">Rent Whole Resort</p>
    </div>
    <div class="offer-item">
      <a href="feature.php"><img src="/images/offer3.png" alt="Private Pool" class="offer-img2"></a>
      <p>Private Pool</p>
    </div>
  </div>
</div>

</div>

</div>
</div>
</body>
<!-- FOOTER -->
<?php require('includes/footer.php'); ?>
</html>
