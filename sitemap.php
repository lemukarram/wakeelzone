<?php
require_once 'config.php';
require_once 'includes/data.php';
$pageTitle = 'Site Map';
$pageDesc  = 'Complete overview of all pages on WakeelZone — Pakistan\'s premier anonymous legal platform. Find lawyers, services, legal guides, and resources.';
include 'includes/head.php';
include 'includes/nav.php';

// Blog posts (same as blog.php)
$blog_posts = [
  ['title'=>'How to Register an FIR in Pakistan: A Step-by-Step Guide',        'slug'=>'how-to-register-fir-pakistan'],
  ['title'=>'Understanding Khula vs. Talaq: Key Differences for Pakistani Women','slug'=>'khula-vs-talaq-pakistan'],
  ['title'=>'Property Title Verification in Pakistan: What Buyers Must Check',  'slug'=>'property-title-verification-pakistan'],
  ['title'=>'Pakistan\'s PECA 2016: Your Complete Guide to Cyber Crime Laws',   'slug'=>'peca-2016-pakistan-cyber-crime-guide'],
  ['title'=>'How to Register a Company in Pakistan: SECP Registration Guide',   'slug'=>'secp-company-registration-pakistan'],
  ['title'=>'Overseas Pakistani Property Guide: Managing Land From Abroad',     'slug'=>'overseas-pakistani-property-guide'],
];
?>

<!-- Page Header -->
<div class="page-header">
  <div class="container page-header-inner">
    <h1 class="page-header-title heading-1">Site Map</h1>
    <p class="page-header-sub">Complete Overview of WakeelZone Pages</p>
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <span class="breadcrumb-item"><a href="index.php">Home</a></span>
      <span class="breadcrumb-sep"><i class="ph ph-caret-right"></i></span>
      <span class="breadcrumb-item">Sitemap</span>
    </nav>
  </div>
</div>

<!-- ════════ SITEMAP CONTENT ════════ -->
<section class="section">
  <div class="container">

    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:2rem;" class="sitemap-grid">

      <!-- ── MAIN PAGES ── -->
      <div class="reveal">
        <div style="display:flex;align-items:center;gap:0.625rem;margin-bottom:1.25rem;padding-bottom:0.75rem;border-bottom:2px solid var(--clr-gold);">
          <div style="width:36px;height:36px;background:var(--clr-primary);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
            <i class="ph ph-house" style="color:var(--clr-gold);font-size:1rem;"></i>
          </div>
          <h2 style="font-size:var(--text-base);font-weight:800;color:var(--clr-text);">Main Pages</h2>
        </div>
        <ul style="list-style:none;padding:0;margin:0;display:flex;flex-direction:column;gap:0.5rem;">
          <?php
          $main_pages = [
            ['href'=>'index.php',              'label'=>'Home',             'icon'=>'ph-house'],
            ['href'=>'about.php',              'label'=>'About Us',         'icon'=>'ph-info'],
            ['href'=>'services.php',           'label'=>'Legal Services',   'icon'=>'ph-scales'],
            ['href'=>'how-we-work.php',        'label'=>'How We Work',      'icon'=>'ph-steps'],
            ['href'=>'blog.php',               'label'=>'Legal Guide & Blog','icon'=>'ph-book-open'],
            ['href'=>'contact.php',            'label'=>'Contact Us',       'icon'=>'ph-envelope'],
            ['href'=>'all-lawyers.php',        'label'=>'Find a Lawyer',    'icon'=>'ph-magnifying-glass'],
            ['href'=>'lawyer-registration.php','label'=>'Register as Lawyer','icon'=>'ph-identification-badge'],
          ];
          foreach ($main_pages as $p): ?>
          <li>
            <a href="<?php echo $p['href']; ?>"
               style="display:flex;align-items:center;gap:0.5rem;font-size:var(--text-sm);color:var(--clr-text-3);text-decoration:none;padding:0.375rem 0;border-bottom:1px solid var(--clr-border-light);transition:color 0.2s;"
               onmouseover="this.style.color='var(--clr-primary)'"
               onmouseout="this.style.color='var(--clr-text-3)'">
              <i class="ph <?php echo $p['icon']; ?>" style="color:var(--clr-gold);font-size:0.875rem;flex-shrink:0;"></i>
              <?php echo $p['label']; ?>
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- ── HIGH COURT PAGES ── -->
      <div class="reveal d-1">
        <div style="display:flex;align-items:center;gap:0.625rem;margin-bottom:1.25rem;padding-bottom:0.75rem;border-bottom:2px solid var(--clr-gold);">
          <div style="width:36px;height:36px;background:var(--clr-primary);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
            <i class="ph ph-bank" style="color:var(--clr-gold);font-size:1rem;"></i>
          </div>
          <h2 style="font-size:var(--text-base);font-weight:800;color:var(--clr-text);">High Court Pages</h2>
        </div>
        <ul style="list-style:none;padding:0;margin:0;display:flex;flex-direction:column;gap:0.5rem;">
          <?php
          $hc_pages = [
            ['href'=>'high-court-lawyers.php',          'label'=>'High Court Lawyers (Overview)'],
            ['href'=>'high-court-lawyer-lahore.php',    'label'=>'Lahore High Court Lawyers'],
            ['href'=>'high-court-lawyer-sindh.php',     'label'=>'Sindh High Court Lawyers'],
            ['href'=>'high-court-lawyer-peshawar.php',  'label'=>'Peshawar High Court Lawyers'],
            ['href'=>'high-court-lawyer-balochistan.php','label'=>'Balochistan High Court Lawyers'],
            ['href'=>'high-court-lawyer-islamabad.php', 'label'=>'Islamabad High Court Lawyers'],
            ['href'=>'supreme-court-lawyers.php',       'label'=>'Supreme Court Lawyers'],
            ['href'=>'special-leave-petition.php',      'label'=>'Special Leave Petition (SLP)'],
          ];
          foreach ($hc_pages as $p): ?>
          <li>
            <a href="<?php echo $p['href']; ?>"
               style="display:flex;align-items:center;gap:0.5rem;font-size:var(--text-sm);color:var(--clr-text-3);text-decoration:none;padding:0.375rem 0;border-bottom:1px solid var(--clr-border-light);transition:color 0.2s;"
               onmouseover="this.style.color='var(--clr-primary)'"
               onmouseout="this.style.color='var(--clr-text-3)'">
              <i class="ph ph-bank" style="color:var(--clr-gold);font-size:0.875rem;flex-shrink:0;"></i>
              <?php echo $p['label']; ?>
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- ── SPECIALTY PAGES ── -->
      <div class="reveal d-2">
        <div style="display:flex;align-items:center;gap:0.625rem;margin-bottom:1.25rem;padding-bottom:0.75rem;border-bottom:2px solid var(--clr-gold);">
          <div style="width:36px;height:36px;background:var(--clr-primary);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
            <i class="ph ph-star" style="color:var(--clr-gold);font-size:1rem;"></i>
          </div>
          <h2 style="font-size:var(--text-base);font-weight:800;color:var(--clr-text);">Specialty Pages</h2>
        </div>
        <ul style="list-style:none;padding:0;margin:0;display:flex;flex-direction:column;gap:0.5rem;">
          <?php
          $specialty_pages = [
            ['href'=>'female-lawyers.php',          'label'=>'Female Lawyers in Pakistan',  'icon'=>'ph-users'],
            ['href'=>'child-protection-lawyer.php', 'label'=>'Child Protection Lawyer',     'icon'=>'ph-baby'],
            ['href'=>'all-lawyers.php',             'label'=>'Find a Lawyer (All)',         'icon'=>'ph-magnifying-glass'],
            ['href'=>'service.php?slug=overseas-pakistani','label'=>'Overseas Pakistani Lawyer','icon'=>'ph-globe'],
            ['href'=>'service.php?slug=cyber-crime-lawyer','label'=>'Cyber Crime Lawyer',        'icon'=>'ph-shield-warning'],
            ['href'=>'service.php?slug=startup-lawyer',    'label'=>'Startup Lawyer',            'icon'=>'ph-rocket'],
          ];
          foreach ($specialty_pages as $p): ?>
          <li>
            <a href="<?php echo $p['href']; ?>"
               style="display:flex;align-items:center;gap:0.5rem;font-size:var(--text-sm);color:var(--clr-text-3);text-decoration:none;padding:0.375rem 0;border-bottom:1px solid var(--clr-border-light);transition:color 0.2s;"
               onmouseover="this.style.color='var(--clr-primary)'"
               onmouseout="this.style.color='var(--clr-text-3)'">
              <i class="ph <?php echo $p['icon']; ?>" style="color:var(--clr-gold);font-size:0.875rem;flex-shrink:0;"></i>
              <?php echo $p['label']; ?>
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>

    </div>

    <!-- ── LEGAL SERVICES — FULL 18 ── -->
    <div style="margin-top:3rem;" class="reveal">
      <div style="display:flex;align-items:center;gap:0.625rem;margin-bottom:1.5rem;padding-bottom:0.875rem;border-bottom:2px solid var(--clr-gold);">
        <div style="width:40px;height:40px;background:var(--clr-primary);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
          <i class="ph ph-scales" style="color:var(--clr-gold);font-size:1.125rem;"></i>
        </div>
        <h2 style="font-size:1.125rem;font-weight:800;color:var(--clr-text);">
          Legal Services — All 18 Practice Areas
        </h2>
      </div>
      <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:0.5rem;" class="services-sitemap-grid">
        <?php foreach ($services as $s): ?>
        <a href="service.php?slug=<?php echo urlencode($s['slug']); ?>"
           style="display:flex;align-items:center;gap:0.625rem;font-size:var(--text-sm);color:var(--clr-text-3);text-decoration:none;padding:0.625rem 0.75rem;border-radius:var(--radius-md);border:1px solid var(--clr-border-light);transition:all 0.2s;background:var(--clr-surface);"
           onmouseover="this.style.borderColor='var(--clr-primary)';this.style.color='var(--clr-primary)';this.style.background='var(--clr-primary-50)';"
           onmouseout="this.style.borderColor='var(--clr-border-light)';this.style.color='var(--clr-text-3)';this.style.background='var(--clr-surface)';">
          <i class="ph <?php echo htmlspecialchars($s['icon']); ?>" style="color:var(--clr-gold);font-size:1rem;flex-shrink:0;"></i>
          <?php echo htmlspecialchars($s['title']); ?>
        </a>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- ── CITY PAGES ── -->
    <div style="margin-top:3rem;" class="reveal d-1">
      <div style="display:flex;align-items:center;gap:0.625rem;margin-bottom:1.5rem;padding-bottom:0.875rem;border-bottom:2px solid var(--clr-gold);">
        <div style="width:40px;height:40px;background:var(--clr-primary);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
          <i class="ph ph-map-pin" style="color:var(--clr-gold);font-size:1.125rem;"></i>
        </div>
        <h2 style="font-size:1.125rem;font-weight:800;color:var(--clr-text);">City Pages</h2>
      </div>
      <?php
      $city_pages = [
        ['city'=>'Karachi',    'slug'=>'karachi'],
        ['city'=>'Lahore',     'slug'=>'lahore'],
        ['city'=>'Islamabad',  'slug'=>'islamabad'],
        ['city'=>'Rawalpindi', 'slug'=>'rawalpindi'],
        ['city'=>'Peshawar',   'slug'=>'peshawar'],
        ['city'=>'Quetta',     'slug'=>'quetta'],
        ['city'=>'Faisalabad', 'slug'=>'faisalabad'],
        ['city'=>'Multan',     'slug'=>'multan'],
      ];
      ?>
      <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:0.5rem;" class="city-sitemap-grid">
        <?php foreach ($city_pages as $cp): ?>
        <a href="advocate-lawyer-<?php echo $cp['slug']; ?>.php"
           style="display:flex;align-items:center;gap:0.625rem;font-size:var(--text-sm);color:var(--clr-text-3);text-decoration:none;padding:0.625rem 0.875rem;border-radius:var(--radius-md);border:1px solid var(--clr-border-light);transition:all 0.2s;background:var(--clr-surface);"
           onmouseover="this.style.borderColor='var(--clr-primary)';this.style.color='var(--clr-primary)';this.style.background='var(--clr-primary-50)';"
           onmouseout="this.style.borderColor='var(--clr-border-light)';this.style.color='var(--clr-text-3)';this.style.background='var(--clr-surface)';">
          <i class="ph ph-map-pin" style="color:var(--clr-gold);font-size:0.875rem;flex-shrink:0;"></i>
          Lawyers in <?php echo $cp['city']; ?>
        </a>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- ── LEGAL RESOURCES (BLOG) ── -->
    <div style="margin-top:3rem;" class="reveal d-2">
      <div style="display:flex;align-items:center;gap:0.625rem;margin-bottom:1.5rem;padding-bottom:0.875rem;border-bottom:2px solid var(--clr-gold);">
        <div style="width:40px;height:40px;background:var(--clr-primary);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
          <i class="ph ph-book-open" style="color:var(--clr-gold);font-size:1.125rem;"></i>
        </div>
        <h2 style="font-size:1.125rem;font-weight:800;color:var(--clr-text);">Legal Resources &amp; Blog</h2>
      </div>
      <div style="display:grid;grid-template-columns:repeat(2,1fr);gap:0.5rem;" class="blog-sitemap-grid">
        <?php foreach ($blog_posts as $post): ?>
        <a href="blog-post.php?slug=<?php echo urlencode($post['slug']); ?>"
           style="display:flex;align-items:center;gap:0.625rem;font-size:var(--text-sm);color:var(--clr-text-3);text-decoration:none;padding:0.75rem;border-radius:var(--radius-md);border:1px solid var(--clr-border-light);transition:all 0.2s;background:var(--clr-surface);line-height:1.4;"
           onmouseover="this.style.borderColor='var(--clr-primary)';this.style.color='var(--clr-primary)';this.style.background='var(--clr-primary-50)';"
           onmouseout="this.style.borderColor='var(--clr-border-light)';this.style.color='var(--clr-text-3)';this.style.background='var(--clr-surface)';">
          <i class="ph ph-article" style="color:var(--clr-gold);font-size:1rem;flex-shrink:0;"></i>
          <?php echo htmlspecialchars($post['title']); ?>
        </a>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- ── BOTTOM GRID: FOR LAWYERS + LEGAL PAGES ── -->
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:2rem;margin-top:3rem;" class="bottom-sitemap-grid reveal">

      <!-- For Lawyers -->
      <div>
        <div style="display:flex;align-items:center;gap:0.625rem;margin-bottom:1.25rem;padding-bottom:0.75rem;border-bottom:2px solid var(--clr-gold);">
          <div style="width:36px;height:36px;background:var(--clr-primary);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
            <i class="ph ph-identification-badge" style="color:var(--clr-gold);font-size:1rem;"></i>
          </div>
          <h2 style="font-size:var(--text-base);font-weight:800;color:var(--clr-text);">For Lawyers</h2>
        </div>
        <ul style="list-style:none;padding:0;margin:0;display:flex;flex-direction:column;gap:0.5rem;">
          <?php
          $lawyer_pages = [
            ['href'=>'lawyer-registration.php','label'=>'Register as a Lawyer',      'icon'=>'ph-identification-badge'],
            ['href'=>'how-we-work.php',        'label'=>'How WakeelZone Works',      'icon'=>'ph-steps'],
            ['href'=>'terms.php',              'label'=>'Lawyer Terms & Conditions', 'icon'=>'ph-file-text'],
            ['href'=>'contact.php',            'label'=>'Contact — Lawyer Enquiries','icon'=>'ph-envelope'],
          ];
          foreach ($lawyer_pages as $p): ?>
          <li>
            <a href="<?php echo $p['href']; ?>"
               style="display:flex;align-items:center;gap:0.5rem;font-size:var(--text-sm);color:var(--clr-text-3);text-decoration:none;padding:0.375rem 0;border-bottom:1px solid var(--clr-border-light);transition:color 0.2s;"
               onmouseover="this.style.color='var(--clr-primary)'"
               onmouseout="this.style.color='var(--clr-text-3)'">
              <i class="ph <?php echo $p['icon']; ?>" style="color:var(--clr-gold);font-size:0.875rem;flex-shrink:0;"></i>
              <?php echo $p['label']; ?>
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- Legal & Policy -->
      <div>
        <div style="display:flex;align-items:center;gap:0.625rem;margin-bottom:1.25rem;padding-bottom:0.75rem;border-bottom:2px solid var(--clr-gold);">
          <div style="width:36px;height:36px;background:var(--clr-primary);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
            <i class="ph ph-file-text" style="color:var(--clr-gold);font-size:1rem;"></i>
          </div>
          <h2 style="font-size:var(--text-base);font-weight:800;color:var(--clr-text);">Legal &amp; Policy</h2>
        </div>
        <ul style="list-style:none;padding:0;margin:0;display:flex;flex-direction:column;gap:0.5rem;">
          <?php
          $legal_pages = [
            ['href'=>'privacy-policy.php','label'=>'Privacy Policy',      'icon'=>'ph-shield-lock'],
            ['href'=>'terms.php',         'label'=>'Terms & Conditions',   'icon'=>'ph-file-text'],
            ['href'=>'contact.php',       'label'=>'Contact Us',           'icon'=>'ph-envelope'],
            ['href'=>'sitemap.php',       'label'=>'HTML Sitemap',         'icon'=>'ph-tree-structure'],
          ];
          foreach ($legal_pages as $p): ?>
          <li>
            <a href="<?php echo $p['href']; ?>"
               style="display:flex;align-items:center;gap:0.5rem;font-size:var(--text-sm);color:var(--clr-text-3);text-decoration:none;padding:0.375rem 0;border-bottom:1px solid var(--clr-border-light);transition:color 0.2s;"
               onmouseover="this.style.color='var(--clr-primary)'"
               onmouseout="this.style.color='var(--clr-text-3)'">
              <i class="ph <?php echo $p['icon']; ?>" style="color:var(--clr-gold);font-size:0.875rem;flex-shrink:0;"></i>
              <?php echo $p['label']; ?>
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>

    </div>

  </div>
</section>

<!-- ════════ QUICK STATS ════════ -->
<div class="stats-bar">
  <div class="container">
    <div class="stats-grid">
      <?php
      $sm_stats = [
        ['icon'=>'ph-files',    'num'=>'40+',  'label'=>'Total Pages'],
        ['icon'=>'ph-scales',   'num'=>'18',   'label'=>'Practice Areas'],
        ['icon'=>'ph-map-pin',  'num'=>'8',    'label'=>'City Pages'],
        ['icon'=>'ph-book-open','num'=>'6',    'label'=>'Legal Guides'],
      ];
      foreach ($sm_stats as $i => $s): ?>
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
    <h2 class="heading-1 reveal" style="color:var(--clr-text-inverse);margin-bottom:0.75rem;">
      Still Can't Find What You Need?
    </h2>
    <p class="reveal d-1" style="color:rgba(255,255,255,0.7);max-width:500px;margin:0 auto 2rem;line-height:var(--leading-relaxed);">
      Call our 24/7 helpline and our legal executives will guide you to the right service,
      lawyer, or resource — anonymously and instantly.
    </p>
    <div class="cta-btns reveal d-2">
      <a href="tel:<?php echo preg_replace('/\s+/', '', HELPLINE_NUMBER); ?>" class="btn btn-gold btn-lg">
        <i class="ph ph-phone-call"></i> <?php echo HELPLINE_NUMBER; ?>
      </a>
      <a href="contact.php" class="btn btn-outline-white btn-lg">
        <i class="ph ph-envelope"></i> Send a Message
      </a>
    </div>
  </div>
</section>

<style>
@media (max-width: 767px) {
  .sitemap-grid { grid-template-columns: 1fr !important; }
  .services-sitemap-grid { grid-template-columns: 1fr 1fr !important; }
  .city-sitemap-grid { grid-template-columns: 1fr 1fr !important; }
  .blog-sitemap-grid { grid-template-columns: 1fr !important; }
  .bottom-sitemap-grid { grid-template-columns: 1fr !important; }
}
@media (min-width: 768px) and (max-width: 1023px) {
  .sitemap-grid { grid-template-columns: 1fr 1fr !important; }
  .services-sitemap-grid { grid-template-columns: 1fr 1fr !important; }
  .city-sitemap-grid { grid-template-columns: 1fr 1fr !important; }
}
</style>

<?php include 'includes/footer.php'; ?>
