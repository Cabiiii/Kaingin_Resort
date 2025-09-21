<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaingin Resort - CONTACT US</title>
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
          <li class="nav-item"><a class="nav-link" href="rooms.php">Rooms</a></li>
          <li class="nav-item"><a class="nav-link active" href="contact.php">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<body id="contact-body">
<div class="contact-container">
  <section class="contact-info">
    <h2 class="contact-head">Get in Touch</h2>
    <div class="contact-item">
      <strong>📍 Location</strong>
      <span><a href="https://www.google.com/maps/place/Kaingin+Resort/@15.080082,120.5347204,17z/data=!3m1!4b1!4m6!3m5!1s0x3396f530e9f288cd:0x1f628ab6fa0231af!8m2!3d15.080082!4d120.5373007!16s%2Fg%2F11q55m7dnk?entry=ttu&g_ep=EgoyMDI1MDkxNy4wIKXMDSoASAFQAw%3D%3D">Kaingin St. Poblacion, Porac, Philippines</a></span>
    </div>
    <div class="contact-item">
      <strong>📞 Phone</strong>
      <span>+63 962 486 0988</span>
    </div>
    <div class="contact-item">
      <strong>🌐 Socials</strong>
      <span>Facebook | <a href="https://www.facebook.com/profile.php?id=100054653161346">Kaingin Resort</a></span>
    </div>
  </section>

  <section class="contact-form">
    <h2 class="contact-head">Send Us a Message</h2>
    <form>
      <label for="name">Full Name</label>
      <input type="text" id="name" name="name" placeholder="Your Name" required>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="you@example.com" required>

      <label for="message">Message</label>
      <textarea id="message" name="message" placeholder="Write your message here..." required></textarea>

      <button id="button-contact" type="submit">Send Message</button>
    </form>
  </section>
</div>

<div class="map">
  <iframe 
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3854.7954793092344!2d120.6275449!3d15.135856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396f530e9f288cd%3A0x1f628ab6fa0231af!2sKaingin%20Resort!5e0!3m2!1sen!2sph!4v1695150000000!5m2!1sen!2sph" 
    width="100%" 
    height="100%" 
    style="border:0;" 
    allowfullscreen="" 
    loading="lazy" 
    referrerpolicy="no-referrer-when-downgrade">
  </iframe>
</div>




</body>
<!-- FOOTER -->
<?php require('includes/footer.php'); ?>
</html>