<?php
require_once 'config.php';
require_once 'includes/data.php';
$pageTitle = 'Advocate & Lawyer in Faisalabad';
$pageDesc  = 'Find verified advocates and lawyers in Faisalabad for all legal matters — labour, property, family, corporate, criminal and more. 24/7 anonymous consultations available.';
include 'includes/head.php';
include 'includes/nav.php';
?>

<!-- Page Header -->
<div class="page-header">
  <div class="container page-header-inner">
    <h1 class="page-header-title heading-1">Advocate &amp; Lawyer in Faisalabad</h1>
    <p class="page-header-sub">Verified Lawyers Available in Faisalabad for All Legal Matters</p>
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <span class="breadcrumb-item"><a href="index.php">Home</a></span>
      <span class="breadcrumb-sep"><i class="ph ph-caret-right"></i></span>
      <span class="breadcrumb-item"><a href="services.php">Find a Lawyer</a></span>
      <span class="breadcrumb-sep"><i class="ph ph-caret-right"></i></span>
      <span class="breadcrumb-item">Faisalabad</span>
    </nav>
  </div>
</div>

<!-- ════════ INTRO SECTION ════════ -->
<section class="section">
  <div class="container">
    <div class="why-us-grid">

      <div class="reveal-left">
        <span class="section-label"><i class="ph ph-map-pin"></i> Legal Services in Faisalabad</span>
        <h2 class="heading-1">Top Verified Advocates in Faisalabad</h2>
        <div class="divider-gold"></div>
        <p style="margin-top:1.25rem;font-size:var(--text-sm);color:var(--clr-text-3);line-height:var(--leading-relaxed);">
          Faisalabad is Pakistan's third-largest city and its industrial heartland — the "Manchester of Pakistan." As a major textile and manufacturing hub, Faisalabad generates a high volume of labour disputes, industrial court matters, factory compliance issues, and commercial litigation. The city is served by a Lahore High Court bench and busy district courts. WakeelZone connects Faisalabad residents and businesses with verified local advocates experienced in both industrial law and general civil and criminal matters.
        </p>
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:0.75rem;margin-top:1.5rem;">
          <?php
          $checks = ['All 18 Practice Areas','Verified Credentials','24/7 Consultation','Urdu/Punjabi Support','Court Representation','Anonymous Consultation'];
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
            <i class="ph ph-factory" style="font-size:3rem;color:var(--clr-gold);margin-bottom:1rem;display:block;"></i>
            <h3 style="font-size:1.25rem;font-weight:800;margin-bottom:0.75rem;">Faisalabad — Manchester of Pakistan</h3>
            <p style="color:rgba(255,255,255,0.75);line-height:var(--leading-relaxed);font-size:var(--text-sm);">
              Pakistan's industrial capital and third-largest city. Home to the LHC Faisalabad Bench, high volumes of labour, industrial, and commercial court matters.
            </p>
          </div>
        </div>
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem;margin-top:1rem;">
          <div style="background:var(--clr-gold-50);border:1px solid rgba(201,168,76,0.2);border-radius:var(--radius-lg);padding:1.5rem;text-align:center;">
            <div style="font-size:2rem;font-weight:800;color:var(--clr-primary);">320+</div>
            <div style="font-size:var(--text-xs);color:var(--clr-text-muted);font-weight:600;text-transform:uppercase;letter-spacing:0.08em;margin-top:0.25rem;">Lawyers in Faisalabad</div>
          </div>
          <div style="background:var(--clr-primary-50);border:1px solid rgba(27,58,107,0.1);border-radius:var(--radius-lg);padding:1.5rem;text-align:center;">
            <div style="font-size:2rem;font-weight:800;color:var(--clr-primary);">1,100+</div>
            <div style="font-size:var(--text-xs);color:var(--clr-text-muted);font-weight:600;text-transform:uppercase;letter-spacing:0.08em;margin-top:0.25rem;">Consultations Done</div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ════════ COURT COVERAGE ════════ -->
<section class="section-sm bg-surface-2">
  <div class="container">
    <div class="section-header center reveal">
      <span class="section-label"><i class="ph ph-bank"></i> Court Coverage</span>
      <h2 class="heading-2">Courts &amp; Tribunals in Faisalabad</h2>
      <div class="divider-gold center"></div>
    </div>
    <div style="display:flex;flex-wrap:wrap;justify-content:center;gap:0.75rem;" class="reveal d-1">
      <?php
      $fsd_courts = ['LHC Faisalabad Bench','District &amp; Sessions Courts','Labour Courts','Industrial Courts','Family Courts','Consumer Courts','Anti-Terrorism Court','Special Magistrate Courts'];
      foreach ($fsd_courts as $court): ?>
      <span style="display:inline-flex;align-items:center;gap:0.4rem;background:var(--clr-primary);color:#fff;border-radius:var(--radius-full);padding:0.45rem 1.1rem;font-size:0.8125rem;font-weight:500;">
        <i class="ph ph-scales"></i> <?php echo $court; ?>
      </span>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ════════ PRACTICE AREAS ════════ -->
<section class="section">
  <div class="container">
    <div class="section-header center reveal">
      <span class="section-label"><i class="ph ph-scales"></i> Practice Areas</span>
      <h2 class="heading-2">Legal Services Available in Faisalabad</h2>
      <div class="divider-gold center"></div>
      <p style="margin-top:1rem;max-width:600px;margin-inline:auto;">Our Faisalabad panel covers every area of law. Click a service to consult a specialist today.</p>
    </div>
    <div class="services-grid">
      <?php foreach ($services as $i => $s):
        $delay = ($i % 6) + 1; ?>
      <article class="service-card reveal delay-<?php echo $delay; ?>">
        <div class="service-icon"><i class="ph <?php echo htmlspecialchars($s['icon']); ?>"></i></div>
        <h3 class="service-title"><?php echo htmlspecialchars($s['title']); ?></h3>
        <p class="service-desc"><?php echo htmlspecialchars($s['short']); ?></p>
        <a href="service.php?slug=<?php echo urlencode($s['slug']); ?>" class="service-link">
          Get Expert Help <i class="ph ph-arrow-right"></i>
        </a>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ════════ WHY CHOOSE ════════ -->
<section class="section bg-surface-2">
  <div class="container">
    <div class="section-header center reveal">
      <span class="section-label"><i class="ph ph-star"></i> Why WakeelZone</span>
      <h2 class="heading-2">Why Choose WakeelZone in Faisalabad?</h2>
      <div class="divider-gold center"></div>
    </div>
    <div style="display:grid;grid-template-columns:repeat(2,1fr);gap:1.25rem;max-width:900px;margin-inline:auto;">
      <?php
      $why = [
        ['icon'=>'ph-seal-check',    'title'=>'Verified PBC Advocates',        'desc'=>'All Faisalabad lawyers are cross-verified with Pakistan Bar Council and Punjab Bar Council records before joining our platform.'],
        ['icon'=>'ph-clock',         'title'=>'24/7 Availability',             'desc'=>'Industrial disputes, labour crises, and criminal matters arise at all hours. Our helpline is available 24/7, 365 days a year.'],
        ['icon'=>'ph-shield-lock',   'title'=>'Anonymous Consultation',        'desc'=>'Discuss your labour dispute, property case, or criminal matter with Faisalabad lawyers in complete privacy.'],
        ['icon'=>'ph-currency-circle-dollar','title'=>'Transparent Pricing',   'desc'=>'Clear, upfront rates designed to be accessible for Faisalabad\'s working population and business community alike.'],
      ];
      foreach ($why as $i => $w): ?>
      <div class="feature-item reveal delay-<?php echo $i + 1; ?>" style="background:var(--clr-surface);border:1px solid var(--clr-border);border-radius:var(--radius-lg);padding:1.5rem;align-items:flex-start;">
        <div class="feature-icon"><i class="ph <?php echo $w['icon']; ?>"></i></div>
        <div>
          <h4 class="feature-title"><?php echo $w['title']; ?></h4>
          <p class="feature-desc"><?php echo $w['desc']; ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ════════ FAQ ════════ -->
<section class="section">
  <div class="container" style="max-width:800px;">
    <div class="section-header center reveal">
      <span class="section-label"><i class="ph ph-question"></i> FAQ</span>
      <h2 class="heading-2">Frequently Asked Questions — Faisalabad</h2>
      <div class="divider-gold center"></div>
    </div>
    <?php
    $faqs_city = [
      ['q'=>'Can I get a labour or industrial court lawyer in Faisalabad through WakeelZone?',
       'a'=>'Yes. Labour and employment law is one of the most common practice areas for Faisalabad given its industrial base. Our panel includes advocates experienced in wrongful dismissal, EOBI disputes, factory compliance violations, and labour court representation in Faisalabad.'],
      ['q'=>'How do I find a property lawyer in Faisalabad for housing society disputes?',
       'a'=>'Call our helpline and specify a property or housing dispute in Faisalabad. We will match you with a local advocate familiar with Faisalabad revenue courts, housing authority matters, and land record (Patwari) issues.'],
      ['q'=>'What is WakeelZone?',
       'a'=>'WakeelZone is Pakistan\'s premier anonymous legal platform that connects citizens with verified, experienced lawyers across 18 practice areas. You can consult without revealing your identity until you choose to proceed with formal representation.'],
      ['q'=>'How does anonymous consultation work?',
       'a'=>'When you call our helpline, your personal details are masked. The lawyer you speak with only knows the details of your legal issue — not your name, address, or phone number. You remain anonymous until you actively decide to engage that lawyer for court representation.'],
    ];
    foreach ($faqs_city as $i => $faq): ?>
    <div class="reveal delay-<?php echo $i + 1; ?>" style="border:1px solid var(--clr-border);border-radius:var(--radius-lg);padding:1.5rem;margin-bottom:1rem;background:var(--clr-surface);">
      <h4 style="font-size:var(--text-base);font-weight:700;color:var(--clr-primary);margin-bottom:0.5rem;display:flex;gap:0.75rem;align-items:flex-start;">
        <i class="ph ph-question-mark" style="color:var(--clr-gold);flex-shrink:0;margin-top:0.15rem;"></i>
        <?php echo htmlspecialchars($faq['q']); ?>
      </h4>
      <p style="font-size:var(--text-sm);color:var(--clr-text-3);line-height:var(--leading-relaxed);margin:0;padding-left:1.75rem;"><?php echo htmlspecialchars($faq['a']); ?></p>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- ════════ CTA ════════ -->
<section class="cta-section">
  <div class="container cta-inner">
    <h2 class="heading-1 reveal" style="color:var(--clr-text-inverse);margin-bottom:0.75rem;">
      Need a Lawyer in Faisalabad?
    </h2>
    <p class="reveal d-1" style="color:rgba(255,255,255,0.7);max-width:500px;margin:0 auto 2rem;line-height:var(--leading-relaxed);">
      Call now to speak with a verified Faisalabad advocate — anonymously, 24/7.
    </p>
    <div class="cta-btns reveal d-2">
      <a href="tel:<?php echo preg_replace('/\s+/', '', HELPLINE_NUMBER); ?>" class="btn btn-gold btn-lg">
        <i class="ph ph-phone-call"></i> <?php echo HELPLINE_NUMBER; ?>
      </a>
      <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>" class="btn btn-outline-white btn-lg" target="_blank" rel="noopener">
        <i class="ph ph-whatsapp-logo"></i> WhatsApp Us
      </a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
