<?php
require_once 'config.php';
require_once 'includes/data.php';
$pageTitle = 'Islamabad High Court Lawyers';
$pageDesc  = 'Find verified advocates enrolled with the Islamabad High Court. Writ petitions against federal bodies, SECP matters, service law, PEMRA cases — anonymous consultations 24/7.';
include 'includes/head.php';
include 'includes/nav.php';
?>

<!-- Page Header -->
<div class="page-header">
  <div class="container page-header-inner">
    <h1 class="page-header-title heading-1">Islamabad High Court Lawyers</h1>
    <p class="page-header-sub">Verified Advocates Enrolled with the Islamabad High Court</p>
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <span class="breadcrumb-item"><a href="index.php">Home</a></span>
      <span class="breadcrumb-sep"><i class="ph ph-caret-right"></i></span>
      <span class="breadcrumb-item">High Court Lawyers</span>
      <span class="breadcrumb-sep"><i class="ph ph-caret-right"></i></span>
      <span class="breadcrumb-item">Islamabad High Court</span>
    </nav>
  </div>
</div>

<!-- ════════ COURT INFO ════════ -->
<section class="section">
  <div class="container">
    <div class="why-us-grid">

      <div class="reveal-left">
        <span class="section-label"><i class="ph ph-bank"></i> About the Court</span>
        <h2 class="heading-1">Islamabad High Court</h2>
        <div class="divider-gold"></div>
        <p style="margin-top:1.25rem;font-size:var(--text-sm);color:var(--clr-text-3);line-height:var(--leading-relaxed);">
          The Islamabad High Court (IHC) is the youngest of Pakistan's High Courts, established in <strong>2010</strong> through the 18th Constitutional Amendment. Located in Islamabad, it exercises jurisdiction over the Islamabad Capital Territory. As the court nearest to federal ministries, regulatory bodies, and national institutions, the IHC handles a significant volume of writ petitions against federal government actions, SECP regulatory matters, service law disputes for federal employees, and high-profile media and PEMRA cases.
        </p>
        <div style="display:grid;gap:0.75rem;margin-top:1.5rem;">
          <?php
          $facts = [
            ['icon'=>'ph-calendar-blank','label'=>'Established','value'=>'2010 (18th Constitutional Amendment)'],
            ['icon'=>'ph-map-pin',       'label'=>'Location',   'value'=>'Islamabad Capital Territory'],
            ['icon'=>'ph-globe',         'label'=>'Jurisdiction','value'=>'Islamabad Capital Territory (ICT)'],
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
            <h3 style="font-size:1.25rem;font-weight:800;margin-bottom:0.75rem;">IHC Key Statistics</h3>
            <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem;margin-top:1rem;">
              <div style="background:rgba(255,255,255,0.1);border-radius:var(--radius-md);padding:1.25rem;text-align:center;">
                <div style="font-size:1.75rem;font-weight:800;color:var(--clr-gold);">100+</div>
                <div style="font-size:var(--text-xs);color:rgba(255,255,255,0.7);margin-top:0.25rem;">Enrolled IHC Advocates on WakeelZone</div>
              </div>
              <div style="background:rgba(255,255,255,0.1);border-radius:var(--radius-md);padding:1.25rem;text-align:center;">
                <div style="font-size:1.75rem;font-weight:800;color:var(--clr-gold);">2010</div>
                <div style="font-size:var(--text-xs);color:rgba(255,255,255,0.7);margin-top:0.25rem;">Year of Establishment</div>
              </div>
              <div style="background:rgba(255,255,255,0.1);border-radius:var(--radius-md);padding:1.25rem;text-align:center;">
                <div style="font-size:1.75rem;font-weight:800;color:var(--clr-gold);">Federal</div>
                <div style="font-size:var(--text-xs);color:rgba(255,255,255,0.7);margin-top:0.25rem;">Primary Jurisdiction Focus</div>
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

<!-- ════════ PRACTICE AREAS BEFORE IHC ════════ -->
<section class="section bg-surface-2">
  <div class="container">
    <div class="section-header center reveal">
      <span class="section-label"><i class="ph ph-scales"></i> Areas of Practice</span>
      <h2 class="heading-2">Practice Areas Before the Islamabad High Court</h2>
      <div class="divider-gold center"></div>
    </div>
    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.25rem;" class="hc-areas-grid">
      <?php
      $hc_areas = [
        ['icon'=>'ph-scroll',    'title'=>'Writ Petitions vs Federal Bodies', 'desc'=>'Petitions challenging decisions of federal ministries, regulatory bodies (SECP, PTA, NEPRA, OGRA), and federal departments.'],
        ['icon'=>'ph-certificate','title'=>'SECP Matters',                   'desc'=>'Securities & Exchange Commission disputes, company registration challenges, corporate compliance, and SECP regulatory appeals.'],
        ['icon'=>'ph-briefcase', 'title'=>'Service Law',                      'desc'=>'Federal government employee disputes — CSS officers, civil servants, Pakistan Army veterans — dismissals, suspensions, and promotions.'],
        ['icon'=>'ph-broadcast', 'title'=>'Media / PEMRA Cases',              'desc'=>'Challenges against PEMRA channel bans, content licensing disputes, journalist rights, and freedom of expression cases.'],
        ['icon'=>'ph-handcuffs', 'title'=>'Bail Matters',                     'desc'=>'Pre-arrest bail, regular bail, and post-arrest bail applications in criminal matters within the ICT jurisdiction.'],
        ['icon'=>'ph-bank',      'title'=>'Administrative Law',               'desc'=>'Challenges to ICT administrative authority decisions, CDA matters, housing scheme disputes, and federal tribunal orders.'],
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
      <h2 class="heading-2">Types of Writ Petitions Before Islamabad High Court</h2>
      <div class="divider-gold center"></div>
      <p style="margin-top:1rem;">Our IHC advocates file all types of constitutional writs under Article 199 of the Constitution of Pakistan.</p>
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
      <h2 class="heading-2">How We Verify Islamabad High Court Advocates</h2>
      <div class="divider-gold center"></div>
    </div>
    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.25rem;" class="hc-areas-grid">
      <?php
      $verify = [
        ['icon'=>'ph-seal-check', 'title'=>'Enrollment Cross-Check', 'desc'=>'Every IHC advocate\'s enrollment is verified directly against Islamabad High Court Bar Association and Pakistan Bar Council records.'],
        ['icon'=>'ph-clock-countdown','title'=>'Experience Minimum', 'desc'=>'IHC advocates on our panel must have a minimum of 5 years of active High Court practice, with demonstrable IHC experience.'],
        ['icon'=>'ph-shield',    'title'=>'Clean Record',           'desc'=>'We conduct mandatory background screening for ethical violations, disciplinary proceedings, or professional misconduct before onboarding.'],
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
      <h2 class="heading-2">How to Get an IHC Lawyer Through WakeelZone</h2>
      <div class="divider-gold center"></div>
    </div>
    <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:1.25rem;margin-top:2rem;" class="process-4-grid">
      <?php
      $steps = [
        ['num'=>'01','icon'=>'ph-phone-call','title'=>'Contact WakeelZone','desc'=>'Call our 24/7 helpline or WhatsApp us to begin your Islamabad High Court consultation.'],
        ['num'=>'02','icon'=>'ph-chat-dots','title'=>'Describe HC Matter','desc'=>'Explain your IHC matter — federal writ, SECP dispute, service law, PEMRA case, or bail.'],
        ['num'=>'03','icon'=>'ph-user-check','title'=>'Get Matched','desc'=>'We match you with an enrolled IHC advocate experienced in your specific type of matter.'],
        ['num'=>'04','icon'=>'ph-shield-check','title'=>'Start Consultation','desc'=>'Connect securely and anonymously with your IHC lawyer — representation begins on your terms.'],
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
      <h2 class="heading-2">FAQs — Islamabad High Court Lawyers</h2>
      <div class="divider-gold center"></div>
    </div>
    <?php
    $faqs_hc = [
      ['q'=>'What types of federal government cases can IHC lawyers handle?',
       'a'=>'IHC advocates are well-positioned to challenge federal government decisions through writ petitions. This includes matters against federal ministries, SECP, PTA, PEMRA, NEPRA, CDA, and other federal bodies. They also handle service law matters for CSS and federal civil servants.'],
      ['q'=>'Can I challenge a SECP or PEMRA order in the Islamabad High Court?',
       'a'=>'Yes. The IHC has jurisdiction over regulatory decisions by SECP, PEMRA, and other federal regulatory bodies. Our IHC advocates are experienced in challenging regulatory orders, seeking injunctions, and filing constitutional petitions against unlawful regulatory actions.'],
      ['q'=>'How long does an Islamabad High Court case typically take to resolve?',
       'a'=>'Timelines vary. Urgent matters like habeas corpus, bail, and stay orders can be heard within days. Writ petitions on service law or regulatory matters may take several months to over a year. Our IHC advocates will provide honest timelines for your specific case during consultation.'],
      ['q'=>'What are the fees for Islamabad High Court lawyers?',
       'a'=>'Fees depend on case complexity, lawyer seniority, and expected hearing count. WakeelZone ensures transparent fee structures with no hidden charges. Call our helpline for a general estimate based on your IHC matter.'],
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
      Need an Islamabad High Court Lawyer?
    </h2>
    <p class="reveal d-1" style="color:rgba(255,255,255,0.7);max-width:520px;margin:0 auto 2rem;line-height:var(--leading-relaxed);">
      Call now to speak with a verified IHC-enrolled advocate — anonymously, 24/7.
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
