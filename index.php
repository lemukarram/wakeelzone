<?php
require_once 'config.php';
require_once 'includes/data.php';

$pageTitle = "Pakistan's Premier Anonymous Legal Platform";
$pageDesc  = "Talk to verified lawyers 24/7 without revealing your identity. WakeelZone connects you with Pakistan's top lawyers across all practice areas, anonymously.";
include 'includes/head.php';
include 'includes/nav.php';
?>

<!-- ════════════════════════════════════════════════
     HERO
════════════════════════════════════════════════ -->
<section class="hero" aria-label="Hero">
  <div class="container hero-inner">
    <div class="hero-grid">

      <!-- Left: Text -->
      <div>
        <div class="hero-badge reveal">
          <i class="ph ph-seal-check"></i>
          Pakistan's #1 Anonymous Legal Platform
        </div>

        <h1 class="heading-hero hero-title reveal d-1">
          Your Legal Rights.<br>
          Protected with<br>
          <span class="highlight">Complete Privacy.</span>
        </h1>

        <p class="hero-subtitle reveal d-2">
          Talk to verified lawyers anonymously — without revealing your name
          or phone number. Get expert legal guidance 24/7, anywhere in Pakistan.
        </p>

        <div class="hero-ctas reveal d-3">
          <a href="tel:<?php echo preg_replace('/\s+/', '', HELPLINE_NUMBER); ?>"
             class="btn btn-call btn-lg">
            <i class="ph ph-phone-call"></i>
            Call Now — Free
          </a>
          <a href="services.php" class="btn btn-outline-white btn-lg">
            <i class="ph ph-scales"></i>
            Browse Services
          </a>
        </div>

        <div class="hero-trust reveal d-4">
          <span class="hero-trust-item">
            <i class="ph ph-check-circle"></i> 2,500+ Verified Lawyers
          </span>
          <span class="hero-trust-item">
            <i class="ph ph-check-circle"></i> 100% Anonymous
          </span>
          <span class="hero-trust-item">
            <i class="ph ph-check-circle"></i> 24/7 Helpline
          </span>
        </div>
      </div>

      <!-- Right: Card -->
      <div class="reveal-right d-2" style="position:relative;">
        <div class="hero-card">
          <p class="hero-card-title">Connect Instantly</p>
          <p class="hero-phone"><?php echo HELPLINE_NUMBER; ?></p>
          <p class="hero-card-sub">Confidential &bull; Anonymous &bull; 24/7</p>

          <?php foreach ($stats as $s): ?>
          <div class="hero-stat-row">
            <div class="hero-stat-icon">
              <i class="ph <?php echo $s['icon']; ?>"></i>
            </div>
            <div>
              <div class="hero-stat-label"><?php echo $s['label']; ?></div>
              <div class="hero-stat-value"><?php echo number_format((int)$s['value']); ?><?php echo $s['suffix']; ?></div>
            </div>
          </div>
          <?php endforeach; ?>

          <div style="margin-top:1.25rem;">
            <a href="tel:<?php echo preg_replace('/\s+/', '', HELPLINE_NUMBER); ?>"
               class="btn btn-call" style="width:100%;justify-content:center;">
              <i class="ph ph-phone-call"></i> Call Our Helpline
            </a>
          </div>
          <div style="text-align:center;margin-top:0.75rem;">
            <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>"
               target="_blank" rel="noopener"
               class="wa-btn" style="width:100%;justify-content:center;">
              <i class="ph ph-whatsapp-logo"></i> WhatsApp Us
            </a>
          </div>
        </div>
      </div>

    </div><!-- /hero-grid -->
  </div>
</section>

<!-- ════════════════════════════════════════════════
     STATS BAR
════════════════════════════════════════════════ -->
<div class="stats-bar" aria-label="Platform statistics">
  <div class="container">
    <div class="stats-grid">
      <?php foreach ($stats as $i => $s): ?>
      <div class="stat-item reveal delay-<?php echo $i + 1; ?>">
        <div class="stat-icon-wrap" aria-hidden="true">
          <i class="ph <?php echo $s['icon']; ?>"></i>
        </div>
        <div class="stat-number"
             data-count="<?php echo $s['value']; ?>"
             data-suffix="<?php echo $s['suffix']; ?>">
          0<?php echo $s['suffix']; ?>
        </div>
        <div class="stat-label"><?php echo $s['label']; ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<!-- ════════════════════════════════════════════════
     SERVICES
════════════════════════════════════════════════ -->
<section class="section" id="services" aria-label="Legal services">
  <div class="container">
    <div class="section-header center reveal">
      <span class="section-label"><i class="ph ph-scales"></i> Practice Areas</span>
      <h2 class="heading-1">Complete Legal Services</h2>
      <div class="divider-gold center"></div>
      <p style="margin-top:1rem;">
        From property disputes to corporate law — connect with verified specialists
        across 18 practice areas, available across Pakistan.
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
        <a href="service.php?slug=<?php echo urlencode($s['slug']); ?>" class="service-link">
          Learn More <i class="ph ph-arrow-right"></i>
        </a>
      </article>
      <?php endforeach; ?>
    </div>

    <div style="text-align:center;margin-top:2.5rem;" class="reveal">
      <a href="services.php" class="btn btn-primary btn-lg">
        <i class="ph ph-scales"></i> View All Practice Areas
      </a>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     HOW IT WORKS
════════════════════════════════════════════════ -->
<section class="section bg-surface-2" id="how-it-works" aria-label="How the platform works">
  <div class="container">
    <div class="section-header center reveal">
      <span class="section-label"><i class="ph ph-steps"></i> Simple Process</span>
      <h2 class="heading-1">How WakeelZone Works</h2>
      <div class="divider-gold center"></div>
      <p style="margin-top:1rem;">
        Getting expert anonymous legal advice takes less than 5 minutes.
        No appointments. No waiting rooms.
      </p>
    </div>

    <div class="steps-grid">
      <?php foreach ($process_steps as $i => $step): ?>
      <div class="step-card reveal delay-<?php echo $i + 1; ?>">
        <span class="step-num" aria-hidden="true"><?php echo $step['number']; ?></span>
        <div class="step-icon-wrap" aria-hidden="true">
          <i class="ph <?php echo htmlspecialchars($step['icon']); ?>"></i>
        </div>
        <h3 class="step-title"><?php echo htmlspecialchars($step['title']); ?></h3>
        <p class="step-desc"><?php echo htmlspecialchars($step['desc']); ?></p>
      </div>
      <?php endforeach; ?>
    </div>

    <div style="text-align:center;margin-top:2.5rem;" class="reveal">
      <a href="how-we-work.php" class="btn btn-outline">
        <i class="ph ph-info"></i> Learn More
      </a>
      <a href="tel:<?php echo preg_replace('/\s+/', '', HELPLINE_NUMBER); ?>"
         class="btn btn-gold btn-lg" style="margin-left:0.875rem;">
        <i class="ph ph-phone-call"></i> Start Now — <?php echo HELPLINE_NUMBER; ?>
      </a>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     WHY CHOOSE US
════════════════════════════════════════════════ -->
<section class="section" aria-label="Why choose WakeelZone">
  <div class="container">
    <div class="why-us-grid">

      <!-- Left: Features -->
      <div>
        <div class="reveal-left">
          <span class="section-label"><i class="ph ph-shield-check"></i> Our Promise</span>
          <h2 class="heading-1">Why Thousands Trust WakeelZone</h2>
          <div class="divider-gold"></div>
          <p class="lead" style="margin-top:1rem;margin-bottom:1.75rem;">
            We built WakeelZone to solve the biggest barrier to legal help in Pakistan —
            the fear of privacy breach. Your anonymity is our founding principle.
          </p>
        </div>

        <div style="display:flex;flex-direction:column;gap:0.25rem;">
          <?php foreach ($why_us as $i => $w): ?>
          <div class="feature-item reveal delay-<?php echo ($i % 3) + 1; ?>">
            <div class="feature-icon" aria-hidden="true">
              <i class="ph <?php echo htmlspecialchars($w['icon']); ?>"></i>
            </div>
            <div>
              <h4 class="feature-title"><?php echo htmlspecialchars($w['title']); ?></h4>
              <p class="feature-desc"><?php echo htmlspecialchars($w['desc']); ?></p>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Right: Stats Grid -->
      <div class="why-stat-grid reveal-right">
        <div class="why-stat-card navy">
          <div class="why-stat-num"
               data-count="10000"
               data-suffix="+"
               style="color:var(--clr-gold-light);">10,000+</div>
          <div class="why-stat-label">Consultations Done</div>
        </div>
        <div class="why-stat-card gold">
          <div class="why-stat-num">2,500+</div>
          <div class="why-stat-label">Verified Lawyers</div>
        </div>
        <div class="why-stat-card light">
          <div class="why-stat-num" style="color:var(--clr-primary);">24/7</div>
          <div class="why-stat-label" style="color:var(--clr-text-3);">Helpline Available</div>
        </div>
        <div class="why-stat-card dark">
          <div class="why-stat-num" style="color:var(--clr-gold);">100%</div>
          <div class="why-stat-label">Anonymous Until You Decide</div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     TESTIMONIALS
════════════════════════════════════════════════ -->
<section class="section bg-surface-2" aria-label="Client testimonials">
  <div class="container">
    <div class="section-header center reveal">
      <span class="section-label"><i class="ph ph-star"></i> Success Stories</span>
      <h2 class="heading-1">What Our Clients Say</h2>
      <div class="divider-gold center"></div>
      <p style="margin-top:1rem;">
        Real feedback from Pakistanis who found justice and clarity through WakeelZone.
      </p>
    </div>

    <div class="testimonials-wrap reveal">
      <div class="testimonials-track" id="testimonialTrack">
        <?php foreach ($testimonials as $t): ?>
        <div class="testimonial-slide">
          <div class="testimonial-card">
            <div class="t-stars" aria-label="<?php echo $t['rating']; ?> out of 5 stars">
              <?php for ($s = 0; $s < $t['rating']; $s++): ?>
                <i class="ph ph-star-fill"></i>
              <?php endfor; ?>
            </div>
            <p class="t-text">"<?php echo htmlspecialchars($t['text']); ?>"</p>
            <div class="t-author">
              <div class="t-avatar" aria-hidden="true">
                <?php echo strtoupper(substr($t['name'], 0, 1)); ?>
              </div>
              <div>
                <div class="t-name"><?php echo htmlspecialchars($t['name']); ?></div>
                <div class="t-city">
                  <i class="ph ph-map-pin" style="color:var(--clr-gold);font-size:0.75rem;"></i>
                  <?php echo htmlspecialchars($t['city']); ?>, Pakistan
                </div>
                <span class="t-service"><?php echo htmlspecialchars($t['service']); ?></span>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Controls -->
    <div class="slider-controls reveal">
      <button class="slider-btn" id="sliderPrev" aria-label="Previous testimonial">
        <i class="ph ph-caret-left"></i>
      </button>
      <div class="slider-dots" role="tablist" aria-label="Testimonial navigation">
        <?php for ($i = 0; $i < count($testimonials); $i++): ?>
          <button class="slider-dot <?php echo $i === 0 ? 'active' : ''; ?>"
                  role="tab"
                  aria-label="Go to testimonial <?php echo $i + 1; ?>"></button>
        <?php endfor; ?>
      </div>
      <button class="slider-btn" id="sliderNext" aria-label="Next testimonial">
        <i class="ph ph-caret-right"></i>
      </button>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     CITIES COVERED
════════════════════════════════════════════════ -->
<section class="section-sm" aria-label="Cities covered">
  <div class="container">
    <div class="section-header center reveal">
      <span class="section-label"><i class="ph ph-map-pin"></i> Nationwide Coverage</span>
      <h2 class="heading-2">Lawyers Across Pakistan</h2>
    </div>
    <div style="display:flex;flex-wrap:wrap;justify-content:center;gap:0.625rem;" class="reveal d-1">
      <?php foreach ($cities as $city): ?>
        <a href="contact.php?city=<?php echo urlencode($city); ?>"
           class="badge badge-navy"
           style="font-size:0.8125rem;padding:0.4rem 1rem;cursor:pointer;transition:all var(--ease-spring);"
           onmouseover="this.classList.add('badge-gold');this.classList.remove('badge-navy')"
           onmouseout="this.classList.remove('badge-gold');this.classList.add('badge-navy')">
          <i class="ph ph-map-pin"></i>
          <?php echo htmlspecialchars($city); ?>
        </a>
      <?php endforeach; ?>
    </div>
    <p style="text-align:center;margin-top:1.5rem;font-size:var(--text-sm);color:var(--clr-text-muted);" class="reveal d-2">
      Also covering all High Courts, Supreme Court of Pakistan, Federal Shariat Court, ATIR, and specialized tribunals.
    </p>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     FAQ
════════════════════════════════════════════════ -->
<section class="section bg-surface-2" id="faq" aria-label="Frequently asked questions">
  <div class="container">
    <div class="section-header center reveal">
      <span class="section-label"><i class="ph ph-question"></i> FAQ</span>
      <h2 class="heading-1">Frequently Asked Questions</h2>
      <div class="divider-gold center"></div>
      <p style="margin-top:1rem;">Everything you need to know before your first consultation.</p>
    </div>

    <div class="faq-list reveal d-1">
      <?php foreach ($faqs as $i => $faq): ?>
      <div class="faq-item <?php echo $i === 0 ? 'open' : ''; ?>"
           itemscope itemtype="https://schema.org/Question">
        <button class="faq-question" aria-expanded="<?php echo $i === 0 ? 'true' : 'false'; ?>">
          <span itemprop="name"><?php echo htmlspecialchars($faq['q']); ?></span>
          <span class="faq-toggle-icon" aria-hidden="true">
            <i class="ph ph-plus"></i>
          </span>
        </button>
        <div class="faq-body" itemscope itemtype="https://schema.org/Answer">
          <div class="faq-body-inner" itemprop="text">
            <?php echo htmlspecialchars($faq['a']); ?>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════
     CTA SECTION
════════════════════════════════════════════════ -->
<section class="cta-section" aria-label="Call to action">
  <div class="container cta-inner">
    <span class="section-label" style="color:var(--clr-gold-light);border-color:rgba(201,168,76,0.3);background:rgba(201,168,76,0.12);" aria-hidden="true">
      <i class="ph ph-phone-call"></i> Get Help Now
    </span>

    <h2 class="heading-1 reveal" style="color:var(--clr-text-inverse);margin-bottom:0.75rem;">
      Need Legal Help Right Now?
    </h2>
    <p class="reveal d-1" style="color:rgba(255,255,255,0.7);font-size:var(--text-base);max-width:540px;margin:0 auto 1.75rem;line-height:var(--leading-relaxed);">
      Our legal executives are available 24/7 to connect you with the right expert —
      anonymously, immediately.
    </p>

    <div class="cta-phone reveal d-2">
      <i class="ph ph-phone-call"></i>
      <a href="tel:<?php echo preg_replace('/\s+/', '', HELPLINE_NUMBER); ?>"
         style="color:inherit;text-decoration:none;">
        <?php echo HELPLINE_NUMBER; ?>
      </a>
    </div>

    <div class="cta-btns reveal d-3">
      <a href="tel:<?php echo preg_replace('/\s+/', '', HELPLINE_NUMBER); ?>"
         class="btn btn-gold btn-lg">
        <i class="ph ph-phone-call"></i> Call Our Helpline
      </a>
      <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>"
         target="_blank" rel="noopener"
         class="btn btn-outline-white btn-lg">
        <i class="ph ph-whatsapp-logo"></i> WhatsApp Us
      </a>
      <a href="contact.php" class="btn btn-outline-white btn-lg">
        <i class="ph ph-envelope"></i> Send a Message
      </a>
    </div>
  </div>

  <!-- Trust strip -->
  <div class="trust-strip">
    <div class="container">
      <div class="trust-strip-inner">
        <?php foreach ($trust_badges as $badge): ?>
        <div class="trust-item">
          <i class="ph <?php echo htmlspecialchars($badge['icon']); ?>"></i>
          <?php echo htmlspecialchars($badge['label']); ?>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
