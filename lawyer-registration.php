<?php
require_once 'config.php';
require_once 'includes/data.php';
$pageTitle = 'Register as a Lawyer';
$pageDesc  = 'Join 2,500+ verified lawyers on WakeelZone — Pakistan\'s premier legal platform. Grow your practice, receive qualified clients, and get PBC-verified.';
include 'includes/head.php';
include 'includes/nav.php';
?>

<!-- Page Header -->
<div class="page-header">
  <div class="container page-header-inner">
    <h1 class="page-header-title heading-1">Register as a Lawyer</h1>
    <p class="page-header-sub">Join Pakistan's fastest-growing legal platform and grow your practice.</p>
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <span class="breadcrumb-item"><a href="index.php">Home</a></span>
      <span class="breadcrumb-sep"><i class="ph ph-caret-right"></i></span>
      <span class="breadcrumb-item">For Lawyers</span>
    </nav>
  </div>
</div>

<!-- ════════ BENEFITS ════════ -->
<section class="section-sm bg-surface-2">
  <div class="container">
    <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:1.125rem;" class="four-col-resp">
      <?php
      $benefits = [
        ['icon'=>'ph-users',       'title'=>'Instant Clients',     'desc'=>'Get matched with pre-qualified clients in your practice area — no cold outreach needed.'],
        ['icon'=>'ph-seal-check',  'title'=>'Credibility Badge',   'desc'=>'Your PBC-verified status is prominently displayed to build client trust instantly.'],
        ['icon'=>'ph-currency-circle-dollar','title'=>'No Monthly Fees','desc'=>'Zero subscription costs. Pay only a small success-based platform commission.'],
        ['icon'=>'ph-clock',       'title'=>'Flexible Hours',      'desc'=>'Accept consultations on your schedule — morning, evening, or weekend. You control your availability.'],
      ];
      foreach ($benefits as $i => $b):
      ?>
      <div style="background:var(--clr-surface);border:1px solid var(--clr-border-light);border-radius:var(--radius-lg);padding:1.5rem;text-align:center;" class="reveal delay-<?php echo $i+1; ?>">
        <div style="width:52px;height:52px;background:var(--clr-primary-50);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin:0 auto 1rem;color:var(--clr-primary);font-size:1.375rem;">
          <i class="ph <?php echo $b['icon']; ?>"></i>
        </div>
        <h3 style="font-size:var(--text-sm);font-weight:700;color:var(--clr-text);margin-bottom:0.375rem;"><?php echo $b['title']; ?></h3>
        <p style="font-size:var(--text-xs);color:var(--clr-text-3);line-height:var(--leading-relaxed);"><?php echo $b['desc']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ════════ REGISTRATION FORM ════════ -->
<section class="section">
  <div class="container">
    <div style="display:grid;grid-template-columns:1fr 1.5fr;gap:3.5rem;align-items:start;">

      <!-- Left: Info -->
      <div class="reveal-left">
        <span class="section-label"><i class="ph ph-identification-badge"></i> Join Our Network</span>
        <h2 class="heading-2" style="margin-bottom:0.75rem;">Already Trusted by 2,500+ Lawyers</h2>
        <div class="divider-gold" style="margin-bottom:1.25rem;"></div>
        <p style="font-size:var(--text-sm);color:var(--clr-text-3);line-height:var(--leading-relaxed);margin-bottom:1.5rem;">
          WakeelZone is the only platform in Pakistan that provides lawyers with a steady,
          pre-qualified client pipeline — matched to your specific practice area, location,
          and language preference.
        </p>

        <!-- What happens next -->
        <h4 style="font-size:var(--text-sm);font-weight:700;color:var(--clr-text);margin-bottom:0.875rem;">What Happens After You Register?</h4>
        <?php
        $next_steps = [
          ['icon'=>'ph-file-text',   'label'=>'Our team reviews your application (1-2 business days)'],
          ['icon'=>'ph-shield-check','label'=>'We verify your PBC / Provincial Bar Council enrollment'],
          ['icon'=>'ph-user-check',  'label'=>'Your profile goes live on our platform'],
          ['icon'=>'ph-phone-call',  'label'=>'You start receiving qualified client consultations'],
        ];
        foreach ($next_steps as $j => $ns):
        ?>
        <div style="display:flex;align-items:flex-start;gap:0.875rem;margin-bottom:0.875rem;">
          <div style="width:36px;height:36px;background:var(--clr-gold-50);border-radius:var(--radius-full);display:flex;align-items:center;justify-content:center;color:var(--clr-gold);font-size:0.875rem;flex-shrink:0;font-weight:700;">
            <?php echo $j + 1; ?>
          </div>
          <p style="font-size:var(--text-sm);color:var(--clr-text-2);margin:0;padding-top:0.375rem;"><?php echo $ns['label']; ?></p>
        </div>
        <?php endforeach; ?>

        <!-- Stats -->
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:0.875rem;margin-top:1.5rem;padding:1.5rem;background:var(--clr-primary-50);border-radius:var(--radius-lg);border:1px solid var(--clr-primary-100);">
          <div style="text-align:center;">
            <div style="font-size:1.75rem;font-weight:800;color:var(--clr-primary);">2,500+</div>
            <div style="font-size:var(--text-xs);color:var(--clr-text-muted);font-weight:600;text-transform:uppercase;letter-spacing:0.08em;">Lawyers</div>
          </div>
          <div style="text-align:center;">
            <div style="font-size:1.75rem;font-weight:800;color:var(--clr-primary);">10,000+</div>
            <div style="font-size:var(--text-xs);color:var(--clr-text-muted);font-weight:600;text-transform:uppercase;letter-spacing:0.08em;">Consultations</div>
          </div>
        </div>
      </div>

      <!-- Right: Form -->
      <div class="reveal-right">
        <div style="background:var(--clr-surface);border:1px solid var(--clr-border-light);border-radius:var(--radius-xl);padding:2.5rem;box-shadow:var(--shadow-md);">
          <h3 class="heading-3" style="margin-bottom:0.375rem;">Lawyer Registration Form</h3>
          <p style="font-size:var(--text-sm);color:var(--clr-text-muted);margin-bottom:1.75rem;">Fill in your details and we'll be in touch within 1-2 business days.</p>

          <div id="formFeedback" style="display:none;"></div>

          <form id="contactForm" action="process_contact.php" method="POST" novalidate>
            <input type="hidden" name="subject" value="Lawyer Registration Application">
            <input type="hidden" name="service" value="lawyer-registration">

            <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem;">
              <div class="form-group">
                <label class="form-label" for="name">Full Legal Name *</label>
                <input type="text" id="name" name="name" class="form-input" placeholder="Advocate [Your Name]" required>
              </div>
              <div class="form-group">
                <label class="form-label" for="email">Email Address *</label>
                <input type="email" id="email" name="email" class="form-input" placeholder="advocate@email.com" required>
              </div>
            </div>

            <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem;">
              <div class="form-group">
                <label class="form-label" for="phone">Phone / WhatsApp *</label>
                <input type="tel" id="phone" name="phone" class="form-input" placeholder="+92 3XX XXXXXXX" required>
              </div>
              <div class="form-group">
                <label class="form-label" for="bar_number">Bar Enrollment Number *</label>
                <input type="text" id="bar_number" name="bar_number" class="form-input" placeholder="PBC / Provincial enrollment no." required>
              </div>
            </div>

            <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem;">
              <div class="form-group">
                <label class="form-label" for="city">City *</label>
                <select id="city" name="city" class="form-select" required>
                  <option value="">Select your city</option>
                  <?php foreach ($cities as $city): ?>
                  <option value="<?php echo htmlspecialchars($city); ?>"><?php echo htmlspecialchars($city); ?></option>
                  <?php endforeach; ?>
                  <option value="other">Other City</option>
                </select>
              </div>
              <div class="form-group">
                <label class="form-label" for="experience">Years of Experience *</label>
                <select id="experience" name="experience" class="form-select" required>
                  <option value="">Select experience</option>
                  <option value="0-2">0–2 Years (Junior)</option>
                  <option value="3-5">3–5 Years</option>
                  <option value="6-10">6–10 Years</option>
                  <option value="10+">10+ Years (Senior)</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="form-label" for="practice_areas">Primary Practice Areas *</label>
              <select id="practice_areas" name="service" class="form-select" required>
                <option value="">Select main practice area</option>
                <?php foreach ($services as $s): ?>
                <option value="<?php echo htmlspecialchars($s['slug']); ?>"><?php echo htmlspecialchars($s['title']); ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="form-group">
              <label class="form-label" for="message">Brief Professional Summary *</label>
              <textarea id="message" name="message" class="form-textarea" rows="4"
                placeholder="Tell us about your specializations, courts you practice in, notable cases, and anything that distinguishes your practice..." required></textarea>
            </div>

            <div style="background:var(--clr-gold-50);border:1px solid rgba(201,168,76,0.2);border-radius:var(--radius-md);padding:0.875rem 1rem;margin-bottom:1.25rem;display:flex;align-items:flex-start;gap:0.625rem;">
              <i class="ph ph-info" style="color:var(--clr-gold);font-size:1rem;flex-shrink:0;margin-top:2px;"></i>
              <p style="font-size:var(--text-xs);color:var(--clr-text-3);margin:0;line-height:1.5;">
                By submitting this form, you confirm that all information is accurate and you consent
                to WakeelZone verifying your credentials with the Pakistan Bar Council / Provincial Bar Councils.
              </p>
            </div>

            <button type="submit" class="btn btn-primary btn-lg" style="width:100%;justify-content:center;">
              <i class="ph ph-identification-badge"></i> Submit Registration
            </button>
          </form>
        </div>
      </div>

    </div>
  </div>
</section>

<style>
@media (max-width: 767px) {
  .four-col-resp { grid-template-columns: 1fr 1fr !important; }
}
@media (max-width: 479px) {
  .four-col-resp { grid-template-columns: 1fr !important; }
}
</style>

<?php include 'includes/footer.php'; ?>
