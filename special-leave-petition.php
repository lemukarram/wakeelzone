<?php
require_once 'config.php';
require_once 'includes/data.php';
$pageTitle = 'Special Leave Petition (SLP) in Pakistan';
$pageDesc  = 'Expert legal guidance for filing Special Leave Petitions (SLP) in the Supreme Court of Pakistan under Article 185(3). Verified SC advocates — WakeelZone.';
include 'includes/head.php';
include 'includes/nav.php';
?>

<!-- Page Header -->
<div class="page-header">
  <div class="container page-header-inner">
    <h1 class="page-header-title heading-1">Special Leave Petition (SLP) in Pakistan</h1>
    <p class="page-header-sub">Expert Legal Guidance for Filing SLPs in the Supreme Court of Pakistan</p>
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <span class="breadcrumb-item"><a href="index.php">Home</a></span>
      <span class="breadcrumb-sep"><i class="ph ph-caret-right"></i></span>
      <span class="breadcrumb-item">Special Leave Petition</span>
    </nav>
  </div>
</div>

<!-- ════════ WHAT IS AN SLP ════════ -->
<section class="section">
  <div class="container">
    <div class="why-us-grid">

      <div class="reveal-left">
        <span class="section-label"><i class="ph ph-file-text"></i> Article 185(3) Constitution</span>
        <h2 class="heading-1">What is a Special Leave Petition (SLP)?</h2>
        <div class="divider-gold"></div>
        <p class="lead" style="margin-top:1.25rem;">
          A Special Leave Petition (SLP) is a petition filed in the Supreme Court of Pakistan
          under Article 185(3) of the Constitution, seeking the Court's permission (leave) to
          appeal against a judgment, decree, or final order of a High Court.
        </p>
        <p style="margin-top:1rem;font-size:var(--text-sm);color:var(--clr-text-3);line-height:var(--leading-relaxed);">
          Unlike a regular appeal — which is a matter of right in certain cases — an SLP is
          discretionary. The Supreme Court is not obligated to hear every petition. Leave is
          granted only when the Court is satisfied that a <strong>substantial question of law
          of general public importance</strong> is involved, or that the interests of justice
          require its intervention. This makes the quality of the SLP petition and the expertise
          of the Supreme Court advocate absolutely critical.
        </p>
        <div style="margin-top:1.5rem;padding:1.25rem 1.5rem;background:var(--clr-gold-50);border-radius:var(--radius-lg);border-left:4px solid var(--clr-gold);">
          <p style="font-size:var(--text-sm);color:var(--clr-text);font-weight:600;margin-bottom:0.5rem;">
            Constitutional Authority:
          </p>
          <p style="font-size:var(--text-sm);color:var(--clr-text-3);line-height:var(--leading-relaxed);margin:0;">
            Article 185(3) — "Subject to clauses (1) and (2), an appeal to the Supreme Court from
            any judgment, decree, final order or sentence of a High Court shall lie, if the Supreme
            Court grants leave to appeal."
          </p>
        </div>
      </div>

      <div class="reveal-right">
        <div style="background:var(--clr-surface);border:2px solid var(--clr-border-light);border-radius:var(--radius-xl);padding:2rem;margin-bottom:1.25rem;">
          <h3 class="heading-3" style="margin-bottom:1.25rem;">
            <i class="ph ph-warning" style="color:var(--clr-gold);"></i> Critical Timelines
          </h3>
          <?php
          $slp_timelines = [
            ['label'=>'Filing Deadline',   'val'=>'30 days from HC order (general rule)',                  'color'=>'#dc2626'],
            ['label'=>'Extension',         'val'=>'Court may condone delay for sufficient cause',          'color'=>'var(--clr-primary)'],
            ['label'=>'Certified Copy',    'val'=>'Must be obtained before filing the SLP',               'color'=>'var(--clr-primary)'],
            ['label'=>'Leave Hearing',     'val'=>'Typically 1–6 months after filing',                    'color'=>'var(--clr-primary)'],
            ['label'=>'If Leave Granted',  'val'=>'Case listed for full merits hearing (months–years)',   'color'=>'var(--clr-primary)'],
          ];
          foreach ($slp_timelines as $tl): ?>
          <div style="display:flex;justify-content:space-between;align-items:flex-start;gap:1rem;padding:0.75rem 0;border-bottom:1px solid var(--clr-border-light);font-size:var(--text-sm);">
            <span style="font-weight:600;color:<?php echo $tl['color']; ?>;flex-shrink:0;"><?php echo $tl['label']; ?></span>
            <span style="color:var(--clr-text-3);text-align:right;"><?php echo $tl['val']; ?></span>
          </div>
          <?php endforeach; ?>
        </div>

        <div style="background:linear-gradient(135deg,var(--clr-primary),var(--clr-primary-light));border-radius:var(--radius-lg);padding:1.5rem;color:var(--clr-text-inverse);">
          <div style="display:flex;align-items:center;gap:0.75rem;margin-bottom:0.875rem;">
            <i class="ph ph-clock-countdown" style="font-size:1.5rem;color:var(--clr-gold);"></i>
            <h4 style="font-size:var(--text-base);font-weight:700;">Act Immediately</h4>
          </div>
          <p style="font-size:var(--text-sm);color:rgba(255,255,255,0.8);line-height:var(--leading-relaxed);margin-bottom:1rem;">
            The 30-day limitation period runs from the date of the HC order, not from when you learn
            about it. Missing this deadline can permanently bar you from SC appeal.
          </p>
          <a href="tel:<?php echo preg_replace('/\s+/', '', HELPLINE_NUMBER); ?>"
             class="btn btn-gold" style="width:100%;justify-content:center;">
            <i class="ph ph-phone-call"></i> Call Now — <?php echo HELPLINE_NUMBER; ?>
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ════════ WHEN TO FILE ════════ -->
<section class="section bg-surface-2">
  <div class="container">
    <div class="section-header center reveal">
      <span class="section-label"><i class="ph ph-question"></i> Eligibility</span>
      <h2 class="heading-1">When Should You File an SLP?</h2>
      <div class="divider-gold center"></div>
      <p style="margin-top:1rem;max-width:700px;margin-inline:auto;">
        An SLP is appropriate only in specific circumstances. Filing without proper grounds wastes
        time and money. Our SC lawyers assess SLP viability before you commit to filing.
      </p>
    </div>

    <?php
    $slp_when = [
      ['icon'=>'ph-scales',     'title'=>'Substantial Question of Law',           'desc'=>'The HC judgment involves a novel or important question of law that needs Supreme Court clarification for consistent application across Pakistan.','good'=>true],
      ['icon'=>'ph-buildings',  'title'=>'Conflict with SC Precedent',            'desc'=>'The HC judgment is clearly contrary to an existing Supreme Court judgment (binding precedent). The SC will likely grant leave to correct the error.','good'=>true],
      ['icon'=>'ph-shield',     'title'=>'Fundamental Rights Violation',          'desc'=>'The HC judgment involves a violation of a Fundamental Right guaranteed under Chapter 1 of Part II of the Constitution of Pakistan.','good'=>true],
      ['icon'=>'ph-bank',       'title'=>'Jurisdictional Error by HC',            'desc'=>'The HC exceeded its jurisdiction or refused to exercise jurisdiction it was legally bound to exercise.','good'=>true],
      ['icon'=>'ph-x-circle',   'title'=>'Factual Disputes Only',                 'desc'=>'The SC is not a court of facts. If your grievance is only about how the HC appreciated evidence (not a question of law), the SLP will not succeed.','good'=>false],
      ['icon'=>'ph-x-circle',   'title'=>'No Substantial Legal Question',        'desc'=>'Filing an SLP merely because you disagree with the HC outcome — without a genuine legal question — results in dismissal of the SLP with costs.','good'=>false],
    ];
    ?>
    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.25rem;" class="three-cols-responsive">
      <?php foreach ($slp_when as $i => $item): ?>
      <div class="reveal delay-<?php echo ($i % 3)+1; ?>"
           style="background:var(--clr-surface);border:2px solid <?php echo $item['good'] ? 'rgba(27,58,107,0.15)' : 'rgba(220,38,38,0.15)'; ?>;border-radius:var(--radius-lg);padding:1.5rem;">
        <div style="width:44px;height:44px;background:<?php echo $item['good'] ? 'var(--clr-primary-50)' : 'rgba(220,38,38,0.08)'; ?>;border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:1rem;">
          <i class="ph <?php echo $item['icon']; ?>" style="font-size:1.25rem;color:<?php echo $item['good'] ? 'var(--clr-primary)' : '#dc2626'; ?>;"></i>
        </div>
        <p style="font-size:var(--text-xs);font-weight:700;text-transform:uppercase;letter-spacing:0.08em;color:<?php echo $item['good'] ? 'var(--clr-gold)' : '#dc2626'; ?>;margin-bottom:0.5rem;">
          <?php echo $item['good'] ? 'Valid Ground' : 'Not Valid Ground'; ?>
        </p>
        <h4 style="font-size:var(--text-sm);font-weight:700;color:var(--clr-text);margin-bottom:0.625rem;"><?php echo $item['title']; ?></h4>
        <p style="font-size:var(--text-xs);color:var(--clr-text-3);line-height:var(--leading-relaxed);margin:0;"><?php echo $item['desc']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ════════ SLP PROCESS ════════ -->
<section class="section">
  <div class="container">
    <div class="section-header center reveal">
      <span class="section-label"><i class="ph ph-steps"></i> Step-by-Step</span>
      <h2 class="heading-1">SLP Process in the Supreme Court of Pakistan</h2>
      <div class="divider-gold center"></div>
    </div>
    <div style="max-width:780px;margin-inline:auto;">
      <?php
      $slp_process = [
        ['num'=>'01','icon'=>'ph-copy',          'title'=>'Obtain Certified Copy of HC Order',    'desc'=>'Immediately after the HC judgment, apply for and obtain a certified copy from the HC Registry. This is a prerequisite for filing the SLP and counts toward the limitation period.'],
        ['num'=>'02','icon'=>'ph-file-text',     'title'=>'Prepare SLP Petition',                'desc'=>'Your SC advocate drafts the SLP containing: case background, grounds of appeal (questions of law), brief arguments, and reliefs sought. This document must be meticulously drafted to convince the SC bench to grant leave.'],
        ['num'=>'03','icon'=>'ph-upload',        'title'=>'File at SC Registry Islamabad',       'desc'=>'The SLP, along with supporting documents (vakalatnama, affidavit, certified HC order, copies for all respondents, and court fee), is filed at the Supreme Court Registry in Constitution Avenue, Islamabad.'],
        ['num'=>'04','icon'=>'ph-envelope-open', 'title'=>'Serve Notice on Respondents',        'desc'=>'The SC Registry issues notices to all respondents. Proper service of process must be completed and proof filed before the case can be listed for a preliminary hearing.'],
        ['num'=>'05','icon'=>'ph-calendar',      'title'=>'Preliminary Hearing (Leave Stage)',  'desc'=>'A SC bench examines the petition to decide whether to grant or refuse leave. Your advocate argues why leave should be granted. This is the most critical stage — the SC may dismiss without granting leave.'],
        ['num'=>'06','icon'=>'ph-scales',        'title'=>'Main Merits Hearing (if leave granted)','desc'=>'If leave is granted, the case proceeds to full hearing where both sides make complete arguments on the merits. The SC then pronounces its final judgment, which is binding and final.'],
      ];
      foreach ($slp_process as $i => $step): ?>
      <div class="reveal" style="display:grid;grid-template-columns:72px 1fr;gap:1.5rem;margin-bottom:2.5rem;">
        <div style="text-align:center;">
          <div style="width:72px;height:72px;background:linear-gradient(135deg,var(--clr-primary),var(--clr-primary-light));border-radius:var(--radius-lg);display:flex;align-items:center;justify-content:center;box-shadow:var(--shadow-navy);">
            <i class="ph <?php echo $step['icon']; ?>" style="font-size:1.75rem;color:var(--clr-gold);"></i>
          </div>
          <?php if ($i < count($slp_process)-1): ?>
          <div style="width:2px;height:2rem;background:linear-gradient(var(--clr-primary-100),transparent);margin:0 auto;"></div>
          <?php endif; ?>
        </div>
        <div style="padding-top:0.375rem;">
          <div style="font-size:var(--text-xs);font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:var(--clr-gold);margin-bottom:0.25rem;">Step <?php echo $step['num']; ?></div>
          <h3 style="font-size:var(--text-base);font-weight:700;color:var(--clr-text);margin-bottom:0.5rem;"><?php echo $step['title']; ?></h3>
          <p style="font-size:var(--text-sm);color:var(--clr-text-3);line-height:var(--leading-relaxed);margin:0;"><?php echo $step['desc']; ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ════════ SLP vs REGULAR APPEAL + LEGAL PROVISIONS ════════ -->
<section class="section bg-surface-2">
  <div class="container">
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:2.5rem;align-items:start;">

      <!-- SLP vs Appeal Comparison -->
      <div class="reveal-left">
        <span class="section-label"><i class="ph ph-arrows-left-right"></i> Comparison</span>
        <h2 class="heading-2" style="margin-bottom:1rem;">SLP vs Regular Appeal</h2>
        <div class="divider-gold" style="margin-bottom:1.5rem;"></div>
        <div style="overflow-x:auto;border-radius:var(--radius-lg);border:1px solid var(--clr-border-light);">
          <table style="width:100%;border-collapse:collapse;font-size:var(--text-sm);">
            <thead>
              <tr style="background:var(--clr-primary);color:white;">
                <th style="padding:0.875rem 1rem;text-align:left;font-weight:600;">Feature</th>
                <th style="padding:0.875rem 1rem;text-align:center;font-weight:600;">SLP</th>
                <th style="padding:0.875rem 1rem;text-align:center;font-weight:600;">Regular Appeal</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $compare = [
                ['label'=>'Right to be heard', 'slp'=>'No (Discretionary)', 'app'=>'Yes (As of right in some cases)'],
                ['label'=>'Ground required',   'slp'=>'Substantial question of law', 'app'=>'General grounds of appeal'],
                ['label'=>'Leave required',    'slp'=>'Yes — court decides', 'app'=>'Generally No'],
                ['label'=>'Time limit',        'slp'=>'30 days from HC order', 'app'=>'30–60 days (varies)'],
                ['label'=>'Success rate',      'slp'=>'Lower (SC selective)', 'app'=>'Higher (full hearing)'],
                ['label'=>'Cost',              'slp'=>'Higher (SC fees + advocate)', 'app'=>'Lower (HC level)'],
              ];
              foreach ($compare as $j => $row): ?>
              <tr style="background:<?php echo $j % 2 === 0 ? 'var(--clr-surface)' : 'var(--clr-surface-2)'; ?>;">
                <td style="padding:0.75rem 1rem;font-weight:500;color:var(--clr-text);"><?php echo $row['label']; ?></td>
                <td style="padding:0.75rem 1rem;text-align:center;color:var(--clr-text-3);"><?php echo $row['slp']; ?></td>
                <td style="padding:0.75rem 1rem;text-align:center;color:var(--clr-text-3);"><?php echo $row['app']; ?></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Grounds for SLP + Key Provisions -->
      <div class="reveal-right">
        <span class="section-label"><i class="ph ph-book-open"></i> Legal Framework</span>
        <h2 class="heading-2" style="margin-bottom:1rem;">Grounds & Key Legal Provisions</h2>
        <div class="divider-gold" style="margin-bottom:1.5rem;"></div>

        <h4 style="font-size:var(--text-sm);font-weight:700;color:var(--clr-text);margin-bottom:0.875rem;">Grounds for SLP</h4>
        <div style="display:flex;flex-direction:column;gap:0.625rem;margin-bottom:1.5rem;">
          <?php
          $grounds = [
            'Error of law apparent on the face of the record',
            'HC acted without or in excess of jurisdiction',
            'HC failed to exercise jurisdiction',
            'Violation of fundamental rights (Art. 1–28)',
            'Conflict with a binding Supreme Court precedent',
            'Substantial question of law of public importance',
          ];
          foreach ($grounds as $g): ?>
          <div class="check-list-item">
            <i class="ph ph-check-circle"></i>
            <span style="font-size:var(--text-sm);"><?php echo $g; ?></span>
          </div>
          <?php endforeach; ?>
        </div>

        <h4 style="font-size:var(--text-sm);font-weight:700;color:var(--clr-text);margin-bottom:0.875rem;">Key Legal Provisions</h4>
        <?php
        $provisions = [
          ['ref'=>'Article 185', 'desc'=>'Constitution of Pakistan — Appellate jurisdiction of Supreme Court'],
          ['ref'=>'Article 184', 'desc'=>'Original jurisdiction of Supreme Court in inter-governmental & fundamental rights matters'],
          ['ref'=>'SC Rules 1980','desc'=>'Supreme Court Rules 1980 — govern procedure for filing and hearing SLPs'],
          ['ref'=>'Limitation Act','desc'=>'Section 12 — Time for filing SLP; court fee payment'],
        ];
        foreach ($provisions as $p): ?>
        <div style="display:flex;gap:0.75rem;padding:0.625rem 0;border-bottom:1px solid var(--clr-border-light);font-size:var(--text-sm);">
          <span style="font-weight:700;color:var(--clr-gold);min-width:110px;flex-shrink:0;"><?php echo $p['ref']; ?></span>
          <span style="color:var(--clr-text-3);"><?php echo $p['desc']; ?></span>
        </div>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
</section>

<!-- ════════ OUR SLP LAWYERS ════════ -->
<section class="section">
  <div class="container">
    <div class="section-header center reveal">
      <span class="section-label"><i class="ph ph-identification-badge"></i> Our Panel</span>
      <h2 class="heading-1">WakeelZone SLP Lawyers</h2>
      <div class="divider-gold center"></div>
    </div>

    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem;max-width:900px;margin-inline:auto;">
      <?php
      $slp_features = [
        ['icon'=>'ph-seal-check',   'title'=>'SC-Enrolled Only',         'desc'=>'Every SLP lawyer in our panel holds Supreme Court of Pakistan enrollment — the highest bar qualification in the country.'],
        ['icon'=>'ph-star',         'title'=>'10+ Years SC Experience',  'desc'=>'Minimum 10 years of active practice with proven experience in SC filings, leave hearings, and full merit arguments.'],
        ['icon'=>'ph-clock',        'title'=>'Urgent SLP Filing',        'desc'=>'We can mobilize for urgent SLP filing within 24 hours. Critical for cases where the 30-day deadline is approaching.'],
        ['icon'=>'ph-shield-lock',  'title'=>'Anonymous Process',        'desc'=>'Your consultation and instructions remain completely anonymous. Our SC lawyers work on your behalf without identity disclosure.'],
        ['icon'=>'ph-currency-circle-dollar','title'=>'Transparent Fees','desc'=>'Clear, upfront fee structure for SLP filing, appearance fees, and hearing fees — no surprise bills at any stage.'],
        ['icon'=>'ph-globe',        'title'=>'Overseas Clients Welcome', 'desc'=>'Overseas Pakistanis can instruct our SC lawyers remotely via WhatsApp / video consultation. No need to travel to Pakistan.'],
      ];
      foreach ($slp_features as $i => $f): ?>
      <div class="service-card reveal delay-<?php echo ($i % 3)+1; ?>">
        <div class="service-icon"><i class="ph <?php echo $f['icon']; ?>"></i></div>
        <h3 class="service-title"><?php echo $f['title']; ?></h3>
        <p class="service-desc"><?php echo $f['desc']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ════════ COST & TIMELINE ════════ -->
<section class="section-sm bg-surface-2">
  <div class="container">
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:2rem;max-width:800px;margin-inline:auto;">
      <div class="reveal" style="background:var(--clr-surface);border:1px solid var(--clr-border-light);border-radius:var(--radius-lg);padding:1.75rem;">
        <h3 class="heading-3" style="margin-bottom:1.25rem;">
          <i class="ph ph-currency-circle-dollar" style="color:var(--clr-gold);"></i> Cost Estimates
        </h3>
        <?php
        $slp_costs = [
          ['item'=>'Initial SLP consultation', 'range'=>'Free initial assessment'],
          ['item'=>'SLP drafting & filing',    'range'=>'PKR 30,000 – 150,000+'],
          ['item'=>'Leave hearing appearance', 'range'=>'PKR 20,000 – 80,000 per hearing'],
          ['item'=>'SC court fee',             'range'=>'Varies by nature of matter'],
          ['item'=>'Certified HC order copy',  'range'=>'PKR 500 – 3,000 (HC registry)'],
        ];
        foreach ($slp_costs as $c): ?>
        <div style="display:flex;justify-content:space-between;padding:0.625rem 0;border-bottom:1px solid var(--clr-border-light);font-size:var(--text-xs);">
          <span style="color:var(--clr-text-3);"><?php echo $c['item']; ?></span>
          <span style="font-weight:600;color:var(--clr-primary);text-align:right;"><?php echo $c['range']; ?></span>
        </div>
        <?php endforeach; ?>
        <p style="font-size:var(--text-xs);color:var(--clr-text-muted);margin-top:0.875rem;line-height:var(--leading-relaxed);">
          * Fees are approximate. Exact quotes provided after case assessment. All fees in PKR.
        </p>
      </div>
      <div class="reveal d-1" style="background:var(--clr-surface);border:1px solid var(--clr-border-light);border-radius:var(--radius-lg);padding:1.75rem;">
        <h3 class="heading-3" style="margin-bottom:1.25rem;">
          <i class="ph ph-clock" style="color:var(--clr-gold);"></i> Timeline Estimates
        </h3>
        <?php
        $slp_timeline = [
          ['stage'=>'SLP filing deadline',          'time'=>'Within 30 days of HC order'],
          ['stage'=>'First notice to respondents',  'time'=>'2–4 weeks after filing'],
          ['stage'=>'Leave hearing listing',        'time'=>'1–6 months after filing'],
          ['stage'=>'Leave granted/refused',        'time'=>'Same day as leave hearing'],
          ['stage'=>'Main hearing (if granted)',    'time'=>'Several months to years'],
        ];
        foreach ($slp_timeline as $t): ?>
        <div style="display:flex;justify-content:space-between;align-items:flex-start;gap:0.75rem;padding:0.625rem 0;border-bottom:1px solid var(--clr-border-light);font-size:var(--text-xs);">
          <span style="color:var(--clr-text-3);"><?php echo $t['stage']; ?></span>
          <span style="font-weight:600;color:var(--clr-primary);text-align:right;flex-shrink:0;"><?php echo $t['time']; ?></span>
        </div>
        <?php endforeach; ?>
        <p style="font-size:var(--text-xs);color:var(--clr-text-muted);margin-top:0.875rem;line-height:var(--leading-relaxed);">
          * Timelines are indicative. SC scheduling depends on court docket and bench availability.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- ════════ FAQ ════════ -->
<section class="section">
  <div class="container" style="max-width:800px;">
    <div class="section-header center reveal">
      <span class="section-label"><i class="ph ph-question"></i> FAQ</span>
      <h2 class="heading-1">SLP Frequently Asked Questions</h2>
      <div class="divider-gold center"></div>
    </div>
    <?php
    $slp_faqs = [
      ['q'=>'Can I file an SLP against every High Court order?',
       'a'=>'No. Under Article 185(2)(a) of the Constitution, certain HC orders are specifically excluded from SC appeal (e.g., interlocutory orders in certain matters). Additionally, the SC will not entertain SLPs that purely challenge findings of fact without raising any question of law. Your SC lawyer will assess whether your HC order is SLP-able before filing.'],
      ['q'=>'What happens if the SC refuses to grant leave in my SLP?',
       'a'=>'If the SC bench refuses to grant leave, the petition is dismissed at the preliminary stage. The HC order becomes final. In some cases, you may be able to file a review petition before the same SC bench, but this is only possible on very limited grounds (error apparent on the face of the record). Our lawyers advise on this option after a leave refusal.'],
      ['q'=>'Can I file an SLP if I missed the 30-day limitation period?',
       'a'=>'Yes, but you must also file a Condonation of Delay application alongside the SLP, explaining the reasons for the delay. The SC may condone the delay if sufficient cause is shown. The delay condonation is decided first before the SLP is entertained. This is handled by our SC lawyers as part of the filing process.'],
      ['q'=>'Is it possible to get a stay of the HC order while the SLP is pending?',
       'a'=>'Yes. When filing the SLP, you can also move an application for stay of the HC order, pending disposal of the SLP. The SC may grant an ad interim stay if there is a prima facie case and if the balance of convenience favors staying the HC order. Our lawyers regularly obtain stay orders for clients in urgent SLP matters.'],
      ['q'=>'Do I need to travel to Islamabad for my SLP proceedings?',
       'a'=>'Not necessarily. Our SC advocates based in Islamabad handle all SC Registry filings and court appearances on your behalf. You can instruct us remotely from anywhere — within Pakistan or abroad. For overseas Pakistanis, we offer complete representation without any requirement to travel to Islamabad.'],
    ];
    ?>
    <div class="faq-list reveal d-1">
      <?php foreach ($slp_faqs as $i => $faq): ?>
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
      <i class="ph ph-clock-countdown"></i> Time-Sensitive — Act Now
    </span>
    <h2 class="heading-1 reveal" style="color:var(--clr-text-inverse);margin-bottom:0.75rem;">
      Need to File an SLP?
    </h2>
    <p class="reveal d-1" style="color:rgba(255,255,255,0.7);max-width:520px;margin:0 auto 1.75rem;line-height:var(--leading-relaxed);">
      Don't wait. The 30-day deadline to file your SLP starts running from the day of the HC order.
      Call our SC lawyer team immediately.
    </p>
    <div class="cta-btns reveal d-2">
      <a href="tel:<?php echo preg_replace('/\s+/', '', HELPLINE_NUMBER); ?>" class="btn btn-gold btn-lg">
        <i class="ph ph-phone-call"></i> Call <?php echo HELPLINE_NUMBER; ?>
      </a>
      <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>" target="_blank" rel="noopener" class="btn btn-outline-white btn-lg">
        <i class="ph ph-whatsapp-logo"></i> WhatsApp Urgently
      </a>
      <a href="supreme-court-lawyers.php" class="btn btn-outline-white btn-lg">
        <i class="ph ph-scales"></i> Supreme Court Lawyers
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
