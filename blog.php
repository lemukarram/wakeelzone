<?php
require_once 'config.php';
require_once 'includes/data.php';
$pageTitle = 'Legal Guide & Blog';
$pageDesc  = 'Free legal guides, articles, and resources on Pakistani law. WakeelZone\'s legal blog covers property law, family law, criminal law, and more.';
include 'includes/head.php';
include 'includes/nav.php';

// Static blog posts (no DB required)
$posts = [
  [
    'title'   => 'How to Register an FIR in Pakistan: A Step-by-Step Guide',
    'slug'    => 'how-to-register-fir-pakistan',
    'cat'     => 'Criminal Law',
    'icon'    => 'ph-scales',
    'date'    => 'June 10, 2026',
    'read'    => '5 min read',
    'excerpt' => 'Filing an FIR (First Information Report) is the first step in any criminal matter. Learn your rights, the correct procedure, and what to do if the police refuse to register your complaint.',
  ],
  [
    'title'   => 'Understanding Khula vs. Talaq: Key Differences for Pakistani Women',
    'slug'    => 'khula-vs-talaq-pakistan',
    'cat'     => 'Family Law',
    'icon'    => 'ph-users',
    'date'    => 'June 5, 2026',
    'read'    => '7 min read',
    'excerpt' => 'Khula and Talaq are both forms of divorce in Pakistan but work very differently. This guide explains the legal procedure, timeline, Mehr implications, and court process for each.',
  ],
  [
    'title'   => 'Property Title Verification in Pakistan: What Buyers Must Check',
    'slug'    => 'property-title-verification-pakistan',
    'cat'     => 'Property Law',
    'icon'    => 'ph-house',
    'date'    => 'May 28, 2026',
    'read'    => '6 min read',
    'excerpt' => 'Buying property in Pakistan without proper due diligence can be catastrophic. Learn the 10 essential checks every buyer should perform before transferring ownership.',
  ],
  [
    'title'   => 'Pakistan\'s PECA 2016: Your Complete Guide to Cyber Crime Laws',
    'slug'    => 'peca-2016-pakistan-cyber-crime-guide',
    'cat'     => 'Cyber Crime',
    'icon'    => 'ph-shield-warning',
    'date'    => 'May 20, 2026',
    'read'    => '8 min read',
    'excerpt' => 'The Prevention of Electronic Crimes Act 2016 (PECA) governs cyber crime in Pakistan. This guide explains what constitutes an offence, reporting to FIA, and your rights as a victim.',
  ],
  [
    'title'   => 'How to Register a Company in Pakistan: SECP Registration Guide',
    'slug'    => 'secp-company-registration-pakistan',
    'cat'     => 'Corporate Law',
    'icon'    => 'ph-buildings',
    'date'    => 'May 15, 2026',
    'read'    => '9 min read',
    'excerpt' => 'Starting a business in Pakistan? This comprehensive guide covers Private Limited Company, SMC, and LLP registrations with SECP — including costs, timelines, and required documents.',
  ],
  [
    'title'   => 'Overseas Pakistani Property Guide: Managing Land From Abroad',
    'slug'    => 'overseas-pakistani-property-guide',
    'cat'     => 'Overseas Pakistani',
    'icon'    => 'ph-globe',
    'date'    => 'May 8, 2026',
    'read'    => '10 min read',
    'excerpt' => 'Millions of overseas Pakistanis face property fraud and disputes back home. This guide explains Power of Attorney, NADRA documents, legal representation, and how to protect your assets from abroad.',
  ],
];
?>

<!-- Page Header -->
<div class="page-header">
  <div class="container page-header-inner">
    <h1 class="page-header-title heading-1">Legal Guide & Blog</h1>
    <p class="page-header-sub">Free legal resources, guides, and articles written by Pakistan's top advocates.</p>
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <span class="breadcrumb-item"><a href="index.php">Home</a></span>
      <span class="breadcrumb-sep"><i class="ph ph-caret-right"></i></span>
      <span class="breadcrumb-item">Legal Guide</span>
    </nav>
  </div>
</div>

<!-- ════════ POSTS GRID ════════ -->
<section class="section">
  <div class="container">
    <div class="section-header center reveal">
      <span class="section-label"><i class="ph ph-book-open"></i> Legal Resources</span>
      <h2 class="heading-1">Free Legal Guides</h2>
      <div class="divider-gold center"></div>
      <p style="margin-top:1rem;">
        Understand your legal rights in Pakistan with our expert-written guides.
        For personalized advice, consult a verified lawyer through WakeelZone.
      </p>
    </div>

    <div class="blog-grid">
      <?php foreach ($posts as $i => $post): ?>
      <article class="blog-card reveal delay-<?php echo ($i % 3) + 1; ?>">
        <!-- Image placeholder with icon -->
        <div class="blog-img-wrap">
          <div style="width:100%;height:100%;background:linear-gradient(135deg,var(--clr-primary),var(--clr-primary-light));display:flex;align-items:center;justify-content:center;">
            <i class="ph <?php echo $post['icon']; ?>" style="font-size:4rem;color:rgba(201,168,76,0.5);"></i>
          </div>
        </div>
        <div class="blog-body">
          <div class="blog-cat">
            <i class="ph ph-tag" style="font-size:0.75rem;"></i> <?php echo htmlspecialchars($post['cat']); ?>
          </div>
          <h2 class="blog-title">
            <a href="blog-post.php?slug=<?php echo urlencode($post['slug']); ?>" style="color:inherit;">
              <?php echo htmlspecialchars($post['title']); ?>
            </a>
          </h2>
          <p class="blog-excerpt"><?php echo htmlspecialchars($post['excerpt']); ?></p>
          <div class="blog-meta">
            <span><i class="ph ph-calendar-blank"></i> <?php echo $post['date']; ?></span>
            <span><i class="ph ph-clock"></i> <?php echo $post['read']; ?></span>
          </div>
        </div>
      </article>
      <?php endforeach; ?>
    </div>

    <div style="text-align:center;margin-top:2.5rem;" class="reveal">
      <p style="font-size:var(--text-sm);color:var(--clr-text-muted);margin-bottom:1rem;">
        More articles coming soon. Subscribe to our legal newsletter for updates.
      </p>
      <a href="contact.php" class="btn btn-outline">
        <i class="ph ph-envelope"></i> Subscribe to Legal Newsletter
      </a>
    </div>
  </div>
</section>

<!-- ════════ CTA ════════ -->
<section class="section-sm bg-surface-2">
  <div class="container">
    <div style="display:grid;grid-template-columns:1fr auto;gap:2rem;align-items:center;max-width:800px;margin-inline:auto;" class="cta-inline reveal">
      <div>
        <h3 class="heading-3" style="margin-bottom:0.5rem;">Need Personalized Legal Advice?</h3>
        <p style="font-size:var(--text-sm);color:var(--clr-text-3);">These guides are general information only. For advice specific to your situation, speak to a verified lawyer — anonymously.</p>
      </div>
      <div style="display:flex;flex-direction:column;gap:0.625rem;flex-shrink:0;">
        <a href="tel:<?php echo preg_replace('/\s+/', '', HELPLINE_NUMBER); ?>" class="btn btn-call">
          <i class="ph ph-phone-call"></i> Call Now
        </a>
      </div>
    </div>
  </div>
</section>

<style>
@media (max-width: 639px) {
  .cta-inline { grid-template-columns: 1fr !important; }
}
</style>

<?php include 'includes/footer.php'; ?>
