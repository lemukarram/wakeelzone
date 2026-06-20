<?php
require_once 'config.php';
require_once 'includes/data.php';
$pageTitle = 'Terms & Conditions';
$pageDesc  = 'WakeelZone Terms & Conditions — Read our client terms of service governing legal consultations, payment, user eligibility, and platform usage in Pakistan.';
include 'includes/head.php';
include 'includes/nav.php';
?>

<!-- Page Header -->
<div class="page-header">
  <div class="container page-header-inner">
    <h1 class="page-header-title heading-1">Terms &amp; Conditions</h1>
    <p class="page-header-sub">Please read these terms carefully before using WakeelZone's legal consultation services.</p>
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <span class="breadcrumb-item"><a href="index.php">Home</a></span>
      <span class="breadcrumb-sep"><i class="ph ph-caret-right"></i></span>
      <span class="breadcrumb-item">Terms &amp; Conditions</span>
    </nav>
  </div>
</div>

<!-- ════════ TERMS CONTENT ════════ -->
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

      <!-- Agreement Intro -->
      <div class="terms-card reveal">
        <div class="terms-card-header">
          <div class="terms-num">0</div>
          <h2 class="heading-3">Agreement to Terms</h2>
        </div>
        <div class="terms-card-body">
          <p>These Terms and Conditions ("Terms") govern your access to and use of <strong>WakeelZone</strong> (<a href="https://wakeelzone.com" style="color:var(--clr-primary);">wakeelzone.com</a>), operated by WakeelZone Legal Services Platform. By accessing or using our platform, you agree to be legally bound by these Terms.</p>
          <p style="margin-top:0.875rem;">If you do not agree with any part of these Terms, you must immediately discontinue your use of WakeelZone. These Terms apply to all users of the platform including clients, registered lawyers, and visitors.</p>
        </div>
      </div>

      <!-- Term 1 -->
      <div class="terms-card reveal">
        <div class="terms-card-header">
          <div class="terms-num">1</div>
          <h2 class="heading-3">Platform Description</h2>
        </div>
        <div class="terms-card-body">
          <p>WakeelZone is a <strong>digital marketplace</strong> that connects individuals seeking legal guidance with verified, licensed lawyers practicing in Pakistan. Key points:</p>
          <ul class="terms-list" style="margin-top:0.875rem;">
            <li><i class="ph ph-caret-right"></i> WakeelZone <strong>does not provide legal advice directly</strong>. We facilitate connections between clients and independent lawyers.</li>
            <li><i class="ph ph-caret-right"></i> All lawyers on the platform are independent legal practitioners and are not employees or agents of WakeelZone.</li>
            <li><i class="ph ph-caret-right"></i> WakeelZone is a technology platform, not a law firm, and is not subject to regulation as a legal services provider.</li>
            <li><i class="ph ph-caret-right"></i> The platform operates in compliance with applicable Pakistani technology and consumer protection laws.</li>
          </ul>
        </div>
      </div>

      <!-- Term 2 -->
      <div class="terms-card reveal">
        <div class="terms-card-header">
          <div class="terms-num">2</div>
          <h2 class="heading-3">User Eligibility</h2>
        </div>
        <div class="terms-card-body">
          <p>To use WakeelZone, you must:</p>
          <ul class="terms-list" style="margin-top:0.875rem;">
            <li><i class="ph ph-check-circle"></i> Be at least <strong>18 years of age</strong></li>
            <li><i class="ph ph-check-circle"></i> Be a citizen of Pakistan, a permanent resident, or an Overseas Pakistani with legal matters in Pakistan</li>
            <li><i class="ph ph-check-circle"></i> Have the legal capacity to enter into binding agreements</li>
            <li><i class="ph ph-check-circle"></i> Not be barred from receiving services under any applicable law</li>
          </ul>
          <p style="margin-top:1rem;font-size:var(--text-sm);color:var(--clr-text-3);">By using WakeelZone, you represent and warrant that you meet all of the above eligibility requirements.</p>
        </div>
      </div>

      <!-- Term 3 -->
      <div class="terms-card reveal">
        <div class="terms-card-header">
          <div class="terms-num">3</div>
          <h2 class="heading-3">Account &amp; Privacy</h2>
        </div>
        <div class="terms-card-body">
          <p>WakeelZone is built on an <strong>anonymity-first</strong> model:</p>
          <ul class="terms-list" style="margin-top:0.875rem;">
            <li><i class="ph ph-shield-check"></i> You may use the platform <strong>anonymously</strong> — no mandatory registration is required to initiate a consultation</li>
            <li><i class="ph ph-shield-check"></i> You are solely responsible for the accuracy and truthfulness of the information you provide</li>
            <li><i class="ph ph-shield-check"></i> Providing false, misleading, or fraudulent information may result in termination of services</li>
            <li><i class="ph ph-shield-check"></i> You are responsible for maintaining the confidentiality of any account credentials you create</li>
          </ul>
          <p style="margin-top:1rem;font-size:var(--text-sm);color:var(--clr-text-3);">Please refer to our <a href="privacy-policy.php" style="color:var(--clr-primary);font-weight:600;">Privacy Policy</a> for detailed information on how your data is handled.</p>
        </div>
      </div>

      <!-- Term 4 -->
      <div class="terms-card reveal">
        <div class="terms-card-header">
          <div class="terms-num">4</div>
          <h2 class="heading-3">Consultation Services</h2>
        </div>
        <div class="terms-card-body">
          <p>Consultations through WakeelZone are subject to the following terms:</p>
          <ul class="terms-list" style="margin-top:0.875rem;">
            <li><i class="ph ph-caret-right"></i> Consultations are <strong>for informational and guidance purposes only</strong> and do not constitute formal legal representation</li>
            <li><i class="ph ph-caret-right"></i> Formal legal representation — including court appearances, filings, and document drafting — requires a <strong>separate written agreement</strong> directly with the lawyer</li>
            <li><i class="ph ph-caret-right"></i> The information exchanged during consultations is subject to legal professional privilege and should be treated as confidential</li>
            <li><i class="ph ph-caret-right"></i> WakeelZone does not guarantee specific legal outcomes from any consultation</li>
            <li><i class="ph ph-caret-right"></i> You should independently verify any legal advice before acting upon it</li>
          </ul>
        </div>
      </div>

      <!-- Term 5 -->
      <div class="terms-card reveal">
        <div class="terms-card-header">
          <div class="terms-num">5</div>
          <h2 class="heading-3">Payment Terms</h2>
        </div>
        <div class="terms-card-body">
          <p>WakeelZone operates on a transparent, pay-per-consultation model:</p>
          <ul class="terms-list" style="margin-top:0.875rem;">
            <li><i class="ph ph-check-circle"></i> <strong>No subscriptions</strong> or hidden monthly charges apply to clients</li>
            <li><i class="ph ph-check-circle"></i> Consultation fees are <strong>disclosed upfront</strong> before each session begins — you will always know what you are paying before committing</li>
            <li><i class="ph ph-check-circle"></i> Fees are charged in Pakistani Rupees (PKR) unless otherwise agreed</li>
            <li><i class="ph ph-check-circle"></i> Refund requests for consultations must be submitted within 24 hours and are subject to review</li>
            <li><i class="ph ph-check-circle"></i> WakeelZone reserves the right to update pricing with prior notice</li>
          </ul>
          <div style="background:var(--clr-gold-50);border:1px solid rgba(201,168,76,0.2);border-radius:var(--radius-md);padding:1rem 1.25rem;margin-top:1.25rem;display:flex;align-items:flex-start;gap:0.625rem;">
            <i class="ph ph-info" style="color:var(--clr-gold);font-size:1rem;flex-shrink:0;margin-top:2px;"></i>
            <p style="font-size:var(--text-sm);color:var(--clr-text-3);">For the current consultation fee structure, contact our helpline at <a href="tel:<?php echo preg_replace('/\s+/', '', HELPLINE_NUMBER); ?>" style="color:var(--clr-primary);font-weight:600;"><?php echo HELPLINE_NUMBER; ?></a>.</p>
          </div>
        </div>
      </div>

      <!-- Term 6 -->
      <div class="terms-card reveal">
        <div class="terms-card-header">
          <div class="terms-num">6</div>
          <h2 class="heading-3">Prohibited Conduct</h2>
        </div>
        <div class="terms-card-body">
          <p>The following conduct is strictly prohibited on WakeelZone:</p>
          <ul class="terms-list" style="margin-top:0.875rem;">
            <li><i class="ph ph-x-circle" style="color:var(--clr-error) !important;"></i> Providing false, misleading, or fraudulent information to lawyers or WakeelZone</li>
            <li><i class="ph ph-x-circle" style="color:var(--clr-error) !important;"></i> Harassing, threatening, or abusing any lawyer or WakeelZone staff member</li>
            <li><i class="ph ph-x-circle" style="color:var(--clr-error) !important;"></i> Using the platform to facilitate illegal activities, money laundering, or fraud</li>
            <li><i class="ph ph-x-circle" style="color:var(--clr-error) !important;"></i> Impersonating another person or misrepresenting your identity or legal situation</li>
            <li><i class="ph ph-x-circle" style="color:var(--clr-error) !important;"></i> Attempting to bypass or circumvent WakeelZone's platform to directly engage lawyers outside the platform</li>
            <li><i class="ph ph-x-circle" style="color:var(--clr-error) !important;"></i> Scraping, reverse engineering, or attempting to access our platform's source code or data</li>
          </ul>
          <p style="margin-top:1rem;font-size:var(--text-sm);color:var(--clr-text-3);">Violation of these terms may result in immediate suspension or permanent ban from the platform, and may be reported to relevant law enforcement authorities.</p>
        </div>
      </div>

      <!-- Term 7 -->
      <div class="terms-card reveal terms-card-highlight">
        <div class="terms-card-header">
          <div class="terms-num" style="background:var(--clr-gold);color:var(--clr-primary-dark);">7</div>
          <h2 class="heading-3">Limitation of Liability</h2>
        </div>
        <div class="terms-card-body">
          <p><strong>WakeelZone is a platform, not a law firm.</strong> To the fullest extent permitted by Pakistani law:</p>
          <ul class="terms-list" style="margin-top:0.875rem;">
            <li><i class="ph ph-caret-right"></i> WakeelZone is <strong>not liable</strong> for the quality, accuracy, or outcome of any legal advice provided by lawyers on the platform</li>
            <li><i class="ph ph-caret-right"></i> WakeelZone is not liable for any indirect, incidental, special, consequential, or punitive damages arising from your use of the platform</li>
            <li><i class="ph ph-caret-right"></i> WakeelZone's total liability to you for any claims arising from these Terms shall not exceed the amount you paid for the consultation in question</li>
            <li><i class="ph ph-caret-right"></i> We do not warrant that the platform will be uninterrupted, error-free, or free from viruses or other harmful components</li>
          </ul>
        </div>
      </div>

      <!-- Term 8 -->
      <div class="terms-card reveal">
        <div class="terms-card-header">
          <div class="terms-num">8</div>
          <h2 class="heading-3">Intellectual Property</h2>
        </div>
        <div class="terms-card-body">
          <p>All content, features, and functionality on WakeelZone — including but not limited to text, graphics, logos, icons, and software — are the exclusive property of WakeelZone and are protected by Pakistani and international intellectual property laws.</p>
          <ul class="terms-list" style="margin-top:0.875rem;">
            <li><i class="ph ph-caret-right"></i> You may not reproduce, distribute, or create derivative works from our content without written permission</li>
            <li><i class="ph ph-caret-right"></i> The WakeelZone name, logo, and branding are registered trademarks and may not be used without authorization</li>
            <li><i class="ph ph-caret-right"></i> User-submitted content (e.g., form submissions) remains your property but you grant us a license to use it for service provision</li>
          </ul>
        </div>
      </div>

      <!-- Term 9 -->
      <div class="terms-card reveal">
        <div class="terms-card-header">
          <div class="terms-num">9</div>
          <h2 class="heading-3">Dispute Resolution</h2>
        </div>
        <div class="terms-card-body">
          <p>Any disputes arising from or relating to these Terms or your use of WakeelZone shall be resolved as follows:</p>
          <ul class="terms-list" style="margin-top:0.875rem;">
            <li><i class="ph ph-check-circle"></i> <strong>Good Faith Negotiation:</strong> We encourage resolution through direct communication — contact us at <a href="mailto:<?php echo CONTACT_EMAIL; ?>" style="color:var(--clr-primary);"><?php echo CONTACT_EMAIL; ?></a> first</li>
            <li><i class="ph ph-check-circle"></i> <strong>Governing Law:</strong> These Terms are governed exclusively by the laws of the Islamic Republic of Pakistan</li>
            <li><i class="ph ph-check-circle"></i> <strong>Jurisdiction:</strong> Any legal proceedings shall be filed exclusively in the courts of Islamabad, Pakistan</li>
            <li><i class="ph ph-check-circle"></i> <strong>Language:</strong> All proceedings shall be conducted in Urdu or English</li>
          </ul>
        </div>
      </div>

      <!-- Term 10 -->
      <div class="terms-card reveal">
        <div class="terms-card-header">
          <div class="terms-num">10</div>
          <h2 class="heading-3">Modifications to Terms</h2>
        </div>
        <div class="terms-card-body">
          <p>WakeelZone reserves the right to modify these Terms at any time. When we make material changes:</p>
          <ul class="terms-list" style="margin-top:0.875rem;">
            <li><i class="ph ph-caret-right"></i> The "Last Updated" date at the top of this page will be revised</li>
            <li><i class="ph ph-caret-right"></i> We will provide reasonable notice of significant changes via platform notification or email</li>
            <li><i class="ph ph-caret-right"></i> Continued use of WakeelZone after the effective date constitutes your acceptance of the revised Terms</li>
          </ul>
        </div>
      </div>

      <!-- Term 11: Contact -->
      <div class="terms-card reveal" style="background:linear-gradient(135deg,var(--clr-primary),var(--clr-primary-light));color:var(--clr-text-inverse);border:none;">
        <div class="terms-card-header">
          <div class="terms-num" style="background:rgba(255,255,255,0.15);color:#fff;">11</div>
          <h2 class="heading-3" style="color:#fff;">Contact Us</h2>
        </div>
        <div class="terms-card-body">
          <p style="color:rgba(255,255,255,0.8);">For any questions, concerns, or clarifications regarding these Terms and Conditions, please reach out to us:</p>
          <div style="display:flex;flex-direction:column;gap:0.75rem;margin-top:1.25rem;">
            <div style="display:flex;align-items:center;gap:0.75rem;">
              <i class="ph ph-envelope" style="color:var(--clr-gold);font-size:1.25rem;"></i>
              <a href="mailto:<?php echo CONTACT_EMAIL; ?>" style="color:var(--clr-gold);font-weight:600;"><?php echo CONTACT_EMAIL; ?></a>
            </div>
            <div style="display:flex;align-items:center;gap:0.75rem;">
              <i class="ph ph-phone-call" style="color:var(--clr-gold);font-size:1.25rem;"></i>
              <a href="tel:<?php echo preg_replace('/\s+/', '', HELPLINE_NUMBER); ?>" style="color:var(--clr-gold);font-weight:600;"><?php echo HELPLINE_NUMBER; ?></a>
            </div>
            <div style="display:flex;align-items:center;gap:0.75rem;">
              <i class="ph ph-files" style="color:var(--clr-gold);font-size:1.25rem;"></i>
              <a href="lawyer-terms.php" style="color:var(--clr-gold);font-weight:600;">Lawyer Terms &amp; Conditions &rarr;</a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ════════ CTA ════════ -->
<section class="cta-section">
  <div class="container cta-inner">
    <h2 class="heading-1 reveal" style="color:var(--clr-text-inverse);margin-bottom:0.75rem;">
      Agreed? Start Your Consultation.
    </h2>
    <p class="reveal d-1" style="color:rgba(255,255,255,0.7);font-size:var(--text-base);max-width:500px;margin:0 auto 2rem;line-height:var(--leading-relaxed);">
      Talk to a verified Pakistani lawyer — anonymously, transparently, and affordably.
    </p>
    <div class="cta-btns reveal d-2">
      <a href="tel:<?php echo preg_replace('/\s+/', '', HELPLINE_NUMBER); ?>" class="btn btn-gold btn-lg">
        <i class="ph ph-phone-call"></i> Call Our Helpline
      </a>
      <a href="services.php" class="btn btn-outline-white btn-lg">
        <i class="ph ph-scales"></i> Browse Legal Services
      </a>
    </div>
  </div>
</section>

<style>
.terms-card {
  background: var(--clr-surface);
  border: 1px solid var(--clr-border-light);
  border-radius: var(--radius-lg);
  padding: 2rem;
  margin-bottom: 1.5rem;
  box-shadow: var(--shadow-sm);
  transition: box-shadow var(--ease-base), transform var(--ease-base);
}
.terms-card:hover {
  box-shadow: var(--shadow-md);
  transform: translateY(-1px);
}
.terms-card-highlight {
  border: 2px solid rgba(201,168,76,0.3);
  background: var(--clr-gold-50);
}
.terms-card-header {
  display: flex;
  align-items: center;
  gap: 1rem;
  margin-bottom: 1.25rem;
}
.terms-num {
  width: 48px;
  height: 48px;
  background: var(--clr-primary);
  color: var(--clr-text-inverse);
  border-radius: var(--radius-md);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.125rem;
  font-weight: 800;
  flex-shrink: 0;
}
.terms-card-body {
  font-size: var(--text-sm);
  line-height: var(--leading-relaxed);
  color: var(--clr-text-3);
}
.terms-list {
  display: flex;
  flex-direction: column;
  gap: 0.625rem;
  padding-left: 0;
  list-style: none;
}
.terms-list li {
  display: flex;
  align-items: flex-start;
  gap: 0.625rem;
  font-size: var(--text-sm);
  color: var(--clr-text-3);
}
.terms-list li i {
  color: var(--clr-primary);
  font-size: 1rem;
  flex-shrink: 0;
  margin-top: 2px;
}
.terms-list li i.ph-check-circle { color: var(--clr-success); }
.terms-list li i.ph-shield-check  { color: var(--clr-gold); }
@media (max-width: 639px) {
  .terms-card { padding: 1.5rem 1.25rem; }
}
</style>

<?php include 'includes/footer.php'; ?>
