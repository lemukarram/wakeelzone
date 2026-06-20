<?php
require_once 'config.php';
require_once 'includes/data.php';
$pageTitle = 'Contact Us';
$pageDesc  = 'Get in touch with WakeelZone — Pakistan\'s premier anonymous legal platform. Call 24/7, send a message, or WhatsApp us for immediate legal guidance.';
include 'includes/head.php';
include 'includes/nav.php';
?>

<!-- Page Header -->
<div class="page-header">
  <div class="container page-header-inner">
    <h1 class="page-header-title heading-1">Contact Us</h1>
    <p class="page-header-sub">We are available 24/7. Reach out for immediate legal guidance — anonymously.</p>
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <span class="breadcrumb-item"><a href="index.php">Home</a></span>
      <span class="breadcrumb-sep"><i class="ph ph-caret-right"></i></span>
      <span class="breadcrumb-item">Contact Us</span>
    </nav>
  </div>
</div>

<!-- ════════ CONTACT SECTION ════════ -->
<section class="section">
  <div class="container">
    <div style="display:grid;grid-template-columns:1fr 1.5fr;gap:3rem;align-items:start;">

      <!-- Contact Info -->
      <div class="reveal-left">
        <span class="section-label"><i class="ph ph-info"></i> Get in Touch</span>
        <h2 class="heading-2" style="margin-bottom:0.75rem;">We're Here to Help</h2>
        <p style="font-size:var(--text-sm);color:var(--clr-text-3);line-height:var(--leading-relaxed);margin-bottom:1.75rem;">
          Whether you need immediate legal guidance, want to register as a lawyer,
          or have a general query — we respond to every message.
        </p>

        <div style="display:flex;flex-direction:column;gap:1.25rem;margin-bottom:2rem;">
          <?php
          $contact_info = [
            ['icon'=>'ph-phone-call',    'label'=>'Helpline (24/7)',   'value'=>HELPLINE_NUMBER, 'href'=>'tel:'.preg_replace('/\s+/','',HELPLINE_NUMBER)],
            ['icon'=>'ph-whatsapp-logo', 'label'=>'WhatsApp',          'value'=>'Message us on WhatsApp', 'href'=>'https://wa.me/'.WHATSAPP_NUMBER],
            ['icon'=>'ph-envelope',      'label'=>'Email',             'value'=>CONTACT_EMAIL,   'href'=>'mailto:'.CONTACT_EMAIL],
            ['icon'=>'ph-map-pin',       'label'=>'Office',            'value'=>OFFICE_ADDRESS,  'href'=>null],
            ['icon'=>'ph-clock',         'label'=>'Hours',             'value'=>OFFICE_HOURS,    'href'=>null],
          ];
          foreach ($contact_info as $info):
          ?>
          <div style="display:flex;gap:1rem;align-items:flex-start;">
            <div style="width:44px;height:44px;background:var(--clr-primary-50);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;color:var(--clr-primary);font-size:1.125rem;flex-shrink:0;">
              <i class="ph <?php echo $info['icon']; ?>"></i>
            </div>
            <div>
              <div style="font-size:var(--text-xs);font-weight:600;text-transform:uppercase;letter-spacing:0.08em;color:var(--clr-text-muted);margin-bottom:0.25rem;"><?php echo $info['label']; ?></div>
              <?php if ($info['href']): ?>
              <a href="<?php echo htmlspecialchars($info['href']); ?>"
                 style="font-size:var(--text-sm);font-weight:600;color:var(--clr-primary);transition:color var(--ease-fast);"
                 <?php if (str_starts_with($info['href'], 'http')) echo 'target="_blank" rel="noopener"'; ?>
              ><?php echo htmlspecialchars($info['value']); ?></a>
              <?php else: ?>
              <span style="font-size:var(--text-sm);color:var(--clr-text-2);"><?php echo htmlspecialchars($info['value']); ?></span>
              <?php endif; ?>
            </div>
          </div>
          <?php endforeach; ?>
        </div>

        <!-- Quick CTA -->
        <div style="display:flex;flex-direction:column;gap:0.75rem;">
          <a href="tel:<?php echo preg_replace('/\s+/', '', HELPLINE_NUMBER); ?>"
             class="btn btn-call btn-lg" style="justify-content:center;">
            <i class="ph ph-phone-call"></i> Call Our Helpline Now
          </a>
          <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>"
             target="_blank" rel="noopener"
             class="wa-btn" style="justify-content:center;">
            <i class="ph ph-whatsapp-logo"></i> WhatsApp Us
          </a>
        </div>

        <!-- Social -->
        <div style="margin-top:1.75rem;">
          <p style="font-size:var(--text-xs);font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:var(--clr-text-muted);margin-bottom:0.875rem;">Follow Us</p>
          <div class="social-links">
            <a href="<?php echo SOCIAL_FACEBOOK;  ?>" target="_blank" rel="noopener" class="social-link" style="color:var(--clr-text-2);background:var(--clr-surface-2);border:1px solid var(--clr-border);" aria-label="Facebook"><i class="ph ph-facebook-logo"></i></a>
            <a href="<?php echo SOCIAL_INSTAGRAM; ?>" target="_blank" rel="noopener" class="social-link" style="color:var(--clr-text-2);background:var(--clr-surface-2);border:1px solid var(--clr-border);" aria-label="Instagram"><i class="ph ph-instagram-logo"></i></a>
            <a href="<?php echo SOCIAL_TWITTER;   ?>" target="_blank" rel="noopener" class="social-link" style="color:var(--clr-text-2);background:var(--clr-surface-2);border:1px solid var(--clr-border);" aria-label="Twitter"><i class="ph ph-x-logo"></i></a>
            <a href="<?php echo SOCIAL_LINKEDIN;  ?>" target="_blank" rel="noopener" class="social-link" style="color:var(--clr-text-2);background:var(--clr-surface-2);border:1px solid var(--clr-border);" aria-label="LinkedIn"><i class="ph ph-linkedin-logo"></i></a>
          </div>
        </div>

      </div>

      <!-- Contact Form -->
      <div class="reveal-right">
        <div style="background:var(--clr-surface);border:1px solid var(--clr-border-light);border-radius:var(--radius-xl);padding:2.5rem;box-shadow:var(--shadow-md);">
          <h3 class="heading-3" style="margin-bottom:0.5rem;">Send Us a Message</h3>
          <p style="font-size:var(--text-sm);color:var(--clr-text-muted);margin-bottom:1.75rem;">
            We respond within 2 hours. For urgent matters, please call our helpline.
          </p>

          <!-- Feedback div -->
          <div id="formFeedback" style="display:none;"></div>

          <form id="contactForm" action="process_contact.php" method="POST" novalidate>
            <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem;">
              <div class="form-group">
                <label class="form-label" for="name">Full Name *</label>
                <input type="text" id="name" name="name" class="form-input" placeholder="Your full name" required autocomplete="name">
              </div>
              <div class="form-group">
                <label class="form-label" for="email">Email Address *</label>
                <input type="email" id="email" name="email" class="form-input" placeholder="your@email.com" required autocomplete="email">
              </div>
            </div>

            <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem;">
              <div class="form-group">
                <label class="form-label" for="phone">Phone Number *</label>
                <input type="tel" id="phone" name="phone" class="form-input" placeholder="+92 3XX XXXXXXX" required autocomplete="tel">
              </div>
              <div class="form-group">
                <label class="form-label" for="service">Legal Area</label>
                <select id="service" name="service" class="form-select">
                  <option value="">Select practice area</option>
                  <?php foreach ($services as $s): ?>
                  <option value="<?php echo htmlspecialchars($s['slug']); ?>"><?php echo htmlspecialchars($s['title']); ?></option>
                  <?php endforeach; ?>
                  <option value="other">Other / Not Sure</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="form-label" for="subject">Subject *</label>
              <input type="text" id="subject" name="subject" class="form-input" placeholder="Brief subject of your inquiry" required>
            </div>

            <div class="form-group">
              <label class="form-label" for="message">Your Message *</label>
              <textarea id="message" name="message" class="form-textarea" placeholder="Describe your legal situation briefly. Everything shared is kept strictly confidential." required rows="5"></textarea>
            </div>

            <!-- Privacy note -->
            <p style="font-size:var(--text-xs);color:var(--clr-text-muted);margin-bottom:1.25rem;display:flex;align-items:flex-start;gap:0.375rem;line-height:1.5;">
              <i class="ph ph-shield-lock" style="color:var(--clr-primary);font-size:1rem;flex-shrink:0;margin-top:1px;"></i>
              Your information is kept strictly confidential and is never shared with third parties.
            </p>

            <button type="submit" class="btn btn-primary btn-lg" style="width:100%;justify-content:center;">
              <i class="ph ph-paper-plane-tilt"></i> Send Message
            </button>
          </form>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ════════ MAP PLACEHOLDER ════════ -->
<div style="background:var(--clr-surface-2);height:400px;display:flex;align-items:center;justify-content:center;border-top:1px solid var(--clr-border);">
  <div style="text-align:center;color:var(--clr-text-muted);">
    <i class="ph ph-map-pin" style="font-size:3rem;color:var(--clr-primary-100);display:block;margin-bottom:0.75rem;"></i>
    <p style="font-size:var(--text-sm);font-weight:500;"><?php echo OFFICE_ADDRESS; ?></p>
    <a href="https://maps.google.com" target="_blank" rel="noopener" class="btn btn-outline btn-sm" style="margin-top:0.875rem;">
      <i class="ph ph-map-trifold"></i> Open in Google Maps
    </a>
  </div>
</div>

<style>
@media (max-width: 767px) {
  .contact-grid { grid-template-columns: 1fr !important; }
  .contact-grid > div:first-child { order: 2; }
  .contact-grid > div:last-child  { order: 1; }
}
</style>

<?php include 'includes/footer.php'; ?>
