<?php
require_once 'config.php';
require_once 'includes/data.php';
$pageTitle = 'Lahore High Court Lawyers';
$pageDesc  = 'Find verified advocates enrolled with the Lahore High Court. Writ petitions, criminal appeals, civil appeals, service law and bail matters — anonymous consultations 24/7.';
include 'includes/head.php';
include 'includes/nav.php';
?>

<!-- Page Header -->
<div class="page-header">
  <div class="container page-header-inner">
    <h1 class="page-header-title heading-1">Lahore High Court Lawyers</h1>
    <p class="page-header-sub">Verified Advocates Enrolled with the Lahore High Court</p>
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <span class="breadcrumb-item"><a href="index.php">Home</a></span>
      <span class="breadcrumb-sep"><i class="ph ph-caret-right"></i></span>
      <span class="breadcrumb-item">High Court Lawyers</span>
      <span class="breadcrumb-sep"><i class="ph ph-caret-right"></i></span>
      <span class="breadcrumb-item">Lahore High Court</span>
    </nav>
  </div>
</div>

<!-- ════════ COURT INFO ════════ -->
<section class="section">
  <div class="container">
    <div class="why-us-grid">

      <div class="reveal-left">
        <span class="section-label"><i class="ph ph-bank"></i> About the Court</span>
        <h2 class="heading-1">Lahore High Court</h2>
        <div class="divider-gold"></div>
        <p style="margin-top:1.25rem;font-size:var(--text-sm);color:var(--clr-text-3);line-height:var(--leading-relaxed);">
          The Lahore High Court is one of the oldest superior courts in the Indian subcontinent, established in <strong>1919</strong>. It serves as the highest court for the Province of Punjab and is located in Lahore. With benches in Rawalpindi, Multan, and Bahawalpur, its jurisdiction spans the entire Punjab province — the most populous in Pakistan. The court handles constitutional petitions, criminal and civil appeals, election cases, service law matters, and original civil jurisdiction.
        </p>
        <div style="display:grid;gap:0.75rem;margin-top:1.5rem;">
          <?php
          $facts = [
            ['icon'=>'ph-calendar-blank','label'=>'Established','value'=>'1919'],
            ['icon'=>'ph-map-pin',       'label'=>'Location',   'value'=>'Lahore (Benches: Rawalpindi, Multan, Bahawalpur)'],
            ['icon'=>'ph-globe',         'label'=>'Jurisdiction','value'=>'Punjab Province'],
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
            <h3 style="font-size:1.25rem;font-weight:800;margin-bottom:0.75rem;">LHC Key Statistics</h3>
            <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem;margin-top:1rem;">
              <div style="background:rgba(255,255,255,0.1);border-radius:var(--radius-md);padding:1.25rem;text-align:center;">
                <div style="font-size:1.75rem;font-weight:800;color:var(--clr-gold);">200+</div>
                <div style="font-size:var(--text-xs);color:rgba(255,255,255,0.7);margin-top:0.25rem;">Enrolled LHC Advocates on WakeelZone</div>
              </div>
              <div style="background:rgba(255,255,255,0.1);border-radius:var(--radius-md);padding:1.25rem;text-align:center;">
                <div style="font-size:1.75rem;font-weight:800;color:var(--clr-gold);">4</div>
                <div style="font-size:var(--text-xs);color:rgba(255,255,255,0.7);margin-top:0.25rem;">Court Benches Across Punjab</div>
              </div>
              <div style="background:rgba(255,255,255,0.1);border-radius:var(--radius-md);padding:1.25rem;text-align:center;">
                <div style="font-size:1.75rem;font-weight:800;color:var(--clr-gold);">105+</div>
                <div style="font-size:var(--text-xs);color:rgba(255,255,255,0.7);margin-top:0.25rem;">Years of Judicial History</div>
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

<!-- ════════ PRACTICE AREAS BEFORE LHC ════════ -->
<section class="section bg-surface-2">
  <div class="container">
    <div class="section-header center reveal">
      <span class="section-label"><i class="ph ph-scales"></i> Areas of Practice</span>
      <h2 class="heading-2">Practice Areas Before the Lahore High Court</h2>
      <div class="divider-gold center"></div>
    </div>
    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.25rem;" class="hc-areas-grid">
      <?php
      $hc_areas = [
        ['icon'=>'ph-scroll',       'title'=>'Constitutional Petitions', 'desc'=>'Writ petitions challenging unlawful government action, fundamental rights violations, and administrative overreach.'],
        ['icon'=>'ph-scales',       'title'=>'Criminal Appeals',         'desc'=>'Appeals against conviction or acquittal from sessions courts. Bail applications and revision petitions before LHC.'],
        ['icon'=>'ph-file-text',    'title'=>'Civil Appeals',            'desc'=>'Appeals from civil court decrees, injunction orders, contempt of court, and specific performance matters.'],
        ['icon'=>'ph-briefcase',    'title'=>'Service Law',              'desc'=>'Government employee disputes — wrongful termination, departmental proceedings, promotion disputes, and service matters.'],
        ['icon'=>'ph-handcuffs',    'title'=>'Bail Matters',             'desc'=>'Pre-arrest bail, regular bail, post-arrest bail, bail cancellation applications before LHC benches across Punjab.'],
        ['icon'=>'ph-bank',         'title'=>'Administrative Law',       'desc'=>'Challenges to licensing decisions, regulatory orders, and actions by provincial administrative authorities.'],
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
      <h2 class="heading-2">Types of Writ Petitions Before Lahore High Court</h2>
      <div class="divider-gold center"></div>
      <p style="margin-top:1rem;">Our LHC advocates can file all types of constitutional writs under Article 199 of the Constitution of Pakistan.</p>
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
      <h2 class="heading-2">How We Verify Lahore High Court Advocates</h2>
      <div class="divider-gold center"></div>
    </div>
    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.25rem;" class="hc-areas-grid">
      <?php
      $verify = [
        ['icon'=>'ph-seal-check', 'title'=>'Enrollment Cross-Check', 'desc'=>'Every advocate\'s LHC enrollment number is verified directly against Lahore High Court Bar Association records and Pakistan Bar Council rolls.'],
        ['icon'=>'ph-clock-countdown','title'=>'Experience Minimum', 'desc'=>'LHC advocates on our panel must have a minimum of 5 years of active practice before the Lahore High Court or its benches.'],
        ['icon'=>'ph-shield',    'title'=>'Clean Record',           'desc'=>'We conduct background screening for professional misconduct, disciplinary proceedings, or ethical violations before onboarding any LHC advocate.'],
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
      <h2 class="heading-2">How to Get an LHC Lawyer Through WakeelZone</h2>
      <div class="divider-gold center"></div>
    </div>
    <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:1.25rem;margin-top:2rem;" class="process-4-grid">
      <?php
      $steps = [
        ['num'=>'01','icon'=>'ph-phone-call','title'=>'Contact WakeelZone','desc'=>'Call our 24/7 helpline or WhatsApp us to initiate your LHC consultation request.'],
        ['num'=>'02','icon'=>'ph-chat-dots','title'=>'Describe HC Matter','desc'=>'Explain your High Court matter — writ petition, bail, appeal, or service law issue — to our legal executive.'],
        ['num'=>'03','icon'=>'ph-user-check','title'=>'Get Matched','desc'=>'We match you with an enrolled LHC advocate experienced in your specific type of High Court matter.'],
        ['num'=>'04','icon'=>'ph-shield-check','title'=>'Start Consultation','desc'=>'Connect securely with your LHC lawyer — completely anonymous until you decide to formally engage them.'],
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
      <h2 class="heading-2">FAQs — Lahore High Court Lawyers</h2>
      <div class="divider-gold center"></div>
    </div>
    <?php
    $faqs_hc = [
      ['q'=>'What types of cases can Lahore High Court advocates handle through WakeelZone?',
       'a'=>'LHC advocates on our panel handle constitutional petitions (Article 199 writs), criminal appeals, bail matters, civil appeals, election disputes, service law cases, and challenges to administrative decisions across Punjab and its divisional benches.'],
      ['q'=>'How long does a writ petition in Lahore High Court typically take?',
       'a'=>'Timelines vary significantly depending on case type and court workload. Urgent matters like habeas corpus and bail applications can be heard within days. Constitutional petitions challenging government actions may take months to years. Our LHC advocates will give you an honest assessment for your specific case.'],
      ['q'=>'What are the typical costs for an LHC lawyer?',
       'a'=>'Fees for Lahore High Court advocates depend on the complexity and type of case, the lawyer\'s seniority, and the number of hearings expected. WakeelZone ensures transparent, upfront fee discussion before any engagement. Call our helpline for a general estimate based on your matter.'],
      ['q'=>'How do I find an LHC lawyer for a matter before the Rawalpindi or Multan bench?',
       'a'=>'Call our helpline and specify the bench (Rawalpindi, Multan, or Bahawalpur). We have advocates who regularly practise before all four LHC benches and can represent you without you needing to travel to Lahore.'],
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
      Need a Lahore High Court Lawyer?
    </h2>
    <p class="reveal d-1" style="color:rgba(255,255,255,0.7);max-width:520px;margin:0 auto 2rem;line-height:var(--leading-relaxed);">
      Call now to speak with a verified LHC-enrolled advocate — anonymously, 24/7.
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
