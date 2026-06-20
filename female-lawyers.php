<?php
require_once 'config.php';
require_once 'includes/data.php';
$pageTitle = 'Female Lawyers in Pakistan';
$pageDesc  = 'Consult verified women advocates across Pakistan for sensitive family, harassment, and domestic violence matters. Completely anonymous & confidential — WakeelZone.';
include 'includes/head.php';
include 'includes/nav.php';
?>

<!-- Page Header -->
<div class="page-header">
  <div class="container page-header-inner">
    <h1 class="page-header-title heading-1">Female Lawyers in Pakistan</h1>
    <p class="page-header-sub">Consult Verified Women Advocates for Sensitive Legal Matters</p>
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <span class="breadcrumb-item"><a href="index.php">Home</a></span>
      <span class="breadcrumb-sep"><i class="ph ph-caret-right"></i></span>
      <span class="breadcrumb-item">Female Lawyers</span>
    </nav>
  </div>
</div>

<!-- ════════ INTRO ════════ -->
<section class="section">
  <div class="container">
    <div class="why-us-grid">

      <div class="reveal-left">
        <span class="section-label"><i class="ph ph-shield-lock"></i> Confidential & Anonymous</span>
        <h2 class="heading-1">A Dedicated Network of Women Advocates</h2>
        <div class="divider-gold"></div>
        <p class="lead" style="margin-top:1.25rem;">
          WakeelZone has a dedicated network of female lawyers across Pakistan for clients who
          prefer to discuss sensitive legal matters with a woman advocate. Our consultations
          are completely anonymous and confidential.
        </p>
        <p style="margin-top:1rem;font-size:var(--text-sm);color:var(--clr-text-3);line-height:var(--leading-relaxed);">
          We understand that many legal issues — particularly family disputes, domestic violence,
          workplace harassment, and women's rights matters — are deeply personal. Having a female
          advocate who understands both the law and the social context of Pakistan can make a
          significant difference in how comfortable you feel sharing your situation and in the
          quality of advice you receive.
        </p>
        <div style="margin-top:1.5rem;">
          <a href="tel:<?php echo preg_replace('/\s+/', '', HELPLINE_NUMBER); ?>"
             class="btn btn-primary btn-lg">
            <i class="ph ph-phone-call"></i> Request a Female Lawyer Now
          </a>
        </div>
      </div>

      <div class="reveal-right">
        <div style="background:linear-gradient(135deg,var(--clr-primary),var(--clr-primary-light));border-radius:var(--radius-xl);padding:2.5rem;color:var(--clr-text-inverse);position:relative;overflow:hidden;">
          <div style="position:absolute;inset:0;background-image:radial-gradient(circle,rgba(255,255,255,0.05) 1px,transparent 1px);background-size:24px 24px;"></div>
          <div style="position:relative;z-index:1;">
            <i class="ph ph-chat-dots" style="font-size:3rem;color:var(--clr-gold);display:block;margin-bottom:1.25rem;"></i>
            <h3 style="font-size:1.375rem;font-weight:800;margin-bottom:1rem;">How to Request a Female Lawyer</h3>
            <p style="color:rgba(255,255,255,0.75);line-height:var(--leading-relaxed);font-size:var(--text-sm);margin-bottom:1.25rem;">
              It is incredibly simple. When you call our helpline, simply tell the legal executive:
            </p>
            <div style="background:rgba(201,168,76,0.15);border:1px solid rgba(201,168,76,0.3);border-radius:var(--radius-lg);padding:1.25rem;margin-bottom:1.25rem;text-align:center;">
              <p style="font-size:1.125rem;font-weight:700;color:var(--clr-gold);margin:0;">
                "I prefer a female lawyer"
              </p>
            </div>
            <p style="color:rgba(255,255,255,0.65);font-size:var(--text-sm);line-height:var(--leading-relaxed);">
              That's it. We will immediately match you with a verified female advocate in your
              preferred language, city, and practice area. No questions asked, no judgment.
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ════════ WHY CHOOSE A FEMALE LAWYER ════════ -->
<section class="section bg-surface-2">
  <div class="container">
    <div class="section-header center reveal">
      <span class="section-label"><i class="ph ph-star"></i> Why It Matters</span>
      <h2 class="heading-1">Why Choose a Female Lawyer?</h2>
      <div class="divider-gold center"></div>
      <p style="margin-top:1rem;">Four key reasons clients specifically request women advocates through WakeelZone.</p>
    </div>

    <?php
    $fl_reasons = [
      ['icon'=>'ph-heart',         'title'=>'Comfort & Empathy in Sensitive Matters',    'desc'=>'When discussing domestic abuse, sexual harassment, divorce, or custody — many clients find it easier to open up with a female advocate who approaches matters with empathy and sensitivity.'],
      ['icon'=>'ph-hands-praying', 'title'=>'Cultural Sensitivity',                       'desc'=>'Female lawyers often have a deeper appreciation of Pakistan\'s cultural and social norms, which helps frame legal arguments appropriately for family courts and negotiation contexts.'],
      ['icon'=>'ph-scales',        'title'=>'Deep Understanding of Women\'s Legal Issues', 'desc'=>'Women advocates who specialize in family, domestic violence, and harassment law bring lived experience and professional expertise that results in more thorough and effective representation.'],
      ['icon'=>'ph-seal-check',    'title'=>'Equal Expertise & Credentials',              'desc'=>'Our female lawyers hold the same qualifications, Bar Council enrollments, and experience levels as their male counterparts. Preferring a female lawyer is a personal choice — not a compromise on quality.'],
    ];
    ?>
    <div style="display:grid;grid-template-columns:repeat(2,1fr);gap:1.5rem;max-width:900px;margin-inline:auto;">
      <?php foreach ($fl_reasons as $i => $r): ?>
      <div class="feature-item reveal delay-<?php echo $i+1; ?>"
           style="background:var(--clr-surface);border:1px solid var(--clr-border-light);border-radius:var(--radius-lg);padding:1.75rem;align-items:flex-start;">
        <div class="feature-icon"><i class="ph <?php echo $r['icon']; ?>"></i></div>
        <div>
          <h4 class="feature-title"><?php echo $r['title']; ?></h4>
          <p class="feature-desc"><?php echo $r['desc']; ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ════════ PRACTICE AREAS ════════ -->
<section class="section">
  <div class="container">
    <div class="section-header center reveal">
      <span class="section-label"><i class="ph ph-scales"></i> Practice Areas</span>
      <h2 class="heading-1">What Our Female Lawyers Handle</h2>
      <div class="divider-gold center"></div>
      <p style="margin-top:1rem;">
        Female lawyers in our network cover all 18 practice areas. Below are the areas they most
        frequently specialize in. All services are available with a female advocate upon request.
      </p>
    </div>

    <?php
    $fl_specialties = [
      ['icon'=>'ph-users',          'title'=>'Family Law',              'desc'=>'Khula, divorce, child custody, guardianship, maintenance, Mehr recovery, and all family court proceedings.','link'=>'service.php?slug=family-lawyer'],
      ['icon'=>'ph-shield-warning', 'title'=>'Domestic Violence',       'desc'=>'Emergency protection orders, domestic violence complaints, shelter home guidance, and criminal prosecution of abusers.','link'=>'service.php?slug=family-lawyer'],
      ['icon'=>'ph-hand-fist',      'title'=>'Harassment (WHAct 2010)', 'desc'=>'Workplace harassment complaints, Protection Against Harassment of Women at Workplace Act 2010 proceedings and inquiries.','link'=>'service.php?slug=labour-employment'],
      ['icon'=>'ph-house',          'title'=>'Property & Inheritance',  'desc'=>'Women\'s inheritance rights, property disputes, succession certificates, and challenging wrongful disinheritance.','link'=>'service.php?slug=property-lawyer'],
      ['icon'=>'ph-baby',           'title'=>'Child Protection',        'desc'=>'Child abuse cases, child custody (as primary carer), child trafficking, and minor guardianship proceedings.','link'=>'child-protection-lawyer.php'],
      ['icon'=>'ph-shopping-cart',  'title'=>'Consumer Rights',         'desc'=>'Filing consumer court complaints for defective products, service deficiency, bank disputes, and e-commerce fraud.','link'=>'service.php?slug=consumer-protection'],
      ['icon'=>'ph-buildings',      'title'=>'Corporate Law',           'desc'=>'Company registration, contracts, employment agreements, and SECP compliance for female entrepreneurs.','link'=>'service.php?slug=corporate-lawyer'],
      ['icon'=>'ph-shield-warning', 'title'=>'Cyber Crime',             'desc'=>'Online harassment of women, fake social media profiles, non-consensual image sharing, and PECA 2016 cases.','link'=>'service.php?slug=cyber-crime-lawyer'],
    ];
    ?>
    <div class="services-grid">
      <?php foreach ($fl_specialties as $i => $sp): ?>
      <article class="service-card reveal delay-<?php echo ($i % 6)+1; ?>">
        <div class="service-icon"><i class="ph <?php echo $sp['icon']; ?>"></i></div>
        <h3 class="service-title"><?php echo htmlspecialchars($sp['title']); ?></h3>
        <p class="service-desc"><?php echo htmlspecialchars($sp['desc']); ?></p>
        <a href="<?php echo $sp['link']; ?>" class="service-link">
          Learn More <i class="ph ph-arrow-right"></i>
        </a>
      </article>
      <?php endforeach; ?>
    </div>

    <div style="text-align:center;margin-top:2rem;" class="reveal">
      <p style="font-size:var(--text-sm);color:var(--clr-text-muted);margin-bottom:1rem;">
        Female lawyers available for all 18 practice areas. Call to request your specific area.
      </p>
      <a href="services.php" class="btn btn-outline">
        <i class="ph ph-scales"></i> View All 18 Practice Areas
      </a>
    </div>
  </div>
</section>

<!-- ════════ CITIES ════════ -->
<section class="section-sm bg-surface-2">
  <div class="container">
    <div class="section-header center reveal">
      <span class="section-label"><i class="ph ph-map-pin"></i> Nationwide Coverage</span>
      <h2 class="heading-2">Female Lawyers Available in All Major Cities</h2>
    </div>
    <div style="display:flex;flex-wrap:wrap;justify-content:center;gap:0.625rem;" class="reveal d-1">
      <?php foreach ($cities as $city): ?>
        <span class="badge badge-navy" style="font-size:0.8125rem;padding:0.4rem 1rem;">
          <i class="ph ph-map-pin"></i> <?php echo htmlspecialchars($city); ?>
        </span>
      <?php endforeach; ?>
    </div>
    <p style="text-align:center;margin-top:1.25rem;font-size:var(--text-sm);color:var(--clr-text-muted);" class="reveal d-2">
      Female advocates are also available for High Court matters across Lahore, Sindh, Peshawar, Balochistan, and Islamabad High Courts.
    </p>
  </div>
</section>

<!-- ════════ PAKISTAN WOMEN'S LEGAL RIGHTS ════════ -->
<section class="section">
  <div class="container">
    <div class="section-header center reveal">
      <span class="section-label"><i class="ph ph-scales"></i> Know Your Rights</span>
      <h2 class="heading-1">Women's Legal Rights Under Pakistan Law</h2>
      <div class="divider-gold center"></div>
      <p style="margin-top:1rem;max-width:700px;margin-inline:auto;">
        Pakistan has a comprehensive legal framework protecting women's rights. Understanding these
        laws is your first step toward justice.
      </p>
    </div>

    <?php
    $womens_laws = [
      ['icon'=>'ph-users',       'law'=>'Muslim Family Laws Ordinance 1961',             'desc'=>'Governs marriage, divorce (Talaq & Khula), maintenance, and child custody. Establishes Arbitration Councils for family disputes.'],
      ['icon'=>'ph-heart-break', 'law'=>'Dissolution of Muslim Marriages Act 1939',       'desc'=>'Gives women the right to seek divorce from courts on grounds including cruelty, failure to maintain, or unknown whereabouts of husband.'],
      ['icon'=>'ph-shield',      'law'=>'Domestic Violence Acts (Punjab, KPK, Sindh)',    'desc'=>'Provincial laws providing emergency protection orders, residence orders, and monetary relief orders for domestic violence survivors.'],
      ['icon'=>'ph-hand-fist',   'law'=>'Protection Against Harassment Act 2010',         'desc'=>'Protects women from sexual harassment at the workplace. Mandates inquiry committees in all organizations and allows criminal complaints.'],
      ['icon'=>'ph-baby',        'law'=>'Guardians & Wards Act 1890',                     'desc'=>'Governs child custody — courts must consider the "welfare of the child" as the paramount consideration in custody decisions.'],
      ['icon'=>'ph-house',       'law'=>'Succession Act 1925 / Islamic Inheritance Law',  'desc'=>'Muslim women have defined inheritance shares under Islamic law. Any denial of inheritance is legally challengeable in civil courts.'],
    ];
    ?>
    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.25rem;" class="three-cols-responsive">
      <?php foreach ($womens_laws as $i => $law): ?>
      <div class="reveal delay-<?php echo ($i % 3)+1; ?>"
           style="background:var(--clr-surface);border:1px solid var(--clr-border-light);border-radius:var(--radius-lg);padding:1.5rem;">
        <div style="width:48px;height:48px;background:var(--clr-gold-50);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:1rem;">
          <i class="ph <?php echo $law['icon']; ?>" style="font-size:1.25rem;color:var(--clr-gold);"></i>
        </div>
        <h4 style="font-size:var(--text-sm);font-weight:700;color:var(--clr-primary);margin-bottom:0.625rem;line-height:1.4;"><?php echo htmlspecialchars($law['law']); ?></h4>
        <p style="font-size:var(--text-xs);color:var(--clr-text-3);line-height:var(--leading-relaxed);margin:0;"><?php echo htmlspecialchars($law['desc']); ?></p>
      </div>
      <?php endforeach; ?>
    </div>

    <div style="margin-top:2rem;padding:1.5rem;background:var(--clr-primary-50);border-radius:var(--radius-lg);border:1px solid rgba(27,58,107,0.1);text-align:center;" class="reveal">
      <p style="font-size:var(--text-sm);color:var(--clr-text-3);line-height:var(--leading-relaxed);max-width:650px;margin:0 auto;">
        <i class="ph ph-info" style="color:var(--clr-primary);"></i>
        <strong> Disclaimer:</strong> This is general legal information only. For advice specific to your situation,
        please consult with one of our verified female advocates. Laws may have been amended — always seek current legal guidance.
      </p>
    </div>
  </div>
</section>

<!-- ════════ CTA ════════ -->
<section class="cta-section">
  <div class="container cta-inner">
    <span class="section-label" style="color:var(--clr-gold-light);border-color:rgba(201,168,76,0.3);background:rgba(201,168,76,0.12);">
      <i class="ph ph-shield-lock"></i> Confidential Female Legal Consultation
    </span>
    <h2 class="heading-1 reveal" style="color:var(--clr-text-inverse);margin-bottom:0.75rem;">
      Speak to a Verified Female Lawyer Today
    </h2>
    <p class="reveal d-1" style="color:rgba(255,255,255,0.7);max-width:520px;margin:0 auto 1.75rem;line-height:var(--leading-relaxed);">
      Your consultation is 100% anonymous, completely confidential, and available 24/7.
      Simply ask for a female lawyer — we take care of the rest.
    </p>
    <div class="cta-btns reveal d-2">
      <a href="tel:<?php echo preg_replace('/\s+/', '', HELPLINE_NUMBER); ?>" class="btn btn-gold btn-lg">
        <i class="ph ph-phone-call"></i> Call <?php echo HELPLINE_NUMBER; ?>
      </a>
      <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>" target="_blank" rel="noopener" class="btn btn-outline-white btn-lg">
        <i class="ph ph-whatsapp-logo"></i> WhatsApp Us
      </a>
      <a href="contact.php" class="btn btn-outline-white btn-lg">
        <i class="ph ph-envelope"></i> Send a Message
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
