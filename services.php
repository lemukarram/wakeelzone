<?php
require_once 'config.php';
require_once 'includes/data.php';
$pageTitle = 'Legal Services';
$pageDesc  = 'Browse all 18 practice areas on WakeelZone. Find verified Pakistani lawyers for property, criminal, family, corporate, cyber crime, and more — anonymously.';
include 'includes/head.php';
include 'includes/nav.php';
?>

<!-- Page Header -->
<div class="page-header">
  <div class="container page-header-inner">
    <h1 class="page-header-title heading-1">Legal Services</h1>
    <p class="page-header-sub">18 practice areas. 2,500+ verified lawyers. Anonymous consultations — 24/7.</p>
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <span class="breadcrumb-item"><a href="index.php">Home</a></span>
      <span class="breadcrumb-sep"><i class="ph ph-caret-right"></i></span>
      <span class="breadcrumb-item">Legal Services</span>
    </nav>
  </div>
</div>

<!-- ════════ SERVICES GRID ════════ -->
<section class="section">
  <div class="container">
    <div class="section-header center reveal">
      <span class="section-label"><i class="ph ph-scales"></i> Practice Areas</span>
      <h2 class="heading-1">All Legal Services</h2>
      <div class="divider-gold center"></div>
      <p style="margin-top:1rem;">
        Click any practice area to learn more and connect with a verified specialist.
        All consultations begin anonymously.
      </p>
    </div>

    <div class="services-grid">
      <?php foreach ($services as $i => $s):
        $delay = ($i % 6) + 1;
      ?>
      <article class="service-card reveal delay-<?php echo $delay; ?>">
        <div class="service-icon" aria-hidden="true">
          <i class="ph <?php echo htmlspecialchars($s['icon']); ?>"></i>
        </div>
        <h3 class="service-title"><?php echo htmlspecialchars($s['title']); ?></h3>
        <p class="service-desc"><?php echo htmlspecialchars($s['short']); ?></p>
        <?php if (!empty($s['features'])): ?>
        <ul style="margin-bottom:1.25rem;padding:0;list-style:none;">
          <?php foreach (array_slice($s['features'], 0, 3) as $f): ?>
          <li style="display:flex;align-items:center;gap:0.5rem;font-size:var(--text-xs);color:var(--clr-text-muted);margin-bottom:0.25rem;">
            <i class="ph ph-check" style="color:var(--clr-gold);font-size:0.875rem;"></i>
            <?php echo htmlspecialchars($f); ?>
          </li>
          <?php endforeach; ?>
        </ul>
        <?php endif; ?>
        <a href="service.php?slug=<?php echo urlencode($s['slug']); ?>" class="service-link">
          Get Expert Help <i class="ph ph-arrow-right"></i>
        </a>
      </article>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<!-- ════════ COURTS COVERED ════════ -->
<section class="section-sm bg-surface-2">
  <div class="container">
    <div class="section-header center reveal">
      <span class="section-label"><i class="ph ph-bank"></i> Court Coverage</span>
      <h2 class="heading-2">Courts & Tribunals We Cover</h2>
    </div>
    <div style="display:flex;flex-wrap:wrap;justify-content:center;gap:0.75rem;" class="reveal d-1">
      <?php foreach ($courts as $court): ?>
      <span class="badge badge-navy" style="font-size:0.8125rem;padding:0.5rem 1.125rem;">
        <i class="ph ph-scales"></i> <?php echo htmlspecialchars($court); ?>
      </span>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ════════ CTA ════════ -->
<section class="cta-section">
  <div class="container cta-inner">
    <h2 class="heading-1 reveal" style="color:var(--clr-text-inverse);margin-bottom:0.75rem;">
      Not Sure Which Service You Need?
    </h2>
    <p class="reveal d-1" style="color:rgba(255,255,255,0.7);max-width:500px;margin:0 auto 2rem;line-height:var(--leading-relaxed);">
      Call our helpline and describe your situation. Our legal executives will match you
      with the right specialist — anonymously and instantly.
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

<?php include 'includes/footer.php'; ?>
