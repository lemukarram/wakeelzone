<?php
if (!isset($services)) {
    require_once __DIR__ . '/data.php';
}
$current_file = basename($_SERVER['PHP_SELF']);
?>

<!-- ═══════════ NAVBAR ═══════════ -->
<nav class="navbar" id="navbar" role="navigation" aria-label="Main navigation">
  <div class="container">
    <div class="navbar-inner">

      <!-- Logo -->
      <a href="index.php" class="navbar-logo" aria-label="WakeelZone Home">
        <div class="logo-icon" aria-hidden="true">
          <i class="ph ph-scales"></i>
        </div>
        <span class="logo-text">Wakeel<span>Zone</span></span>
      </a>

      <!-- Desktop Nav Links -->
      <ul class="nav-links" role="list">
        <li>
          <a href="index.php" class="nav-link <?php echo $current_file === 'index.php' ? 'active' : ''; ?>">Home</a>
        </li>
        <li>
          <a href="about.php" class="nav-link <?php echo $current_file === 'about.php' ? 'active' : ''; ?>">About Us</a>
        </li>

        <!-- Services Dropdown -->
        <li class="nav-item">
          <a href="services.php" class="nav-link <?php echo in_array($current_file, ['services.php', 'service.php']) ? 'active' : ''; ?>">
            Legal Services <i class="ph ph-caret-down" style="font-size:0.75rem; transition: transform var(--ease-base);"></i>
          </a>
          <div class="dropdown-menu" role="menu">
            <?php foreach ($services as $s): ?>
              <a href="service.php?slug=<?php echo urlencode($s['slug']); ?>"
                 class="dropdown-link"
                 role="menuitem">
                <i class="ph <?php echo htmlspecialchars($s['icon']); ?>"></i>
                <?php echo htmlspecialchars($s['title']); ?>
              </a>
            <?php endforeach; ?>
          </div>
        </li>

        <li>
          <a href="how-we-work.php" class="nav-link <?php echo $current_file === 'how-we-work.php' ? 'active' : ''; ?>">How We Work</a>
        </li>
        <li>
          <a href="all-lawyers.php" class="nav-link <?php echo $current_file === 'all-lawyers.php' ? 'active' : ''; ?>">Find a Lawyer</a>
        </li>
        <li>
          <a href="blog.php" class="nav-link <?php echo $current_file === 'blog.php' ? 'active' : ''; ?>">Legal Guide</a>
        </li>
        <li>
          <a href="lawyer-registration.php" class="nav-link <?php echo $current_file === 'lawyer-registration.php' ? 'active' : ''; ?>">For Lawyers</a>
        </li>
        <li>
          <a href="contact.php" class="nav-link <?php echo $current_file === 'contact.php' ? 'active' : ''; ?>">Contact</a>
        </li>
      </ul>

      <!-- Desktop CTA -->
      <a href="tel:<?php echo preg_replace('/\s+/', '', HELPLINE_NUMBER); ?>"
         class="btn btn-call"
         style="flex-shrink:0; display:none;"
         id="navCallBtn">
        <i class="ph ph-phone-call"></i>
        <?php echo HELPLINE_NUMBER; ?>
      </a>

      <!-- Hamburger -->
      <button class="burger" id="burger" aria-label="Toggle menu" aria-expanded="false" aria-controls="mobileMenu">
        <span class="burger-line"></span>
        <span class="burger-line"></span>
        <span class="burger-line"></span>
      </button>

    </div><!-- /navbar-inner -->
  </div><!-- /container -->
</nav>

<!-- ═══════════ MOBILE MENU ═══════════ -->
<div class="mobile-menu" id="mobileMenu" role="dialog" aria-label="Mobile navigation" aria-modal="false">

  <a href="index.php" class="mobile-nav-link <?php echo $current_file === 'index.php' ? 'active' : ''; ?>">
    <i class="ph ph-house"></i> Home
  </a>
  <a href="about.php" class="mobile-nav-link <?php echo $current_file === 'about.php' ? 'active' : ''; ?>">
    <i class="ph ph-info"></i> About Us
  </a>

  <!-- Services toggle -->
  <a href="#" class="mobile-nav-link" id="mobileServicesToggle">
    <i class="ph ph-scales"></i>
    Legal Services
    <i class="ph ph-caret-down" id="mobileServicesArrow" style="margin-left:auto; transition: transform var(--ease-base);"></i>
  </a>
  <div class="mobile-services-grid" id="mobileServicesPanel" style="display:none;">
    <?php foreach ($services as $s): ?>
      <a href="service.php?slug=<?php echo urlencode($s['slug']); ?>" class="mobile-service-link">
        <i class="ph <?php echo htmlspecialchars($s['icon']); ?>"></i>
        <?php echo htmlspecialchars($s['title']); ?>
      </a>
    <?php endforeach; ?>
  </div>

  <a href="how-we-work.php" class="mobile-nav-link <?php echo $current_file === 'how-we-work.php' ? 'active' : ''; ?>">
    <i class="ph ph-steps"></i> How We Work
  </a>
  <a href="all-lawyers.php" class="mobile-nav-link <?php echo $current_file === 'all-lawyers.php' ? 'active' : ''; ?>">
    <i class="ph ph-users-three"></i> Find a Lawyer
  </a>
  <a href="blog.php" class="mobile-nav-link <?php echo $current_file === 'blog.php' ? 'active' : ''; ?>">
    <i class="ph ph-book-open"></i> Legal Guide
  </a>
  <a href="faq.php" class="mobile-nav-link <?php echo $current_file === 'faq.php' ? 'active' : ''; ?>">
    <i class="ph ph-question"></i> FAQs
  </a>
  <a href="lawyer-registration.php" class="mobile-nav-link <?php echo $current_file === 'lawyer-registration.php' ? 'active' : ''; ?>">
    <i class="ph ph-identification-badge"></i> Register as Lawyer
  </a>
  <a href="contact.php" class="mobile-nav-link <?php echo $current_file === 'contact.php' ? 'active' : ''; ?>">
    <i class="ph ph-envelope"></i> Contact Us
  </a>

  <div style="margin-top: 1.25rem; display: flex; flex-direction: column; gap: 0.625rem;">
    <a href="tel:<?php echo preg_replace('/\s+/', '', HELPLINE_NUMBER); ?>" class="btn btn-call btn-lg" style="justify-content:center;">
      <i class="ph ph-phone-call"></i> <?php echo HELPLINE_NUMBER; ?>
    </a>
    <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>" target="_blank" rel="noopener" class="wa-btn" style="justify-content:center;">
      <i class="ph ph-whatsapp-logo"></i> WhatsApp Us
    </a>
  </div>

</div>

<script>
// Inline nav JS to run before DOMContentLoaded for faster response
(function(){
  var burger = document.getElementById('burger');
  var menu   = document.getElementById('mobileMenu');
  if(burger && menu){
    burger.addEventListener('click', function(){
      var isOpen = menu.classList.contains('open');
      burger.setAttribute('aria-expanded', !isOpen);
    });
  }
  // Show call button after scroll
  var callBtn = document.getElementById('navCallBtn');
  if(callBtn){
    callBtn.style.display = 'flex';
  }
})();
</script>
