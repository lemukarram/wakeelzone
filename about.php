<?php
require_once 'config.php';
require_once 'includes/data.php';
$pageTitle = 'About Us';
$pageDesc  = 'Learn about WakeelZone — Pakistan\'s premier anonymous legal platform founded to make quality legal advice accessible to every Pakistani, anonymously.';
include 'includes/head.php';
include 'includes/nav.php';
?>

<!-- Page Header -->
<div class="page-header">
  <div class="container page-header-inner">
    <h1 class="page-header-title heading-1">About WakeelZone</h1>
    <p class="page-header-sub">Revolutionizing legal consultations in Pakistan with privacy, trust, and transparency.</p>
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <span class="breadcrumb-item"><a href="index.php">Home</a></span>
      <span class="breadcrumb-sep"><i class="ph ph-caret-right"></i></span>
      <span class="breadcrumb-item">About Us</span>
    </nav>
  </div>
</div>

<!-- ════════ STORY SECTION ════════ -->
<section class="section">
  <div class="container">
    <div class="why-us-grid">

      <div class="reveal-left">
        <span class="section-label"><i class="ph ph-info"></i> Our Story</span>
        <h2 class="heading-1">Pakistan's First Anonymous Legal Platform</h2>
        <div class="divider-gold"></div>
        <p class="lead" style="margin-top:1.25rem;">
          WakeelZone was founded with a singular mission: to remove the biggest barrier
          to legal help in Pakistan — the fear that seeking advice will expose your
          personal situation to judgment, gossip, or community pressure.
        </p>
        <p style="margin-top:1rem;font-size:var(--text-sm);color:var(--clr-text-3);line-height:var(--leading-relaxed);">
          Many Pakistanis hesitate to seek legal advice on sensitive matters — family disputes,
          domestic abuse, workplace harassment, or financial fraud — because they worry about
          who might find out. WakeelZone changes that. Our platform lets you speak to verified,
          experienced lawyers without ever revealing your name, phone number, or identity.
        </p>
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:0.75rem;margin-top:1.5rem;">
          <?php
          $checks = ['24/7 Availability','Verified Lawyers','Encrypted Data','Secure Consultations','18 Practice Areas','Nationwide Coverage'];
          foreach ($checks as $c): ?>
          <div class="check-list-item">
            <i class="ph ph-check-circle"></i>
            <span style="font-weight:500;font-size:var(--text-sm);"><?php echo $c; ?></span>
          </div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="reveal-right">
        <div style="background:linear-gradient(135deg,var(--clr-primary),var(--clr-primary-light));border-radius:var(--radius-xl);padding:2.5rem;color:var(--clr-text-inverse);position:relative;overflow:hidden;">
          <div style="position:absolute;inset:0;background-image:radial-gradient(circle,rgba(255,255,255,0.05) 1px,transparent 1px);background-size:24px 24px;"></div>
          <div style="position:relative;z-index:1;">
            <i class="ph ph-scales" style="font-size:3rem;color:var(--clr-gold);margin-bottom:1rem;display:block;"></i>
            <h3 style="font-size:1.5rem;font-weight:800;margin-bottom:0.75rem;">Our Founding Principle</h3>
            <p style="color:rgba(255,255,255,0.75);line-height:var(--leading-relaxed);font-size:var(--text-sm);">
              "Choosing a lawyer is a deeply personal decision. It's not about finding the biggest
              name — it's about finding the right connection, in complete confidence."
            </p>
            <div style="margin-top:1.5rem;padding-top:1.25rem;border-top:1px solid rgba(255,255,255,0.15);">
              <div style="font-size:var(--text-xs);color:var(--clr-gold);font-weight:600;text-transform:uppercase;letter-spacing:0.1em;margin-bottom:0.25rem;">WakeelZone Founder</div>
              <div style="font-weight:700;">Legal Services Platform</div>
            </div>
          </div>
        </div>

        <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem;margin-top:1rem;">
          <div style="background:var(--clr-gold-50);border:1px solid rgba(201,168,76,0.2);border-radius:var(--radius-lg);padding:1.5rem;text-align:center;">
            <div style="font-size:2rem;font-weight:800;color:var(--clr-primary);">2,500+</div>
            <div style="font-size:var(--text-xs);color:var(--clr-text-muted);font-weight:600;text-transform:uppercase;letter-spacing:0.08em;margin-top:0.25rem;">Verified Lawyers</div>
          </div>
          <div style="background:var(--clr-primary-50);border:1px solid rgba(27,58,107,0.1);border-radius:var(--radius-lg);padding:1.5rem;text-align:center;">
            <div style="font-size:2rem;font-weight:800;color:var(--clr-primary);">10,000+</div>
            <div style="font-size:var(--text-xs);color:var(--clr-text-muted);font-weight:600;text-transform:uppercase;letter-spacing:0.08em;margin-top:0.25rem;">Consultations</div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ════════ MISSION / VISION / VALUES ════════ -->
<section class="section bg-surface-2">
  <div class="container">
    <div class="section-header center reveal">
      <span class="section-label"><i class="ph ph-target"></i> Our Foundation</span>
      <h2 class="heading-1">Mission, Vision & Values</h2>
      <div class="divider-gold center"></div>
    </div>

    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem;" class="three-cols-responsive">
      <?php
      $mvv = [
        ['icon'=>'ph-target',    'title'=>'Our Mission', 'color'=>'navy',
         'text'=>'To provide instant, affordable, and reliable legal advice to every Pakistani citizen, regardless of location or economic status — making quality legal counsel accessible to all, without compromising privacy.'],
        ['icon'=>'ph-eye',       'title'=>'Our Vision',  'color'=>'gold',
         'text'=>'To create a Pakistan where legal knowledge is a right, not a privilege — where every citizen can navigate the legal system with confidence, knowing that expert help is just a phone call away.'],
        ['icon'=>'ph-heart',     'title'=>'Our Values',  'color'=>'dark',
         'text'=>'Integrity, Confidentiality, and Transparency are the three pillars that support every interaction on our platform. We never compromise on these values, no matter the circumstance.'],
      ];
      foreach ($mvv as $i => $item):
      ?>
      <div class="reveal delay-<?php echo $i + 1; ?>"
           style="background:var(--clr-surface);border:1px solid var(--clr-border-light);border-radius:var(--radius-lg);padding:2rem;text-align:center;">
        <div style="width:60px;height:60px;border-radius:var(--radius-lg);background:var(--clr-primary);display:flex;align-items:center;justify-content:center;margin:0 auto 1.25rem;box-shadow:var(--shadow-navy);">
          <i class="ph <?php echo $item['icon']; ?>" style="font-size:1.5rem;color:var(--clr-gold);"></i>
        </div>
        <h3 class="heading-3" style="margin-bottom:0.75rem;"><?php echo $item['title']; ?></h3>
        <p style="font-size:var(--text-sm);color:var(--clr-text-3);line-height:var(--leading-relaxed);"><?php echo $item['text']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ════════ WHY WE'RE DIFFERENT ════════ -->
<section class="section">
  <div class="container">
    <div class="section-header center reveal">
      <span class="section-label"><i class="ph ph-star"></i> What Sets Us Apart</span>
      <h2 class="heading-1">The WakeelZone Difference</h2>
      <div class="divider-gold center"></div>
    </div>

    <div style="display:grid;grid-template-columns:repeat(2,1fr);gap:1.25rem;max-width:900px;margin-inline:auto;">
      <?php
      $diffs = [
        ['icon'=>'ph-shield-lock',    'title'=>'Complete Anonymity First', 'desc'=>'Our platform is built anonymity-first. Unlike other services, you are never required to reveal your identity to consult a lawyer. You stay anonymous until you actively choose to proceed with formal representation.'],
        ['icon'=>'ph-seal-check',     'title'=>'Mandatory Bar Verification', 'desc'=>'Every lawyer on our platform is cross-checked against Pakistan Bar Council and Provincial Bar Council enrollment records. This is non-negotiable — no exceptions, no shortcuts.'],
        ['icon'=>'ph-clock-countdown','title'=>'True 24/7 Response',        'desc'=>'Our helpline is genuinely staffed around the clock, 365 days a year. Legal emergencies don\'t wait for business hours, and neither do we.'],
        ['icon'=>'ph-arrows-merge',   'title'=>'Hybrid Online + Offline',    'desc'=>'We\'re not purely digital. Start your consultation anonymously online, then transition seamlessly to formal offline representation with the same lawyer when you\'re ready.'],
        ['icon'=>'ph-currency-circle-dollar','title'=>'Transparent Pay-Per-Use','desc'=>'No monthly subscriptions. No retainers. Pay only for the time you spend consulting. We provide clear, upfront pricing before every session begins.'],
        ['icon'=>'ph-globe',          'title'=>'Overseas Pakistani Support', 'desc'=>'Our platform is specifically designed to serve overseas Pakistanis who need legal help back home without traveling. Full remote representation available.'],
      ];
      foreach ($diffs as $i => $d):
      ?>
      <div class="feature-item reveal delay-<?php echo ($i % 3) + 1; ?>"
           style="background:var(--clr-surface);border:1px solid var(--clr-border-light);border-radius:var(--radius-lg);padding:1.5rem;align-items:flex-start;">
        <div class="feature-icon"><i class="ph <?php echo $d['icon']; ?>"></i></div>
        <div>
          <h4 class="feature-title"><?php echo $d['title']; ?></h4>
          <p class="feature-desc"><?php echo $d['desc']; ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ════════ CTA ════════ -->
<section class="cta-section">
  <div class="container cta-inner">
    <h2 class="heading-1 reveal" style="color:var(--clr-text-inverse);margin-bottom:0.75rem;">
      Ready to Talk to an Expert?
    </h2>
    <p class="reveal d-1" style="color:rgba(255,255,255,0.7);font-size:var(--text-base);max-width:500px;margin:0 auto 2rem;line-height:var(--leading-relaxed);">
      Join thousands of Pakistanis who have successfully found legal solutions through WakeelZone.
    </p>
    <div class="cta-btns reveal d-2">
      <a href="tel:<?php echo preg_replace('/\s+/', '', HELPLINE_NUMBER); ?>" class="btn btn-gold btn-lg">
        <i class="ph ph-phone-call"></i> Start Your Consultation
      </a>
      <a href="contact.php" class="btn btn-outline-white btn-lg">
        <i class="ph ph-envelope"></i> Get in Touch
      </a>
    </div>
  </div>
</section>

<style>
@media (max-width: 767px) {
  .three-cols-responsive { grid-template-columns: 1fr !important; }
}
@media (min-width: 768px) and (max-width: 1023px) {
  .three-cols-responsive { grid-template-columns: 1fr 1fr !important; }
}
</style>

<?php include 'includes/footer.php'; ?>
