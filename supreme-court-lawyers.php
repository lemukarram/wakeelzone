<?php
require_once 'config.php';
require_once 'includes/data.php';
$pageTitle = 'Supreme Court of Pakistan Lawyers';
$pageDesc  = 'Connect with verified Supreme Court of Pakistan advocates for constitutional matters, civil & criminal appeals, and Special Leave Petitions (SLPs). WakeelZone.';
include 'includes/head.php';
include 'includes/nav.php';
?>

<!-- Page Header -->
<div class="page-header">
  <div class="container page-header-inner">
    <h1 class="page-header-title heading-1">Supreme Court of Pakistan Lawyers</h1>
    <p class="page-header-sub">Verified Supreme Court Advocates for Complex Constitutional &amp; Civil Matters</p>
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <span class="breadcrumb-item"><a href="index.php">Home</a></span>
      <span class="breadcrumb-sep"><i class="ph ph-caret-right"></i></span>
      <span class="breadcrumb-item">Supreme Court Lawyers</span>
    </nav>
  </div>
</div>

<!-- ════════ INTRO ════════ -->
<section class="section">
  <div class="container">
    <div class="why-us-grid">

      <div class="reveal-left">
        <span class="section-label"><i class="ph ph-scales"></i> Apex Court of Pakistan</span>
        <h2 class="heading-1">Pakistan's Highest Court of Law</h2>
        <div class="divider-gold"></div>
        <p class="lead" style="margin-top:1.25rem;">
          The Supreme Court of Pakistan is the apex court of the country — the final arbiter of
          all constitutional and legal questions. Only advocates enrolled on the Supreme Court
          Roll may appear and plead before it.
        </p>
        <p style="margin-top:1rem;font-size:var(--text-sm);color:var(--clr-text-3);line-height:var(--leading-relaxed);">
          WakeelZone's panel includes experienced Supreme Court lawyers enrolled with the Supreme
          Court of Pakistan. Our SC advocates specialize in Special Leave Petitions (SLPs), appeals
          from High Court judgments, constitutional matters under original jurisdiction, and human
          rights applications. Getting the right Supreme Court lawyer is critical — the SC does not
          entertain matters unless they raise substantial questions of law or justice demands its
          intervention.
        </p>
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:0.75rem;margin-top:1.5rem;">
          <?php
          $sc_checks = [
            'SC-Enrolled Advocates Only','Special Leave Petitions (SLPs)','Constitutional Original Jurisdiction','Human Rights Cell Applications','Advisory Jurisdiction','Federal Shariat Court Appeals',
          ];
          foreach ($sc_checks as $c): ?>
          <div class="check-list-item">
            <i class="ph ph-check-circle"></i>
            <span style="font-weight:500;font-size:var(--text-sm);"><?php echo $c; ?></span>
          </div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="reveal-right">
        <div style="background:linear-gradient(135deg,var(--clr-primary-dark),var(--clr-primary));border-radius:var(--radius-xl);padding:2.5rem;color:var(--clr-text-inverse);position:relative;overflow:hidden;">
          <div style="position:absolute;inset:0;background-image:radial-gradient(circle,rgba(255,255,255,0.04) 1px,transparent 1px);background-size:20px 20px;"></div>
          <div style="position:relative;z-index:1;">
            <i class="ph ph-scales" style="font-size:3rem;color:var(--clr-gold);display:block;margin-bottom:1.25rem;"></i>
            <h3 style="font-size:1.25rem;font-weight:800;margin-bottom:1.25rem;">Key Facts: Supreme Court of Pakistan</h3>
            <?php
            $sc_facts = [
              ['label'=>'Established', 'val'=>'1956 (Constitution of Pakistan)'],
              ['label'=>'Location',    'val'=>'Islamabad, Pakistan'],
              ['label'=>'Composition', 'val'=>'Chief Justice + up to 16 Judges'],
              ['label'=>'Jurisdiction','val'=>'Appellate, Original & Advisory'],
              ['label'=>'Authority',   'val'=>'Final court of appeal in Pakistan'],
            ];
            foreach ($sc_facts as $f): ?>
            <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:0.875rem;padding-bottom:0.875rem;border-bottom:1px solid rgba(255,255,255,0.1);font-size:var(--text-sm);">
              <span style="color:var(--clr-gold);font-weight:600;"><?php echo $f['label']; ?></span>
              <span style="color:rgba(255,255,255,0.8);text-align:right;max-width:60%;"><?php echo $f['val']; ?></span>
            </div>
            <?php endforeach; ?>
            <a href="tel:<?php echo preg_replace('/\s+/', '', HELPLINE_NUMBER); ?>"
               class="btn btn-gold" style="width:100%;justify-content:center;margin-top:0.75rem;">
              <i class="ph ph-phone-call"></i> Talk to SC Lawyer
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ════════ WHEN DO YOU NEED A SC LAWYER ════════ -->
<section class="section bg-surface-2">
  <div class="container">
    <div class="section-header center reveal">
      <span class="section-label"><i class="ph ph-question"></i> When to Approach</span>
      <h2 class="heading-1">When Do You Need a Supreme Court Lawyer?</h2>
      <div class="divider-gold center"></div>
      <p style="margin-top:1rem;">
        The Supreme Court's jurisdiction is specific. Approach it only through the right channel.
      </p>
    </div>

    <?php
    $sc_when = [
      ['icon'=>'ph-arrow-counter-clockwise','title'=>'Appeals from High Courts',        'desc'=>'If you are aggrieved by a High Court judgment (Lahore, Sindh, Peshawar, Balochistan, or Islamabad HC), you can appeal to the Supreme Court as of right in certain matters or by Special Leave Petition (SLP).'],
      ['icon'=>'ph-file-plus',             'title'=>'Special Leave Petitions (Art.185(3))','desc'=>'Under Article 185(3) of the Constitution, the Supreme Court may grant leave to appeal against any HC judgment or order. This is the most common route to SC in civil and criminal matters.'],
      ['icon'=>'ph-scales',                'title'=>'Original Jurisdiction',            'desc'=>'The SC has original jurisdiction in disputes between federal and provincial governments (inter-governmental disputes) under Article 184(1) of the Constitution.'],
      ['icon'=>'ph-book-open',             'title'=>'Advisory Jurisdiction',            'desc'=>'The President of Pakistan can refer questions of public importance to the SC for advisory opinion under Article 186 of the Constitution.'],
      ['icon'=>'ph-heart',                 'title'=>'Human Rights Cells',               'desc'=>'The SC\'s Human Rights Cell (HRC) takes suo motu notice of human rights violations. Citizens can also write directly to the HRC for matters of fundamental rights violations.'],
    ];
    ?>
    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.25rem;" class="three-cols-responsive">
      <?php foreach ($sc_when as $i => $item): ?>
      <div class="service-card reveal delay-<?php echo ($i % 3) + 1; ?>">
        <div class="service-icon"><i class="ph <?php echo $item['icon']; ?>"></i></div>
        <h3 class="service-title"><?php echo $item['title']; ?></h3>
        <p class="service-desc"><?php echo $item['desc']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ════════ TYPES OF CASES ════════ -->
<section class="section">
  <div class="container">
    <div class="why-us-grid">

      <div class="reveal-left">
        <span class="section-label"><i class="ph ph-folders"></i> Case Types</span>
        <h2 class="heading-1">Types of Cases in the Supreme Court</h2>
        <div class="divider-gold"></div>
        <p style="margin-top:1rem;font-size:var(--text-sm);color:var(--clr-text-3);line-height:var(--leading-relaxed);">
          The Supreme Court handles a wide range of matters, all of which require specialized
          enrollment and deep familiarity with SC rules and procedures.
        </p>
        <div style="margin-top:1.5rem;display:flex;flex-direction:column;gap:0.75rem;">
          <?php
          $sc_cases = [
            ['icon'=>'ph-scales',           'title'=>'Constitutional Matters',       'desc'=>'Interpretation of constitutional provisions, enforcement of fundamental rights, and inter-governmental disputes.'],
            ['icon'=>'ph-gavel',            'title'=>'Civil Appeals',                'desc'=>'Final civil appeals from High Courts involving substantial amounts or questions of law.'],
            ['icon'=>'ph-handcuffs',        'title'=>'Criminal Appeals',             'desc'=>'Appeals against HC judgments in criminal matters including capital punishment cases.'],
            ['icon'=>'ph-file-arrow-up',    'title'=>'Special Leave Petitions',      'desc'=>'Discretionary jurisdiction to grant leave to appeal when a substantial question of law is involved.'],
            ['icon'=>'ph-moon-stars',       'title'=>'Federal Shariat Court Appeals','desc'=>'Appeals from Federal Shariat Court decisions go to the SC\'s Shariat Appellate Bench.'],
            ['icon'=>'ph-receipt',          'title'=>'Tax & Corporate Appeals',      'desc'=>'Final appeals in complex tax, corporate, and regulatory matters from High Court divisions.'],
          ];
          foreach ($sc_cases as $j => $c): ?>
          <div style="display:flex;gap:0.875rem;align-items:flex-start;" class="reveal delay-<?php echo ($j % 3)+1; ?>">
            <div style="width:44px;height:44px;flex-shrink:0;background:var(--clr-primary-50);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;color:var(--clr-primary);font-size:1.125rem;">
              <i class="ph <?php echo $c['icon']; ?>"></i>
            </div>
            <div>
              <h4 style="font-size:var(--text-sm);font-weight:700;color:var(--clr-text);margin-bottom:0.25rem;"><?php echo $c['title']; ?></h4>
              <p style="font-size:var(--text-xs);color:var(--clr-text-3);line-height:var(--leading-relaxed);margin:0;"><?php echo $c['desc']; ?></p>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Lawyer Panel Info -->
      <div class="reveal-right">
        <div style="background:var(--clr-surface);border:2px solid var(--clr-border-light);border-radius:var(--radius-xl);padding:2.5rem;">
          <i class="ph ph-identification-badge" style="font-size:2.5rem;color:var(--clr-gold);display:block;margin-bottom:1.25rem;"></i>
          <h3 class="heading-3" style="margin-bottom:1rem;">Our Supreme Court Lawyer Panel</h3>
          <p style="font-size:var(--text-sm);color:var(--clr-text-3);line-height:var(--leading-relaxed);margin-bottom:1.5rem;">
            Our SC advocates are among Pakistan's most experienced legal professionals. Each member
            of our Supreme Court panel must meet strict eligibility requirements before joining WakeelZone.
          </p>
          <div style="display:flex;flex-direction:column;gap:0.875rem;">
            <?php
            $sc_creds = [
              'Enrolled on the Supreme Court Roll (not just High Court)',
              'Minimum 10 years of active practice at bar',
              'Demonstrated track record in HC & SC matters',
              'Clean disciplinary record with Bar Council',
              'Specialized expertise in their subject area',
              'Available for urgent SLP / bail matters',
            ];
            foreach ($sc_creds as $cred): ?>
            <div class="check-list-item">
              <i class="ph ph-check-circle"></i>
              <span style="font-size:var(--text-sm);"><?php echo $cred; ?></span>
            </div>
            <?php endforeach; ?>
          </div>
          <div style="margin-top:1.5rem;padding:1.25rem;background:var(--clr-gold-50);border-radius:var(--radius-lg);border:1px solid rgba(201,168,76,0.2);">
            <p style="font-size:var(--text-xs);color:var(--clr-text-3);margin:0;line-height:var(--leading-relaxed);">
              <i class="ph ph-info" style="color:var(--clr-gold);"></i>
              <strong> Note:</strong> SC matters are time-sensitive. SLPs must generally be filed within
              30 days of the HC order. Contact us immediately to preserve your limitation period.
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ════════ SLP PROCESS ════════ -->
<section class="section bg-surface-2">
  <div class="container">
    <div class="section-header center reveal">
      <span class="section-label"><i class="ph ph-steps"></i> SLP Process</span>
      <h2 class="heading-1">How to File an SLP / Appeal in the Supreme Court</h2>
      <div class="divider-gold center"></div>
    </div>
    <div style="max-width:780px;margin-inline:auto;">
      <?php
      $slp_steps = [
        ['num'=>'01','icon'=>'ph-copy',         'title'=>'Obtain Certified HC Order',    'desc'=>'Obtain certified copies of the High Court judgment/order from the HC registry. This is required before filing in SC.'],
        ['num'=>'02','icon'=>'ph-file-text',    'title'=>'Prepare SLP Petition',         'desc'=>'Your SC lawyer drafts the SLP with grounds of appeal, substantial questions of law, and supporting legal arguments.'],
        ['num'=>'03','icon'=>'ph-upload',       'title'=>'File at SC Registry',          'desc'=>'The petition is filed at the Supreme Court Registry in Islamabad along with vakalatnama, affidavit, and court fee.'],
        ['num'=>'04','icon'=>'ph-envelope',     'title'=>'Serve on Respondents',         'desc'=>'Notice is issued to all respondents. Service must be completed before the case is taken up for hearing.'],
        ['num'=>'05','icon'=>'ph-calendar',     'title'=>'Preliminary Hearing',          'desc'=>'The SC bench considers whether to grant or refuse leave to appeal. This is the most critical stage.'],
        ['num'=>'06','icon'=>'ph-scales',       'title'=>'Merits Hearing (if granted)',  'desc'=>'If leave is granted, the case proceeds to full hearing on merits before the SC bench.'],
      ];
      foreach ($slp_steps as $i => $step): ?>
      <div class="reveal" style="display:grid;grid-template-columns:72px 1fr;gap:1.5rem;margin-bottom:2.5rem;">
        <div style="text-align:center;">
          <div style="width:72px;height:72px;background:linear-gradient(135deg,var(--clr-primary),var(--clr-primary-light));border-radius:var(--radius-lg);display:flex;align-items:center;justify-content:center;box-shadow:var(--shadow-navy);">
            <i class="ph <?php echo $step['icon']; ?>" style="font-size:1.75rem;color:var(--clr-gold);"></i>
          </div>
          <?php if ($i < count($slp_steps) - 1): ?>
          <div style="width:2px;height:2rem;background:linear-gradient(var(--clr-primary-100),transparent);margin:0 auto;"></div>
          <?php endif; ?>
        </div>
        <div style="padding-top:0.375rem;">
          <div style="font-size:var(--text-xs);font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:var(--clr-gold);margin-bottom:0.25rem;">Step <?php echo $step['num']; ?></div>
          <h3 style="font-size:var(--text-base);font-weight:700;color:var(--clr-text);margin-bottom:0.5rem;"><?php echo $step['title']; ?></h3>
          <p style="font-size:var(--text-sm);color:var(--clr-text-3);line-height:var(--leading-relaxed);margin:0;"><?php echo $step['desc']; ?></p>
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
      <h2 class="heading-1">Supreme Court FAQ</h2>
      <div class="divider-gold center"></div>
    </div>
    <?php
    $sc_faqs = [
      ['q'=>'What is a Special Leave Petition (SLP) in Pakistan?',
       'a'=>'A Special Leave Petition (SLP) is filed under Article 185(3) of the Constitution of Pakistan, petitioning the Supreme Court to grant leave (permission) to appeal against a High Court judgment. The SC is not bound to hear every appeal — it only grants leave when there is a substantial question of law of general public importance or when justice requires its intervention.'],
      ['q'=>'Who can file a case in the Supreme Court of Pakistan?',
       'a'=>'Any party aggrieved by a High Court judgment or order can file a petition in the Supreme Court. The petition must be filed through an advocate enrolled on the Supreme Court Roll. Additionally, the federal government, provincial governments, and even private individuals (for human rights matters) can approach the SC.'],
      ['q'=>'How long does a Supreme Court case take in Pakistan?',
       'a'=>'The timeline varies greatly depending on the type of matter and the SC\'s docket. Urgent bail matters or suo motu proceedings may be taken up within days. Regular SLPs and appeals can take several months to years before final disposal. Our SC lawyers keep clients updated at every stage of the proceeding.'],
      ['q'=>'How much does a Supreme Court case cost in Pakistan?',
       'a'=>'Supreme Court matters typically cost more than High Court matters due to the specialized nature of SC enrollment and the higher complexity of proceedings. Costs depend on the nature of the matter, urgency, number of hearings, and the seniority of the advocate. WakeelZone provides transparent, itemized fee information before any formal engagement.'],
      ['q'=>'How does WakeelZone handle my Supreme Court matter?',
       'a'=>'When you contact us for an SC matter, we immediately assess urgency (especially for limitation period issues). We connect you with a verified SC-enrolled advocate who reviews your HC judgment and advises on SLP merits within 24 hours. We handle all documentation, registry filing, and court appearances on your behalf — you stay anonymous throughout the process if you wish.'],
    ];
    ?>
    <div class="faq-list reveal d-1">
      <?php foreach ($sc_faqs as $i => $faq): ?>
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
      <i class="ph ph-scales"></i> Supreme Court Specialists
    </span>
    <h2 class="heading-1 reveal" style="color:var(--clr-text-inverse);margin-bottom:0.75rem;">
      Need a Supreme Court Lawyer?
    </h2>
    <p class="reveal d-1" style="color:rgba(255,255,255,0.7);max-width:520px;margin:0 auto 1.75rem;line-height:var(--leading-relaxed);">
      Time is critical in SC matters. SLPs must be filed within 30 days of the HC order.
      Call now — our SC lawyers are available 24/7.
    </p>
    <div class="cta-btns reveal d-2">
      <a href="tel:<?php echo preg_replace('/\s+/', '', HELPLINE_NUMBER); ?>" class="btn btn-gold btn-lg">
        <i class="ph ph-phone-call"></i> Call <?php echo HELPLINE_NUMBER; ?>
      </a>
      <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>" target="_blank" rel="noopener" class="btn btn-outline-white btn-lg">
        <i class="ph ph-whatsapp-logo"></i> WhatsApp Urgently
      </a>
      <a href="special-leave-petition.php" class="btn btn-outline-white btn-lg">
        <i class="ph ph-file-text"></i> SLP Guide
      </a>
    </div>
  </div>
</section>

<style>
@media (max-width: 767px) {
  .three-cols-responsive { grid-template-columns: 1fr !important; }
  .why-us-grid { grid-template-columns: 1fr !important; }
}
@media (min-width: 768px) and (max-width: 1023px) {
  .three-cols-responsive { grid-template-columns: 1fr 1fr !important; }
}
</style>

<?php include 'includes/footer.php'; ?>
