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
<body>
  <main class="booking-main">
    <h1 id="book-head">Book Your Stay</h1>
  <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
    <div class="booking-success">
      <h2>Booking Successful 🎉</h2>
      <p>
        Thank you, <strong><?php echo htmlspecialchars($_POST['name']); ?></strong>!<br>
        Your booking has been received.
      </p>
      <a href="rooms.php" class="room-button">Back to Rooms</a>
    </div>
  <?php else: ?>
    <form method="POST" class="booking-form">
      <label for="name">Full Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="contact">Contact Number:</label>
      <input type="text" id="contact" name="contact" required>

      <label for="date">Date of Stay:</label>
      <input type="date" id="date" name="date" required>

      <label for="time">Check-in / Check-out:</label>
      <select id="time" name="time" required>
        <option value="">-- Select --</option>
        <option value="day">Day (9 AM - 5 PM)</option>
        <option value="night">Night (3 PM - 9 PM)</option>
        <option value="overnight">Overnight (2 PM - 11 AM)</option>
      </select>

      <label for="room">Choose Room / Cottage:</label>
      <select id="room" name="room" required>
        <option value="villa">Villa</option>
        <option value="room">Room</option>
        <option value="cottage1">Cottage 1</option>
        <option value="cottage2">Cottage 2</option>
        <option value="cottage3">Cottage 3</option>
      </select>

      <button type="submit" id="button-contact">Submit Booking</button>
    </form>
  <?php endif; ?>
</main>
</body>
<?php require('includes/footer.php'); ?>
</html>
