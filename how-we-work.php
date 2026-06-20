<?php
require_once 'config.php';
require_once 'includes/data.php';
$pageTitle = 'How We Work';
$pageDesc  = 'Learn how WakeelZone connects you with verified Pakistani lawyers anonymously in 4 simple steps. No appointments, no waiting — 24/7.';
include 'includes/head.php';
include 'includes/nav.php';
?>

<!-- Page Header -->
<div class="page-header">
  <div class="container page-header-inner">
    <h1 class="page-header-title heading-1">How WakeelZone Works</h1>
    <p class="page-header-sub">From your first call to expert legal guidance — in minutes, not days.</p>
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <span class="breadcrumb-item"><a href="index.php">Home</a></span>
      <span class="breadcrumb-sep"><i class="ph ph-caret-right"></i></span>
      <span class="breadcrumb-item">How We Work</span>
    </nav>
  </div>
</div>

<!-- ════════ 4 STEPS ════════ -->
<section class="section">
  <div class="container">
    <div class="section-header center reveal">
      <span class="section-label"><i class="ph ph-steps"></i> Our Process</span>
      <h2 class="heading-1">4 Simple Steps to Expert Legal Advice</h2>
      <div class="divider-gold center"></div>
      <p style="margin-top:1rem;">No appointments. No waiting rooms. No paperwork upfront. Just expert legal guidance, anonymously.</p>
    </div>

    <!-- Vertical steps (detailed) -->
    <div style="max-width:800px;margin-inline:auto;">
      <?php foreach ($process_steps as $i => $step): ?>
      <div class="reveal" style="display:grid;grid-template-columns:80px 1fr;gap:2rem;margin-bottom:3rem;position:relative;">
        <!-- Step indicator -->
        <div style="text-align:center;">
          <div style="width:80px;height:80px;background:linear-gradient(135deg,var(--clr-primary),var(--clr-primary-light));border-radius:var(--radius-lg);display:flex;align-items:center;justify-content:center;margin-bottom:0.75rem;box-shadow:var(--shadow-navy);">
            <i class="ph <?php echo htmlspecialchars($step['icon']); ?>" style="font-size:2rem;color:var(--clr-gold);"></i>
          </div>
          <?php if ($i < count($process_steps) - 1): ?>
          <div style="width:2px;height:calc(100% - 80px - 1.5rem);background:linear-gradient(var(--clr-primary-100),transparent);margin:0 auto;"></div>
          <?php endif; ?>
        </div>
        <!-- Content -->
        <div style="padding-top:0.5rem;">
          <div style="font-size:var(--text-xs);font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:var(--clr-gold);margin-bottom:0.375rem;">
            Step <?php echo $step['number']; ?>
          </div>
          <h3 class="heading-3" style="margin-bottom:0.75rem;"><?php echo htmlspecialchars($step['title']); ?></h3>
          <p style="font-size:var(--text-sm);color:var(--clr-text-3);line-height:var(--leading-relaxed);"><?php echo htmlspecialchars($step['desc']); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ════════ ANONYMITY EXPLAINED ════════ -->
<section class="section bg-surface-2">
  <div class="container">
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:3.5rem;align-items:center;">
      <div class="reveal-left">
        <span class="section-label"><i class="ph ph-shield-lock"></i> Our Core Feature</span>
        <h2 class="heading-1">How Anonymity Works</h2>
        <div class="divider-gold"></div>
        <p class="lead" style="margin-top:1.25rem;">
          WakeelZone is the only Pakistani legal platform where your identity is protected
          throughout the consultation process. Here's exactly how it works:
        </p>
        <div style="margin-top:1.5rem;display:flex;flex-direction:column;gap:1rem;">
          <?php
          $anon_steps = [
            ['icon'=>'ph-phone-call',    'title'=>'You Call Our Helpline',
             'text'=>'You call our number. Only our legal executives answer — never the lawyer directly.'],
            ['icon'=>'ph-chat-dots',     'title'=>'We Brief Your Issue',
             'text'=>'You describe your legal situation. Your name and contact remain unknown to the lawyers.'],
            ['icon'=>'ph-user-check',    'title'=>'We Match You Anonymously',
             'text'=>'We match you with the best available lawyer based on expertise — and connect you without revealing your identity.'],
            ['icon'=>'ph-shield-check',  'title'=>'Consult in Full Privacy',
             'text'=>'The lawyer provides legal advice while you remain anonymous. You share what you choose, when you choose.'],
          ];
          foreach ($anon_steps as $j => $s):
          ?>
          <div style="display:flex;gap:1rem;align-items:flex-start;" class="reveal delay-<?php echo $j+1; ?>">
            <div style="width:44px;height:44px;flex-shrink:0;background:var(--clr-gold-50);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;color:var(--clr-gold);font-size:1.125rem;">
              <i class="ph <?php echo $s['icon']; ?>"></i>
            </div>
            <div>
              <h4 style="font-size:var(--text-sm);font-weight:700;color:var(--clr-text);margin-bottom:0.25rem;"><?php echo $s['title']; ?></h4>
              <p style="font-size:var(--text-xs);color:var(--clr-text-3);line-height:var(--leading-relaxed);margin:0;"><?php echo $s['text']; ?></p>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="reveal-right">
        <div style="background:linear-gradient(135deg,var(--clr-primary-dark),var(--clr-primary));border-radius:var(--radius-xl);padding:2.5rem;color:var(--clr-text-inverse);position:relative;overflow:hidden;">
          <div style="position:absolute;inset:0;background-image:radial-gradient(circle,rgba(255,255,255,0.04) 1px,transparent 1px);background-size:20px 20px;"></div>
          <div style="position:relative;z-index:1;">
            <i class="ph ph-shield-lock" style="font-size:3rem;color:var(--clr-gold);display:block;margin-bottom:1.25rem;"></i>
            <h3 style="font-size:1.375rem;font-weight:800;margin-bottom:1.25rem;">Your Data, Protected</h3>
            <?php
            $privacy_points = [
              'Your name is never shared with the lawyer',
              'Your phone number is masked throughout',
              'No personal data is stored after consultation',
              'Pakistan Bar Council cross-checked lawyers only',
              'You decide when — if ever — to reveal yourself',
              'Fully encrypted consultation channels',
            ];
            foreach ($privacy_points as $pp):
            ?>
            <div style="display:flex;align-items:center;gap:0.75rem;margin-bottom:0.75rem;font-size:var(--text-sm);color:rgba(255,255,255,0.8);">
              <i class="ph ph-check-circle" style="color:var(--clr-gold);font-size:1rem;flex-shrink:0;"></i>
              <?php echo $pp; ?>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ════════ FOR LAWYERS ════════ -->
<section class="section">
  <div class="container">
    <div class="section-header center reveal">
      <span class="section-label"><i class="ph ph-identification-badge"></i> Join Our Network</span>
      <h2 class="heading-1">Are You a Lawyer?</h2>
      <div class="divider-gold center"></div>
      <p style="margin-top:1rem;">
        WakeelZone is built by lawyers, for lawyers. Join 2,500+ verified advocates
        already growing their practice through our platform.
      </p>
    </div>
    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.25rem;margin-bottom:2rem;" class="three-col-resp">
      <?php
      $lawyer_benefits = [
        ['icon'=>'ph-users',       'title'=>'Instant Client Pipeline',  'desc'=>'Receive pre-qualified legal inquiries matched to your practice area — without spending on advertising.'],
        ['icon'=>'ph-currency-circle-dollar','title'=>'Pay-Per-Use Model', 'desc'=>'No monthly fees. You pay a small platform fee only when a successful consultation happens through us.'],
        ['icon'=>'ph-shield-check','title'=>'Credibility Boost',        'desc'=>'Your Pakistan Bar Council verification is prominently displayed. Clients trust PBC-verified lawyers more.'],
      ];
      foreach ($lawyer_benefits as $i => $b):
      ?>
      <div class="service-card reveal delay-<?php echo $i+1; ?>">
        <div class="service-icon"><i class="ph <?php echo $b['icon']; ?>"></i></div>
        <h3 class="service-title"><?php echo $b['title']; ?></h3>
        <p class="service-desc"><?php echo $b['desc']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
    <div style="text-align:center;" class="reveal">
      <a href="lawyer-registration.php" class="btn btn-primary btn-lg">
        <i class="ph ph-identification-badge"></i> Register as a Lawyer
      </a>
    </div>
  </div>
</section>

<!-- ════════ CTA ════════ -->
<section class="cta-section">
  <div class="container cta-inner">
    <h2 class="heading-1 reveal" style="color:var(--clr-text-inverse);margin-bottom:0.75rem;">
      Ready to Get Started?
    </h2>
    <div class="cta-phone reveal d-1">
      <i class="ph ph-phone-call"></i>
      <a href="tel:<?php echo preg_replace('/\s+/', '', HELPLINE_NUMBER); ?>" style="color:inherit;"><?php echo HELPLINE_NUMBER; ?></a>
    </div>
    <div class="cta-btns reveal d-2" style="margin-top:1.5rem;">
      <a href="tel:<?php echo preg_replace('/\s+/', '', HELPLINE_NUMBER); ?>" class="btn btn-gold btn-lg">
        <i class="ph ph-phone-call"></i> Call Now
      </a>
      <a href="services.php" class="btn btn-outline-white btn-lg">
        <i class="ph ph-scales"></i> Browse Services
      </a>
    </div>
  </div>
</section>

<style>
@media (max-width: 767px) {
  .three-col-resp { grid-template-columns: 1fr !important; }
  .why-us-grid { grid-template-columns: 1fr !important; }
}
</style>

<?php include 'includes/footer.php'; ?>
