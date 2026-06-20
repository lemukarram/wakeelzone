<?php
require_once 'config.php';
require_once 'includes/data.php';
$pageTitle = 'Find a Lawyer in Pakistan';
$pageDesc  = 'Browse WakeelZone\'s network of 2,500+ verified advocates in Pakistan. Find lawyers by practice area, city, court type, and language. Anonymous consultations 24/7.';
include 'includes/head.php';
include 'includes/nav.php';
?>

<!-- Page Header -->
<div class="page-header">
  <div class="container page-header-inner">
    <h1 class="page-header-title heading-1">Find a Lawyer in Pakistan</h1>
    <p class="page-header-sub">Browse Our Network of 2,500+ Verified Advocates</p>
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <span class="breadcrumb-item"><a href="index.php">Home</a></span>
      <span class="breadcrumb-sep"><i class="ph ph-caret-right"></i></span>
      <span class="breadcrumb-item">All Lawyers</span>
    </nav>
  </div>
</div>

<!-- ════════ SEARCH FILTER UI ════════ -->
<section class="section bg-surface-2">
  <div class="container">
    <div class="section-header center reveal">
      <span class="section-label"><i class="ph ph-magnifying-glass"></i> Find Your Lawyer</span>
      <h2 class="heading-1">Search & Filter Lawyers</h2>
      <div class="divider-gold center"></div>
      <p style="margin-top:1rem;">
        Use the filters below to narrow your search, then call or WhatsApp us to get matched
        with the right advocate — instantly and anonymously.
      </p>
    </div>

    <div style="background:var(--clr-surface);border:1px solid var(--clr-border-light);border-radius:var(--radius-xl);padding:2.5rem;box-shadow:var(--shadow-lg);max-width:900px;margin-inline:auto;" class="reveal">
      <form action="contact.php" method="GET" style="display:grid;grid-template-columns:1fr 1fr;gap:1.25rem;" class="filter-form">

        <!-- Practice Area -->
        <div style="display:flex;flex-direction:column;gap:0.5rem;">
          <label style="font-size:var(--text-sm);font-weight:600;color:var(--clr-text);">
            <i class="ph ph-scales" style="color:var(--clr-gold);"></i> Practice Area
          </label>
          <select name="service" style="padding:0.75rem 1rem;border:1.5px solid var(--clr-border);border-radius:var(--radius-md);font-family:inherit;font-size:var(--text-sm);color:var(--clr-text);background:var(--clr-bg);appearance:none;background-image:url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 256 256'%3E%3Cpath fill='%239ca3af' d='m213.66 101.66-80 80a8 8 0 0 1-11.32 0l-80-80A8 8 0 0 1 53.66 90.34L128 164.69l74.34-74.35a8 8 0 0 1 11.32 11.32Z'/%3E%3C/svg%3E\");background-repeat:no-repeat;background-position:right 1rem center;">
            <option value="">All Practice Areas</option>
            <?php foreach ($services as $s): ?>
            <option value="<?php echo htmlspecialchars($s['slug']); ?>"><?php echo htmlspecialchars($s['title']); ?></option>
            <?php endforeach; ?>
          </select>
        </div>

        <!-- City -->
        <div style="display:flex;flex-direction:column;gap:0.5rem;">
          <label style="font-size:var(--text-sm);font-weight:600;color:var(--clr-text);">
            <i class="ph ph-map-pin" style="color:var(--clr-gold);"></i> City
          </label>
          <select name="city" style="padding:0.75rem 1rem;border:1.5px solid var(--clr-border);border-radius:var(--radius-md);font-family:inherit;font-size:var(--text-sm);color:var(--clr-text);background:var(--clr-bg);appearance:none;background-image:url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 256 256'%3E%3Cpath fill='%239ca3af' d='m213.66 101.66-80 80a8 8 0 0 1-11.32 0l-80-80A8 8 0 0 1 53.66 90.34L128 164.69l74.34-74.35a8 8 0 0 1 11.32 11.32Z'/%3E%3C/svg%3E\");background-repeat:no-repeat;background-position:right 1rem center;">
            <option value="">All Cities</option>
            <?php foreach ($cities as $city): ?>
            <option value="<?php echo htmlspecialchars($city); ?>"><?php echo htmlspecialchars($city); ?></option>
            <?php endforeach; ?>
          </select>
        </div>

        <!-- Court Type -->
        <div style="display:flex;flex-direction:column;gap:0.5rem;">
          <label style="font-size:var(--text-sm);font-weight:600;color:var(--clr-text);">
            <i class="ph ph-bank" style="color:var(--clr-gold);"></i> Court Type
          </label>
          <select name="court" style="padding:0.75rem 1rem;border:1.5px solid var(--clr-border);border-radius:var(--radius-md);font-family:inherit;font-size:var(--text-sm);color:var(--clr-text);background:var(--clr-bg);appearance:none;background-image:url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 256 256'%3E%3Cpath fill='%239ca3af' d='m213.66 101.66-80 80a8 8 0 0 1-11.32 0l-80-80A8 8 0 0 1 53.66 90.34L128 164.69l74.34-74.35a8 8 0 0 1 11.32 11.32Z'/%3E%3C/svg%3E\");background-repeat:no-repeat;background-position:right 1rem center;">
            <option value="">All Courts</option>
            <?php foreach ($courts as $court): ?>
            <option value="<?php echo htmlspecialchars($court); ?>"><?php echo htmlspecialchars($court); ?></option>
            <?php endforeach; ?>
            <option value="District Courts">District & Sessions Courts</option>
            <option value="Family Courts">Family Courts</option>
            <option value="Consumer Courts">Consumer Courts</option>
          </select>
        </div>

        <!-- Language -->
        <div style="display:flex;flex-direction:column;gap:0.5rem;">
          <label style="font-size:var(--text-sm);font-weight:600;color:var(--clr-text);">
            <i class="ph ph-translate" style="color:var(--clr-gold);"></i> Language Preference
          </label>
          <select name="language" style="padding:0.75rem 1rem;border:1.5px solid var(--clr-border);border-radius:var(--radius-md);font-family:inherit;font-size:var(--text-sm);color:var(--clr-text);background:var(--clr-bg);appearance:none;background-image:url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 256 256'%3E%3Cpath fill='%239ca3af' d='m213.66 101.66-80 80a8 8 0 0 1-11.32 0l-80-80A8 8 0 0 1 53.66 90.34L128 164.69l74.34-74.35a8 8 0 0 1 11.32 11.32Z'/%3E%3C/svg%3E\");background-repeat:no-repeat;background-position:right 1rem center;">
            <option value="">Any Language</option>
            <option value="urdu">Urdu</option>
            <option value="english">English</option>
            <option value="punjabi">Punjabi</option>
            <option value="sindhi">Sindhi</option>
            <option value="pashto">Pashto</option>
            <option value="balochi">Balochi</option>
          </select>
        </div>

        <!-- Submit Button — spans full width -->
        <div style="grid-column:1/-1;display:flex;gap:1rem;flex-wrap:wrap;">
          <button type="submit" class="btn btn-primary btn-lg" style="flex:1;justify-content:center;min-width:180px;">
            <i class="ph ph-magnifying-glass"></i> Find My Lawyer
          </button>
          <a href="tel:<?php echo preg_replace('/\s+/', '', HELPLINE_NUMBER); ?>"
             class="btn btn-call btn-lg" style="flex:1;justify-content:center;min-width:180px;">
            <i class="ph ph-phone-call"></i> Call for Instant Match
          </a>
        </div>

      </form>
    </div>
    <p style="text-align:center;margin-top:1rem;font-size:var(--text-sm);color:var(--clr-text-muted);" class="reveal d-2">
      <i class="ph ph-shield-lock"></i> All consultations begin anonymously — you control when and if you reveal your identity.
    </p>
  </div>
</section>

<!-- ════════ HOW LAWYER MATCHING WORKS ════════ -->
<section class="section">
  <div class="container">
    <div class="section-header center reveal">
      <span class="section-label"><i class="ph ph-steps"></i> Our Process</span>
      <h2 class="heading-1">How Our Lawyer Matching Works</h2>
      <div class="divider-gold center"></div>
    </div>
    <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:1.25rem;" class="four-col-resp">
      <?php foreach ($process_steps as $i => $step): ?>
      <div class="step-card reveal delay-<?php echo $i+1; ?>">
        <span class="step-num"><?php echo $step['number']; ?></span>
        <div class="step-icon-wrap"><i class="ph <?php echo $step['icon']; ?>"></i></div>
        <h3 class="step-title"><?php echo htmlspecialchars($step['title']); ?></h3>
        <p class="step-desc"><?php echo htmlspecialchars($step['desc']); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ════════ BROWSE BY PRACTICE AREA ════════ -->
<section class="section bg-surface-2">
  <div class="container">
    <div class="section-header center reveal">
      <span class="section-label"><i class="ph ph-scales"></i> By Specialization</span>
      <h2 class="heading-1">Browse by Practice Area</h2>
      <div class="divider-gold center"></div>
      <p style="margin-top:1rem;">
        Click any practice area to learn more about our lawyers in that specialization.
      </p>
    </div>
    <div class="services-grid">
      <?php foreach ($services as $i => $s):
        $delay = ($i % 6) + 1;
      ?>
      <article class="service-card reveal delay-<?php echo $delay; ?>">
        <div class="service-icon"><i class="ph <?php echo htmlspecialchars($s['icon']); ?>"></i></div>
        <h3 class="service-title"><?php echo htmlspecialchars($s['title']); ?></h3>
        <p class="service-desc"><?php echo htmlspecialchars($s['short']); ?></p>
        <a href="service.php?slug=<?php echo urlencode($s['slug']); ?>" class="service-link">
          View Lawyers <i class="ph ph-arrow-right"></i>
        </a>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ════════ BROWSE BY CITY ════════ -->
<section class="section">
  <div class="container">
    <div class="section-header center reveal">
      <span class="section-label"><i class="ph ph-map-pin"></i> By City</span>
      <h2 class="heading-1">Browse by City</h2>
      <div class="divider-gold center"></div>
      <p style="margin-top:1rem;">Lawyers available in all major cities across Pakistan.</p>
    </div>

    <?php
    $city_links = [
      ['city'=>'Karachi',    'courts'=>'Sindh High Court, District Courts', 'icon'=>'ph-city',    'link'=>'advocate-lawyer-karachi.php'],
      ['city'=>'Lahore',     'courts'=>'Lahore High Court, District Courts', 'icon'=>'ph-city',   'link'=>'advocate-lawyer-lahore.php'],
      ['city'=>'Islamabad',  'courts'=>'Islamabad High Court, SC, District Courts', 'icon'=>'ph-city', 'link'=>'advocate-lawyer-islamabad.php'],
      ['city'=>'Rawalpindi', 'courts'=>'Islamabad HC (Rawalpindi), District Courts', 'icon'=>'ph-city','link'=>'advocate-lawyer-rawalpindi.php'],
      ['city'=>'Peshawar',   'courts'=>'Peshawar High Court, District Courts', 'icon'=>'ph-city', 'link'=>'advocate-lawyer-peshawar.php'],
      ['city'=>'Quetta',     'courts'=>'Balochistan High Court, District Courts', 'icon'=>'ph-city','link'=>'advocate-lawyer-quetta.php'],
      ['city'=>'Faisalabad', 'courts'=>'LHC Faisalabad Bench, District Courts', 'icon'=>'ph-city','link'=>'advocate-lawyer-faisalabad.php'],
      ['city'=>'Multan',     'courts'=>'LHC Multan Bench, District Courts',     'icon'=>'ph-city','link'=>'advocate-lawyer-multan.php'],
    ];
    ?>
    <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:1.25rem;" class="city-grid">
      <?php foreach ($city_links as $i => $c): ?>
      <a href="<?php echo $c['link']; ?>"
         class="reveal delay-<?php echo ($i % 4)+1; ?>"
         style="background:var(--clr-surface);border:1px solid var(--clr-border-light);border-radius:var(--radius-lg);padding:1.5rem;text-align:center;text-decoration:none;transition:all 0.25s ease;display:block;"
         onmouseover="this.style.borderColor='var(--clr-gold)';this.style.boxShadow='var(--shadow-gold)';this.style.transform='translateY(-2px)';"
         onmouseout="this.style.borderColor='var(--clr-border-light)';this.style.boxShadow='none';this.style.transform='translateY(0)';">
        <div style="width:52px;height:52px;background:var(--clr-primary-50);border-radius:var(--radius-lg);display:flex;align-items:center;justify-content:center;margin:0 auto 0.875rem;">
          <i class="ph <?php echo $c['icon']; ?>" style="font-size:1.375rem;color:var(--clr-primary);"></i>
        </div>
        <h4 style="font-size:var(--text-base);font-weight:700;color:var(--clr-text);margin-bottom:0.375rem;"><?php echo $c['city']; ?></h4>
        <p style="font-size:var(--text-xs);color:var(--clr-text-muted);line-height:1.4;margin:0;"><?php echo $c['courts']; ?></p>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ════════ BROWSE BY COURT ════════ -->
<section class="section bg-surface-2">
  <div class="container">
    <div class="section-header center reveal">
      <span class="section-label"><i class="ph ph-bank"></i> By Court</span>
      <h2 class="heading-1">Browse by Court Type</h2>
      <div class="divider-gold center"></div>
      <p style="margin-top:1rem;">Verified lawyers enrolled in every court and tribunal in Pakistan.</p>
    </div>

    <?php
    $court_links = [
      ['court'=>'Supreme Court of Pakistan',    'icon'=>'ph-scales',         'desc'=>'Final appellate court. SLPs, constitutional matters, civil & criminal appeals.', 'link'=>'supreme-court-lawyers.php'],
      ['court'=>'High Courts',                  'icon'=>'ph-bank',           'desc'=>'Five High Courts across Pakistan — Lahore, Sindh, Peshawar, Balochistan & Islamabad.', 'link'=>'high-court-lawyers.php'],
      ['court'=>'Family Courts',                'icon'=>'ph-users',          'desc'=>'Divorce, Khula, custody, maintenance, and guardianship matters.', 'link'=>'service.php?slug=family-lawyer'],
      ['court'=>'Labour Courts',                'icon'=>'ph-briefcase',      'desc'=>'Wrongful termination, wages disputes, EOBI, and employment matters.', 'link'=>'service.php?slug=labour-employment'],
      ['court'=>'Consumer Courts',              'icon'=>'ph-shopping-cart',  'desc'=>'Consumer protection complaints against products, services, and businesses.', 'link'=>'service.php?slug=consumer-protection'],
      ['court'=>'Federal Shariat Court',        'icon'=>'ph-moon-stars',     'desc'=>'Islamic law matters, FSC jurisdiction, and Shariat appellate matters.', 'link'=>'supreme-court-lawyers.php'],
      ['court'=>'ATIR (Tax Tribunal)',          'icon'=>'ph-receipt',        'desc'=>'Tax appeals, FBR disputes, income tax, sales tax, and customs matters.', 'link'=>'service.php?slug=tax-lawyer'],
      ['court'=>'IP Tribunal',                  'icon'=>'ph-lightbulb',      'desc'=>'Intellectual property disputes, trademark and patent infringement matters.', 'link'=>'service.php?slug=intellectual-property'],
    ];
    ?>
    <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:1.25rem;" class="city-grid">
      <?php foreach ($court_links as $i => $cl): ?>
      <a href="<?php echo $cl['link']; ?>"
         class="reveal delay-<?php echo ($i % 4)+1; ?>"
         style="background:var(--clr-surface);border:1px solid var(--clr-border-light);border-radius:var(--radius-lg);padding:1.5rem;text-decoration:none;transition:all 0.25s ease;display:flex;gap:0.875rem;align-items:flex-start;"
         onmouseover="this.style.borderColor='var(--clr-primary)';this.style.boxShadow='var(--shadow-navy)';"
         onmouseout="this.style.borderColor='var(--clr-border-light)';this.style.boxShadow='none';">
        <div style="width:44px;height:44px;flex-shrink:0;background:var(--clr-primary-50);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;">
          <i class="ph <?php echo $cl['icon']; ?>" style="font-size:1.125rem;color:var(--clr-primary);"></i>
        </div>
        <div>
          <h4 style="font-size:var(--text-sm);font-weight:700;color:var(--clr-text);margin-bottom:0.375rem;line-height:1.3;"><?php echo $cl['court']; ?></h4>
          <p style="font-size:var(--text-xs);color:var(--clr-text-muted);line-height:1.4;margin:0;"><?php echo $cl['desc']; ?></p>
        </div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ════════ STATISTICS ════════ -->
<div class="stats-bar">
  <div class="container">
    <div class="stats-grid">
      <?php
      $all_stats = [
        ['icon'=>'ph-users',            'num'=>'2,500+',  'label'=>'Verified Lawyers'],
        ['icon'=>'ph-scales',           'num'=>'18',       'label'=>'Practice Areas'],
        ['icon'=>'ph-map-pin',          'num'=>'15+',      'label'=>'Cities Covered'],
        ['icon'=>'ph-bank',             'num'=>'12+',      'label'=>'Courts & Tribunals'],
      ];
      foreach ($all_stats as $i => $s): ?>
      <div class="stat-item reveal delay-<?php echo $i+1; ?>">
        <div class="stat-icon-wrap"><i class="ph <?php echo $s['icon']; ?>"></i></div>
        <div class="stat-number"><?php echo $s['num']; ?></div>
        <div class="stat-label"><?php echo $s['label']; ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<!-- ════════ CTA ════════ -->
<section class="cta-section">
  <div class="container cta-inner">
    <span class="section-label" style="color:var(--clr-gold-light);border-color:rgba(201,168,76,0.3);background:rgba(201,168,76,0.12);">
      <i class="ph ph-phone-call"></i> Instant Matching
    </span>
    <h2 class="heading-1 reveal" style="color:var(--clr-text-inverse);margin-bottom:0.75rem;">
      Can't Find What You Need?
    </h2>
    <p class="reveal d-1" style="color:rgba(255,255,255,0.7);max-width:520px;margin:0 auto 1.75rem;line-height:var(--leading-relaxed);">
      Simply call our 24/7 helpline and describe your situation. Our legal executives will
      find the perfect lawyer match for you — anonymously, immediately.
    </p>
    <div class="cta-phone reveal d-2">
      <i class="ph ph-phone-call"></i>
      <a href="tel:<?php echo preg_replace('/\s+/', '', HELPLINE_NUMBER); ?>" style="color:inherit;text-decoration:none;">
        <?php echo HELPLINE_NUMBER; ?>
      </a>
    </div>
    <div class="cta-btns reveal d-3">
      <a href="tel:<?php echo preg_replace('/\s+/', '', HELPLINE_NUMBER); ?>" class="btn btn-gold btn-lg">
        <i class="ph ph-phone-call"></i> Call Our Helpline
      </a>
      <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>" target="_blank" rel="noopener" class="btn btn-outline-white btn-lg">
        <i class="ph ph-whatsapp-logo"></i> WhatsApp Us
      </a>
    </div>
  </div>
</section>

<style>
@media (max-width: 639px) {
  .filter-form { grid-template-columns: 1fr !important; }
  .four-col-resp { grid-template-columns: 1fr 1fr !important; }
  .city-grid { grid-template-columns: 1fr 1fr !important; }
}
@media (min-width: 640px) and (max-width: 1023px) {
  .four-col-resp { grid-template-columns: 1fr 1fr !important; }
  .city-grid { grid-template-columns: 1fr 1fr !important; }
}
</style>

<?php include 'includes/footer.php'; ?>
