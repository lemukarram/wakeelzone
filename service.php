<?php
require_once 'config.php';
require_once 'includes/data.php';

$slug = isset($_GET['slug']) ? trim(htmlspecialchars($_GET['slug'])) : '';

// Find service by slug
$service = null;
foreach ($services as $s) {
    if ($s['slug'] === $slug) { $service = $s; break; }
}

if (!$service) {
    header('Location: services.php');
    exit;
}

// Other services for sidebar
$other_services = array_filter($services, fn($s) => $s['slug'] !== $slug);

$pageTitle = $service['title'];
$pageDesc  = $service['short'];
include 'includes/head.php';
include 'includes/nav.php';
?>

<!-- Page Header -->
<div class="page-header">
  <div class="container page-header-inner">
    <div style="display:inline-flex;align-items:center;justify-content:center;width:64px;height:64px;background:rgba(201,168,76,0.15);border-radius:var(--radius-lg);margin-bottom:1rem;">
      <i class="ph <?php echo htmlspecialchars($service['icon']); ?>" style="font-size:2rem;color:var(--clr-gold);"></i>
    </div>
    <h1 class="page-header-title heading-1"><?php echo htmlspecialchars($service['title']); ?></h1>
    <p class="page-header-sub"><?php echo htmlspecialchars($service['short']); ?></p>
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <span class="breadcrumb-item"><a href="index.php">Home</a></span>
      <span class="breadcrumb-sep"><i class="ph ph-caret-right"></i></span>
      <span class="breadcrumb-item"><a href="services.php">Legal Services</a></span>
      <span class="breadcrumb-sep"><i class="ph ph-caret-right"></i></span>
      <span class="breadcrumb-item"><?php echo htmlspecialchars($service['title']); ?></span>
    </nav>
  </div>
</div>

<!-- ════════ MAIN CONTENT ════════ -->
<section class="section">
  <div class="container">
    <div style="display:grid;grid-template-columns:1fr 340px;gap:3rem;align-items:start;">

      <!-- Main Content -->
      <div class="reveal-left">

        <!-- Overview -->
        <h2 class="heading-2" style="margin-bottom:1.25rem;">
          Overview of <?php echo htmlspecialchars($service['title']); ?>
        </h2>

        <div style="font-size:var(--text-sm);color:var(--clr-text-3);line-height:var(--leading-relaxed);margin-bottom:2rem;">
          <?php
          $paragraphs = explode("\n\n", trim($service['content']));
          foreach ($paragraphs as $p):
            $p = trim($p);
            if (!$p) continue;
            // Number list items
            if (preg_match('/^\d+\./', $p)) {
              $lines = explode("\n", $p);
              echo '<ol style="padding-left:1.25rem;margin-bottom:1rem;">';
              foreach ($lines as $line) {
                $line = preg_replace('/^\d+\.\s*/', '', $line);
                [$bold, $rest] = array_pad(explode(':', $line, 2), 2, '');
                echo '<li style="margin-bottom:0.625rem;"><strong>' . htmlspecialchars(trim($bold)) . '</strong>: ' . htmlspecialchars(trim($rest)) . '</li>';
              }
              echo '</ol>';
            } else {
              echo '<p style="margin-bottom:1rem;">' . htmlspecialchars($p) . '</p>';
            }
          endforeach;
          ?>
        </div>

        <!-- Features -->
        <?php if (!empty($service['features'])): ?>
        <div style="background:var(--clr-surface-2);border-radius:var(--radius-lg);padding:2rem;margin-bottom:2rem;">
          <h3 class="heading-3" style="margin-bottom:1.25rem;">
            <i class="ph ph-check-circle" style="color:var(--clr-gold);margin-right:0.5rem;"></i>
            How We Can Help You
          </h3>
          <div style="display:grid;grid-template-columns:1fr 1fr;gap:0.625rem;">
            <?php foreach ($service['features'] as $f): ?>
            <div class="check-list-item">
              <i class="ph ph-check-circle"></i>
              <span><?php echo htmlspecialchars($f); ?></span>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
        <?php endif; ?>

        <!-- Confidentiality Note -->
        <div class="highlight-box reveal">
          <div style="display:flex;gap:0.875rem;align-items:flex-start;">
            <i class="ph ph-shield-lock" style="font-size:1.5rem;color:var(--clr-primary);flex-shrink:0;margin-top:2px;"></i>
            <div>
              <h4 style="font-size:var(--text-sm);font-weight:700;color:var(--clr-text);margin-bottom:0.375rem;">
                Confidentiality Guarantee
              </h4>
              <p style="font-size:var(--text-sm);color:var(--clr-text-3);line-height:var(--leading-relaxed);margin:0;">
                Your interaction with our <?php echo htmlspecialchars($service['title']); ?> experts remains
                100% anonymous until you choose to reveal your identity for formal court representation.
                Your information is never shared with third parties.
              </p>
            </div>
          </div>
        </div>

        <!-- Process Mini -->
        <div style="margin-top:2rem;">
          <h3 class="heading-3" style="margin-bottom:1.25rem;">Quick Start Process</h3>
          <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:0.875rem;text-align:center;">
            <?php foreach ($process_steps as $step): ?>
            <div style="background:var(--clr-surface);border:1px solid var(--clr-border-light);border-radius:var(--radius-md);padding:1.125rem 0.75rem;">
              <div style="width:40px;height:40px;background:var(--clr-primary);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin:0 auto 0.75rem;">
                <i class="ph <?php echo htmlspecialchars($step['icon']); ?>" style="color:var(--clr-gold);font-size:1.125rem;"></i>
              </div>
              <div style="font-size:var(--text-xs);font-weight:700;color:var(--clr-text);line-height:1.3;"><?php echo htmlspecialchars($step['title']); ?></div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>

      </div>

      <!-- Sidebar -->
      <div class="sidebar-sticky reveal-right">

        <!-- CTA Card -->
        <div class="sidebar-cta" style="margin-bottom:1.25rem;">
          <i class="ph ph-phone-call" style="font-size:2rem;color:var(--clr-gold);margin-bottom:0.75rem;display:block;"></i>
          <h3 style="font-size:var(--text-base);font-weight:700;margin-bottom:0.5rem;">
            Ready to Consult?
          </h3>
          <p style="font-size:var(--text-xs);color:rgba(255,255,255,0.65);line-height:var(--leading-relaxed);margin-bottom:1.125rem;">
            Connect with a <?php echo htmlspecialchars($service['title']); ?> expert immediately.
          </p>
          <p class="sidebar-phone"><?php echo HELPLINE_NUMBER; ?></p>
          <a href="tel:<?php echo preg_replace('/\s+/', '', HELPLINE_NUMBER); ?>"
             class="btn btn-call" style="width:100%;justify-content:center;margin-bottom:0.625rem;">
            <i class="ph ph-phone-call"></i> Call Now
          </a>
          <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>" target="_blank" rel="noopener"
             class="wa-btn" style="width:100%;justify-content:center;">
            <i class="ph ph-whatsapp-logo"></i> WhatsApp Us
          </a>
        </div>

        <!-- Other Services -->
        <div class="sidebar-links">
          <h4 class="sidebar-heading">Other Practice Areas</h4>
          <?php foreach ($other_services as $os): ?>
          <a href="service.php?slug=<?php echo urlencode($os['slug']); ?>" class="sidebar-link">
            <span style="display:flex;align-items:center;gap:0.5rem;">
              <i class="ph <?php echo htmlspecialchars($os['icon']); ?>" style="color:var(--clr-gold);font-size:0.875rem;"></i>
              <?php echo htmlspecialchars($os['title']); ?>
            </span>
            <i class="ph ph-caret-right"></i>
          </a>
          <?php endforeach; ?>
        </div>

      </div>

    </div><!-- /grid -->
  </div>
</section>

<style>
@media (max-width: 1023px) {
  .service-detail-grid { grid-template-columns: 1fr !important; }
  .sidebar-sticky { position: static !important; }
}
</style>

<?php include 'includes/footer.php'; ?>
