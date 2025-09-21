<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kaingin Resort - ROOMS</title>
  <link rel="icon" type="image/png" href="/images/logo.png">
  <?php require('includes/links.php'); ?>
</head>
<header>
  <nav class="navbar navbar-expand-lg" data-bs-theme="dark">
    <div class="container-fluid">
      <a href="index.php"><img src="/images/logo.png" alt="Kaingin Resort" id="logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav ms-auto"> 
          <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="feature.php">Features</a></li>
          <li class="nav-item"><a class="nav-link active" href="rooms.php">Rooms</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<body id="room-body">
  <h1 id="rooms-head">Available Rooms</h1>
  <div style="display:flex; gap:30px; justify-content:center; align-items:flex-start;">
    
    <!-- SIDEBAR FILTER -->
    <aside id="filter-sidebar">
      <h3 class="rooms-head">Filter</h3>
      <form>
        <label>Price Range (Max):</label>
        <select id="price">
          <option value="3800">All (₱3,800+)</option>
          <option value="1000">₱1,000</option>
          <option value="2000">₱2,000</option>
          <option value="3000">₱3,000</option>
          <option value="3800">₱3,800</option>
        </select>

        <label>Capacity:</label>
        <select id="capacity">
          <option value="">All</option>
          <option value="8-10">8-10 Pax</option>
          <option value="10-15">10-15 Pax</option>
          <option value="15-20">15-20 Pax</option>
        </select>

        <label>Type:</label><br>
        <input type="checkbox" id="villa" name="type" value="villa">
        <label for="villa">Villa</label><br>
        <input type="checkbox" id="room" name="type" value="room">
        <label for="room">Room</label><br>
        <input type="checkbox" id="cottage" name="type" value="cottage">
        <label for="cottage">Cottage</label><br><br>

        <button type="submit" class="room-button">Apply Filter</button>
      </form>
    </aside>

    <!-- ROOMS -->
    <div id="rooms-con">

      <!-- VILLA -->
      <div class="info-con" data-type="villa" data-price="3800" data-min-capacity="10" data-max-capacity="10">
        <img src="images/Villa.jpg" alt="Villa" class="room-img">
        <h2 class="rooms-head">Villa</h2>
        <p class="rooms-info">Price: PHP 3,800</p>
        <p class="rooms-info">Capacity: 10 Pax</p>
        <div class="rooms-info" style="text-align:center;">⭐⭐⭐⭐⭐</div>
        <ul class="room-features">
          <li>2 Large Double Deck Bed</li>
          <li>1 Queen Sized Bed</li>
          <li>Refrigerator</li>
          <li>Air-conditioning</li>
          <li>Bathroom</li>
          <li>TV</li>
          <li>Veranda / Lanai</li>
        </ul>
        <div class="room-button-con">
          <a href="book.php" class="room-button">Book Now</a>
        </div>
      </div>

      <!-- ROOM -->
      <div class="info-con" data-type="room" data-price="2800" data-min-capacity="8" data-max-capacity="8">
        <img src="images/Room.jpg" alt="Room" class="room-img">
        <h2 class="rooms-head">Room</h2>
        <p class="rooms-info">Price: PHP 2,800</p>
        <p class="rooms-info">Capacity: 8 Pax</p>
        <div class="rooms-info" style="text-align:center;">⭐⭐⭐☆☆</div>
        <ul class="room-features">
          <li>2 Double Deck Bed</li>
          <li>1 Queen Sized Bed</li>
          <li>Refrigerator</li>
          <li>Air-conditioning</li>
          <li>Bathroom</li>
          <li>TV</li>
        </ul>
        <div class="room-button-con">
          <a href="book.php" class="room-button">Book Now</a>
        </div>
      </div>

      <!-- COTTAGE 1 -->
      <div class="info-con" data-type="cottage" data-price="400" data-min-capacity="8" data-max-capacity="10">
        <img src="images/smol.jpg" alt="Cottage 1" class="room-img2">
        <h2 class="rooms-head">Cottage 1</h2>
        <p class="rooms-info">Price: PHP 400</p>
        <p class="rooms-info">Capacity: 8 - 10 Pax</p>
        <div class="rooms-info" style="text-align:center;">⭐⭐⭐☆☆</div>
        <p class="rooms-info">Smol</p>
        <div class="room-button-con">
          <a href="book.php" class="room-button">Book Now</a>
        </div>
      </div>

      <!-- COTTAGE 2 -->
      <div class="info-con" data-type="cottage" data-price="500" data-min-capacity="10" data-max-capacity="15">
        <img src="images/medyom.jpg" alt="Cottage 2" class="room-img2">
        <h2 class="rooms-head">Cottage 2</h2>
        <p class="rooms-info">Price: PHP 500</p>
        <p class="rooms-info">Capacity: 10 - 15 Pax</p>
        <div class="rooms-info" style="text-align:center;">⭐⭐⭐⭐☆</div>
        <p class="rooms-info">Medyom</p>
        <div class="room-button-con">
          <a href="book.php" class="room-button">Book Now</a>
        </div>
      </div>

      <!-- COTTAGE 3 -->
      <div class="info-con" data-type="cottage" data-price="600" data-min-capacity="15" data-max-capacity="20">
        <img src="images/larj.jpg" alt="Cottage 3" class="room-img2">
        <h2 class="rooms-head">Cottage 3</h2>
        <p class="rooms-info">Price: PHP 600</p>
        <p class="rooms-info">Capacity: 15 - 20 Pax</p>
        <div class="rooms-info" style="text-align:center;">⭐⭐⭐⭐⭐</div>
        <p class="rooms-info">Larj</p>
        <div class="room-button-con">
          <a href="book.php" class="room-button">Book Now</a>
        </div>
      </div>
    </div>
  </div>
  
  <!-- SCRIPT FOR FILTER -->
  <?php require('scripts/filter.php')?>
</body>
<?php require('includes/footer.php'); ?>
</html>
