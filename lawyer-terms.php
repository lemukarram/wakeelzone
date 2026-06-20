<?php
require_once 'config.php';
require_once 'includes/data.php';
$pageTitle = 'Lawyer Terms & Conditions';
$pageDesc  = 'WakeelZone Lawyer Terms & Conditions — Requirements for verified lawyers joining Pakistan\'s premier anonymous legal consultation platform. PBC enrollment, ethics, and platform rules.';
include 'includes/head.php';
include 'includes/nav.php';
?>

<!-- Page Header -->
<div class="page-header">
  <div class="container page-header-inner">
    <h1 class="page-header-title heading-1">Lawyer Terms &amp; Conditions</h1>
    <p class="page-header-sub">Standards and obligations for advocates joining the WakeelZone verified network.</p>
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <span class="breadcrumb-item"><a href="index.php">Home</a></span>
      <span class="breadcrumb-sep"><i class="ph ph-caret-right"></i></span>
      <span class="breadcrumb-item">Lawyer Terms</span>
    </nav>
  </div>
</div>

<!-- ════════ LAWYER TERMS CONTENT ════════ -->
<section class="section">
  <div class="container">
    <div style="max-width:860px;margin-inline:auto;">

      <!-- Last Updated Banner -->
      <div class="reveal" style="background:var(--clr-primary-50);border:1px solid rgba(27,58,107,0.15);border-radius:var(--radius-lg);padding:1.25rem 1.75rem;display:flex;align-items:center;gap:1rem;margin-bottom:2.5rem;">
        <i class="ph ph-calendar-check" style="font-size:1.5rem;color:var(--clr-primary);flex-shrink:0;"></i>
        <div>
          <span style="font-size:var(--text-xs);font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:var(--clr-primary);">Last Updated</span>
          <p style="font-size:var(--text-sm);font-weight:600;color:var(--clr-text);margin-top:0.125rem;">January 1, 2026</p>
        </div>
      </div>

      <!-- Intro Notice -->
      <div class="reveal" style="background:linear-gradient(135deg,var(--clr-primary),var(--clr-primary-light));border-radius:var(--radius-lg);padding:2rem;margin-bottom:2.5rem;position:relative;overflow:hidden;">
        <div style="position:absolute;inset:0;background-image:radial-gradient(circle,rgba(255,255,255,0.04) 1px,transparent 1px);background-size:20px 20px;"></div>
        <div style="position:relative;z-index:1;display:flex;align-items:flex-start;gap:1.25rem;">
          <i class="ph ph-identification-badge" style="font-size:2.5rem;color:var(--clr-gold);flex-shrink:0;"></i>
          <div>
            <h3 style="color:#fff;font-weight:700;margin-bottom:0.5rem;font-size:var(--text-lg);">For Verified Legal Professionals Only</h3>
            <p style="color:rgba(255,255,255,0.75);font-size:var(--text-sm);line-height:var(--leading-relaxed);">
              By registering as a lawyer on WakeelZone, you enter into a binding agreement with WakeelZone Legal Services Platform. These Terms govern your profile, client interactions, professional obligations, and platform usage. They supplement — and do not replace — your duties under Pakistan Bar Council rules.
            </p>
          </div>
        </div>
      </div>

      <?php
      $lawyer_terms = [
        [
          'num'   => '1',
          'icon'  => 'ph-identification-card',
          'title' => 'Eligibility Requirements',
          'body'  => '<p>To register as a lawyer on WakeelZone, you must:</p>
          <ul class="lterms-list" style="margin-top:0.875rem;">
            <li><i class="ph ph-check-circle"></i> Be an <strong>enrolled advocate</strong> with the Pakistan Bar Council (PBC) or a recognized Provincial Bar Council (Lahore, Sindh, Peshawar, or Balochistan)</li>
            <li><i class="ph ph-check-circle"></i> Hold a <strong>valid, current enrollment number</strong> that is not suspended, cancelled, or under disciplinary proceedings</li>
            <li><i class="ph ph-check-circle"></i> Hold a valid LLB degree (or LLM/SJD) from a recognized institution in Pakistan or abroad</li>
            <li><i class="ph ph-check-circle"></i> Be at least 22 years of age and a citizen of Pakistan</li>
            <li><i class="ph ph-check-circle"></i> Not have any unresolved criminal convictions involving moral turpitude</li>
          </ul>
          <p style="margin-top:1rem;font-size:var(--text-sm);color:var(--clr-text-muted);">Foreign-qualified lawyers must have their credentials recognized by the PBC to be eligible.</p>',
        ],
        [
          'num'   => '2',
          'icon'  => 'ph-seal-check',
          'title' => 'Mandatory Verification',
          'body'  => '<p>Before your profile is activated on WakeelZone:</p>
          <ul class="lterms-list" style="margin-top:0.875rem;">
            <li><i class="ph ph-check-circle"></i> You must submit a copy of your valid <strong>Bar Council enrollment certificate</strong></li>
            <li><i class="ph ph-check-circle"></i> Your enrollment number will be <strong>cross-checked against official Pakistan Bar Council and Provincial Bar Council records</strong></li>
            <li><i class="ph ph-check-circle"></i> You must submit a valid CNIC copy for identity verification</li>
            <li><i class="ph ph-check-circle"></i> Your submitted credentials are subject to background review and verification by our legal team</li>
            <li><i class="ph ph-check-circle"></i> Verification typically takes <strong>2-3 business days</strong>; you will be notified by email upon activation</li>
          </ul>
          <p style="margin-top:1rem;font-size:var(--text-sm);color:var(--clr-text-3);">WakeelZone reserves the right to reject any application that fails our verification standards, without being required to provide reasons.</p>',
        ],
        [
          'num'   => '3',
          'icon'  => 'ph-user-circle-check',
          'title' => 'Profile Accuracy',
          'body'  => '<p>You are legally responsible for the accuracy of your WakeelZone profile. You must:</p>
          <ul class="lterms-list" style="margin-top:0.875rem;">
            <li><i class="ph ph-caret-right"></i> Keep your <strong>practice areas</strong> updated and accurately reflect your current expertise</li>
            <li><i class="ph ph-caret-right"></i> List only courts in which you hold <strong>active enrollment</strong> (District, High Court, Supreme Court, etc.)</li>
            <li><i class="ph ph-caret-right"></i> Accurately represent your <strong>years of experience</strong> and specialization</li>
            <li><i class="ph ph-caret-right"></i> Promptly notify WakeelZone of any change in your Bar Council status, suspension, or disciplinary proceedings</li>
            <li><i class="ph ph-caret-right"></i> Keep contact details and availability status current to ensure clients are properly matched</li>
          </ul>
          <p style="margin-top:1rem;font-size:var(--text-sm);color:var(--clr-text-3);">False or misleading profile information is grounds for immediate suspension and may be reported to the relevant Bar Council.</p>',
        ],
        [
          'num'   => '4',
          'icon'  => 'ph-handshake',
          'title' => 'Client Interactions',
          'body'  => '<p>All client interactions on WakeelZone are governed by the following rules:</p>
          <ul class="lterms-list" style="margin-top:0.875rem;">
            <li><i class="ph ph-caret-right"></i> <strong>All consultations must occur through the WakeelZone platform.</strong> Direct solicitation of clients outside the platform using contact information obtained through WakeelZone is strictly prohibited.</li>
            <li><i class="ph ph-caret-right"></i> Clients consult anonymously. You must not attempt to identify a client beyond what they voluntarily disclose.</li>
            <li><i class="ph ph-caret-right"></i> You must respond to matched client inquiries within a <strong>reasonable timeframe</strong> (target: within 4 hours during business hours)</li>
            <li><i class="ph ph-caret-right"></i> Treat all clients with professionalism, respect, and dignity, regardless of the nature of their legal matter</li>
            <li><i class="ph ph-caret-right"></i> Formal legal representation requires a <strong>separate written engagement letter</strong> between you and the client — not through WakeelZone</li>
          </ul>',
        ],
        [
          'num'   => '5',
          'icon'  => 'ph-lock',
          'title' => 'Confidentiality Obligations',
          'body'  => '<p>As a practicing advocate, you are bound by strict confidentiality obligations:</p>
          <ul class="lterms-list" style="margin-top:0.875rem;">
            <li><i class="ph ph-shield-check"></i> You must maintain <strong>client confidentiality</strong> in accordance with Pakistan Bar Council Canons of Professional Conduct and Etiquette</li>
            <li><i class="ph ph-shield-check"></i> Information shared by clients during consultations is protected by <strong>legal professional privilege</strong> and must not be disclosed to any third party</li>
            <li><i class="ph ph-shield-check"></i> Client data obtained through WakeelZone must not be stored, shared, or used outside the scope of the consultation without express written client consent</li>
            <li><i class="ph ph-shield-check"></i> The obligation of confidentiality survives the termination of this agreement and the conclusion of any consultation</li>
          </ul>
          <p style="margin-top:1rem;font-size:var(--text-sm);color:var(--clr-text-3);">These obligations are in addition to, and consistent with, the Legal Practitioners and Bar Councils Act 1973.</p>',
        ],
        [
          'num'   => '6',
          'icon'  => 'ph-scales',
          'title' => 'Professional Standards',
          'body'  => '<p>All lawyers on WakeelZone must:</p>
          <ul class="lterms-list" style="margin-top:0.875rem;">
            <li><i class="ph ph-check-circle"></i> Strictly adhere to the <strong>Pakistan Bar Council Code of Professional Conduct</strong></li>
            <li><i class="ph ph-check-circle"></i> Provide honest, competent, and diligent legal guidance to all clients</li>
            <li><i class="ph ph-check-circle"></i> Clearly communicate any limitations in your expertise — do not advise on matters outside your competence</li>
            <li><i class="ph ph-check-circle"></i> Disclose any potential <strong>conflict of interest</strong> before proceeding with a consultation</li>
            <li><i class="ph ph-check-circle"></i> Maintain valid continuing legal education (CLE) as required by your Bar Council</li>
            <li><i class="ph ph-check-circle"></i> Uphold the dignity of the legal profession in all platform interactions</li>
          </ul>',
        ],
        [
          'num'   => '7',
          'icon'  => 'ph-currency-pkr',
          'title' => 'Fee Structure & Commission',
          'body'  => '<p>The financial terms of your engagement with WakeelZone:</p>
          <ul class="lterms-list" style="margin-top:0.875rem;">
            <li><i class="ph ph-caret-right"></i> WakeelZone retains a <strong>platform commission</strong> from each consultation fee. The specific commission rate is disclosed in your lawyer registration agreement.</li>
            <li><i class="ph ph-caret-right"></i> <strong>Net fees</strong> are credited to your registered bank account on a weekly basis (every Monday)</li>
            <li><i class="ph ph-caret-right"></i> You may set your own consultation fee rate within the minimum and maximum thresholds set by WakeelZone</li>
            <li><i class="ph ph-caret-right"></i> All payments are processed in Pakistani Rupees (PKR) through approved banking channels</li>
            <li><i class="ph ph-caret-right"></i> You are solely responsible for compliance with FBR tax obligations on income earned through the platform</li>
          </ul>
          <p style="margin-top:1rem;font-size:var(--text-sm);color:var(--clr-text-3);">WakeelZone will issue monthly payment statements for your records.</p>',
        ],
        [
          'num'   => '8',
          'icon'  => 'ph-prohibit',
          'title' => 'Prohibited Conduct',
          'body'  => '<p>The following are strictly prohibited and may result in immediate suspension:</p>
          <ul class="lterms-list" style="margin-top:0.875rem;">
            <li><i class="ph ph-x-circle" style="color:var(--clr-error) !important;"></i> Submitting <strong>fake, altered, or borrowed credentials</strong> during registration</li>
            <li><i class="ph ph-x-circle" style="color:var(--clr-error) !important;"></i> <strong>Sharing client data</strong>, case information, or contact details with third parties</li>
            <li><i class="ph ph-x-circle" style="color:var(--clr-error) !important;"></i> Accepting bribes, inducements, or kickbacks in connection with any consultation or referral</li>
            <li><i class="ph ph-x-circle" style="color:var(--clr-error) !important;"></i> Acting for both sides in the same matter without full disclosure and written consent (conflicts of interest)</li>
            <li><i class="ph ph-x-circle" style="color:var(--clr-error) !important;"></i> Using threatening, abusive, or demeaning language with clients</li>
            <li><i class="ph ph-x-circle" style="color:var(--clr-error) !important;"></i> Providing legal advice in areas outside your competence without appropriate referral</li>
            <li><i class="ph ph-x-circle" style="color:var(--clr-error) !important;"></i> Circumventing WakeelZone&#39;s platform to avoid commission on referrals received through us</li>
          </ul>',
        ],
        [
          'num'   => '9',
          'icon'  => 'ph-warning',
          'title' => 'Suspension & Termination',
          'body'  => '<p>WakeelZone reserves the right to suspend or permanently terminate your account for:</p>
          <ul class="lterms-list" style="margin-top:0.875rem;">
            <li><i class="ph ph-caret-right"></i> Breach of these Terms or the Pakistan Bar Council Code of Conduct</li>
            <li><i class="ph ph-caret-right"></i> Suspension, disbarment, or disciplinary action by any Bar Council</li>
            <li><i class="ph ph-caret-right"></i> Verified client complaints of misconduct, fraud, or professional negligence</li>
            <li><i class="ph ph-caret-right"></i> Criminal conviction for an offence involving moral turpitude</li>
            <li><i class="ph ph-caret-right"></i> Failure to respond to client inquiries or maintain acceptable service standards</li>
          </ul>
          <p style="margin-top:1rem;font-size:var(--text-sm);color:var(--clr-text-3);">Upon termination, any pending payments due will be settled within 30 days, subject to deductions for verified claims against you.</p>',
        ],
        [
          'num'   => '10',
          'icon'  => 'ph-shield-warning',
          'title' => 'Indemnification',
          'body'  => '<p>By joining WakeelZone, you agree to:</p>
          <ul class="lterms-list" style="margin-top:0.875rem;">
            <li><i class="ph ph-caret-right"></i> <strong>Fully indemnify</strong> and hold WakeelZone, its directors, officers, and employees harmless from any claims, damages, losses, or expenses arising from your legal advice, conduct, or representations made to clients</li>
            <li><i class="ph ph-caret-right"></i> Maintain adequate professional indemnity insurance coverage as recommended by the PBC</li>
            <li><i class="ph ph-caret-right"></i> Promptly notify WakeelZone of any client complaints or threatened legal action related to consultations conducted through the platform</li>
          </ul>
          <p style="margin-top:1rem;font-size:var(--text-sm);color:var(--clr-text-3);">WakeelZone is a technology platform and bears no responsibility for the quality or legal accuracy of advice you provide.</p>',
        ],
        [
          'num'   => '11',
          'icon'  => 'ph-globe',
          'title' => 'Governing Law',
          'body'  => '<p>These Lawyer Terms are governed exclusively by the laws of the Islamic Republic of Pakistan, including:</p>
          <ul class="lterms-list" style="margin-top:0.875rem;">
            <li><i class="ph ph-caret-right"></i> The Legal Practitioners and Bar Councils Act 1973</li>
            <li><i class="ph ph-caret-right"></i> Pakistan Bar Council Canons of Professional Conduct and Etiquette</li>
            <li><i class="ph ph-caret-right"></i> The Prevention of Electronic Crimes Act 2016 (PECA) — for digital conduct</li>
            <li><i class="ph ph-caret-right"></i> The Contract Act 1872 — for enforceability of this agreement</li>
          </ul>
          <p style="margin-top:1rem;font-size:var(--text-sm);color:var(--clr-text-3);">All disputes shall be submitted to the exclusive jurisdiction of the courts in Islamabad, Pakistan.</p>',
        ],
      ];

      foreach ($lawyer_terms as $i => $term): ?>
      <div class="lterms-card reveal">
        <div class="lterms-card-header">
          <div class="lterms-num"><?php echo $term['num']; ?></div>
          <div class="lterms-icon-wrap"><i class="ph <?php echo $term['icon']; ?>"></i></div>
          <h2 class="heading-3"><?php echo htmlspecialchars($term['title']); ?></h2>
        </div>
        <div class="lterms-card-body">
          <?php echo $term['body']; ?>
        </div>
      </div>
      <?php endforeach; ?>

      <!-- Contact Section -->
      <div class="lterms-card reveal" style="background:linear-gradient(135deg,var(--clr-primary),var(--clr-primary-light));color:var(--clr-text-inverse);border:none;">
        <div class="lterms-card-header">
          <div class="lterms-num" style="background:var(--clr-gold);color:var(--clr-primary-dark);">12</div>
          <div class="lterms-icon-wrap" style="background:rgba(255,255,255,0.15);"><i class="ph ph-envelope" style="color:#fff;"></i></div>
          <h2 class="heading-3" style="color:#fff;">Contact for Lawyers</h2>
        </div>
        <div class="lterms-card-body">
          <p style="color:rgba(255,255,255,0.8);">For all lawyer-specific inquiries, account support, payment issues, or to report a client complaint, contact our dedicated lawyer relations team:</p>
          <div style="display:flex;flex-direction:column;gap:0.75rem;margin-top:1.25rem;">
            <div style="display:flex;align-items:center;gap:0.75rem;">
              <i class="ph ph-envelope" style="color:var(--clr-gold);font-size:1.25rem;"></i>
              <a href="mailto:lawyers@wakeelzone.com" style="color:var(--clr-gold);font-weight:600;">lawyers@wakeelzone.com</a>
            </div>
            <div style="display:flex;align-items:center;gap:0.75rem;">
              <i class="ph ph-phone-call" style="color:var(--clr-gold);font-size:1.25rem;"></i>
              <a href="tel:<?php echo preg_replace('/\s+/', '', HELPLINE_NUMBER); ?>" style="color:var(--clr-gold);font-weight:600;"><?php echo HELPLINE_NUMBER; ?> (Select Option 2 for Lawyer Support)</a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ════════ JOIN CTA ════════ -->
<section class="section bg-surface-2">
  <div class="container">
    <div style="max-width:720px;margin-inline:auto;text-align:center;" class="reveal">
      <span class="section-label"><i class="ph ph-identification-badge"></i> Join Our Network</span>
      <h2 class="heading-1" style="margin-bottom:1rem;">Ready to Grow Your Practice?</h2>
      <div class="divider-gold center"></div>
      <p class="lead" style="margin-top:1.25rem;margin-bottom:2rem;">
        Join 2,500+ verified lawyers on WakeelZone. Access a steady stream of pre-qualified clients across all practice areas. Your next client is one call away.
      </p>
      <div style="display:flex;flex-wrap:wrap;gap:1rem;justify-content:center;margin-bottom:2rem;">
        <?php
        $lawyer_benefits = [
          ['icon'=>'ph-users',               'text'=>'Access to 10,000+ clients'],
          ['icon'=>'ph-currency-pkr',        'text'=>'Weekly payments — no delays'],
          ['icon'=>'ph-calendar-blank',      'text'=>'Flexible scheduling'],
          ['icon'=>'ph-shield-check',        'text'=>'Platform protection'],
          ['icon'=>'ph-chart-line-up',       'text'=>'Grow your reputation'],
          ['icon'=>'ph-globe',               'text'=>'Serve overseas Pakistanis'],
        ];
        foreach ($lawyer_benefits as $b): ?>
        <div style="display:flex;align-items:center;gap:0.5rem;background:var(--clr-surface);border:1px solid var(--clr-border);border-radius:var(--radius-full);padding:0.5rem 1rem;font-size:var(--text-sm);font-weight:500;">
          <i class="ph <?php echo $b['icon']; ?>" style="color:var(--clr-primary);font-size:1rem;"></i>
          <?php echo htmlspecialchars($b['text']); ?>
        </div>
        <?php endforeach; ?>
      </div>
      <a href="lawyer-registration.php" class="btn btn-primary btn-xl">
        <i class="ph ph-identification-badge"></i> Apply to Join WakeelZone
      </a>
    </div>
  </div>
</section>

<!-- ════════ BOTTOM CTA ════════ -->
<section class="cta-section">
  <div class="container cta-inner">
    <h2 class="heading-1 reveal" style="color:var(--clr-text-inverse);margin-bottom:0.75rem;">
      Questions About Joining?
    </h2>
    <p class="reveal d-1" style="color:rgba(255,255,255,0.7);font-size:var(--text-base);max-width:480px;margin:0 auto 2rem;line-height:var(--leading-relaxed);">
      Our lawyer relations team is available to answer all your questions about verification, fees, and onboarding.
    </p>
    <div class="cta-btns reveal d-2">
      <a href="mailto:lawyers@wakeelzone.com" class="btn btn-gold btn-lg">
        <i class="ph ph-envelope"></i> Email Lawyer Support
      </a>
      <a href="tel:<?php echo preg_replace('/\s+/', '', HELPLINE_NUMBER); ?>" class="btn btn-outline-white btn-lg">
        <i class="ph ph-phone-call"></i> Call Us Now
      </a>
    </div>
  </div>
</section>

<style>
.lterms-card {
  background: var(--clr-surface);
  border: 1px solid var(--clr-border-light);
  border-radius: var(--radius-lg);
  padding: 2rem;
  margin-bottom: 1.5rem;
  box-shadow: var(--shadow-sm);
  transition: box-shadow var(--ease-base), transform var(--ease-base);
}
.lterms-card:hover {
  box-shadow: var(--shadow-md);
  transform: translateY(-1px);
}
.lterms-card-header {
  display: flex;
  align-items: center;
  gap: 1rem;
  margin-bottom: 1.25rem;
}
.lterms-num {
  width: 40px;
  height: 40px;
  background: var(--clr-primary);
  color: var(--clr-text-inverse);
  border-radius: var(--radius-md);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1rem;
  font-weight: 800;
  flex-shrink: 0;
}
.lterms-icon-wrap {
  width: 40px;
  height: 40px;
  background: var(--clr-gold-50);
  border-radius: var(--radius-md);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.25rem;
  color: var(--clr-gold);
  flex-shrink: 0;
}
.lterms-card-body {
  font-size: var(--text-sm);
  line-height: var(--leading-relaxed);
  color: var(--clr-text-3);
}
.lterms-list {
  display: flex;
  flex-direction: column;
  gap: 0.625rem;
  padding-left: 0;
  list-style: none;
}
.lterms-list li {
  display: flex;
  align-items: flex-start;
  gap: 0.625rem;
  font-size: var(--text-sm);
  color: var(--clr-text-3);
}
.lterms-list li i {
  color: var(--clr-primary);
  font-size: 1rem;
  flex-shrink: 0;
  margin-top: 2px;
}
.lterms-list li i.ph-check-circle  { color: var(--clr-success); }
.lterms-list li i.ph-shield-check  { color: var(--clr-gold); }
@media (max-width: 639px) {
  .lterms-card { padding: 1.5rem 1.25rem; }
  .lterms-card-header { flex-wrap: wrap; }
  .lterms-num, .lterms-icon-wrap { width: 36px; height: 36px; }
}
</style>

<?php include 'includes/footer.php'; ?>
