<?php
require_once 'config.php';
require_once 'includes/data.php';
$pageTitle = 'Child Protection Lawyer in Pakistan';
$pageDesc  = 'Expert legal advocacy for child rights, child abuse cases, custody disputes, child trafficking, and child protection under Pakistan law. Anonymous & confidential.';
include 'includes/head.php';
include 'includes/nav.php';
?>

<!-- Page Header -->
<div class="page-header">
  <div class="container page-header-inner">
    <h1 class="page-header-title heading-1">Child Protection Lawyer in Pakistan</h1>
    <p class="page-header-sub">Expert Legal Advocacy for Child Rights &amp; Protection Cases</p>
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <span class="breadcrumb-item"><a href="index.php">Home</a></span>
      <span class="breadcrumb-sep"><i class="ph ph-caret-right"></i></span>
      <span class="breadcrumb-item">Child Protection Lawyer</span>
    </nav>
  </div>
</div>

<!-- ════════ EMERGENCY NOTICE ════════ -->
<div style="background:#dc2626;color:white;padding:0.875rem 0;">
  <div class="container" style="display:flex;align-items:center;justify-content:center;gap:0.75rem;text-align:center;flex-wrap:wrap;">
    <i class="ph ph-warning" style="font-size:1.25rem;flex-shrink:0;"></i>
    <strong style="font-size:var(--text-sm);">If a child is in immediate danger:</strong>
    <a href="tel:15" style="color:white;font-weight:700;font-size:var(--text-sm);">
      <i class="ph ph-phone-call"></i> 15 — Police
    </a>
    <span style="opacity:0.5;">|</span>
    <a href="tel:1093" style="color:white;font-weight:700;font-size:var(--text-sm);">
      <i class="ph ph-phone-call"></i> 1093 — Punjab Child Protection Helpline
    </a>
    <span style="opacity:0.5;">|</span>
    <a href="tel:1099" style="color:white;font-weight:700;font-size:var(--text-sm);">
      <i class="ph ph-phone-call"></i> 1099 — ZARRA Alert Helpline
    </a>
  </div>
</div>

<!-- ════════ INTRO ════════ -->
<section class="section">
  <div class="container">
    <div class="why-us-grid">

      <div class="reveal-left">
        <span class="section-label"><i class="ph ph-baby"></i> Child Rights Law</span>
        <h2 class="heading-1">Protecting Pakistan's Most Vulnerable</h2>
        <div class="divider-gold"></div>
        <p class="lead" style="margin-top:1.25rem;">
          Child protection law in Pakistan encompasses multiple federal and provincial laws that
          protect children from abuse, neglect, exploitation, trafficking, and child labour.
          WakeelZone provides sensitive, confidential legal assistance for all child protection matters.
        </p>
        <p style="margin-top:1rem;font-size:var(--text-sm);color:var(--clr-text-3);line-height:var(--leading-relaxed);">
          Our child protection lawyers handle cases with the utmost care and sensitivity. We understand
          that these matters involve some of Pakistan's most traumatic and high-stakes situations.
          Every case is handled with strict anonymity, professional sensitivity, and an unwavering
          commitment to securing the best outcome for the child.
        </p>
        <div style="margin-top:1.5rem;display:flex;flex-direction:column;gap:0.625rem;">
          <div class="check-list-item">
            <i class="ph ph-shield-check"></i>
            <span style="font-size:var(--text-sm);">Strict client anonymity — no names required to consult</span>
          </div>
          <div class="check-list-item">
            <i class="ph ph-shield-check"></i>
            <span style="font-size:var(--text-sm);">Specialized child protection advocates in every province</span>
          </div>
          <div class="check-list-item">
            <i class="ph ph-shield-check"></i>
            <span style="font-size:var(--text-sm);">24/7 emergency consultations for urgent child safety matters</span>
          </div>
          <div class="check-list-item">
            <i class="ph ph-shield-check"></i>
            <span style="font-size:var(--text-sm);">NGO liaison — we work with Edhi, Sahil, and Zainab Alert Authority</span>
          </div>
        </div>
      </div>

      <div class="reveal-right">
        <div style="background:linear-gradient(135deg,var(--clr-primary-dark),var(--clr-primary));border-radius:var(--radius-xl);padding:2.5rem;color:var(--clr-text-inverse);position:relative;overflow:hidden;">
          <div style="position:absolute;inset:0;background-image:radial-gradient(circle,rgba(255,255,255,0.04) 1px,transparent 1px);background-size:20px 20px;"></div>
          <div style="position:relative;z-index:1;">
            <i class="ph ph-phone-call" style="font-size:2.5rem;color:var(--clr-gold);display:block;margin-bottom:1.25rem;"></i>
            <h3 style="font-size:1.25rem;font-weight:800;margin-bottom:0.75rem;">Need Help Now?</h3>
            <p style="color:rgba(255,255,255,0.75);font-size:var(--text-sm);line-height:var(--leading-relaxed);margin-bottom:1.25rem;">
              Call our helpline immediately. Our child protection lawyers are available
              24 hours a day, 7 days a week.
            </p>
            <a href="tel:<?php echo preg_replace('/\s+/', '', HELPLINE_NUMBER); ?>"
               class="btn btn-call" style="width:100%;justify-content:center;margin-bottom:0.875rem;">
              <i class="ph ph-phone-call"></i> <?php echo HELPLINE_NUMBER; ?>
            </a>
            <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>" target="_blank" rel="noopener"
               class="wa-btn" style="width:100%;justify-content:center;">
              <i class="ph ph-whatsapp-logo"></i> WhatsApp for Urgent Help
            </a>
            <p style="font-size:var(--text-xs);color:rgba(255,255,255,0.5);margin-top:1rem;text-align:center;line-height:var(--leading-relaxed);">
              100% confidential. Your identity remains anonymous throughout the consultation.
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ════════ KEY PAKISTAN LAWS ════════ -->
<section class="section bg-surface-2">
  <div class="container">
    <div class="section-header center reveal">
      <span class="section-label"><i class="ph ph-book-open"></i> Legal Framework</span>
      <h2 class="heading-1">Key Child Protection Laws in Pakistan</h2>
      <div class="divider-gold center"></div>
      <p style="margin-top:1rem;max-width:700px;margin-inline:auto;">
        Pakistan has enacted multiple laws at both federal and provincial levels to protect children.
        Our lawyers have expert knowledge of all applicable legislation.
      </p>
    </div>

    <?php
    $cp_laws = [
      [
        'icon' => 'ph-warning',
        'law'  => 'Zainab Alert, Response and Recovery Act 2020 (ZARRA)',
        'scope'=> 'Federal',
        'desc' => 'Enacted after the Zainab case. Creates a national database of missing children, mandates 2-hour police response, and establishes the Zainab Alert Authority. Helpline: 1099.',
      ],
      [
        'icon' => 'ph-baby',
        'law'  => 'Punjab Destitute and Neglected Children Act 2004',
        'scope'=> 'Punjab',
        'desc' => 'Establishes the Punjab Child Protection & Welfare Bureau, child protection units in every district, and procedures for rescuing and rehabilitating vulnerable children.',
      ],
      [
        'icon' => 'ph-baby',
        'law'  => 'Sindh Child Protection Authority Act 2011',
        'scope'=> 'Sindh',
        'desc' => 'Establishes the Sindh Child Protection Authority (SCPA) to coordinate child protection across Sindh, including a complaints mechanism and safe house network.',
      ],
      [
        'icon' => 'ph-baby',
        'law'  => 'KPK Child Protection & Welfare Act 2010',
        'scope'=> 'KPK',
        'desc' => 'Provincial legislation for KPK establishing child protection mechanisms, defining child abuse, and providing for rehabilitation and judicial proceedings.',
      ],
      [
        'icon' => 'ph-airplane',
        'law'  => 'Prevention and Control of Human Trafficking Ordinance 2002',
        'scope'=> 'Federal',
        'desc' => 'Criminalizes trafficking of children for labour, sexual exploitation, and begging. Provides for enhanced penalties when victims are children. FIA has primary investigative jurisdiction.',
      ],
      [
        'icon' => 'ph-ring',
        'law'  => 'Child Marriage Restraint Act 1929 (as amended)',
        'scope'=> 'Federal',
        'desc' => 'Sets minimum marriage age (18 for boys, 16 for girls at federal level; Sindh raised female minimum to 18 in 2013). Violations are cognizable offences. Some provinces have further amendments.',
      ],
      [
        'icon' => 'ph-hammer',
        'law'  => 'Pakistan Penal Code — Child-Specific Provisions',
        'scope'=> 'Federal',
        'desc' => 'Sections 364-A (kidnapping), 366-B (importing girl for illicit intercourse), 371-A/B (trafficking), 375-A (sexual abuse of minor), and sections on criminal force against children.',
      ],
      [
        'icon' => 'ph-factory',
        'law'  => 'Employment of Children Act 1991',
        'scope'=> 'Federal',
        'desc' => 'Prohibits employment of children under 14 in hazardous occupations and regulates working conditions for children aged 14-17. Violations are criminal offences.',
      ],
    ];
    ?>
    <div style="display:grid;grid-template-columns:repeat(2,1fr);gap:1.25rem;">
      <?php foreach ($cp_laws as $i => $law): ?>
      <div class="reveal delay-<?php echo ($i % 3)+1; ?>"
           style="background:var(--clr-surface);border:1px solid var(--clr-border-light);border-radius:var(--radius-lg);padding:1.5rem;display:flex;gap:1rem;align-items:flex-start;">
        <div style="width:48px;height:48px;flex-shrink:0;background:var(--clr-primary-50);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;">
          <i class="ph <?php echo $law['icon']; ?>" style="font-size:1.25rem;color:var(--clr-primary);"></i>
        </div>
        <div>
          <div style="display:flex;align-items:center;gap:0.5rem;margin-bottom:0.375rem;flex-wrap:wrap;">
            <h4 style="font-size:var(--text-sm);font-weight:700;color:var(--clr-text);line-height:1.3;"><?php echo htmlspecialchars($law['law']); ?></h4>
            <span style="font-size:var(--text-xs);font-weight:600;padding:0.125rem 0.5rem;border-radius:var(--radius-full);background:var(--clr-gold-50);color:var(--clr-gold);border:1px solid rgba(201,168,76,0.3);flex-shrink:0;"><?php echo $law['scope']; ?></span>
          </div>
          <p style="font-size:var(--text-xs);color:var(--clr-text-3);line-height:var(--leading-relaxed);margin:0;"><?php echo htmlspecialchars($law['desc']); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ════════ SERVICES OFFERED ════════ -->
<section class="section">
  <div class="container">
    <div class="section-header center reveal">
      <span class="section-label"><i class="ph ph-scales"></i> What We Handle</span>
      <h2 class="heading-1">Child Protection Legal Services</h2>
      <div class="divider-gold center"></div>
    </div>

    <?php
    $cp_services = [
      ['icon'=>'ph-shield-warning',  'title'=>'Child Abuse Cases (Criminal)',     'desc'=>'Filing FIRs, pursuing prosecution, and representing victims\' families in criminal proceedings for physical, sexual, and emotional child abuse under PPC and ZARRA.'],
      ['icon'=>'ph-users',           'title'=>'Child Custody Disputes',           'desc'=>'Representing parents, grandparents, and guardians in Family Court custody proceedings, emphasizing the paramount welfare of the child under Guardians & Wards Act 1890.'],
      ['icon'=>'ph-airplane',        'title'=>'Child Trafficking Matters',        'desc'=>'Coordination with FIA Cybercrime / Anti-Trafficking units, filing complaints, and victim support for families affected by child trafficking networks.'],
      ['icon'=>'ph-factory',         'title'=>'Child Labour Complaints',          'desc'=>'Filing complaints against employers using underage labour, especially in hazardous industries. Liaison with Labour departments and child protection authorities.'],
      ['icon'=>'ph-ring',            'title'=>'Child Marriage (CMRA)',            'desc'=>'Filing applications to prevent or void underage marriages under Child Marriage Restraint Act. Emergency injunctions from courts where children are at immediate risk.'],
      ['icon'=>'ph-baby',            'title'=>'Adoption & Guardianship',          'desc'=>'Legal proceedings for guardianship orders under Guardians & Wards Act 1890. Formal foster care legal arrangements and adoption facilitation for eligible families.'],
    ];
    ?>
    <div class="services-grid">
      <?php foreach ($cp_services as $i => $svc): ?>
      <article class="service-card reveal delay-<?php echo ($i % 6)+1; ?>">
        <div class="service-icon"><i class="ph <?php echo $svc['icon']; ?>"></i></div>
        <h3 class="service-title"><?php echo htmlspecialchars($svc['title']); ?></h3>
        <p class="service-desc"><?php echo htmlspecialchars($svc['desc']); ?></p>
        <a href="contact.php" class="service-link">
          Get Legal Help <i class="ph ph-arrow-right"></i>
        </a>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ════════ WHO CAN SEEK HELP ════════ -->
<section class="section-sm bg-surface-2">
  <div class="container">
    <div class="section-header center reveal">
      <span class="section-label"><i class="ph ph-question"></i> Who Can Approach Us</span>
      <h2 class="heading-2">Who Can Seek Child Protection Legal Help?</h2>
    </div>
    <div style="display:flex;flex-wrap:wrap;justify-content:center;gap:0.875rem;" class="reveal d-1">
      <?php
      $who = ['Parents','Grandparents','Relatives (any)','Teachers & School Staff','NGOs & Social Workers','Child Protection Authorities','Neighbors / Community Members','The Child Themselves (through a guardian)','Doctors & Healthcare Workers'];
      foreach ($who as $w): ?>
      <div class="badge badge-navy" style="padding:0.5rem 1rem;font-size:var(--text-sm);">
        <i class="ph ph-check-circle"></i> <?php echo $w; ?>
      </div>
      <?php endforeach; ?>
    </div>
    <p style="text-align:center;margin-top:1.25rem;font-size:var(--text-sm);color:var(--clr-text-muted);" class="reveal d-2">
      Anyone who has reasonable concern about a child's safety or welfare can contact us. You do not need to be the child's parent or guardian to seek legal advice.
    </p>
  </div>
</section>

<!-- ════════ REPORTING CHILD ABUSE ════════ -->
<section class="section">
  <div class="container">
    <div class="section-header center reveal">
      <span class="section-label"><i class="ph ph-megaphone"></i> Reporting Abuse</span>
      <h2 class="heading-1">How to Report Child Abuse in Pakistan</h2>
      <div class="divider-gold center"></div>
      <p style="margin-top:1rem;max-width:680px;margin-inline:auto;">
        Reporting abuse is the first step to protecting a child. You can report through multiple
        channels. Our lawyers guide you through the correct process based on your situation.
      </p>
    </div>

    <?php
    $reporting = [
      ['icon'=>'ph-police-car',  'title'=>'File an FIR',                    'desc'=>'Register a First Information Report (FIR) at the nearest Police Station. If police refuse, you can file a complaint directly with the Judicial Magistrate or SP. Emergency: 15.','color'=>'#dc2626'],
      ['icon'=>'ph-phone-call',  'title'=>'ZARRA Helpline — 1099',          'desc'=>'The Zainab Alert, Response and Recovery Act helpline for missing and abused children. Operates 24/7. Police must respond within 2 hours under ZARRA 2020.','color'=>'var(--clr-primary)'],
      ['icon'=>'ph-phone-call',  'title'=>'Punjab Child Protection — 1093', 'desc'=>'Punjab Child Protection & Welfare Bureau helpline. For reporting child abuse, child labour, street children, and children in need of protection in Punjab.','color'=>'var(--clr-primary)'],
      ['icon'=>'ph-buildings',   'title'=>'Edhi Foundation',                'desc'=>'Edhi Foundation operates shelters and child protection services across Pakistan. They can provide immediate physical safety and connect families with legal resources.','color'=>'var(--clr-gold)'],
      ['icon'=>'ph-buildings',   'title'=>'Sahil Pakistan',                 'desc'=>'Pakistan\'s leading child rights NGO focused on child sexual abuse. Sahil provides legal aid, counseling, and documentation support for abuse victims and families.','color'=>'var(--clr-gold)'],
      ['icon'=>'ph-scales',      'title'=>'WakeelZone (Legal Guidance)',    'desc'=>'Call our helpline for immediate legal consultation on child protection matters. We guide you through reporting, court proceedings, and long-term legal remedies — anonymously.','color'=>'var(--clr-gold)'],
    ];
    ?>
    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.25rem;" class="three-cols-responsive">
      <?php foreach ($reporting as $i => $r): ?>
      <div class="reveal delay-<?php echo ($i % 3)+1; ?>"
           style="background:var(--clr-surface);border:2px solid var(--clr-border-light);border-radius:var(--radius-lg);padding:1.5rem;text-align:center;">
        <div style="width:56px;height:56px;background:var(--clr-primary-50);border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 1rem;">
          <i class="ph <?php echo $r['icon']; ?>" style="font-size:1.5rem;color:<?php echo $r['color']; ?>;"></i>
        </div>
        <h4 style="font-size:var(--text-sm);font-weight:700;color:var(--clr-text);margin-bottom:0.625rem;"><?php echo htmlspecialchars($r['title']); ?></h4>
        <p style="font-size:var(--text-xs);color:var(--clr-text-3);line-height:var(--leading-relaxed);margin:0;"><?php echo htmlspecialchars($r['desc']); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ════════ HOW WAKEELZONE HANDLES CHILD CASES ════════ -->
<section class="section bg-surface-2">
  <div class="container">
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:2.5rem;align-items:center;">
      <div class="reveal-left">
        <span class="section-label"><i class="ph ph-shield-lock"></i> Our Approach</span>
        <h2 class="heading-1">How We Handle Sensitive Child Cases</h2>
        <div class="divider-gold"></div>
        <p style="margin-top:1.25rem;font-size:var(--text-sm);color:var(--clr-text-3);line-height:var(--leading-relaxed);">
          Child protection cases require a uniquely careful approach. At WakeelZone, we have
          developed specific protocols for these sensitive matters.
        </p>
        <div style="margin-top:1.5rem;display:flex;flex-direction:column;gap:0.875rem;">
          <?php
          $approach = [
            ['icon'=>'ph-shield-lock', 'title'=>'Absolute Anonymity',        'desc'=>'Your identity and the child\'s identity are strictly protected. No information is shared with any third party without your explicit consent.'],
            ['icon'=>'ph-heart',       'title'=>'Trauma-Informed Approach',  'desc'=>'Our lawyers are trained to handle child cases with sensitivity, avoiding re-traumatization in legal proceedings.'],
            ['icon'=>'ph-users',       'title'=>'Holistic Support',          'desc'=>'We coordinate with child protection authorities, NGOs, and medical professionals where needed — you don\'t navigate this alone.'],
            ['icon'=>'ph-clock',       'title'=>'Urgent Response',           'desc'=>'Child safety emergencies are treated as highest priority. We mobilize legal resources immediately for urgent protection orders.'],
          ];
          foreach ($approach as $j => $a): ?>
          <div style="display:flex;gap:0.875rem;align-items:flex-start;" class="reveal delay-<?php echo $j+1; ?>">
            <div style="width:44px;height:44px;flex-shrink:0;background:var(--clr-gold-50);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;">
              <i class="ph <?php echo $a['icon']; ?>" style="font-size:1.125rem;color:var(--clr-gold);"></i>
            </div>
            <div>
              <h4 style="font-size:var(--text-sm);font-weight:700;color:var(--clr-text);margin-bottom:0.25rem;"><?php echo $a['title']; ?></h4>
              <p style="font-size:var(--text-xs);color:var(--clr-text-3);line-height:var(--leading-relaxed);margin:0;"><?php echo $a['desc']; ?></p>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="reveal-right">
        <div style="background:var(--clr-surface);border:2px solid rgba(220,38,38,0.2);border-radius:var(--radius-xl);padding:2rem;">
          <div style="display:flex;align-items:center;gap:0.875rem;margin-bottom:1.25rem;">
            <div style="width:52px;height:52px;background:#fee2e2;border-radius:50%;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
              <i class="ph ph-warning" style="font-size:1.375rem;color:#dc2626;"></i>
            </div>
            <h3 style="font-size:var(--text-base);font-weight:800;color:#dc2626;">Emergency Contacts for Child Safety</h3>
          </div>
          <?php
          $emergency = [
            ['num'=>'15',   'label'=>'Police Emergency',              'note'=>'Available nationwide 24/7'],
            ['num'=>'1093', 'label'=>'Punjab Child Protection Helpline','note'=>'Punjab — Child Protection & Welfare Bureau'],
            ['num'=>'1099', 'label'=>'ZARRA Alert Helpline',           'note'=>'Federal — Missing & abused children'],
            ['num'=>'1098', 'label'=>'Childline (Sindh)',              'note'=>'Sindh Child Protection Authority'],
            ['num'=>'0800-22227','label'=>'Sahil NGO',                 'note'=>'Child sexual abuse helpline'],
          ];
          foreach ($emergency as $e): ?>
          <div style="display:flex;justify-content:space-between;align-items:center;padding:0.75rem;margin-bottom:0.5rem;background:#fef2f2;border-radius:var(--radius-md);gap:1rem;">
            <div>
              <a href="tel:<?php echo preg_replace('/[^0-9+]/', '', $e['num']); ?>"
                 style="font-size:1.125rem;font-weight:800;color:#dc2626;text-decoration:none;">
                <?php echo $e['num']; ?>
              </a>
              <div style="font-size:var(--text-xs);font-weight:600;color:var(--clr-text);"><?php echo $e['label']; ?></div>
            </div>
            <div style="font-size:var(--text-xs);color:var(--clr-text-muted);text-align:right;max-width:55%;"><?php echo $e['note']; ?></div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ════════ FAQ ════════ -->
<section class="section">
  <div class="container" style="max-width:800px;">
    <div class="section-header center reveal">
      <span class="section-label"><i class="ph ph-question"></i> FAQ</span>
      <h2 class="heading-1">Child Protection FAQ</h2>
      <div class="divider-gold center"></div>
    </div>
    <?php
    $cp_faqs = [
      ['q'=>'Can I report child abuse anonymously in Pakistan?',
       'a'=>'Yes. You can report child abuse to WakeelZone completely anonymously — we will guide you on the process without requiring your identity. You can also report to ZARRA helpline (1099) or Punjab Child Protection (1093) as a concerned citizen. When filing an FIR, your name as complainant will be on record, but our lawyers can guide you on how to navigate this while protecting your privacy.'],
      ['q'=>'What is the process for getting emergency custody of a child at risk?',
       'a'=>'In urgent cases, a Family Court can issue an emergency interim custody order (ex-parte) on the same day of filing. You must demonstrate that the child is at immediate risk. Your lawyer files a petition under the Guardians & Wards Act 1890 with an application for urgent ad interim relief. Courts treat child welfare as paramount and can act very quickly when evidence of risk is presented.'],
      ['q'=>'What happens if the abuser is a family member?',
       'a'=>'Family member abuse is unfortunately the most common scenario. You can still file an FIR against any person — including family members — for child abuse. The police may be hesitant in family matters, but our lawyers guide you on ensuring the FIR is registered. Additionally, Child Protection Authorities can be approached to remove the child from the dangerous environment while criminal proceedings continue.'],
      ['q'=>'Can a child give evidence in a Pakistani court?',
       'a'=>'Yes. Under the Qanun-e-Shahadat Order 1984, a child\'s testimony is admissible. However, courts assess the child\'s age, understanding, and capacity to give evidence. In child abuse cases, courts make special arrangements to avoid trauma — including evidence through video link, screens, or in-camera proceedings. Our lawyers ensure the child\'s testimony is handled in the most sensitive and legally effective manner.'],
      ['q'=>'What is the penalty for child abuse in Pakistan?',
       'a'=>'Penalties vary by offence. Under ZARRA 2020, kidnapping of a child carries a minimum 14 years imprisonment. Sexual abuse of a child can attract 25 years to life imprisonment or death penalty in aggravated cases under amended PPC provisions. Child trafficking carries 7 years imprisonment under the 2002 Ordinance. Child marriage violation can result in 1 month imprisonment or fine. Our criminal lawyers pursue the maximum penalty available under law.'],
    ];
    ?>
    <div class="faq-list reveal d-1">
      <?php foreach ($cp_faqs as $i => $faq): ?>
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
      <i class="ph ph-baby"></i> Child Protection Specialists
    </span>
    <h2 class="heading-1 reveal" style="color:var(--clr-text-inverse);margin-bottom:0.75rem;">
      Is a Child at Risk? Get Legal Help Now.
    </h2>
    <p class="reveal d-1" style="color:rgba(255,255,255,0.7);max-width:520px;margin:0 auto 1.75rem;line-height:var(--leading-relaxed);">
      Our child protection lawyers are available 24/7. Consultations are completely anonymous
      and confidential. Every child deserves protection under Pakistan law.
    </p>
    <div class="cta-btns reveal d-2">
      <a href="tel:<?php echo preg_replace('/\s+/', '', HELPLINE_NUMBER); ?>" class="btn btn-gold btn-lg">
        <i class="ph ph-phone-call"></i> Call <?php echo HELPLINE_NUMBER; ?>
      </a>
      <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>" target="_blank" rel="noopener" class="btn btn-outline-white btn-lg">
        <i class="ph ph-whatsapp-logo"></i> WhatsApp Us
      </a>
      <a href="female-lawyers.php" class="btn btn-outline-white btn-lg">
        <i class="ph ph-users"></i> Request Female Lawyer
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
