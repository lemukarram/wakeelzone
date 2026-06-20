<?php
http_response_code(404);
require_once 'config.php';
require_once 'includes/data.php';
$pageTitle = '404 — Page Not Found';
$pageDesc  = 'The page you are looking for does not exist. Browse WakeelZone\'s legal services, FAQ, and guides to find what you need.';
include 'includes/head.php';
include 'includes/nav.php';
?>

<!-- ════════ 404 HERO ════════ -->
<div class="error-hero">
  <div style="position:absolute;inset:0;background-image:radial-gradient(circle,rgba(255,255,255,0.03) 1px,transparent 1px);background-size:24px 24px;"></div>
  <div class="container" style="position:relative;z-index:1;text-align:center;padding-block:5rem;">

    <!-- 404 Number -->
    <div class="error-number" aria-hidden="true">404</div>

    <!-- Icon -->
    <div style="margin:-1.5rem 0 1.5rem;">
      <i class="ph ph-question" style="font-size:3.5rem;color:var(--clr-gold);opacity:0.7;"></i>
    </div>

    <h1 style="font-size:clamp(1.5rem,3vw,2rem);font-weight:700;color:#fff;margin-bottom:0.875rem;">
      Page Not Found
    </h1>
    <p style="color:rgba(255,255,255,0.65);font-size:var(--text-sm);max-width:420px;margin:0 auto 2.5rem;line-height:var(--leading-relaxed);">
      The page you're looking for doesn't exist or has been moved. Don't worry — use the links below to find what you need.
    </p>

    <!-- Search Box (UI only) -->
    <form action="contact.php" method="get" class="error-search-form" role="search">
      <div class="error-search-wrap">
        <i class="ph ph-magnifying-glass" style="position:absolute;left:1.125rem;top:50%;transform:translateY(-50%);font-size:1.25rem;color:var(--clr-text-muted);pointer-events:none;"></i>
        <input
          type="text"
          name="q"
          placeholder="Search for a legal topic..."
          class="error-search-input"
          aria-label="Search WakeelZone"
        >
        <button type="submit" class="btn btn-gold" style="border-radius:0 var(--radius-lg) var(--radius-lg) 0;flex-shrink:0;padding-inline:1.5rem;">
          <i class="ph ph-magnifying-glass"></i>
          <span class="search-btn-text">Search</span>
        </button>
      </div>
    </form>

  </div>
</div>

<!-- ════════ HELPFUL LINKS CARDS ════════ -->
<section class="section">
  <div class="container">

    <div style="text-align:center;margin-bottom:2.5rem;" class="reveal">
      <span class="section-label"><i class="ph ph-compass"></i> Find Your Way</span>
      <h2 class="heading-2" style="margin-top:0.5rem;">Where Would You Like to Go?</h2>
      <div class="divider-gold center"></div>
    </div>

    <!-- Quick Access Cards -->
    <div class="error-cards-grid">
      <a href="index.php" class="error-card reveal d-1">
        <div class="error-card-icon" style="background:var(--clr-primary);">
          <i class="ph ph-house"></i>
        </div>
        <h3 class="error-card-title">Home</h3>
        <p class="error-card-desc">Return to the WakeelZone homepage and start fresh.</p>
        <span class="error-card-link">Go to Home <i class="ph ph-arrow-right"></i></span>
      </a>

      <a href="services.php" class="error-card reveal d-2">
        <div class="error-card-icon" style="background:var(--clr-gold);">
          <i class="ph ph-scales" style="color:var(--clr-primary-dark);"></i>
        </div>
        <h3 class="error-card-title">Legal Services</h3>
        <p class="error-card-desc">Browse our 18 practice areas and find the right legal expert.</p>
        <span class="error-card-link">View Services <i class="ph ph-arrow-right"></i></span>
      </a>

      <a href="contact.php" class="error-card reveal d-3">
        <div class="error-card-icon" style="background:var(--clr-primary-light);">
          <i class="ph ph-envelope"></i>
        </div>
        <h3 class="error-card-title">Contact Us</h3>
        <p class="error-card-desc">Reach our team directly — we reply within 2 hours.</p>
        <span class="error-card-link">Get in Touch <i class="ph ph-arrow-right"></i></span>
      </a>
    </div>

    <!-- Quick Links -->
    <div style="margin-top:3rem;text-align:center;" class="reveal">
      <p style="font-size:var(--text-xs);font-weight:700;text-transform:uppercase;letter-spacing:0.12em;color:var(--clr-text-muted);margin-bottom:1.25rem;">Quick Links</p>
      <div class="error-quick-links">
        <a href="about.php"               class="error-quick-link"><i class="ph ph-info"></i> About Us</a>
        <a href="how-we-work.php"         class="error-quick-link"><i class="ph ph-steps"></i> How We Work</a>
        <a href="blog.php"                class="error-quick-link"><i class="ph ph-book-open"></i> Legal Guide</a>
        <a href="faq.php"                 class="error-quick-link"><i class="ph ph-question"></i> FAQ</a>
        <a href="lawyer-registration.php" class="error-quick-link"><i class="ph ph-identification-badge"></i> Register as Lawyer</a>
        <a href="privacy-policy.php"      class="error-quick-link"><i class="ph ph-shield"></i> Privacy Policy</a>
        <a href="terms.php"               class="error-quick-link"><i class="ph ph-files"></i> Terms &amp; Conditions</a>
      </div>
    </div>

    <!-- Popular Services -->
    <div style="margin-top:3.5rem;" class="reveal">
      <h3 class="heading-3" style="text-align:center;margin-bottom:1.5rem;">Popular Legal Services</h3>
      <?php
      $popular = array_slice($services, 0, 8);
      ?>
      <div class="error-services-grid">
        <?php foreach ($popular as $s): ?>
        <a href="service.php?slug=<?php echo urlencode($s['slug']); ?>" class="error-service-pill">
          <i class="ph <?php echo htmlspecialchars($s['icon']); ?>"></i>
          <?php echo htmlspecialchars($s['title']); ?>
        </a>
        <?php endforeach; ?>
      </div>
    </div>

  </div>
</section>

<!-- ════════ HELPLINE CTA ════════ -->
<section class="section-sm bg-surface-2">
  <div class="container">
    <div style="max-width:680px;margin-inline:auto;text-align:center;" class="reveal">
      <div style="width:64px;height:64px;background:var(--clr-primary);border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 1.25rem;box-shadow:var(--shadow-navy);">
        <i class="ph ph-phone-call" style="font-size:1.75rem;color:var(--clr-gold);"></i>
      </div>
      <h2 class="heading-2" style="margin-bottom:0.75rem;">Still Need Help?</h2>
      <p style="font-size:var(--text-sm);color:var(--clr-text-3);line-height:var(--leading-relaxed);margin-bottom:2rem;">
        Our legal executives are available 24/7. Call our helpline now — no appointment needed, complete anonymity guaranteed.
      </p>
      <div style="display:flex;flex-wrap:wrap;gap:1rem;justify-content:center;">
        <a href="tel:<?php echo preg_replace('/\s+/', '', HELPLINE_NUMBER); ?>" class="btn btn-call btn-xl">
          <i class="ph ph-phone-call"></i> <?php echo HELPLINE_NUMBER; ?>
        </a>
        <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>" target="_blank" rel="noopener" class="wa-btn">
          <i class="ph ph-whatsapp-logo"></i> WhatsApp Us
        </a>
      </div>
    </div>
  </div>
</section>

<style>
/* ── Error Hero ──────────────────────────── */
.error-hero {
  background: linear-gradient(135deg, var(--clr-primary-dark), var(--clr-primary));
  position: relative;
  overflow: hidden;
}
.error-number {
  font-size: clamp(7rem, 18vw, 14rem);
  font-weight: 800;
  color: rgba(201, 168, 76, 0.15);
  line-height: 1;
  letter-spacing: -0.05em;
  margin-bottom: -2rem;
  user-select: none;
}

/* ── Error Search Form ───────────────────── */
.error-search-form { max-width: 520px; margin-inline: auto; }
.error-search-wrap {
  display: flex;
  align-items: stretch;
  position: relative;
  background: rgba(255,255,255,0.08);
  border: 1px solid rgba(255,255,255,0.15);
  border-radius: var(--radius-lg);
  overflow: hidden;
  backdrop-filter: blur(8px);
}
.error-search-input {
  flex: 1;
  background: transparent;
  border: none;
  padding: 0.875rem 1rem 0.875rem 3rem;
  font-family: var(--font);
  font-size: var(--text-sm);
  color: #fff;
  outline: none;
  min-width: 0;
}
.error-search-input::placeholder { color: rgba(255,255,255,0.45); }

/* ── Error Cards Grid ────────────────────── */
.error-cards-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 1.5rem;
  max-width: 860px;
  margin-inline: auto;
}
.error-card {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  background: var(--clr-surface);
  border: 1px solid var(--clr-border-light);
  border-radius: var(--radius-xl);
  padding: 2.25rem 1.75rem;
  text-decoration: none;
  transition: box-shadow var(--ease-base), transform var(--ease-base);
  box-shadow: var(--shadow-sm);
}
.error-card:hover { box-shadow: var(--shadow-lg); transform: translateY(-4px); }
.error-card-icon {
  width: 64px;
  height: 64px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.75rem;
  color: #fff;
  margin-bottom: 1.25rem;
  box-shadow: var(--shadow-md);
}
.error-card-title {
  font-size: var(--text-base);
  font-weight: 700;
  color: var(--clr-text);
  margin-bottom: 0.625rem;
}
.error-card-desc {
  font-size: var(--text-sm);
  color: var(--clr-text-3);
  line-height: var(--leading-relaxed);
  margin-bottom: 1.25rem;
  flex: 1;
}
.error-card-link {
  display: inline-flex;
  align-items: center;
  gap: 0.375rem;
  font-size: var(--text-xs);
  font-weight: 700;
  color: var(--clr-primary);
  text-transform: uppercase;
  letter-spacing: 0.08em;
}

/* ── Quick Links ─────────────────────────── */
.error-quick-links {
  display: flex;
  flex-wrap: wrap;
  gap: 0.625rem;
  justify-content: center;
}
.error-quick-link {
  display: inline-flex;
  align-items: center;
  gap: 0.375rem;
  padding: 0.5rem 1rem;
  background: var(--clr-surface);
  border: 1px solid var(--clr-border);
  border-radius: var(--radius-full);
  font-size: var(--text-xs);
  font-weight: 600;
  color: var(--clr-text-2);
  text-decoration: none;
  transition: all var(--ease-base);
}
.error-quick-link:hover {
  background: var(--clr-primary);
  border-color: var(--clr-primary);
  color: #fff;
  transform: translateY(-1px);
}
.error-quick-link i { font-size: 0.875rem; }

/* ── Services Grid ───────────────────────── */
.error-services-grid {
  display: flex;
  flex-wrap: wrap;
  gap: 0.75rem;
  justify-content: center;
}
.error-service-pill {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  padding: 0.625rem 1.125rem;
  background: var(--clr-surface);
  border: 1px solid var(--clr-border);
  border-radius: var(--radius-full);
  font-size: var(--text-sm);
  font-weight: 500;
  color: var(--clr-text-2);
  text-decoration: none;
  transition: all var(--ease-base);
}
.error-service-pill:hover {
  background: var(--clr-primary);
  border-color: var(--clr-primary);
  color: #fff;
  box-shadow: var(--shadow-navy);
  transform: translateY(-1px);
}
.error-service-pill i { color: var(--clr-gold); font-size: 1rem; transition: color var(--ease-fast); }
.error-service-pill:hover i { color: var(--clr-gold-light); }

/* ── Responsive ──────────────────────────── */
@media (max-width: 767px) {
  .error-cards-grid { grid-template-columns: 1fr; max-width: 380px; }
  .error-number { font-size: 8rem; }
  .search-btn-text { display: none; }
}
@media (min-width: 480px) and (max-width: 767px) {
  .error-cards-grid { grid-template-columns: 1fr 1fr; max-width: 100%; }
}
</style>

<?php include 'includes/footer.php'; ?>
