<?php
require_once 'config.php';
require_once 'includes/data.php';
$pageTitle = 'High Court Lawyers in Pakistan';
$pageDesc  = 'Find verified High Court advocates across all five provincial High Courts in Pakistan. Lahore, Sindh, Peshawar, Balochistan & Islamabad High Courts — WakeelZone.';
include 'includes/head.php';
include 'includes/nav.php';
?>

<!-- Page Header -->
<div class="page-header">
  <div class="container page-header-inner">
    <h1 class="page-header-title heading-1">High Court Lawyers in Pakistan</h1>
    <p class="page-header-sub">Expert High Court Advocates Across All Five Provincial High Courts</p>
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <span class="breadcrumb-item"><a href="index.php">Home</a></span>
      <span class="breadcrumb-sep"><i class="ph ph-caret-right"></i></span>
      <span class="breadcrumb-item">High Court Lawyers</span>
    </nav>
  </div>
</div>

<!-- ════════ INTRO SECTION ════════ -->
<section class="section">
  <div class="container">
    <div class="why-us-grid">

      <div class="reveal-left">
        <span class="section-label"><i class="ph ph-bank"></i> High Courts of Pakistan</span>
        <h2 class="heading-1">Appellate Justice at the Provincial Level</h2>
        <div class="divider-gold"></div>
        <p class="lead" style="margin-top:1.25rem;">
          High Courts are the apex courts in each province and serve as the primary appellate
          forum for matters decided by District and Sessions Courts. They also exercise original
          jurisdiction in constitutional matters through writ petitions.
        </p>
        <p style="margin-top:1rem;font-size:var(--text-sm);color:var(--clr-text-3);line-height:var(--leading-relaxed);">
          WakeelZone connects you with verified High Court advocates across all five High Courts
          in Pakistan — Lahore, Sindh, Peshawar, Balochistan, and Islamabad. Our panel lawyers
          are enrolled High Court advocates with minimum 5 years of HC-level experience, covering
          constitutional petitions, criminal appeals, civil appeals, service matters, and writ jurisdiction.
        </p>
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:0.75rem;margin-top:1.5rem;">
          <?php
          $hc_checks = [
            'All 5 High Courts Covered','Writ Petition Specialists','Criminal & Civil Appeals','Bail Before Arrest (BBA)','Service Law Experts','Constitutional Law Specialists'
          ];
          foreach ($hc_checks as $c): ?>
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
            <i class="ph ph-bank" style="font-size:3rem;color:var(--clr-gold);margin-bottom:1rem;display:block;"></i>
            <h3 style="font-size:1.375rem;font-weight:800;margin-bottom:1rem;">Why High Court Representation Matters</h3>
            <p style="color:rgba(255,255,255,0.75);line-height:var(--leading-relaxed);font-size:var(--text-sm);">
              High Court proceedings have strict procedural requirements — from limitation periods to
              proper drafting of constitutional petitions. A single procedural error can cost you
              your case. Experienced HC advocates ensure your matter is handled flawlessly.
            </p>
            <div style="margin-top:1.5rem;padding-top:1.25rem;border-top:1px solid rgba(255,255,255,0.15);">
              <a href="tel:<?php echo preg_replace('/\s+/', '', HELPLINE_NUMBER); ?>"
                 class="btn btn-gold" style="width:100%;justify-content:center;">
                <i class="ph ph-phone-call"></i> Consult an HC Lawyer Now
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ════════ STATS BAR ════════ -->
<div class="stats-bar">
  <div class="container">
    <div class="stats-grid">
      <?php
      $hc_stats = [
        ['icon'=>'ph-users',       'num'=>'500+',  'label'=>'High Court Advocates'],
        ['icon'=>'ph-bank',        'num'=>'5',      'label'=>'High Courts Covered'],
        ['icon'=>'ph-clock',       'num'=>'24/7',   'label'=>'Availability'],
        ['icon'=>'ph-star',        'num'=>'10+',    'label'=>'Years Avg Experience'],
      ];
      foreach ($hc_stats as $i => $s): ?>
      <div class="stat-item reveal delay-<?php echo $i+1; ?>">
        <div class="stat-icon-wrap" aria-hidden="true">
          <i class="ph <?php echo $s['icon']; ?>"></i>
        </div>
        <div class="stat-number"><?php echo $s['num']; ?></div>
        <div class="stat-label"><?php echo $s['label']; ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<!-- ════════ WHICH HIGH COURT ════════ -->
<section class="section bg-surface-2">
  <div class="container">
    <div class="section-header center reveal">
      <span class="section-label"><i class="ph ph-map-pin"></i> Select Your Court</span>
      <h2 class="heading-1">Which High Court Do You Need?</h2>
      <div class="divider-gold center"></div>
      <p style="margin-top:1rem;">
        Each High Court has jurisdiction over its respective province or territory. Select the
        court relevant to your matter for specialized legal assistance.
      </p>
    </div>

    <?php
    $high_courts = [
      [
        'name'  => 'Lahore High Court',
        'sub'   => 'Punjab Province',
        'icon'  => 'ph-bank',
        'desc'  => 'The largest High Court in Pakistan with jurisdiction over the entire province of Punjab including Lahore, Rawalpindi, Faisalabad, Multan, Gujranwala, and all other Punjab cities. Established 1919.',
        'seats' => 'Main seat: Lahore | Benches: Rawalpindi, Multan, Bahawalpur',
        'link'  => 'high-court-lawyer-lahore.php',
        'color' => 'navy',
      ],
      [
        'name'  => 'Sindh High Court',
        'sub'   => 'Sindh Province',
        'icon'  => 'ph-bank',
        'desc'  => 'Jurisdiction over the entire province of Sindh including Karachi, Hyderabad, Sukkur, Larkana, and all other Sindh cities. The commercial capital\'s primary appellate court.',
        'seats' => 'Main seat: Karachi | Circuit Bench: Hyderabad, Sukkur',
        'link'  => 'high-court-lawyer-sindh.php',
        'color' => 'gold',
      ],
      [
        'name'  => 'Peshawar High Court',
        'sub'   => 'Khyber Pakhtunkhwa',
        'icon'  => 'ph-bank',
        'desc'  => 'Jurisdiction over KPK province and merged tribal districts (erstwhile FATA). Covers Peshawar, Abbottabad, Swat, Mardan, and all former FATA areas.',
        'seats' => 'Main seat: Peshawar | Benches: Abbottabad, Mingora (Swat)',
        'link'  => 'high-court-lawyer-peshawar.php',
        'color' => 'navy',
      ],
      [
        'name'  => 'Balochistan High Court',
        'sub'   => 'Balochistan Province',
        'icon'  => 'ph-bank',
        'desc'  => 'Jurisdiction over Pakistan\'s largest province by area, including Quetta, Gwadar, Khuzdar, Turbat, and all Balochistan districts including CPEC-related legal matters.',
        'seats' => 'Main seat: Quetta',
        'link'  => 'high-court-lawyer-balochistan.php',
        'color' => 'gold',
      ],
      [
        'name'  => 'Islamabad High Court',
        'sub'   => 'Islamabad Capital Territory',
        'icon'  => 'ph-bank',
        'desc'  => 'Established in 2010, the IHC has jurisdiction over the Islamabad Capital Territory (ICT) and serves matters arising from federal government departments and institutions based in Islamabad.',
        'seats' => 'Main seat: Islamabad | Also covers: Rawalpindi (for ICT matters)',
        'link'  => 'high-court-lawyer-islamabad.php',
        'color' => 'navy',
      ],
    ];
    ?>

    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem;" class="hc-grid">
      <?php foreach ($high_courts as $i => $hc): ?>
      <div class="service-card reveal delay-<?php echo ($i % 3) + 1; ?>" style="position:relative;">
        <div class="service-icon" aria-hidden="true">
          <i class="ph <?php echo $hc['icon']; ?>"></i>
        </div>
        <h3 class="service-title"><?php echo htmlspecialchars($hc['name']); ?></h3>
        <p style="font-size:var(--text-xs);font-weight:700;color:var(--clr-gold);text-transform:uppercase;letter-spacing:0.08em;margin-bottom:0.75rem;">
          <?php echo htmlspecialchars($hc['sub']); ?>
        </p>
        <p class="service-desc"><?php echo htmlspecialchars($hc['desc']); ?></p>
        <p style="font-size:var(--text-xs);color:var(--clr-text-muted);margin-bottom:1rem;line-height:1.4;">
          <i class="ph ph-map-pin" style="color:var(--clr-gold);"></i>
          <?php echo htmlspecialchars($hc['seats']); ?>
        </p>
        <a href="<?php echo $hc['link']; ?>" class="service-link">
          Find HC Lawyer <i class="ph ph-arrow-right"></i>
        </a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ════════ PRACTICE AREAS IN HIGH COURTS ════════ -->
<section class="section">
  <div class="container">
    <div class="section-header center reveal">
      <span class="section-label"><i class="ph ph-scales"></i> HC Practice Areas</span>
      <h2 class="heading-1">Practice Areas in High Courts</h2>
      <div class="divider-gold center"></div>
      <p style="margin-top:1rem;">
        Our High Court advocates specialize in the full range of HC jurisdiction matters.
      </p>
    </div>

    <?php
    $hc_areas = [
      ['icon'=>'ph-file-search',   'title'=>'Constitutional Petitions (Writ)', 'desc'=>'Filing and arguing writ petitions under Articles 199 of the Constitution — Mandamus, Prohibition, Certiorari, Quo Warranto, and Habeas Corpus.'],
      ['icon'=>'ph-arrow-counter-clockwise','title'=>'Appeals Against Sessions Court', 'desc'=>'Criminal and civil appeals from decisions of District & Sessions Courts, including appeals against conviction and acquittals.'],
      ['icon'=>'ph-door-open',     'title'=>'Bail Before Arrest (BBA)', 'desc'=>'Pre-arrest bail applications (anticipatory bail) filed directly before the High Court when Sessions Court bail has been refused or is unlikely to succeed.'],
      ['icon'=>'ph-identification-badge','title'=>'Service Law Matters', 'desc'=>'Government employees\' service disputes — suspension, dismissal, seniority, promotion, departmental proceedings — before the High Court.'],
      ['icon'=>'ph-bank',          'title'=>'Administrative Challenges', 'desc'=>'Challenging unlawful administrative orders, arbitrary government actions, and regulatory decisions through constitutional jurisdiction.'],
      ['icon'=>'ph-receipt',       'title'=>'Tax Appeals', 'desc'=>'Appeals from ATIR (Appellate Tribunal Inland Revenue) orders before the High Court on questions of law involving income tax, sales tax, and customs duties.'],
      ['icon'=>'ph-briefcase',     'title'=>'Labour Appeals', 'desc'=>'Appeals from Labour Court and NIRC decisions, including wrongful termination, reinstatement orders, and collective bargaining agent disputes.'],
      ['icon'=>'ph-users',         'title'=>'Family Law Revisions', 'desc'=>'Revision petitions against Family Court decrees on divorce, custody, maintenance, and inheritance matters to the High Court.'],
    ];
    ?>
    <div style="display:grid;grid-template-columns:repeat(2,1fr);gap:1.25rem;max-width:900px;margin-inline:auto;">
      <?php foreach ($hc_areas as $i => $area): ?>
      <div class="feature-item reveal delay-<?php echo ($i % 3) + 1; ?>"
           style="background:var(--clr-surface);border:1px solid var(--clr-border-light);border-radius:var(--radius-lg);padding:1.5rem;">
        <div class="feature-icon"><i class="ph <?php echo $area['icon']; ?>"></i></div>
        <div>
          <h4 class="feature-title"><?php echo $area['title']; ?></h4>
          <p class="feature-desc"><?php echo $area['desc']; ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ════════ HOW WakeelZone HC LAWYERS WORK ════════ -->
<section class="section bg-surface-2">
  <div class="container">
    <div class="section-header center reveal">
      <span class="section-label"><i class="ph ph-steps"></i> Our Process</span>
      <h2 class="heading-1">How WakeelZone HC Lawyers Work</h2>
      <div class="divider-gold center"></div>
    </div>

    <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:1.25rem;" class="four-col-resp">
      <?php
      $hc_process = [
        ['num'=>'01','icon'=>'ph-phone-call',  'title'=>'Initial Consultation','desc'=>'Call our 24/7 helpline. Brief us on your HC matter — which court, what type of case, and your urgency level.'],
        ['num'=>'02','icon'=>'ph-user-check',  'title'=>'HC Lawyer Match',    'desc'=>'We match you with a verified advocate enrolled in the specific High Court relevant to your case.'],
        ['num'=>'03','icon'=>'ph-file-text',   'title'=>'Case Assessment',    'desc'=>'Your HC lawyer reviews all facts, documents, and prior court orders to advise on merits and strategy.'],
        ['num'=>'04','icon'=>'ph-scales',      'title'=>'Court Representation','desc'=>'Your advocate files all petitions, appears at hearings, and represents you until the matter is concluded.'],
      ];
      foreach ($hc_process as $i => $step): ?>
      <div class="step-card reveal delay-<?php echo $i+1; ?>">
        <span class="step-num"><?php echo $step['num']; ?></span>
        <div class="step-icon-wrap"><i class="ph <?php echo $step['icon']; ?>"></i></div>
        <h3 class="step-title"><?php echo $step['title']; ?></h3>
        <p class="step-desc"><?php echo $step['desc']; ?></p>
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
      <h2 class="heading-1">High Court FAQ</h2>
      <div class="divider-gold center"></div>
    </div>

    <?php
    $hc_faqs = [
      ['q'=>'What is a Writ Petition and when should I file one?',
       'a'=>'A Writ Petition (Constitutional Petition) is filed under Article 199 of the Constitution before the High Court to challenge unlawful state action, enforce fundamental rights, or compel a public authority to perform its legal duty. You should file a writ petition when your fundamental rights have been violated, a government authority has acted without jurisdiction, or there is no other adequate remedy available in ordinary law.'],
      ['q'=>'When do I need a High Court lawyer instead of a District Court lawyer?',
       'a'=>'You need a High Court lawyer when: (1) you are appealing a District/Sessions Court judgment, (2) you are filing a constitutional petition, (3) you need pre-arrest bail (Bail Before Arrest/BBA) after denial at Sessions Court level, (4) you are challenging a government or administrative order, or (5) your case involves a question of law that requires HC jurisdiction.'],
      ['q'=>'What is the cost of a High Court case in Pakistan?',
       'a'=>'High Court case costs vary significantly based on the nature of the matter, the lawyer\'s seniority, and the number of hearings involved. Simple bail matters may cost PKR 15,000–50,000, while complex constitutional petitions or civil appeals can cost PKR 50,000–500,000 or more. WakeelZone provides transparent, upfront fee information before any engagement.'],
      ['q'=>'Can a foreigner file a case in a Pakistani High Court?',
       'a'=>'Yes, foreign nationals can file petitions and cases in Pakistani High Courts. For constitutional matters affecting them within Pakistan\'s jurisdiction, or for cases involving Pakistani entities, foreigners have full standing to approach the HC. Our lawyers can assist with all procedural requirements including service of process and vakalatnama documentation for foreign clients.'],
    ];
    ?>
    <div class="faq-list reveal d-1">
      <?php foreach ($hc_faqs as $i => $faq): ?>
      <div class="faq-item <?php echo $i === 0 ? 'open' : ''; ?>">
        <button class="faq-question" aria-expanded="<?php echo $i === 0 ? 'true' : 'false'; ?>">
          <span><?php echo htmlspecialchars($faq['q']); ?></span>
          <span class="faq-toggle-icon" aria-hidden="true"><i class="ph ph-plus"></i></span>
        </button>
        <div class="faq-body">
          <div class="faq-body-inner"><?php echo htmlspecialchars($faq['a']); ?></div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ════════ CTA ════════ -->
<section class="cta-section">
  <div class="container cta-inner">
    <span class="section-label" style="color:var(--clr-gold-light);border-color:rgba(201,168,76,0.3);background:rgba(201,168,76,0.12);">
      <i class="ph ph-bank"></i> High Court Specialists
    </span>
    <h2 class="heading-1 reveal" style="color:var(--clr-text-inverse);margin-bottom:0.75rem;">
      Need a High Court Advocate?
    </h2>
    <p class="reveal d-1" style="color:rgba(255,255,255,0.7);max-width:520px;margin:0 auto 1.75rem;line-height:var(--leading-relaxed);">
      Connect with a verified, enrolled High Court advocate in your province — anonymously and instantly.
      Our HC lawyers are ready 24/7.
    </p>
    <div class="cta-btns reveal d-2">
      <a href="tel:<?php echo preg_replace('/\s+/', '', HELPLINE_NUMBER); ?>" class="btn btn-gold btn-lg">
        <i class="ph ph-phone-call"></i> Call <?php echo HELPLINE_NUMBER; ?>
      </a>
      <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>" target="_blank" rel="noopener" class="btn btn-outline-white btn-lg">
        <i class="ph ph-whatsapp-logo"></i> WhatsApp Us
      </a>
      <a href="supreme-court-lawyers.php" class="btn btn-outline-white btn-lg">
        <i class="ph ph-scales"></i> Supreme Court Lawyers
      </a>
    </div>
  </div>
</section>

<style>
@media (max-width: 767px) {
  .hc-grid { grid-template-columns: 1fr !important; }
  .four-col-resp { grid-template-columns: 1fr 1fr !important; }
}
@media (min-width: 768px) and (max-width: 1023px) {
  .hc-grid { grid-template-columns: 1fr 1fr !important; }
  .four-col-resp { grid-template-columns: 1fr 1fr !important; }
}
</style>

<?php include 'includes/footer.php'; ?>
