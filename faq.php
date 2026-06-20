<?php
require_once 'config.php';
require_once 'includes/data.php';
$pageTitle = 'Frequently Asked Questions';
$pageDesc  = 'WakeelZone FAQ — Answers to common questions about online legal consultation in Pakistan, anonymity, lawyer verification, Khula, FIR, PECA, and more.';
include 'includes/head.php';
include 'includes/nav.php';

$faq_categories = [
  [
    'label' => 'General Questions',
    'icon'  => 'ph-question',
    'items' => [
      [
        'q' => 'Is online legal consultation valid in Pakistan?',
        'a' => 'Yes, online legal consultation is completely valid in Pakistan. You can receive professional legal advice, case analysis, strategic guidance, and document review through our platform — all fully legitimate. For formal court proceedings, your lawyer will handle all required in-person filings, appearances, and submissions on your behalf without you needing to be present in the first instance. WakeelZone bridges the gap between the client and the court by connecting you with a verified advocate who acts for you.',
      ],
      [
        'q' => 'How does the anonymous consultation work?',
        'a' => 'When you call our helpline, our legal executive collects a brief description of your legal issue and your preferences (city, language, practice area). Your personal details — name, phone number, CNIC — are masked and never transmitted to the lawyer. The lawyer is only briefed on the legal matter itself. You remain completely anonymous throughout the initial consultation phase. You only choose to reveal your identity if and when you decide to formally engage that lawyer for full representation.',
      ],
      [
        'q' => 'Are all lawyers on WakeelZone verified?',
        'a' => 'Absolutely — verification is non-negotiable at WakeelZone. Every lawyer on our platform goes through a mandatory multi-step process: (1) submission of their Pakistan Bar Council or Provincial Bar Council enrollment certificate, (2) cross-checking their enrollment number against official PBC records, (3) identity verification via CNIC, and (4) a profile review by our legal team. Lawyers with any disciplinary action, suspension, or disbarment history are not admitted. We repeat verification checks periodically to ensure ongoing compliance.',
      ],
      [
        'q' => 'Which languages are consultations available in?',
        'a' => 'WakeelZone offers consultations in all major languages of Pakistan including Urdu, English, Punjabi, Sindhi, Pashto, and Balochi. When you call our helpline, simply let the executive know your preferred language and we will match you with a lawyer who is fluent in that language. This ensures you can communicate your legal issue clearly and comfortably without a language barrier.',
      ],
    ],
  ],
  [
    'label' => 'Services & Pricing',
    'icon'  => 'ph-currency-pkr',
    'items' => [
      [
        'q' => 'What are the consultation charges?',
        'a' => 'WakeelZone operates on a fully transparent, pay-per-consultation model with no hidden charges and no monthly subscriptions. Consultation fees depend on the lawyer\'s experience, specialization, and the duration of the session. All fees are disclosed to you upfront before any session begins — you will never be charged without knowing the cost first. Initial 10-minute guidance calls are available at minimal cost. For current rates, contact our helpline at ' . HELPLINE_NUMBER . '.',
      ],
      [
        'q' => 'Can I consult for Supreme Court matters?',
        'a' => 'Yes — WakeelZone\'s network includes Supreme Court of Pakistan advocates who are enrolled before the apex court. We also have specialists for the Islamabad High Court, Lahore High Court, Sindh High Court, Peshawar High Court, Balochistan High Court, and the Federal Shariat Court. Additionally, we cover specialized tribunals including ATIR (Appellate Tribunal Inland Revenue), EOBI Tribunal, Labour Courts, Consumer Courts, and the Intellectual Property Tribunal.',
      ],
    ],
  ],
  [
    'label' => 'For Clients',
    'icon'  => 'ph-user',
    'items' => [
      [
        'q' => 'What if I am an overseas Pakistani?',
        'a' => 'WakeelZone specifically serves overseas Pakistanis who need legal assistance in Pakistan without traveling back. You can consult from anywhere in the world via phone or WhatsApp. Our lawyers handle all court appearances, filings, documentation, and property matters on your behalf using a Power of Attorney. We cover NADRA matters (NICOP, POC, CNIC), inheritance and succession, property disputes, and full remote court representation. Our helpline team is available across multiple time zones.',
      ],
      [
        'q' => 'How do I register as a lawyer on WakeelZone?',
        'a' => 'Lawyers can apply by visiting our <a href="lawyer-registration.php" style="color:var(--clr-primary);font-weight:600;">Lawyer Registration</a> page and completing the online form with your Bar Council enrollment number, practice areas, court enrollments, and contact details. Our verification team will cross-check your credentials with PBC records and activate your profile within 2-3 business days. For any queries about lawyer registration, email <a href="mailto:lawyers@wakeelzone.com" style="color:var(--clr-primary);font-weight:600;">lawyers@wakeelzone.com</a>.',
      ],
      [
        'q' => 'Which cities does WakeelZone cover?',
        'a' => 'WakeelZone has lawyers in all major Pakistani cities including Karachi, Lahore, Islamabad, Rawalpindi, Peshawar, Quetta, Faisalabad, Multan, Sialkot, Gujranwala, Hyderabad, Sukkur, Bahawalpur, Sargodha, and Abbottabad. Our network also extends to district-level courts across all four provinces — Punjab, Sindh, KPK (Khyber Pakhtunkhwa), and Balochistan — as well as the Islamabad Capital Territory and Azad Jammu & Kashmir.',
      ],
    ],
  ],
  [
    'label' => 'Legal Knowledge',
    'icon'  => 'ph-book-open',
    'items' => [
      [
        'q' => 'What is the difference between Khula and Talaq in Pakistan?',
        'a' => '<strong>Talaq</strong> is a husband-initiated divorce. Under Muslim Family Laws Ordinance 1961, the husband pronounces Talaq and must send a written notice to the Chairman of the Union Council within 90 days. The Talaq becomes effective after 90 days (during which reconciliation can occur). It must be registered with NADRA for official documentation.<br><br><strong>Khula</strong> is a wife-initiated dissolution of marriage through Family Court. The wife files a petition seeking dissolution, usually by returning the Mehr (dower) paid at marriage. The court process typically takes 3-6 months. Khula does not require the husband\'s consent — the court can grant it if reconciliation fails. WakeelZone has specialist family lawyers available 24/7 for both procedures.',
      ],
      [
        'q' => 'How do I register an FIR in Pakistan?',
        'a' => 'An FIR (First Information Report) must be registered at the <strong>nearest police station</strong> in the jurisdiction where the offence occurred. Steps: (1) Visit the Station House Officer (SHO) and request FIR registration. (2) Provide a written complaint if possible. (3) Police must register the FIR for cognizable offences — they cannot legally refuse.<br><br>If the police refuse to register your FIR, you have legal options: (a) Approach the DSP or SP (Superintendent of Police) of the area, (b) Send a complaint to the District Police Officer (DPO), (c) File a private complaint directly before the Judicial Magistrate under Section 200 CrPC, or (d) Approach the High Court for appropriate directions. WakeelZone\'s criminal lawyers can assist you with each step.',
      ],
      [
        'q' => 'What is PECA 2016 and how does it affect me?',
        'a' => 'The <strong>Prevention of Electronic Crimes Act 2016 (PECA)</strong> is Pakistan\'s primary legislation governing cyber crimes. Key offences include: unauthorized access to data (Section 3), cyberstalking (Section 24), online harassment (Section 24), electronic fraud (Section 9), identity theft (Section 16), distribution of harmful content (Section 21), and fake accounts (Section 20).<br><br>If you are a <strong>victim</strong> of a cyber crime, report to: (1) FIA Cybercrime Reporting Centre (CCRC) online at <strong>fia.gov.pk</strong>, (2) Call FIA at 9911, or (3) Contact WakeelZone for legal representation before FIA and courts. Penalties under PECA range from fines to 7 years\' imprisonment depending on the offence.',
      ],
      [
        'q' => 'How long does a property case take in Pakistan?',
        'a' => 'The timeline for property cases in Pakistan varies significantly by type: <br><br><strong>Simple registration matters</strong> (transfer of property, mutation): A few weeks to a few months if documentation is complete. <strong>Title disputes</strong> (ownership contested): Typically 2-5 years in civil courts, depending on court workload and complexity. <strong>Builder-buyer disputes</strong> before Housing Authority tribunals: 6-18 months. <strong>Inheritance partition suits</strong>: 1-3 years.<br><br>Factors that can speed up resolution include having complete documentation, strong legal representation, and pursuing ADR (Alternative Dispute Resolution) or pre-suit settlement where possible. WakeelZone\'s property lawyers can give you a realistic timeline assessment for your specific case.',
      ],
      [
        'q' => 'Can WakeelZone help with NADRA matters for overseas Pakistanis?',
        'a' => 'Yes — WakeelZone has dedicated specialists for overseas Pakistani NADRA matters. We assist with: <strong>NICOP</strong> (National Identity Card for Overseas Pakistanis) — new applications, renewals, and corrections. <strong>POC</strong> (Pakistan Origin Card) — for foreign nationals of Pakistani origin. <strong>CNIC</strong> issues — corrections, duplicate CNIC, deceased name removal, and inheritance updates. <strong>Family Registration Certificates</strong> for overseas families. All NADRA paperwork and proceedings can be handled by our lawyers on your behalf via Power of Attorney — you do not need to travel to Pakistan.',
      ],
    ],
  ],
  [
    'label' => 'Platform Safety',
    'icon'  => 'ph-shield-check',
    'items' => [
      [
        'q' => 'What courts does WakeelZone cover?',
        'a' => 'WakeelZone covers the full spectrum of Pakistani courts and tribunals: <strong>Superior Courts</strong>: Supreme Court of Pakistan, all five High Courts (Lahore, Sindh, Peshawar, Balochistan, Islamabad), Federal Shariat Court. <strong>Civil Courts</strong>: District & Sessions Courts, Civil Courts, Family Courts. <strong>Criminal Courts</strong>: Magistrate Courts, Sessions Courts, Special Courts (Anti-Terrorism, Banking, Customs). <strong>Specialized Tribunals</strong>: ATIR (Tax), Labour Appellate Tribunal, EOBI Tribunal, Consumer Courts, IP Tribunal, Environment Tribunal, Rent Controllers. Our network ensures you get the right specialist for your specific court.',
      ],
      [
        'q' => 'Is my personal information safe with WakeelZone?',
        'a' => 'Yes — data security is a cornerstone of WakeelZone\'s platform. We implement: <strong>SSL Encryption</strong> on all data transmissions, <strong>Secure Servers</strong> with restricted access, <strong>No Third-Party Data Selling</strong> — we never sell or rent your data, <strong>Anonymization</strong> of consultation data, and <strong>Regular Security Audits</strong>. Critically, your identity is never shared with lawyers without your explicit consent. Please review our full <a href="privacy-policy.php" style="color:var(--clr-primary);font-weight:600;">Privacy Policy</a> for complete details.',
      ],
      [
        'q' => 'How do I file a complaint against a lawyer on the platform?',
        'a' => 'Client protection is paramount at WakeelZone. If you have a complaint about a lawyer on our platform: (1) Email <a href="mailto:' . CONTACT_EMAIL . '" style="color:var(--clr-primary);font-weight:600;">' . CONTACT_EMAIL . '</a> with details of your complaint and the lawyer\'s name/profile. (2) Call our helpline at <a href="tel:' . preg_replace('/\s+/', '', HELPLINE_NUMBER) . '" style="color:var(--clr-primary);font-weight:600;">' . HELPLINE_NUMBER . '</a> and request the complaints department. Our team acknowledges all complaints within 24 hours and completes investigation within 48-72 hours. Substantiated complaints may result in lawyer suspension, and serious misconduct is reported to the relevant Bar Council.',
      ],
    ],
  ],
];
?>

<!-- Page Header -->
<div class="page-header">
  <div class="container page-header-inner">
    <h1 class="page-header-title heading-1">Frequently Asked Questions</h1>
    <p class="page-header-sub">Everything you need to know about WakeelZone and Pakistani law — answered by our legal team.</p>
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <span class="breadcrumb-item"><a href="index.php">Home</a></span>
      <span class="breadcrumb-sep"><i class="ph ph-caret-right"></i></span>
      <span class="breadcrumb-item">FAQ</span>
    </nav>
  </div>
</div>

<!-- ════════ FAQ CATEGORY NAV ════════ -->
<section class="section-sm bg-surface-2">
  <div class="container">
    <div class="faq-cat-nav reveal">
      <?php foreach ($faq_categories as $i => $cat): ?>
      <a href="#faq-cat-<?php echo $i; ?>" class="faq-cat-btn">
        <i class="ph <?php echo $cat['icon']; ?>"></i>
        <?php echo htmlspecialchars($cat['label']); ?>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ════════ FAQ SECTIONS ════════ -->
<section class="section">
  <div class="container">
    <div style="max-width:820px;margin-inline:auto;">

      <?php foreach ($faq_categories as $i => $cat): ?>
      <div id="faq-cat-<?php echo $i; ?>" class="faq-category-block">
        <div class="faq-cat-heading reveal">
          <div class="faq-cat-icon-wrap">
            <i class="ph <?php echo $cat['icon']; ?>"></i>
          </div>
          <h2 class="heading-2"><?php echo htmlspecialchars($cat['label']); ?></h2>
        </div>

        <?php foreach ($cat['items'] as $j => $faq): ?>
        <div class="faq-item reveal delay-<?php echo ($j % 3) + 1; ?>">
          <button class="faq-question" aria-expanded="false">
            <span><?php echo htmlspecialchars($faq['q']); ?></span>
            <i class="ph ph-plus faq-icon"></i>
          </button>
          <div class="faq-body">
            <p><?php echo $faq['a']; ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
      <?php endforeach; ?>

    </div>
  </div>
</section>

<!-- ════════ STILL HAVE QUESTIONS ════════ -->
<section class="section-sm bg-surface-2">
  <div class="container">
    <div style="max-width:680px;margin-inline:auto;text-align:center;" class="reveal">
      <span class="section-label"><i class="ph ph-chat-circle-dots"></i> Still Have Questions?</span>
      <h2 class="heading-2" style="margin-top:0.5rem;margin-bottom:1rem;">We're Here 24/7</h2>
      <div class="divider-gold center"></div>
      <p style="margin-top:1.25rem;font-size:var(--text-sm);color:var(--clr-text-3);line-height:var(--leading-relaxed);">
        Can't find your answer above? Our legal executives are available around the clock to address your specific situation. Call our helpline, WhatsApp us, or send a message — we respond to all queries.
      </p>
      <div style="display:flex;flex-wrap:wrap;gap:1rem;justify-content:center;margin-top:2rem;">
        <a href="tel:<?php echo preg_replace('/\s+/', '', HELPLINE_NUMBER); ?>" class="btn btn-call btn-lg">
          <i class="ph ph-phone-call"></i> Call Helpline
        </a>
        <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>" target="_blank" rel="noopener" class="wa-btn">
          <i class="ph ph-whatsapp-logo"></i> WhatsApp Us
        </a>
        <a href="contact.php" class="btn btn-outline">
          <i class="ph ph-envelope"></i> Send Message
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ════════ CTA ════════ -->
<section class="cta-section">
  <div class="container cta-inner">
    <h2 class="heading-1 reveal" style="color:var(--clr-text-inverse);margin-bottom:0.75rem;">
      Ready to Speak to a Lawyer?
    </h2>
    <p class="reveal d-1" style="color:rgba(255,255,255,0.7);font-size:var(--text-base);max-width:500px;margin:0 auto 2rem;line-height:var(--leading-relaxed);">
      Knowledge is the first step. The next step is getting personalized legal advice — anonymously, affordably, and immediately.
    </p>
    <div class="cta-btns reveal d-2">
      <a href="tel:<?php echo preg_replace('/\s+/', '', HELPLINE_NUMBER); ?>" class="btn btn-gold btn-lg">
        <i class="ph ph-phone-call"></i> Start a Consultation
      </a>
      <a href="services.php" class="btn btn-outline-white btn-lg">
        <i class="ph ph-scales"></i> Explore Legal Services
      </a>
    </div>
  </div>
</section>

<style>
/* ── FAQ Category Navigation ──────────────────── */
.faq-cat-nav {
  display: flex;
  flex-wrap: wrap;
  gap: 0.625rem;
  justify-content: center;
}
.faq-cat-btn {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  padding: 0.5rem 1.125rem;
  background: var(--clr-surface);
  border: 1px solid var(--clr-border);
  border-radius: var(--radius-full);
  font-size: var(--text-sm);
  font-weight: 600;
  color: var(--clr-text-2);
  transition: all var(--ease-base);
  text-decoration: none;
}
.faq-cat-btn:hover {
  background: var(--clr-primary);
  border-color: var(--clr-primary);
  color: #fff;
  transform: translateY(-1px);
  box-shadow: var(--shadow-navy);
}
.faq-cat-btn i { font-size: 1rem; }

/* ── FAQ Category Block ────────────────────────── */
.faq-category-block {
  margin-bottom: 3.5rem;
}
.faq-cat-heading {
  display: flex;
  align-items: center;
  gap: 1rem;
  margin-bottom: 1.5rem;
  padding-bottom: 1rem;
  border-bottom: 2px solid var(--clr-border);
}
.faq-cat-icon-wrap {
  width: 48px;
  height: 48px;
  background: var(--clr-primary);
  border-radius: var(--radius-md);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.375rem;
  color: var(--clr-gold);
  flex-shrink: 0;
}

/* ── FAQ Item ─────────────────────────────────── */
.faq-item {
  background: var(--clr-surface);
  border: 1px solid var(--clr-border-light);
  border-radius: var(--radius-lg);
  margin-bottom: 0.875rem;
  overflow: hidden;
  box-shadow: var(--shadow-xs);
  transition: box-shadow var(--ease-base);
}
.faq-item:hover  { box-shadow: var(--shadow-sm); }
.faq-item.active { border-color: var(--clr-primary); box-shadow: var(--shadow-navy); }

.faq-question {
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 1rem;
  padding: 1.25rem 1.5rem;
  font-family: var(--font);
  font-size: var(--text-sm);
  font-weight: 600;
  color: var(--clr-text);
  text-align: left;
  cursor: pointer;
  background: transparent;
  border: none;
  transition: color var(--ease-base), background var(--ease-base);
}
.faq-question:hover { color: var(--clr-primary); background: var(--clr-primary-50); }
.faq-item.active .faq-question {
  color: var(--clr-primary);
  background: var(--clr-primary-50);
}

.faq-icon {
  font-size: 1.125rem;
  color: var(--clr-gold);
  flex-shrink: 0;
  transition: transform var(--ease-base);
}
.faq-item.active .faq-icon { transform: rotate(45deg); }

.faq-body {
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.4s ease, padding 0.3s ease;
}
.faq-item.active .faq-body { max-height: 600px; }
.faq-body p {
  padding: 0 1.5rem 1.25rem;
  font-size: var(--text-sm);
  line-height: var(--leading-relaxed);
  color: var(--clr-text-3);
  border-top: 1px solid var(--clr-border-light);
  padding-top: 1rem;
}
.faq-body p a { color: var(--clr-primary); font-weight: 600; }

@media (max-width: 639px) {
  .faq-question  { padding: 1rem 1.125rem; font-size: var(--text-xs); }
  .faq-body p    { padding: 0 1.125rem 1rem; padding-top: 0.875rem; }
  .faq-cat-heading { flex-wrap: wrap; }
}
</style>

<?php include 'includes/footer.php'; ?>
