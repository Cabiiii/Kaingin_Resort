<?php require('includes/links.php'); ?>
<footer class="kr-footer" aria-labelledby="footerHeading">
  <div class="kr-container">

    <div class="kr-brand">
      <a href="index.php"><div class="kr-logo" aria-hidden="true"><img src="/images/logo.png" alt="Logo" id="footer-logo" ></div></a>
      <div>
        <h3 id="footerHeading">Kaingin Resort</h3>
        <p>Experience comfort, relaxation, and fun all in one place. Whether it’s a weekend getaway, a family bonding, or a special celebration, Kaingin Resort offers the perfect setting surrounded by nature and fresh air. ✨</p>
      </div>
    </div>

    <div class="kr-contact" aria-label="Contact information">
      <div class="meta">📍 Location</div>
      <div><a href="#">Kaingin St. Poblacion, Porac, Philippines</a></div>

      <div class="meta">📞 Contact</div>
      <div><a href="tel:+0000000000">+63 962 486 0988</a></div>
    </div>

    <div class="kr-social" aria-label="Follow Kaingin Resort">
      <div class="kr-follow">Follow us for reservations and updates</div>
      <div class="kr-icons" role="list">
        <a class="kr-icon" href="https://www.facebook.com/profile.php?id=100054653161346" target="_blank" role="listitem" aria-label="Facebook"><img id="fb" src="/images/facebook.png" alt="Facebook"></a>
      </div>
      <div class="kr-tag">— Your relaxing escape awaits. —</div>
    </div>

    <div class="kr-footer-note" style="grid-column:1/-1">
      <small>© <span id="year">2025</span> Kaingin Resort. All rights reserved.</small>
      <small>Follow & tag us: <strong>#KainginResort</strong>
    </div>

  </div>
</footer>
<script>
  document.getElementById('year').textContent = new Date().getFullYear();
</script>