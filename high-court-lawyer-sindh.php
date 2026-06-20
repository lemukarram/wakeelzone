<?php
require_once 'config.php';
require_once 'includes/data.php';
$pageTitle = 'Sindh High Court Lawyers';
$pageDesc  = 'Find verified advocates enrolled with the Sindh High Court in Karachi. Constitutional petitions, commercial disputes, banking law, criminal appeals — anonymous consultations 24/7.';
include 'includes/head.php';
include 'includes/nav.php';
?>

<!-- Page Header -->
<div class="page-header">
  <div class="container page-header-inner">
    <h1 class="page-header-title heading-1">Sindh High Court Lawyers</h1>
    <p class="page-header-sub">Verified Advocates Enrolled with the Sindh High Court</p>
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <span class="breadcrumb-item"><a href="index.php">Home</a></span>
      <span class="breadcrumb-sep"><i class="ph ph-caret-right"></i></span>
      <span class="breadcrumb-item">High Court Lawyers</span>
      <span class="breadcrumb-sep"><i class="ph ph-caret-right"></i></span>
      <span class="breadcrumb-item">Sindh High Court</span>
    </nav>
  </div>
</div>

<!-- ════════ COURT INFO ════════ -->
<section class="section">
  <div class="container">
    <div class="why-us-grid">

      <div class="reveal-left">
        <span class="section-label"><i class="ph ph-bank"></i> About the Court</span>
        <h2 class="heading-1">Sindh High Court</h2>
        <div class="divider-gold"></div>
        <p style="margin-top:1.25rem;font-size:var(--text-sm);color:var(--clr-text-3);line-height:var(--leading-relaxed);">
          The Sindh High Court, established in <strong>1955</strong>, is the superior court for the Province of Sindh. Located in Karachi — Pakistan's commercial capital — the court handles a uniquely high volume of commercial, banking, company law, and constitutional matters in addition to standard criminal and civil appeals. Circuit courts operate in Hyderabad and Sukkur. The SHC is particularly renowned for its role in commercial and corporate jurisprudence.
        </p>
        <div style="display:grid;gap:0.75rem;margin-top:1.5rem;">
          <?php
          $facts = [
            ['icon'=>'ph-calendar-blank','label'=>'Established','value'=>'1955'],
            ['icon'=>'ph-map-pin',       'label'=>'Location',   'value'=>'Karachi (Circuit Courts: Hyderabad, Sukkur)'],
            ['icon'=>'ph-globe',         'label'=>'Jurisdiction','value'=>'Sindh Province'],
          ];
          foreach ($facts as $f): ?>
          <div style="display:flex;align-items:center;gap:1rem;background:var(--clr-surface);border:1px solid var(--clr-border);border-radius:var(--radius-md);padding:0.875rem 1.25rem;">
            <i class="ph <?php echo $f['icon']; ?>" style="font-size:1.25rem;color:var(--clr-gold);flex-shrink:0;"></i>
            <div>
              <div style="font-size:var(--text-xs);color:var(--clr-text-muted);font-weight:600;text-transform:uppercase;letter-spacing:0.08em;"><?php echo $f['label']; ?></div>
              <div style="font-size:var(--text-sm);font-weight:600;color:var(--clr-text);"><?php echo $f['value']; ?></div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="reveal-right">
        <div style="background:linear-gradient(135deg,var(--clr-primary),var(--clr-primary-light));border-radius:var(--radius-xl);padding:2.5rem;color:var(--clr-text-inverse);position:relative;overflow:hidden;">
          <div style="position:absolute;inset:0;background-image:radial-gradient(circle,rgba(255,255,255,0.05) 1px,transparent 1px);background-size:24px 24px;"></div>
          <div style="position:relative;z-index:1;">
            <i class="ph ph-scales" style="font-size:3rem;color:var(--clr-gold);margin-bottom:1rem;display:block;"></i>
            <h3 style="font-size:1.25rem;font-weight:800;margin-bottom:0.75rem;">SHC Key Statistics</h3>
            <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem;margin-top:1rem;">
              <div style="background:rgba(255,255,255,0.1);border-radius:var(--radius-md);padding:1.25rem;text-align:center;">
                <div style="font-size:1.75rem;font-weight:800;color:var(--clr-gold);">150+</div>
                <div style="font-size:var(--text-xs);color:rgba(255,255,255,0.7);margin-top:0.25rem;">Enrolled SHC Advocates on WakeelZone</div>
              </div>
              <div style="background:rgba(255,255,255,0.1);border-radius:var(--radius-md);padding:1.25rem;text-align:center;">
                <div style="font-size:1.75rem;font-weight:800;color:var(--clr-gold);">3</div>
                <div style="font-size:var(--text-xs);color:rgba(255,255,255,0.7);margin-top:0.25rem;">Circuit Courts Across Sindh</div>
              </div>
              <div style="background:rgba(255,255,255,0.1);border-radius:var(--radius-md);padding:1.25rem;text-align:center;">
                <div style="font-size:1.75rem;font-weight:800;color:var(--clr-gold);">70+</div>
                <div style="font-size:var(--text-xs);color:rgba(255,255,255,0.7);margin-top:0.25rem;">Years of Commercial Jurisprudence</div>
              </div>
              <div style="background:rgba(255,255,255,0.1);border-radius:var(--radius-md);padding:1.25rem;text-align:center;">
                <div style="font-size:1.75rem;font-weight:800;color:var(--clr-gold);">24/7</div>
                <div style="font-size:var(--text-xs);color:rgba(255,255,255,0.7);margin-top:0.25rem;">Emergency Consultations</div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ════════ PRACTICE AREAS BEFORE SHC ════════ -->
<section class="section bg-surface-2">
  <div class="container">
    <div class="section-header center reveal">
      <span class="section-label"><i class="ph ph-scales"></i> Areas of Practice</span>
      <h2 class="heading-2">Practice Areas Before the Sindh High Court</h2>
      <div class="divider-gold center"></div>
    </div>
    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.25rem;" class="hc-areas-grid">
      <?php
      $hc_areas = [
        ['icon'=>'ph-scroll',       'title'=>'Constitutional Petitions',  'desc'=>'Writ petitions challenging state actions, fundamental rights violations, and unlawful executive orders before the SHC.'],
        ['icon'=>'ph-buildings',    'title'=>'Commercial Disputes',       'desc'=>'Business contracts, company law matters, partnership disputes, and commercial litigation — a strong focus of the Sindh HC.'],
        ['icon'=>'ph-bank',         'title'=>'Banking Law',               'desc'=>'Karachi\'s status as the financial hub means banking disputes — loan defaults, DFI matters — frequently appear before the SHC.'],
        ['icon'=>'ph-scales',       'title'=>'Criminal Appeals',          'desc'=>'Appeals against conviction or acquittal from Karachi and Sindh sessions courts, bail applications, and revisions.'],
        ['icon'=>'ph-certificate',  'title'=>'Company Law',               'desc'=>'SECP-related matters, company winding up, shareholder disputes, and corporate insolvency proceedings.'],
        ['icon'=>'ph-bank',         'title'=>'Administrative Law',        'desc'=>'Challenges to provincial government decisions, regulatory orders, and provincial administrative authority actions.'],
      ];
      foreach ($hc_areas as $i => $area): ?>
      <div class="reveal delay-<?php echo ($i % 3) + 1; ?>" style="background:var(--clr-surface);border:1px solid var(--clr-border);border-radius:var(--radius-lg);padding:1.75rem;text-align:center;">
        <div style="width:56px;height:56px;border-radius:var(--radius-lg);background:var(--clr-primary);display:flex;align-items:center;justify-content:center;margin:0 auto 1rem;box-shadow:var(--shadow-navy);">
          <i class="ph <?php echo $area['icon']; ?>" style="font-size:1.5rem;color:var(--clr-gold);"></i>
        </div>
        <h4 style="font-size:var(--text-base);font-weight:700;color:var(--clr-text);margin-bottom:0.5rem;"><?php echo $area['title']; ?></h4>
        <p style="font-size:var(--text-sm);color:var(--clr-text-3);line-height:var(--leading-relaxed);"><?php echo $area['desc']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ════════ WRIT PETITION TYPES ════════ -->
<section class="section">
  <div class="container" style="max-width:850px;">
    <div class="section-header center reveal">
      <span class="section-label"><i class="ph ph-scroll"></i> Writ Petitions</span>
      <h2 class="heading-2">Types of Writ Petitions Before Sindh High Court</h2>
      <div class="divider-gold center"></div>
      <p style="margin-top:1rem;">Our SHC advocates file all types of constitutional writs under Article 199 of the Constitution of Pakistan.</p>
    </div>
    <div style="display:flex;flex-wrap:wrap;justify-content:center;gap:0.875rem;margin-top:1.5rem;" class="reveal d-1">
      <?php
      $writs = [
        ['name'=>'Mandamus',    'desc'=>'Compels a public authority to perform a statutory duty',  'color'=>'#1B3A6B'],
        ['name'=>'Certiorari',  'desc'=>'Quashes unlawful decisions of inferior courts or bodies',  'color'=>'#C9A84C'],
        ['name'=>'Prohibition', 'desc'=>'Prevents a court or authority from exceeding jurisdiction','color'=>'#1B3A6B'],
        ['name'=>'Habeas Corpus','desc'=>'Secures release of a person detained without lawful authority','color'=>'#C9A84C'],
        ['name'=>'Quo Warranto','desc'=>'Challenges a person\'s right to hold a public office',     'color'=>'#1B3A6B'],
      ];
      foreach ($writs as $w): ?>
      <div style="background:var(--clr-surface);border:2px solid <?php echo $w['color']; ?>;border-radius:var(--radius-lg);padding:1.25rem 1.5rem;text-align:center;min-width:160px;flex:1;">
        <div style="font-size:var(--text-base);font-weight:800;color:<?php echo $w['color']; ?>;margin-bottom:0.4rem;"><?php echo $w['name']; ?></div>
        <div style="font-size:var(--text-xs);color:var(--clr-text-3);line-height:1.4;"><?php echo $w['desc']; ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ════════ HOW WE VERIFY ════════ -->
<section class="section bg-surface-2">
  <div class="container">
    <div class="section-header center reveal">
      <span class="section-label"><i class="ph ph-shield-check"></i> Our Lawyers</span>
      <h2 class="heading-2">How We Verify Sindh High Court Advocates</h2>
      <div class="divider-gold center"></div>
    </div>
    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.25rem;" class="hc-areas-grid">
      <?php
      $verify = [
        ['icon'=>'ph-seal-check', 'title'=>'Enrollment Cross-Check', 'desc'=>'Every SHC advocate\'s enrollment is verified against Sindh High Court Bar Association records and Pakistan Bar Council rolls.'],
        ['icon'=>'ph-clock-countdown','title'=>'Experience Minimum', 'desc'=>'SHC advocates on our panel must have a minimum of 5 years of active practice before the Sindh High Court or its circuit courts.'],
        ['icon'=>'ph-shield',    'title'=>'Clean Record',           'desc'=>'Background screening for professional misconduct and disciplinary proceedings is mandatory before onboarding any SHC advocate.'],
      ];
      foreach ($verify as $i => $v): ?>
      <div class="feature-item reveal delay-<?php echo $i + 1; ?>" style="background:var(--clr-surface);border:1px solid var(--clr-border);border-radius:var(--radius-lg);padding:1.75rem;align-items:flex-start;">
        <div class="feature-icon"><i class="ph <?php echo $v['icon']; ?>"></i></div>
        <div>
          <h4 class="feature-title"><?php echo $v['title']; ?></h4>
          <p class="feature-desc"><?php echo $v['desc']; ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ════════ PROCESS ════════ -->
<section class="section">
  <div class="container" style="max-width:900px;">
    <div class="section-header center reveal">
      <span class="section-label"><i class="ph ph-arrow-right"></i> Our Process</span>
      <h2 class="heading-2">How to Get an SHC Lawyer Through WakeelZone</h2>
      <div class="divider-gold center"></div>
    </div>
    <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:1.25rem;margin-top:2rem;" class="process-4-grid">
      <?php
      $steps = [
        ['num'=>'01','icon'=>'ph-phone-call','title'=>'Contact WakeelZone','desc'=>'Call our 24/7 helpline or WhatsApp us to begin your Sindh High Court consultation.'],
        ['num'=>'02','icon'=>'ph-chat-dots','title'=>'Describe HC Matter','desc'=>'Explain your SHC matter — constitutional petition, commercial dispute, bail, or appeal.'],
        ['num'=>'03','icon'=>'ph-user-check','title'=>'Get Matched','desc'=>'We match you with a verified, SHC-enrolled advocate experienced in your specific matter.'],
        ['num'=>'04','icon'=>'ph-shield-check','title'=>'Start Consultation','desc'=>'Connect anonymously with your SHC lawyer and receive expert guidance immediately.'],
      ];
      foreach ($steps as $i => $step): ?>
      <div class="reveal delay-<?php echo $i + 1; ?>" style="text-align:center;">
        <div style="width:60px;height:60px;border-radius:50%;background:var(--clr-primary);display:flex;align-items:center;justify-content:center;margin:0 auto 1rem;box-shadow:var(--shadow-navy);">
          <i class="ph <?php echo $step['icon']; ?>" style="font-size:1.5rem;color:var(--clr-gold);"></i>
        </div>
        <div style="font-size:var(--text-xs);color:var(--clr-gold);font-weight:700;text-transform:uppercase;letter-spacing:0.1em;margin-bottom:0.375rem;"><?php echo $step['num']; ?></div>
        <h4 style="font-size:var(--text-base);font-weight:700;color:var(--clr-text);margin-bottom:0.5rem;"><?php echo $step['title']; ?></h4>
        <p style="font-size:var(--text-sm);color:var(--clr-text-3);line-height:var(--leading-relaxed);"><?php echo $step['desc']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ════════ FAQ ════════ -->
<section class="section bg-surface-2">
  <div class="container" style="max-width:800px;">
    <div class="section-header center reveal">
      <span class="section-label"><i class="ph ph-question"></i> FAQ</span>
      <h2 class="heading-2">FAQs — Sindh High Court Lawyers</h2>
      <div class="divider-gold center"></div>
    </div>
    <?php
    $faqs_hc = [
      ['q'=>'What commercial and banking matters can Sindh HC lawyers handle?',
       'a'=>'Our SHC panel specialises in banking disputes (loan recovery, DFI matters), company law (SECP, winding up), commercial contracts, and financial disputes. Given Karachi\'s role as Pakistan\'s financial capital, SHC advocates have deep experience in these areas.'],
      ['q'=>'Can I file a constitutional petition in Sindh High Court online through WakeelZone?',
       'a'=>'Yes. Our SHC advocates will consult with you on your constitutional matter, advise on the strength of your petition, draft the writ petition, and file it before the Sindh High Court on your behalf. The entire consultation process begins anonymously.'],
      ['q'=>'How does a Sindh HC circuit court case in Hyderabad or Sukkur work?',
       'a'=>'The SHC holds circuit court sittings in Hyderabad and Sukkur for cases from those regions. Our advocates cover all three venues — Karachi, Hyderabad, and Sukkur. Call our helpline and mention your location so we match you with an advocate familiar with the relevant circuit.'],
      ['q'=>'What are the fees for Sindh High Court lawyers?',
       'a'=>'Fees depend on case complexity, the advocate\'s seniority, and the number of hearings. WakeelZone advocates provide upfront fee quotes before any engagement. Call our helpline for a general estimate based on your specific SHC matter.'],
    ];
    foreach ($faqs_hc as $i => $faq): ?>
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
      Need a Sindh High Court Lawyer?
    </h2>
    <p class="reveal d-1" style="color:rgba(255,255,255,0.7);max-width:520px;margin:0 auto 2rem;line-height:var(--leading-relaxed);">
      Call now to speak with a verified SHC-enrolled advocate — anonymously, 24/7.
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

<style>
@media (max-width: 767px) {
  .hc-areas-grid { grid-template-columns: 1fr !important; }
  .process-4-grid { grid-template-columns: 1fr 1fr !important; }
}
@media (min-width: 768px) and (max-width: 1023px) {
  .hc-areas-grid { grid-template-columns: 1fr 1fr !important; }
  .process-4-grid { grid-template-columns: 1fr 1fr !important; }
}
</style>

<?php include 'includes/footer.php'; ?>
