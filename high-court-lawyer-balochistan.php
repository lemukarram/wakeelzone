<?php
require_once 'config.php';
require_once 'includes/data.php';
$pageTitle = 'Balochistan High Court Lawyers';
$pageDesc  = 'Find verified advocates enrolled with the Balochistan High Court (BHC) in Quetta. Writ petitions, land rights, mineral disputes, constitutional matters — anonymous consultations 24/7.';
include 'includes/head.php';
include 'includes/nav.php';
?>

<!-- Page Header -->
<div class="page-header">
  <div class="container page-header-inner">
    <h1 class="page-header-title heading-1">Balochistan High Court Lawyers</h1>
    <p class="page-header-sub">Verified Advocates Enrolled with the Balochistan High Court (BHC), Quetta</p>
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <span class="breadcrumb-item"><a href="index.php">Home</a></span>
      <span class="breadcrumb-sep"><i class="ph ph-caret-right"></i></span>
      <span class="breadcrumb-item"><a href="high-court-lawyers.php">High Court Lawyers</a></span>
      <span class="breadcrumb-sep"><i class="ph ph-caret-right"></i></span>
      <span class="breadcrumb-item">Balochistan High Court</span>
    </nav>
  </div>
</div>

<!-- ════════ COURT INFO ════════ -->
<section class="section">
  <div class="container">
    <div class="why-us-grid">

      <div class="reveal-left">
        <span class="section-label"><i class="ph ph-bank"></i> About the Court</span>
        <h2 class="heading-1">Balochistan High Court</h2>
        <div class="divider-gold"></div>
        <p style="margin-top:1.25rem;font-size:var(--text-sm);color:var(--clr-text-3);line-height:var(--leading-relaxed);">
          The Balochistan High Court (BHC), established in <strong>1976</strong>, is located in Quetta — the provincial capital. It is the apex court of Pakistan's largest province by area, Balochistan. The BHC exercises original, appellate, and supervisory jurisdiction over the entire province. Given Balochistan's unique geography, resource wealth, and complex land tenure systems, the BHC handles a distinctive range of matters including natural resource rights, mining and mineral disputes, land acquisition challenges, tribal customary law interface, and constitutional matters. WakeelZone connects you with verified BHC advocates who understand the provincial legal landscape.
        </p>
        <div style="display:grid;gap:0.75rem;margin-top:1.5rem;">
          <?php
          $facts = [
            ['icon'=>'ph-calendar-blank','label'=>'Established','value'=>'1976'],
            ['icon'=>'ph-map-pin',       'label'=>'Location',   'value'=>'Quetta, Balochistan'],
            ['icon'=>'ph-globe',         'label'=>'Jurisdiction','value'=>'Balochistan Province (Pakistan\'s largest province by area)'],
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
            <h3 style="font-size:1.25rem;font-weight:800;margin-bottom:0.75rem;">BHC Key Statistics</h3>
            <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem;margin-top:1rem;">
              <div style="background:rgba(255,255,255,0.1);border-radius:var(--radius-md);padding:1.25rem;text-align:center;">
                <div style="font-size:1.75rem;font-weight:800;color:var(--clr-gold);">60+</div>
                <div style="font-size:var(--text-xs);color:rgba(255,255,255,0.7);margin-top:0.25rem;">Enrolled BHC Advocates on WakeelZone</div>
              </div>
              <div style="background:rgba(255,255,255,0.1);border-radius:var(--radius-md);padding:1.25rem;text-align:center;">
                <div style="font-size:1.75rem;font-weight:800;color:var(--clr-gold);">1976</div>
                <div style="font-size:var(--text-xs);color:rgba(255,255,255,0.7);margin-top:0.25rem;">Year of Establishment</div>
              </div>
              <div style="background:rgba(255,255,255,0.1);border-radius:var(--radius-md);padding:1.25rem;text-align:center;">
                <div style="font-size:1.75rem;font-weight:800;color:var(--clr-gold);">Quetta</div>
                <div style="font-size:var(--text-xs);color:rgba(255,255,255,0.7);margin-top:0.25rem;">Principal Seat</div>
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

<!-- ════════ PRACTICE AREAS ════════ -->
<section class="section bg-surface-2">
  <div class="container">
    <div class="section-header center reveal">
      <span class="section-label"><i class="ph ph-scales"></i> Areas of Practice</span>
      <h2 class="heading-2">Practice Areas Before the Balochistan High Court</h2>
      <div class="divider-gold center"></div>
    </div>
    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.25rem;" class="hc-areas-grid">
      <?php
      $hc_areas = [
        ['icon'=>'ph-scroll',       'title'=>'Constitutional Petitions',   'desc'=>'Writ petitions challenging Balochistan provincial government decisions, administrative orders, and violations of fundamental rights under Article 199.'],
        ['icon'=>'ph-mountain',     'title'=>'Land & Mineral Rights',      'desc'=>'Disputes over land ownership, mining leases, mineral rights, and resource extraction in Balochistan — Pakistan\'s most resource-rich province.'],
        ['icon'=>'ph-handcuffs',    'title'=>'Criminal Appeals',           'desc'=>'Appeals against sessions court convictions, bail before arrest, FIR quashing, and habeas corpus petitions in Balochistan criminal matters.'],
        ['icon'=>'ph-briefcase',    'title'=>'Service Law',                'desc'=>'Balochistan government employee service disputes — provincial civil servants, police, and departmental proceedings before the BHC.'],
        ['icon'=>'ph-buildings',    'title'=>'Administrative Law',         'desc'=>'Challenges to Balochistan authority decisions, Quetta Development Authority matters, district administration orders, and local government actions.'],
        ['icon'=>'ph-file-text',    'title'=>'Civil Appeals',              'desc'=>'Appeals from district courts in civil matters — recovery suits, property disputes, commercial agreements, and family court orders.'],
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
      <h2 class="heading-2">Types of Writ Petitions Before Balochistan High Court</h2>
      <div class="divider-gold center"></div>
      <p style="margin-top:1rem;">Our BHC advocates file all types of constitutional writs under Article 199 of the Constitution of Pakistan.</p>
    </div>
    <div style="display:flex;flex-wrap:wrap;justify-content:center;gap:0.875rem;margin-top:1.5rem;" class="reveal d-1">
      <?php
      $writs = [
        ['name'=>'Mandamus',    'desc'=>'Compels a public authority to perform a statutory duty',   'color'=>'#1B3A6B'],
        ['name'=>'Certiorari',  'desc'=>'Quashes unlawful decisions of inferior courts or bodies',   'color'=>'#C9A84C'],
        ['name'=>'Prohibition', 'desc'=>'Prevents a court or authority from exceeding jurisdiction', 'color'=>'#1B3A6B'],
        ['name'=>'Habeas Corpus','desc'=>'Secures release of a person detained without lawful authority','color'=>'#C9A84C'],
        ['name'=>'Quo Warranto','desc'=>'Challenges a person\'s right to hold a public office',      'color'=>'#1B3A6B'],
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
      <h2 class="heading-2">How We Verify Balochistan High Court Advocates</h2>
      <div class="divider-gold center"></div>
    </div>
    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.25rem;" class="hc-areas-grid">
      <?php
      $verify = [
        ['icon'=>'ph-seal-check',      'title'=>'Enrollment Cross-Check', 'desc'=>'Every BHC advocate\'s enrollment is verified against Balochistan High Court Bar Association records and Pakistan Bar Council rolls before joining WakeelZone.'],
        ['icon'=>'ph-clock-countdown', 'title'=>'Experience Minimum',     'desc'=>'BHC advocates on our panel must have a minimum of 5 years of active High Court practice, with demonstrable Balochistan High Court experience.'],
        ['icon'=>'ph-shield',          'title'=>'Clean Record',           'desc'=>'We conduct mandatory background screening for disciplinary actions, ethical violations, or professional misconduct prior to onboarding any advocate.'],
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
      <h2 class="heading-2">How to Get a BHC Lawyer Through WakeelZone</h2>
      <div class="divider-gold center"></div>
    </div>
    <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:1.25rem;margin-top:2rem;" class="process-4-grid">
      <?php
      $steps = [
        ['num'=>'01','icon'=>'ph-phone-call','title'=>'Contact WakeelZone',   'desc'=>'Call our 24/7 helpline or WhatsApp us to begin your Balochistan High Court consultation.'],
        ['num'=>'02','icon'=>'ph-chat-dots','title'=>'Describe BHC Matter',   'desc'=>'Explain your BHC matter — writ petition, criminal appeal, land/mineral dispute, or service law issue.'],
        ['num'=>'03','icon'=>'ph-user-check','title'=>'Get Matched',          'desc'=>'We match you with an enrolled BHC advocate experienced in your specific type of matter.'],
        ['num'=>'04','icon'=>'ph-shield-check','title'=>'Start Consultation', 'desc'=>'Connect securely and anonymously with your Balochistan High Court lawyer — representation begins on your terms.'],
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
      <h2 class="heading-2">FAQs — Balochistan High Court Lawyers</h2>
      <div class="divider-gold center"></div>
    </div>
    <?php
    $faqs_bhc = [
      ['q'=>'What types of cases does the Balochistan High Court handle?',
       'a'=>'The Balochistan High Court exercises appellate, original, and supervisory jurisdiction over the entire Balochistan province. Key matters include constitutional writ petitions against provincial authorities, criminal and civil appeals from district courts, service law disputes for Balochistan government employees, natural resource and mining rights disputes, land acquisition challenges, and bail applications.'],
      ['q'=>'Can I challenge a mining lease or mineral rights decision in Balochistan High Court?',
       'a'=>'Yes. Balochistan is Pakistan\'s most resource-rich province, and the BHC regularly handles disputes involving mining leases, mineral extraction rights, natural gas royalties, and land acquisition for energy projects. Our BHC advocates include specialists in resource law who can challenge unfair government decisions through writ petitions and other remedies.'],
      ['q'=>'How long does a Balochistan High Court case take to resolve?',
       'a'=>'Urgent matters like habeas corpus and interim injunctions can be heard within days. Criminal appeals and writ petitions may take 6 months to 2 years depending on case complexity and the court\'s docket. Service law matters and mineral rights cases can sometimes take longer. Our BHC advocates provide realistic timelines during initial consultation.'],
      ['q'=>'Can WakeelZone help with land acquisition disputes involving the Balochistan government?',
       'a'=>'Yes. We have BHC advocates experienced in challenging land acquisition proceedings under the Land Acquisition Act 1894 and more recent acquisition laws. If you believe your land has been acquired unlawfully or inadequate compensation was offered, our lawyers can file writ petitions in the Balochistan High Court challenging the acquisition.'],
    ];
    foreach ($faqs_bhc as $i => $faq): ?>
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
      Need a Balochistan High Court Lawyer?
    </h2>
    <p class="reveal d-1" style="color:rgba(255,255,255,0.7);max-width:520px;margin:0 auto 2rem;line-height:var(--leading-relaxed);">
      Call now to speak with a verified BHC-enrolled advocate — anonymously, 24/7.
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
