<?php
if (!isset($services)) require_once __DIR__ . '/data.php';
$footer_services = array_slice($services, 0, 9);
?>

<!-- ═══════════ FOOTER ═══════════ -->
<footer class="footer" role="contentinfo">
  <div class="container">
    <div class="footer-grid">

      <!-- Col 1: Brand -->
      <div class="reveal">
        <div class="footer-logo">
          <div class="logo-icon" style="width:36px;height:36px;font-size:1.125rem;" aria-hidden="true">
            <i class="ph ph-scales"></i>
          </div>
          <span class="logo-text footer-logo-text">Wakeel<span>Zone</span></span>
        </div>
        <p class="footer-desc">
          Pakistan's premier anonymous legal consultation platform.
          Talk to verified lawyers 24/7 without revealing your identity.
          Your legal journey begins here.
        </p>
        <div class="social-links" aria-label="Social media links">
          <a href="<?php echo SOCIAL_FACEBOOK; ?>" target="_blank" rel="noopener" class="social-link" aria-label="Facebook">
            <i class="ph ph-facebook-logo"></i>
          </a>
          <a href="<?php echo SOCIAL_INSTAGRAM; ?>" target="_blank" rel="noopener" class="social-link" aria-label="Instagram">
            <i class="ph ph-instagram-logo"></i>
          </a>
          <a href="<?php echo SOCIAL_TWITTER; ?>" target="_blank" rel="noopener" class="social-link" aria-label="Twitter / X">
            <i class="ph ph-x-logo"></i>
          </a>
          <a href="<?php echo SOCIAL_LINKEDIN; ?>" target="_blank" rel="noopener" class="social-link" aria-label="LinkedIn">
            <i class="ph ph-linkedin-logo"></i>
          </a>
          <a href="<?php echo SOCIAL_YOUTUBE; ?>" target="_blank" rel="noopener" class="social-link" aria-label="YouTube">
            <i class="ph ph-youtube-logo"></i>
          </a>
        </div>
      </div>

      <!-- Col 2: Quick Links -->
      <div class="reveal d-1">
        <h3 class="footer-col-title">Quick Links</h3>
        <nav aria-label="Footer quick links">
          <a href="index.php"               class="footer-link"><i class="ph ph-caret-right"></i> Home</a>
          <a href="about.php"               class="footer-link"><i class="ph ph-caret-right"></i> About Us</a>
          <a href="services.php"            class="footer-link"><i class="ph ph-caret-right"></i> Legal Services</a>
          <a href="how-we-work.php"         class="footer-link"><i class="ph ph-caret-right"></i> How We Work</a>
          <a href="all-lawyers.php"         class="footer-link"><i class="ph ph-caret-right"></i> Find a Lawyer</a>
          <a href="high-court-lawyers.php"  class="footer-link"><i class="ph ph-caret-right"></i> High Court Lawyers</a>
          <a href="female-lawyers.php"      class="footer-link"><i class="ph ph-caret-right"></i> Female Lawyers</a>
          <a href="blog.php"                class="footer-link"><i class="ph ph-caret-right"></i> Legal Guide</a>
          <a href="faq.php"                 class="footer-link"><i class="ph ph-caret-right"></i> FAQs</a>
          <a href="lawyer-registration.php" class="footer-link"><i class="ph ph-caret-right"></i> Register as Lawyer</a>
          <a href="contact.php"             class="footer-link"><i class="ph ph-caret-right"></i> Contact Us</a>
          <a href="privacy-policy.php"      class="footer-link"><i class="ph ph-caret-right"></i> Privacy Policy</a>
          <a href="terms.php"               class="footer-link"><i class="ph ph-caret-right"></i> Terms & Conditions</a>
          <a href="sitemap.php"             class="footer-link"><i class="ph ph-caret-right"></i> Sitemap</a>
        </nav>
      </div>

      <!-- Col 3: Services -->
      <div class="reveal d-2">
        <h3 class="footer-col-title">Practice Areas</h3>
        <nav aria-label="Footer practice areas">
          <?php foreach ($footer_services as $s): ?>
            <a href="service.php?slug=<?php echo urlencode($s['slug']); ?>" class="footer-link">
              <i class="ph ph-caret-right"></i>
              <?php echo htmlspecialchars($s['title']); ?>
            </a>
          <?php endforeach; ?>
          <a href="services.php" class="footer-link" style="color: var(--clr-gold); margin-top:0.25rem;">
            <i class="ph ph-arrow-right"></i> View All Services
          </a>
        </nav>
      </div>

      <!-- Col 4: Contact -->
      <div class="reveal d-3">
        <h3 class="footer-col-title">Contact Info</h3>

        <div class="footer-contact-row">
          <div class="footer-contact-icon"><i class="ph ph-map-pin"></i></div>
          <div class="footer-contact-text"><?php echo OFFICE_ADDRESS; ?></div>
        </div>

        <div class="footer-contact-row">
          <div class="footer-contact-icon"><i class="ph ph-phone-call"></i></div>
          <div class="footer-contact-text">
            <a href="tel:<?php echo preg_replace('/\s+/', '', HELPLINE_NUMBER); ?>">
              <?php echo HELPLINE_NUMBER; ?>
            </a><br>
            <small style="color:rgba(255,255,255,0.3);">Available 24/7</small>
          </div>
        </div>

        <div class="footer-contact-row">
          <div class="footer-contact-icon"><i class="ph ph-whatsapp-logo"></i></div>
          <div class="footer-contact-text">
            <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>" target="_blank" rel="noopener">
              WhatsApp Us
            </a>
          </div>
        </div>

        <div class="footer-contact-row">
          <div class="footer-contact-icon"><i class="ph ph-envelope"></i></div>
          <div class="footer-contact-text">
            <a href="mailto:<?php echo CONTACT_EMAIL; ?>"><?php echo CONTACT_EMAIL; ?></a>
          </div>
        </div>

        <div class="footer-contact-row">
          <div class="footer-contact-icon"><i class="ph ph-clock"></i></div>
          <div class="footer-contact-text"><?php echo OFFICE_HOURS; ?></div>
        </div>

        <!-- Trust badges -->
        <div style="display:flex; flex-wrap:wrap; gap:0.5rem; margin-top:1.25rem;">
          <span style="display:inline-flex;align-items:center;gap:0.375rem;font-size:0.7rem;font-weight:600;color:rgba(255,255,255,0.35);background:rgba(255,255,255,0.05);padding:0.3rem 0.625rem;border-radius:var(--radius-full);border:1px solid rgba(255,255,255,0.08);">
            <i class="ph ph-seal-check" style="color:var(--clr-gold)"></i> SECP Registered
          </span>
          <span style="display:inline-flex;align-items:center;gap:0.375rem;font-size:0.7rem;font-weight:600;color:rgba(255,255,255,0.35);background:rgba(255,255,255,0.05);padding:0.3rem 0.625rem;border-radius:var(--radius-full);border:1px solid rgba(255,255,255,0.08);">
            <i class="ph ph-shield-check" style="color:var(--clr-gold)"></i> PBC Verified
          </span>
          <span style="display:inline-flex;align-items:center;gap:0.375rem;font-size:0.7rem;font-weight:600;color:rgba(255,255,255,0.35);background:rgba(255,255,255,0.05);padding:0.3rem 0.625rem;border-radius:var(--radius-full);border:1px solid rgba(255,255,255,0.08);">
            <i class="ph ph-lock" style="color:var(--clr-gold)"></i> 100% Confidential
          </span>
        </div>
      </div>

    </div><!-- /footer-grid -->
  </div><!-- /container -->

  <!-- City Pages Strip -->
  <div style="border-top: 1px solid rgba(255,255,255,0.06); padding: 1.25rem 0;">
    <div class="container">
      <p style="font-size:0.6875rem;font-weight:600;color:rgba(255,255,255,0.25);text-transform:uppercase;letter-spacing:0.1em;margin-bottom:0.625rem;">Lawyers by City</p>
      <div style="display:flex;flex-wrap:wrap;gap:0.375rem;">
        <a href="advocate-lawyer-karachi.php"    style="font-size:0.6875rem;color:rgba(255,255,255,0.3);text-decoration:none;padding:0.2rem 0.5rem;border:1px solid rgba(255,255,255,0.08);border-radius:var(--radius-full);">Karachi</a>
        <a href="advocate-lawyer-lahore.php"     style="font-size:0.6875rem;color:rgba(255,255,255,0.3);text-decoration:none;padding:0.2rem 0.5rem;border:1px solid rgba(255,255,255,0.08);border-radius:var(--radius-full);">Lahore</a>
        <a href="advocate-lawyer-islamabad.php"  style="font-size:0.6875rem;color:rgba(255,255,255,0.3);text-decoration:none;padding:0.2rem 0.5rem;border:1px solid rgba(255,255,255,0.08);border-radius:var(--radius-full);">Islamabad</a>
        <a href="advocate-lawyer-rawalpindi.php" style="font-size:0.6875rem;color:rgba(255,255,255,0.3);text-decoration:none;padding:0.2rem 0.5rem;border:1px solid rgba(255,255,255,0.08);border-radius:var(--radius-full);">Rawalpindi</a>
        <a href="advocate-lawyer-peshawar.php"   style="font-size:0.6875rem;color:rgba(255,255,255,0.3);text-decoration:none;padding:0.2rem 0.5rem;border:1px solid rgba(255,255,255,0.08);border-radius:var(--radius-full);">Peshawar</a>
        <a href="advocate-lawyer-quetta.php"     style="font-size:0.6875rem;color:rgba(255,255,255,0.3);text-decoration:none;padding:0.2rem 0.5rem;border:1px solid rgba(255,255,255,0.08);border-radius:var(--radius-full);">Quetta</a>
        <a href="advocate-lawyer-faisalabad.php" style="font-size:0.6875rem;color:rgba(255,255,255,0.3);text-decoration:none;padding:0.2rem 0.5rem;border:1px solid rgba(255,255,255,0.08);border-radius:var(--radius-full);">Faisalabad</a>
        <a href="advocate-lawyer-multan.php"     style="font-size:0.6875rem;color:rgba(255,255,255,0.3);text-decoration:none;padding:0.2rem 0.5rem;border:1px solid rgba(255,255,255,0.08);border-radius:var(--radius-full);">Multan</a>
        <a href="high-court-lawyer-lahore.php"   style="font-size:0.6875rem;color:rgba(255,255,255,0.3);text-decoration:none;padding:0.2rem 0.5rem;border:1px solid rgba(255,255,255,0.08);border-radius:var(--radius-full);">Lahore HC</a>
        <a href="high-court-lawyer-sindh.php"    style="font-size:0.6875rem;color:rgba(255,255,255,0.3);text-decoration:none;padding:0.2rem 0.5rem;border:1px solid rgba(255,255,255,0.08);border-radius:var(--radius-full);">Sindh HC</a>
        <a href="high-court-lawyer-islamabad.php" style="font-size:0.6875rem;color:rgba(255,255,255,0.3);text-decoration:none;padding:0.2rem 0.5rem;border:1px solid rgba(255,255,255,0.08);border-radius:var(--radius-full);">Islamabad HC</a>
        <a href="high-court-lawyer-peshawar.php" style="font-size:0.6875rem;color:rgba(255,255,255,0.3);text-decoration:none;padding:0.2rem 0.5rem;border:1px solid rgba(255,255,255,0.08);border-radius:var(--radius-full);">Peshawar HC</a>
        <a href="high-court-lawyer-balochistan.php" style="font-size:0.6875rem;color:rgba(255,255,255,0.3);text-decoration:none;padding:0.2rem 0.5rem;border:1px solid rgba(255,255,255,0.08);border-radius:var(--radius-full);">Balochistan HC</a>
        <a href="supreme-court-lawyers.php"      style="font-size:0.6875rem;color:rgba(255,255,255,0.3);text-decoration:none;padding:0.2rem 0.5rem;border:1px solid rgba(255,255,255,0.08);border-radius:var(--radius-full);">Supreme Court</a>
        <a href="female-lawyers.php"             style="font-size:0.6875rem;color:rgba(255,255,255,0.3);text-decoration:none;padding:0.2rem 0.5rem;border:1px solid rgba(255,255,255,0.08);border-radius:var(--radius-full);">Female Lawyers</a>
      </div>
    </div>
  </div>

  <!-- Divider -->
  <div class="footer-hr"></div>

  <!-- Bottom bar -->
  <div class="container">
    <div class="footer-bottom">
      <p class="footer-copy">&copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. All rights reserved. Built for Pakistan.</p>
      <div class="footer-bottom-links">
        <a href="privacy-policy.php" class="footer-bottom-link">Privacy Policy</a>
        <a href="terms.php"          class="footer-bottom-link">Terms of Service</a>
        <a href="lawyer-terms.php"   class="footer-bottom-link">Lawyer Terms</a>
        <a href="sitemap.php"        class="footer-bottom-link">Sitemap</a>
        <a href="contact.php"        class="footer-bottom-link">Contact Us</a>
      </div>
    </div>
  </div>

</footer>

<!-- ═══════════ FLOATING CALL BUTTON (Mobile) ═══════════ -->
<a href="tel:<?php echo preg_replace('/\s+/', '', HELPLINE_NUMBER); ?>"
   class="fab-call"
   aria-label="Call us now">
  <i class="ph ph-phone-call"></i>
  Call Now
</a>

<!-- ═══════════ BACK TO TOP ═══════════ -->
<button class="back-top" aria-label="Back to top" title="Back to top">
  <i class="ph ph-arrow-up"></i>
</button>

<!-- ═══════════ SCRIPTS ═══════════ -->
<script src="assets/js/main.js"></script>
</body>
</html>
