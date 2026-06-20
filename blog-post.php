<?php
require_once 'config.php';
require_once 'includes/data.php';

// ─── ALL BLOG POSTS WITH FULL CONTENT ────────────────────────────────────────
$all_posts = [
  [
    'title'   => 'How to Register an FIR in Pakistan: A Step-by-Step Guide',
    'slug'    => 'how-to-register-fir-pakistan',
    'cat'     => 'Criminal Law',
    'cat_slug'=> 'criminal-lawyer',
    'icon'    => 'ph-scales',
    'date'    => 'June 10, 2026',
    'read'    => '5 min read',
    'author'  => 'WakeelZone Legal Team',
    'excerpt' => 'Filing an FIR (First Information Report) is the first step in any criminal matter. Learn your rights, the correct procedure, and what to do if the police refuse to register your complaint.',
    'content' => <<<HTML
<p>In Pakistan's criminal justice system, the First Information Report (FIR) is the foundational document that sets the entire criminal process in motion. Without a registered FIR, the police cannot formally investigate a crime, and it becomes significantly harder to obtain justice. Yet, thousands of Pakistanis either do not know how to file an FIR or face illegal refusals from police stations.</p>

<p>This guide explains the step-by-step FIR registration process, your legal rights, and what to do when the system fails you.</p>

<h2>What Is an FIR?</h2>
<p>An FIR (First Information Report) is a written document prepared by police when a complaint of a cognizable offence is received. Under Section 154 of the Code of Criminal Procedure 1898 (CrPC), police are <strong>legally obligated</strong> to register an FIR for any cognizable offence (serious crimes such as murder, theft, robbery, rape, kidnapping). For non-cognizable offences (minor matters), a complaint register entry (Roznamcha) is made instead.</p>

<h2>Step-by-Step FIR Registration Process</h2>
<ol>
  <li><strong>Identify the Correct Police Station:</strong> Go to the police station that has territorial jurisdiction over the area where the crime occurred — not where you live. Jurisdiction is determined by the location of the offence.</li>
  <li><strong>Meet the Station House Officer (SHO):</strong> Request to meet the SHO (the officer in charge of the station). Introduce yourself and state that you want to register an FIR.</li>
  <li><strong>Provide Your Complaint Verbally or in Writing:</strong> You can narrate the facts verbally (the SHO will have a constable write it) or hand over a written complaint (which is preferable as it ensures accuracy). Include: date, time, place of incident, description of events, and names/descriptions of accused.</li>
  <li><strong>Get Your FIR Copy:</strong> After registration, you are legally entitled to a <strong>free copy of the FIR</strong>. This is your proof that the complaint was registered. Note the FIR number.</li>
  <li><strong>Keep Your FIR Safely:</strong> The FIR number is critical for follow-ups. Ensure you store it safely and note the names of any investigating officers assigned.</li>
</ol>

<h2>What If Police Refuse to Register Your FIR?</h2>
<p>Police illegally refusing to register FIRs is a common problem in Pakistan. If this happens, you have several legal remedies:</p>
<ol>
  <li><strong>Complaint to Senior Officers:</strong> Approach the DSP (Deputy Superintendent of Police) or the SP (Superintendent of Police) of the area and submit a written complaint about the refusal.</li>
  <li><strong>District Police Officer (DPO):</strong> File a formal complaint with the DPO, who has administrative supervisory authority over station police.</li>
  <li><strong>Complaint to CCPO/IGP:</strong> In major cities, escalate to the CCPO (Capital City Police Officer) or Inspector General of Police (IGP) through their official complaint portals.</li>
  <li><strong>Private Complaint Before Magistrate:</strong> Under Section 200 CrPC, you can file a private complaint directly before a Judicial Magistrate. The magistrate can order the police to register the FIR.</li>
  <li><strong>High Court Petition:</strong> File a Constitutional Petition (Writ) before the relevant High Court under Article 199 of the Constitution, seeking directions to the police to register the FIR.</li>
</ol>

<h2>Important Tips</h2>
<ul>
  <li>Always carry original CNIC when going to register an FIR</li>
  <li>Bring at least one witness if possible</li>
  <li>Note down the date, time, and name of the officer you speak to</li>
  <li>For cyber crimes, you can file online at FIA's CCRC portal (<strong>fia.gov.pk</strong>) instead of a police station</li>
  <li>FIR registration is free — do not pay bribes</li>
</ul>

<h2>Conclusion: Get Legal Help Before You File</h2>
<p>A poorly worded or incorrectly filed FIR can harm your case. The language, sections of law cited, and evidence documented all matter significantly for the outcome of criminal proceedings. Before going to the police station, consulting a verified criminal lawyer through WakeelZone can make a decisive difference. Our criminal law specialists can help you draft a proper complaint, identify the correct sections of law, and accompany your representative to the station.</p>

<p>Call our 24/7 helpline at <strong><?php echo HELPLINE_NUMBER; ?></strong> for immediate guidance — completely anonymously.</p>
HTML,
  ],

  [
    'title'   => 'Understanding Khula vs. Talaq: Key Differences for Pakistani Women',
    'slug'    => 'khula-vs-talaq-pakistan',
    'cat'     => 'Family Law',
    'cat_slug'=> 'family-lawyer',
    'icon'    => 'ph-users',
    'date'    => 'June 5, 2026',
    'read'    => '7 min read',
    'author'  => 'WakeelZone Legal Team',
    'excerpt' => 'Khula and Talaq are both forms of divorce in Pakistan but work very differently. This guide explains the legal procedure, timeline, Mehr implications, and court process for each.',
    'content' => <<<HTML
<p>Divorce in Pakistan, governed primarily by the Muslim Family Laws Ordinance 1961 (MFLO), takes two principal forms: <strong>Talaq</strong> (husband-initiated) and <strong>Khula</strong> (wife-initiated). Understanding the difference between these two processes is essential for any Pakistani woman or man navigating a marriage breakdown. Each has distinct legal procedures, timelines, financial implications, and court requirements.</p>

<h2>What Is Talaq?</h2>
<p>Talaq is the Islamic right of the husband to dissolve a marriage by pronouncing divorce. In Pakistan, Talaq is governed by Sections 7 and 8 of the Muslim Family Laws Ordinance 1961:</p>
<ol>
  <li><strong>Pronouncement:</strong> The husband pronounces Talaq — verbally, in writing, or via electronic means (SMS/email also acceptable under MFLO).</li>
  <li><strong>Notice to Union Council:</strong> Within <strong>30 days</strong> of pronouncing Talaq, the husband must send a written notice to the Chairman of the local Union Council (or Union Committee) in the area where the wife resides. A copy must also be sent to the wife.</li>
  <li><strong>Reconciliation Period (Iddat):</strong> The Union Council constitutes an Arbitration Council to attempt reconciliation. The divorce becomes effective <strong>90 days</strong> after the notice is received by the Union Council — unless reconciliation occurs during this period (Iddat period).</li>
  <li><strong>NADRA Registration:</strong> Once effective, the Talaq must be registered with NADRA. The wife receives a Divorce Certificate which is required for legal purposes (remarriage, document updates, etc.).</li>
</ol>
<p><strong>Mehr in Talaq:</strong> The wife retains the right to her full Mehr (dower) in a Talaq — it becomes immediately payable if not already paid (prompt Mehr) or at the time of divorce.</p>

<h2>What Is Khula?</h2>
<p>Khula is the wife's right to dissolve the marriage through the court by returning the Mehr paid to her at the time of marriage. It is governed by the Dissolution of Muslim Marriages Act 1939 and MFLO 1961:</p>
<ol>
  <li><strong>File Petition in Family Court:</strong> The wife (through her lawyer) files a suit for dissolution of marriage in the Family Court of the area where she resides. She must state grounds for Khula — typically irretrievable breakdown of marriage or incompatibility.</li>
  <li><strong>Service of Notice:</strong> The court serves notice on the husband. He has an opportunity to respond and appear in court.</li>
  <li><strong>Mediation/Reconciliation:</strong> The Family Court is obligated to attempt reconciliation between the parties before proceeding.</li>
  <li><strong>Return of Mehr:</strong> In Khula, the wife typically offers to return the Mehr amount paid to her at marriage. However, courts increasingly grant Khula without full Mehr return if reconciliation genuinely fails.</li>
  <li><strong>Court Decree:</strong> If reconciliation fails, the court passes a decree of dissolution of marriage (Khula). This decree is itself the divorce document — no separate Talaq notice is required.</li>
  <li><strong>NADRA Registration:</strong> The court decree is submitted to NADRA to obtain an official Divorce Certificate.</li>
</ol>
<p><strong>Timeline:</strong> Khula proceedings typically take <strong>3-6 months</strong> if uncontested. Contested Khula (where husband disputes) may take 1-2 years.</p>

<h2>Key Differences: Khula vs. Talaq</h2>
<ul>
  <li><strong>Initiator:</strong> Talaq = husband; Khula = wife</li>
  <li><strong>Mehr:</strong> Talaq — wife keeps full Mehr; Khula — wife may return Mehr (increasingly discretionary by court)</li>
  <li><strong>Process:</strong> Talaq = administrative notice to Union Council; Khula = court proceedings</li>
  <li><strong>Husband's Consent:</strong> Talaq — husband's decision; Khula — husband's consent not required (court can grant against husband's will)</li>
  <li><strong>Timeline:</strong> Talaq — 90 days post-notice; Khula — 3-6 months (court dependent)</li>
  <li><strong>Child Custody:</strong> Both forms — custody decided separately by Family Court based on the child's best interests</li>
</ul>

<h2>What About Judicial Divorce?</h2>
<p>A wife can also seek dissolution under Section 2 of the Dissolution of Muslim Marriages Act 1939 on specific grounds including: husband's cruelty, failure to provide maintenance for 2 years, imprisonment of 7+ years, inability to perform marital obligations, and desertion of 4+ years.</p>

<h2>Conclusion: Seek Confidential Legal Advice First</h2>
<p>Family law matters in Pakistan require sensitive, expert handling. A skilled family lawyer can advise you on whether Khula or Talaq is appropriate for your situation, protect your financial rights (Mehr, alimony, child support), secure your custody position, and ensure the process is completed quickly and legally.</p>

<p>WakeelZone's family law specialists are available 24/7 — and your consultation is completely anonymous. Call <strong><?php echo HELPLINE_NUMBER; ?></strong> today.</p>
HTML,
  ],

  [
    'title'   => 'Property Title Verification in Pakistan: What Buyers Must Check',
    'slug'    => 'property-title-verification-pakistan',
    'cat'     => 'Property Law',
    'cat_slug'=> 'property-lawyer',
    'icon'    => 'ph-house',
    'date'    => 'May 28, 2026',
    'read'    => '6 min read',
    'author'  => 'WakeelZone Legal Team',
    'excerpt' => 'Buying property in Pakistan without proper due diligence can be catastrophic. Learn the 10 essential checks every buyer should perform before transferring ownership.',
    'content' => <<<HTML
<p>Property fraud is one of the most common and devastating legal problems in Pakistan. Thousands of buyers lose their life savings to fake deeds, disputed titles, double-sold plots, and encumbered properties each year. The solution? Thorough legal due diligence before any payment is made.</p>

<p>This guide outlines the 10 essential checks every property buyer must perform — and explains why a property lawyer is not optional, it is essential.</p>

<h2>Why Property Due Diligence Is Critical in Pakistan</h2>
<p>Unlike many countries, Pakistan does not have a single, centralized, fully digitized property registry. Records are maintained across multiple authorities — Patwari offices, LESCO/WAPDA, Housing Authorities, Development Authorities (LDA, KDA, CDA, RDA, etc.) — and inconsistencies or gaps between these records are common. This fragmentation creates opportunities for fraud.</p>

<h2>The 10 Essential Property Checks</h2>
<ol>
  <li>
    <strong>Verify the Fard (Title Document):</strong> Obtain a current Fard-e-Malkiat (Record of Rights) from the Patwari or Tehsildar office. This is the most fundamental document confirming who the registered owner is. Ensure the seller's name matches exactly.
  </li>
  <li>
    <strong>Check the Mutation (Intiqal):</strong> Confirm that the last transfer of ownership (mutation) was properly recorded in the Revenue Department's Register. All previous transfers should be traceable and legally documented.
  </li>
  <li>
    <strong>Search for Encumbrances:</strong> Request a Non-Encumbrance Certificate (NEC) from the relevant Sub-Registrar's office. This confirms the property is not mortgaged, pledged, or under any legal charge. Banks and financial institutions file encumbrances when property is used as collateral.
  </li>
  <li>
    <strong>Verify Development Authority Approval:</strong> Check with the relevant Development Authority (LDA in Lahore, KDA/SBCA in Karachi, CDA in Islamabad, RDA in Rawalpindi) that the housing scheme is approved, layout plans are sanctioned, and the plot number exists in official records.
  </li>
  <li>
    <strong>Confirm CNIC of Seller:</strong> Verify the seller's CNIC against NADRA records. Impersonation fraud is common — someone poses as the real owner using forged documents.
  </li>
  <li>
    <strong>Check for Court Cases / Litigation:</strong> A property under active litigation may have an injunction order preventing its sale or transfer. Your lawyer must search court records in the area's District Court for any pending suits related to the property.
  </li>
  <li>
    <strong>Verify the Sale Deed Chain:</strong> Trace the full chain of title — who owned the property before the current seller, and how each transfer was made. Gaps or irregularities in this chain are major red flags.
  </li>
  <li>
    <strong>Check Utility Dues:</strong> Ensure all LESCO/IESCO/HESCO (electricity), SNGPL/SSGCL (gas), and WASA (water) dues are cleared. Unpaid utility bills can become a liability for the buyer.
  </li>
  <li>
    <strong>Verify Society/DHA/Bahria Status:</strong> For housing society properties, verify the plot allotment letter, transfer history, and current status directly from the society's office. Many fake DHA and Bahria files circulate in the market.
  </li>
  <li>
    <strong>Engage a Property Lawyer for Final Review:</strong> Before signing any Sale Agreement or Sale Deed (Bai-Nama), have a qualified property lawyer review all documents. The lawyer will identify any red flags invisible to a layperson and ensure the transaction is legally sound.
  </li>
</ol>

<h2>Red Flags: When to Walk Away</h2>
<ul>
  <li>Seller is overly urgent or pressuring you to pay before documents are verified</li>
  <li>Fard shows a different owner than the person selling</li>
  <li>Property is in an area with disputed ownership or ongoing encroachment issues</li>
  <li>Housing society cannot provide official sanction documents from the relevant authority</li>
  <li>Price is significantly below market rate without a credible explanation</li>
  <li>Seller refuses to allow you to verify documents independently</li>
</ul>

<h2>The Sale Deed Process</h2>
<p>Once due diligence is complete, the purchase is formalized through a Sale Deed (Bai-Nama) executed before a Sub-Registrar. The stamp duty and transfer fee are paid, the deed is registered, and mutation is carried out at the Patwari level. Both parties must be present or represented by a holder of Power of Attorney.</p>

<h2>Conclusion: Don't Buy Property Without a Lawyer</h2>
<p>In Pakistan's complex property landscape, a qualified property lawyer is your most valuable investment. The cost of proper legal due diligence is a fraction of the cost of losing a property to fraud or a title dispute.</p>

<p>WakeelZone's property law specialists are available 24/7. Call <strong><?php echo HELPLINE_NUMBER; ?></strong> to consult — completely anonymously and affordably.</p>
HTML,
  ],

  [
    'title'   => "Pakistan's PECA 2016: Your Complete Guide to Cyber Crime Laws",
    'slug'    => 'peca-2016-pakistan-cyber-crime-guide',
    'cat'     => 'Cyber Crime',
    'cat_slug'=> 'cyber-crime-lawyer',
    'icon'    => 'ph-shield-warning',
    'date'    => 'May 20, 2026',
    'read'    => '8 min read',
    'author'  => 'WakeelZone Legal Team',
    'excerpt' => 'The Prevention of Electronic Crimes Act 2016 (PECA) governs cyber crime in Pakistan. This guide explains what constitutes an offence, reporting to FIA, and your rights as a victim.',
    'content' => <<<HTML
<p>As internet penetration in Pakistan continues to grow rapidly — with over 120 million internet users — cyber crime has emerged as one of the most pressing legal challenges of our time. Pakistan's response is the <strong>Prevention of Electronic Crimes Act 2016 (PECA)</strong>, which comprehensively addresses digital offences and provides remedies for victims.</p>

<p>This guide is essential reading for every Pakistani internet user — whether you are a victim of cyber crime, someone unfairly accused, or simply want to understand your digital rights.</p>

<h2>What Is PECA 2016?</h2>
<p>PECA (Prevention of Electronic Crimes Act 2016) was enacted on August 11, 2016. It is Pakistan's primary cyber security and cyber crime legislation, regulating electronic crimes, digital evidence, data protection, and online content. PECA is administered and enforced by the <strong>Federal Investigation Agency (FIA)</strong> through its dedicated Cybercrime Wing (CCW) and Cybercrime Reporting Centres (CCRC).</p>

<h2>Key Offences Under PECA 2016</h2>
<ol>
  <li><strong>Section 3 — Unauthorized Access:</strong> Accessing another person's data, system, or network without permission. Penalty: up to 3 months imprisonment and/or Rs. 50,000 fine.</li>
  <li><strong>Section 5 — Unauthorized Copying/Transmission of Data:</strong> Copying, moving, or transmitting another person's data without authorization. Penalty: up to 6 months and/or Rs. 100,000 fine.</li>
  <li><strong>Section 9 — Electronic Fraud:</strong> Using electronic means to obtain property, services, or financial benefit fraudulently. Penalty: up to 2 years and/or Rs. 10 million fine.</li>
  <li><strong>Section 10 — Electronic Forgery:</strong> Creating or using fake electronic documents or records. Penalty: up to 3 years and/or Rs. 250,000 fine.</li>
  <li><strong>Section 16 — Identity Crime (Identity Theft):</strong> Obtaining, selling, or using another person's digital identity, information, or identity documents. Penalty: up to 3 years and/or Rs. 5 million fine.</li>
  <li><strong>Section 20 — Offences Against the Dignity of a Natural Person (Fake Accounts):</strong> Creating fake profiles or accounts in someone else's name, or using someone else's identity online to defame or harm. Penalty: up to 3 years and/or Rs. 1 million fine.</li>
  <li><strong>Section 21 — Offences Against Modesty / Revenge Pornography:</strong> Displaying or distributing obscene content without consent, including intimate images. Penalty: up to 5 years and/or Rs. 5 million fine.</li>
  <li><strong>Section 24 — Cyberstalking:</strong> Using electronic means to repeatedly communicate or monitor a person to cause fear, distress, or threaten. Penalty: up to 3 years and/or Rs. 1 million fine. (Second offence: up to 5 years.)</li>
  <li><strong>Section 26A — Hate Speech (added 2020):</strong> Posting content that promotes hatred against any identifiable group. Penalty: up to 7 years imprisonment.</li>
  <li><strong>Section 34 — Spamming:</strong> Sending unsolicited commercial electronic messages in bulk. Administrative penalties apply.</li>
</ol>

<h2>How to Report a Cyber Crime in Pakistan</h2>
<ol>
  <li><strong>FIA Cybercrime Reporting Centre (CCRC) Online:</strong> The fastest route. Visit <strong>fia.gov.pk</strong> and use the online complaint portal to submit your complaint with evidence attachments.</li>
  <li><strong>FIA National Response Centre Helpline:</strong> Call <strong>9911</strong> (24/7 for cyber emergencies).</li>
  <li><strong>Nearest FIA Office:</strong> Visit the nearest FIA Cybercrime Wing office in your city (major cities: Islamabad, Lahore, Karachi, Peshawar, Quetta).</li>
  <li><strong>Local Police Station:</strong> Some cyber crimes (especially financial fraud overlapping with traditional fraud) may also be reported to the local police station under PPC provisions.</li>
</ol>

<h2>What Evidence Should You Preserve?</h2>
<ul>
  <li>Screenshots of messages, posts, or content (with URL/timestamps visible)</li>
  <li>URLs of fake profiles or accounts</li>
  <li>Transaction records, bank statements for financial fraud</li>
  <li>Phone numbers, email addresses used by the perpetrator</li>
  <li>Any communication records (chats, emails)</li>
  <li>Copies of any digital content that was shared without consent</li>
</ul>

<h2>PECA and Freedom of Speech: The Controversy</h2>
<p>PECA 2016 has been criticized by civil society and journalists for being overly broad, particularly Section 20 (fake accounts) and newly added provisions, which critics argue are used to suppress legitimate criticism and journalism. If you are being prosecuted under PECA for what you believe is legitimate speech, you should immediately consult a cyber crime lawyer to challenge the charges.</p>

<h2>Conclusion: Act Fast — Cyber Evidence Is Perishable</h2>
<p>Digital evidence (messages, posts, accounts) can be deleted quickly. If you are a victim of a cyber crime, preserve evidence immediately and seek legal assistance without delay. WakeelZone's cyber crime lawyers have deep expertise in PECA cases — both for victims seeking justice and individuals defending against charges.</p>

<p>Call <strong><?php echo HELPLINE_NUMBER; ?></strong> for immediate, anonymous legal guidance on any cyber crime matter.</p>
HTML,
  ],

  [
    'title'   => 'How to Register a Company in Pakistan: SECP Registration Guide',
    'slug'    => 'secp-company-registration-pakistan',
    'cat'     => 'Corporate Law',
    'cat_slug'=> 'corporate-lawyer',
    'icon'    => 'ph-buildings',
    'date'    => 'May 15, 2026',
    'read'    => '9 min read',
    'author'  => 'WakeelZone Legal Team',
    'excerpt' => 'Starting a business in Pakistan? This comprehensive guide covers Private Limited Company, SMC, and LLP registrations with SECP — including costs, timelines, and required documents.',
    'content' => <<<HTML
<p>Registering a company in Pakistan has become significantly more streamlined thanks to the Securities and Exchange Commission of Pakistan (SECP)'s digital reforms. However, choosing the right structure, completing the paperwork correctly, and meeting post-registration obligations still requires careful attention. This comprehensive guide walks you through the entire process.</p>

<h2>Step 1: Choose Your Company Structure</h2>
<p>Pakistan offers several business structures under the Companies Act 2017. The most common are:</p>
<ol>
  <li>
    <strong>Private Limited Company (Pvt. Ltd.):</strong> The most popular choice for businesses. Requires minimum 2 shareholders and 2 directors (or 1 of each for SMC). Liability is limited to share capital. Required for investment rounds, banking relationships, and government contracts.
  </li>
  <li>
    <strong>Single Member Company (SMC):</strong> For solo entrepreneurs. Only one member (shareholder) and one director required. Must have a nominee member. A simpler option for small businesses.
  </li>
  <li>
    <strong>Limited Liability Partnership (LLP):</strong> Hybrid between partnership and limited company. Partners have limited liability. Good for professional service firms (lawyers, accountants, consultants).
  </li>
  <li>
    <strong>Public Limited Company:</strong> Can offer shares to the public. Required for stock exchange listing. Complex governance requirements — not suitable for most startups.
  </li>
</ol>
<p><em>Recommendation: Most startups and SMEs should register as a Private Limited Company for maximum flexibility and investor readiness.</em></p>

<h2>Step 2: Choose a Company Name</h2>
<ul>
  <li>Check name availability on SECP's eServices portal (eservices.secp.gov.pk)</li>
  <li>The name must not be identical or deceptively similar to an existing company</li>
  <li>Avoid words requiring regulatory approval (Bank, Finance, Insurance, Trust, Fund, etc.)</li>
  <li>Reserve your preferred name online — the reservation is valid for 90 days</li>
</ul>

<h2>Step 3: Prepare Required Documents</h2>
<p>For Private Limited Company registration, you will need:</p>
<ul>
  <li>Memorandum of Association (MoA) — defines company's objectives and structure</li>
  <li>Articles of Association (AoA) — defines internal governance rules</li>
  <li>CNIC/Passport copies of all directors and shareholders</li>
  <li>CNIC/Passport copy of the registered office representative</li>
  <li>Proof of registered office address (utility bill, lease agreement, or ownership document)</li>
  <li>Declaration of compliance by a lawyer or director</li>
  <li>Form 1 (Declaration of Compliance), Form 21 (Notice of Registered Office)</li>
</ul>

<h2>Step 4: File Online Through SECP eServices</h2>
<ol>
  <li>Create an account on SECP eServices portal</li>
  <li>Complete the online registration form (Company Registration Form)</li>
  <li>Upload all required documents</li>
  <li>Pay the registration fee online (varies by share capital — typically Rs. 3,500 to Rs. 10,000+)</li>
  <li>SECP processes the application within <strong>3-5 business days</strong></li>
  <li>Upon approval, you receive a Certificate of Incorporation and company registration number</li>
</ol>

<h2>Step 5: Post-Incorporation Requirements</h2>
<p>After incorporation, you must:</p>
<ul>
  <li><strong>NTN Registration:</strong> Register with FBR for National Tax Number (NTN) — mandatory for all companies</li>
  <li><strong>Sales Tax Registration:</strong> If annual turnover exceeds Rs. 10 million, register for Sales Tax with FBR</li>
  <li><strong>Bank Account:</strong> Open a company bank account using the Certificate of Incorporation and company documents</li>
  <li><strong>EOBI Registration:</strong> If you have employees, register with EOBI (Employees Old-Age Benefits Institution)</li>
  <li><strong>SECP Annual Filing:</strong> File annual returns with SECP (Form A for Pvt. Ltd.) within 30 days of AGM</li>
</ul>

<h2>Common Mistakes to Avoid</h2>
<ul>
  <li>Choosing an overly broad or vague business objective in the MoA — this can cause issues with banks and regulators</li>
  <li>Not having the Memorandum and Articles of Association reviewed by a lawyer before submission</li>
  <li>Forgetting to register for NTN immediately after incorporation</li>
  <li>Using a residential address as registered office without proper documentation</li>
  <li>Not maintaining statutory books and registers after incorporation</li>
</ul>

<h2>Costs Summary</h2>
<ul>
  <li>SECP Registration Fee: Rs. 3,500 – Rs. 10,000+ (depending on authorized share capital)</li>
  <li>Lawyer Fee for MoA/AoA drafting: Rs. 15,000 – Rs. 50,000</li>
  <li>NTN Registration: Free (FBR Iris portal)</li>
  <li>Total estimated cost: Rs. 25,000 – Rs. 75,000 for professional assistance</li>
</ul>

<h2>Conclusion: Get It Right from Day One</h2>
<p>A correctly structured and registered company sets the foundation for your entire business journey — from investor fundraising to government contracts to bank credit. Errors in incorporation are costly and time-consuming to fix. WakeelZone's corporate law specialists handle SECP registrations end-to-end, ensuring your company is properly set up from day one.</p>

<p>Call <strong><?php echo HELPLINE_NUMBER; ?></strong> to get started — or WhatsApp us for a quick consultation on the right structure for your business.</p>
HTML,
  ],

  [
    'title'   => 'Overseas Pakistani Property Guide: Managing Land From Abroad',
    'slug'    => 'overseas-pakistani-property-guide',
    'cat'     => 'Overseas Pakistani',
    'cat_slug'=> 'overseas-pakistani',
    'icon'    => 'ph-globe',
    'date'    => 'May 8, 2026',
    'read'    => '10 min read',
    'author'  => 'WakeelZone Legal Team',
    'excerpt' => 'Millions of overseas Pakistanis face property fraud and disputes back home. This guide explains Power of Attorney, NADRA documents, legal representation, and how to protect your assets from abroad.',
    'content' => <<<HTML
<p>With an estimated 9-10 million Pakistanis living abroad — in Saudi Arabia, UAE, UK, USA, Canada, and beyond — property management back home is one of the most common and critical legal challenges they face. Distance creates vulnerability: properties are illegally occupied, fraudulently sold, inheritance disputes go unresolved, and valuable assets are lost simply because there is no one on the ground to protect them.</p>

<p>This comprehensive guide explains everything overseas Pakistanis need to know to protect their property rights from abroad.</p>

<h2>The Most Common Overseas Pakistani Property Problems</h2>
<ul>
  <li><strong>Fraudulent Sale by Relatives:</strong> A sibling, cousin, or other relative sells the property using a forged Power of Attorney or forged documents</li>
  <li><strong>Illegal Occupation:</strong> Squatters or neighbors encroach on the property in the owner's absence</li>
  <li><strong>Inheritance Disputes:</strong> Death of a parent triggers property disputes among siblings that remain unresolved for years</li>
  <li><strong>Manipulation of Revenue Records:</strong> Names are fraudulently changed in land records at the Patwari level</li>
  <li><strong>Builder Fraud:</strong> Down payments made for apartments or plots that are never delivered</li>
  <li><strong>Expired CNIC Issues:</strong> Expired CNIC prevents property transactions, NADRA renewals from abroad</li>
</ul>

<h2>Power of Attorney (PoA): Your Most Important Tool</h2>
<p>A Power of Attorney (PoA) is a legal document that authorizes a trusted person in Pakistan to act on your behalf. For overseas Pakistanis, this is the foundational document for all property management. There are two types:</p>
<ol>
  <li>
    <strong>General Power of Attorney (GPA):</strong> Authorizes the attorney to handle all of your affairs in Pakistan — property, banking, legal proceedings, NADRA matters, etc. Broad powers. Use with extreme caution and only with someone you absolutely trust.
  </li>
  <li>
    <strong>Special/Limited Power of Attorney (SPA):</strong> Authorizes specific acts only — for example, "to sell Plot No. X in DHA Phase Y on my behalf." Recommended for most property transactions as it limits exposure.
  </li>
</ol>
<p><strong>How to Execute a PoA from Abroad:</strong></p>
<ol>
  <li>Have the PoA document drafted by a Pakistani property lawyer (WakeelZone can prepare this)</li>
  <li>Get the document attested by the Pakistani Embassy or Consulate in your country of residence</li>
  <li>Once received in Pakistan, get it verified by the Ministry of Foreign Affairs in Islamabad</li>
  <li>Then get it registered at the Sub-Registrar's office for use in property transactions</li>
</ol>

<h2>NADRA Documents for Overseas Pakistanis</h2>
<p>Valid identity documents are essential for all property and legal transactions. Overseas Pakistanis commonly need:</p>
<ul>
  <li><strong>NICOP (National Identity Card for Overseas Pakistanis):</strong> The primary ID card for Pakistanis living abroad. Valid for property purchase, NADRA transactions, and banking. Apply/renew at the nearest Pakistani Embassy/Consulate or through NADRA's POF (Pak Identity) app.</li>
  <li><strong>CNIC (Computerized National Identity Card):</strong> For those who still need a regular CNIC — can be renewed remotely through Power of Attorney holder in Pakistan.</li>
  <li><strong>Family Registration Certificate:</strong> Documents family composition — required for inheritance and succession matters.</li>
  <li><strong>POC (Pakistan Origin Card):</strong> For foreign nationals of Pakistani origin who want to maintain ties to Pakistan including property ownership rights.</li>
</ul>

<h2>Inheritance and Succession for Overseas Pakistanis</h2>
<p>If a family member in Pakistan passes away, overseas Pakistani heirs must take immediate legal steps to secure their inheritance rights:</p>
<ol>
  <li><strong>Obtain Death Certificate</strong> from NADRA (or Union Council)</li>
  <li><strong>Apply for Legal Heir Certificate</strong> from the local Union Council</li>
  <li><strong>Apply for Succession Certificate</strong> from the District Court (required for bank accounts, investments)</li>
  <li><strong>Apply for Letter of Administration</strong> for real estate assets</li>
  <li><strong>File Inheritance Mutation (Intiqal-e-Warasat)</strong> with the Patwari office to transfer land records</li>
</ol>
<p>All of these steps can be handled by a lawyer on your behalf using a Special Power of Attorney — you do not need to travel to Pakistan.</p>

<h2>How to Protect Your Property from Abroad</h2>
<ul>
  <li>Keep certified copies of all property documents (sale deeds, Fard, utility bills) with you abroad and also with a trusted lawyer in Pakistan</li>
  <li>Register a <strong>Caveat</strong> (a notice) at the Sub-Registrar's office — this prevents any transfer of your property without your knowledge</li>
  <li>Conduct regular title searches through your lawyer to ensure your name remains in the records</li>
  <li>Avoid giving broad General Powers of Attorney to relatives — always use Limited/Special PoA for specific transactions</li>
  <li>Maintain contact with neighbors or a local caretaker who can alert you to any unauthorized activity</li>
</ul>

<h2>Remote Court Representation</h2>
<p>If your property is involved in a dispute or court case in Pakistan, you absolutely can be represented without being present. Your lawyer, holding a Power of Attorney and Vakalatnama, will appear before all courts on your behalf. All communication with you can happen via phone, WhatsApp, or email. Payments can be made through international bank transfers or Remittance services (Western Union, MoneyGram, etc.).</p>

<h2>Conclusion: Don't Wait for a Crisis</h2>
<p>The best time to secure your property rights in Pakistan is before a dispute arises — not after. Proactive legal measures (proper PoA, title registration, caveat, regular record checks) are far cheaper and less stressful than defending against fraud or litigation after the fact.</p>

<p>WakeelZone's overseas Pakistani specialists are available across time zones for consultations via phone, WhatsApp, or video call. Call <strong><?php echo HELPLINE_NUMBER; ?></strong> or WhatsApp us at any time.</p>
HTML,
  ],
];

// ─── SLUG LOOKUP ─────────────────────────────────────────────────────────────
$slug = isset($_GET['slug']) ? trim($_GET['slug']) : '';
$post = null;
foreach ($all_posts as $p) {
    if ($p['slug'] === $slug) { $post = $p; break; }
}

// Redirect if not found
if (!$post) {
    header('Location: blog.php');
    exit;
}

// Related posts (exclude current)
$related = array_values(array_filter($all_posts, fn($p) => $p['slug'] !== $slug));
$related = array_slice($related, 0, 3);

$pageTitle = $post['title'];
$pageDesc  = $post['excerpt'];
include 'includes/head.php';
include 'includes/nav.php';
?>

<!-- Page Header -->
<div class="page-header">
  <div class="container page-header-inner">
    <div style="max-width:760px;margin-inline:auto;text-align:center;">
      <span class="section-label" style="margin-bottom:1rem;">
        <i class="ph ph-tag"></i> <?php echo htmlspecialchars($post['cat']); ?>
      </span>
      <h1 class="page-header-title heading-1" style="font-size:clamp(1.5rem,3.5vw,2.25rem);line-height:1.25;">
        <?php echo htmlspecialchars($post['title']); ?>
      </h1>
      <div style="display:flex;flex-wrap:wrap;justify-content:center;gap:1rem;margin-top:1.25rem;color:rgba(255,255,255,0.6);font-size:var(--text-xs);">
        <span><i class="ph ph-calendar-blank"></i> <?php echo $post['date']; ?></span>
        <span><i class="ph ph-clock"></i> <?php echo $post['read']; ?></span>
        <span><i class="ph ph-user"></i> <?php echo htmlspecialchars($post['author']); ?></span>
      </div>
      <nav class="breadcrumb" aria-label="Breadcrumb" style="justify-content:center;margin-top:1.25rem;">
        <span class="breadcrumb-item"><a href="index.php">Home</a></span>
        <span class="breadcrumb-sep"><i class="ph ph-caret-right"></i></span>
        <span class="breadcrumb-item"><a href="blog.php">Legal Guide</a></span>
        <span class="breadcrumb-sep"><i class="ph ph-caret-right"></i></span>
        <span class="breadcrumb-item"><?php echo htmlspecialchars($post['cat']); ?></span>
      </nav>
    </div>
  </div>
</div>

<!-- ════════ MAIN LAYOUT ════════ -->
<section class="section">
  <div class="container">
    <div class="blog-layout">

      <!-- ── MAIN CONTENT (2/3) ───────────────────── -->
      <article class="blog-main reveal-left">

        <!-- Featured Icon Banner -->
        <div style="width:100%;height:260px;background:linear-gradient(135deg,var(--clr-primary),var(--clr-primary-light));border-radius:var(--radius-xl);display:flex;align-items:center;justify-content:center;margin-bottom:2.5rem;position:relative;overflow:hidden;">
          <div style="position:absolute;inset:0;background-image:radial-gradient(circle,rgba(255,255,255,0.04) 1px,transparent 1px);background-size:20px 20px;"></div>
          <div style="position:relative;z-index:1;text-align:center;">
            <i class="ph <?php echo htmlspecialchars($post['icon']); ?>" style="font-size:5rem;color:rgba(201,168,76,0.6);display:block;margin-bottom:0.75rem;"></i>
            <div style="font-size:var(--text-xs);font-weight:700;letter-spacing:0.15em;text-transform:uppercase;color:var(--clr-gold);"><?php echo htmlspecialchars($post['cat']); ?></div>
          </div>
        </div>

        <!-- Article Body -->
        <div class="prose-content">
          <?php echo $post['content']; ?>
        </div>

        <!-- Author Box -->
        <div class="author-box">
          <div class="author-avatar">
            <i class="ph ph-scales"></i>
          </div>
          <div>
            <div style="font-size:var(--text-xs);font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:var(--clr-text-muted);margin-bottom:0.25rem;">Written By</div>
            <div style="font-weight:700;color:var(--clr-text);">WakeelZone Legal Team</div>
            <p style="font-size:var(--text-xs);color:var(--clr-text-3);margin-top:0.25rem;line-height:var(--leading-relaxed);">Expert legal content reviewed and verified by our panel of practicing advocates enrolled with Pakistan Bar Council and Provincial Bar Councils.</p>
          </div>
        </div>

        <!-- Social Share -->
        <div class="share-section">
          <span style="font-weight:600;font-size:var(--text-sm);color:var(--clr-text-2);">
            <i class="ph ph-share-network" style="color:var(--clr-primary);"></i> Share This Article:
          </span>
          <div class="share-btns">
            <a href="https://wa.me/?text=<?php echo urlencode($post['title'] . ' — ' . SITE_URL . '/blog-post.php?slug=' . $post['slug']); ?>"
               target="_blank" rel="noopener" class="share-btn share-wa" aria-label="Share on WhatsApp">
              <i class="ph ph-whatsapp-logo"></i> WhatsApp
            </a>
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(SITE_URL . '/blog-post.php?slug=' . $post['slug']); ?>"
               target="_blank" rel="noopener" class="share-btn share-fb" aria-label="Share on Facebook">
              <i class="ph ph-facebook-logo"></i> Facebook
            </a>
            <a href="https://twitter.com/intent/tweet?text=<?php echo urlencode($post['title']); ?>&url=<?php echo urlencode(SITE_URL . '/blog-post.php?slug=' . $post['slug']); ?>"
               target="_blank" rel="noopener" class="share-btn share-tw" aria-label="Share on Twitter">
              <i class="ph ph-x-logo"></i> Twitter
            </a>
            <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode(SITE_URL . '/blog-post.php?slug=' . $post['slug']); ?>"
               target="_blank" rel="noopener" class="share-btn share-li" aria-label="Share on LinkedIn">
              <i class="ph ph-linkedin-logo"></i> LinkedIn
            </a>
          </div>
        </div>

        <!-- More Articles -->
        <div style="margin-top:3.5rem;">
          <h3 class="heading-3" style="margin-bottom:1.5rem;padding-bottom:0.75rem;border-bottom:2px solid var(--clr-border);">
            <i class="ph ph-books" style="color:var(--clr-gold);"></i> More Legal Guides
          </h3>
          <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.25rem;" class="related-grid">
            <?php foreach ($related as $r): ?>
            <a href="blog-post.php?slug=<?php echo urlencode($r['slug']); ?>" class="related-card">
              <div style="width:100%;height:80px;background:linear-gradient(135deg,var(--clr-primary),var(--clr-primary-light));border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:0.875rem;">
                <i class="ph <?php echo $r['icon']; ?>" style="font-size:2rem;color:rgba(201,168,76,0.5);"></i>
              </div>
              <div class="related-cat"><?php echo htmlspecialchars($r['cat']); ?></div>
              <div class="related-title"><?php echo htmlspecialchars($r['title']); ?></div>
              <div class="related-meta">
                <i class="ph ph-clock"></i> <?php echo $r['read']; ?>
              </div>
            </a>
            <?php endforeach; ?>
          </div>
        </div>

      </article><!-- /main -->

      <!-- ── SIDEBAR (1/3) ────────────────────────── -->
      <aside class="blog-sidebar reveal-right">

        <!-- Call to Action Card -->
        <div class="sidebar-cta-card">
          <div style="position:absolute;inset:0;background-image:radial-gradient(circle,rgba(255,255,255,0.04) 1px,transparent 1px);background-size:16px 16px;border-radius:var(--radius-xl);"></div>
          <div style="position:relative;z-index:1;text-align:center;">
            <div style="width:56px;height:56px;background:var(--clr-gold);border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 1.25rem;box-shadow:var(--shadow-gold);">
              <i class="ph ph-phone-call" style="font-size:1.5rem;color:var(--clr-primary-dark);"></i>
            </div>
            <h3 style="color:#fff;font-weight:700;margin-bottom:0.625rem;font-size:var(--text-base);">Need Personal Legal Advice?</h3>
            <p style="color:rgba(255,255,255,0.75);font-size:var(--text-xs);line-height:var(--leading-relaxed);margin-bottom:1.5rem;">This guide is general information. For advice specific to your case, speak to a verified lawyer — anonymously.</p>
            <a href="tel:<?php echo preg_replace('/\s+/', '', HELPLINE_NUMBER); ?>" class="btn btn-gold btn-lg" style="width:100%;justify-content:center;">
              <i class="ph ph-phone-call"></i> Call Now
            </a>
            <p style="color:rgba(255,255,255,0.45);font-size:var(--text-xs);margin-top:0.75rem;">Available 24/7 — Completely Anonymous</p>
          </div>
        </div>

        <!-- Get Legal Help Card -->
        <div class="sidebar-card" style="margin-top:1.5rem;">
          <h4 class="sidebar-card-title"><i class="ph ph-scales"></i> Get Legal Help</h4>
          <p style="font-size:var(--text-xs);color:var(--clr-text-3);line-height:var(--leading-relaxed);margin-bottom:1.25rem;">
            Speak to a verified <?php echo htmlspecialchars($post['cat']); ?> specialist on WakeelZone — your identity stays anonymous.
          </p>
          <a href="service.php?slug=<?php echo urlencode($post['cat_slug']); ?>" class="btn btn-outline" style="width:100%;justify-content:center;font-size:var(--text-xs);">
            <i class="ph ph-arrow-right"></i> View <?php echo htmlspecialchars($post['cat']); ?> Services
          </a>
          <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>" target="_blank" rel="noopener" class="wa-btn" style="width:100%;justify-content:center;margin-top:0.75rem;font-size:var(--text-xs);">
            <i class="ph ph-whatsapp-logo"></i> WhatsApp a Lawyer
          </a>
        </div>

        <!-- Related Articles Sidebar -->
        <div class="sidebar-card" style="margin-top:1.5rem;">
          <h4 class="sidebar-card-title"><i class="ph ph-book-open"></i> More Articles</h4>
          <div style="display:flex;flex-direction:column;gap:1rem;">
            <?php foreach ($related as $r): ?>
            <a href="blog-post.php?slug=<?php echo urlencode($r['slug']); ?>" class="sidebar-article-link">
              <div style="width:40px;height:40px;background:linear-gradient(135deg,var(--clr-primary),var(--clr-primary-light));border-radius:var(--radius-sm);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                <i class="ph <?php echo $r['icon']; ?>" style="font-size:1.125rem;color:rgba(201,168,76,0.6);"></i>
              </div>
              <div>
                <div style="font-size:var(--text-xs);font-weight:600;color:var(--clr-text);line-height:1.35;margin-bottom:0.25rem;"><?php echo htmlspecialchars($r['title']); ?></div>
                <div style="font-size:var(--text-xs);color:var(--clr-text-muted);"><i class="ph ph-clock"></i> <?php echo $r['read']; ?></div>
              </div>
            </a>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- Quick Contact -->
        <div class="sidebar-card" style="margin-top:1.5rem;border:1px solid rgba(201,168,76,0.2);background:var(--clr-gold-50);">
          <h4 class="sidebar-card-title" style="color:var(--clr-primary);"><i class="ph ph-envelope"></i> Send Us a Query</h4>
          <p style="font-size:var(--text-xs);color:var(--clr-text-3);margin-bottom:1rem;">Have a specific legal question? Send us a message and we will connect you with the right specialist.</p>
          <a href="contact.php" class="btn btn-primary" style="width:100%;justify-content:center;font-size:var(--text-xs);">
            <i class="ph ph-paper-plane-tilt"></i> Send Message
          </a>
          <a href="mailto:<?php echo CONTACT_EMAIL; ?>" style="display:flex;align-items:center;justify-content:center;gap:0.375rem;font-size:var(--text-xs);color:var(--clr-text-muted);margin-top:0.875rem;">
            <i class="ph ph-envelope"></i> <?php echo CONTACT_EMAIL; ?>
          </a>
        </div>

      </aside><!-- /sidebar -->

    </div><!-- /blog-layout -->
  </div>
</section>

<!-- ════════ CTA ════════ -->
<section class="cta-section">
  <div class="container cta-inner">
    <h2 class="heading-1 reveal" style="color:var(--clr-text-inverse);margin-bottom:0.75rem;">
      Ready for Expert Legal Guidance?
    </h2>
    <p class="reveal d-1" style="color:rgba(255,255,255,0.7);font-size:var(--text-base);max-width:500px;margin:0 auto 2rem;line-height:var(--leading-relaxed);">
      This guide is just the beginning. Get personalized advice from a verified Pakistani lawyer — anonymously, 24/7.
    </p>
    <div class="cta-btns reveal d-2">
      <a href="tel:<?php echo preg_replace('/\s+/', '', HELPLINE_NUMBER); ?>" class="btn btn-gold btn-lg">
        <i class="ph ph-phone-call"></i> Call Our Helpline
      </a>
      <a href="blog.php" class="btn btn-outline-white btn-lg">
        <i class="ph ph-books"></i> More Legal Guides
      </a>
    </div>
  </div>
</section>

<style>
/* ── Blog Layout ─────────────────────────── */
.blog-layout {
  display: grid;
  grid-template-columns: 1fr 340px;
  gap: 3rem;
  align-items: start;
}
.blog-main { min-width: 0; }
.blog-sidebar { position: sticky; top: calc(var(--nav-height) + 1.5rem); }

/* ── Prose Content ───────────────────────── */
.prose-content { line-height: var(--leading-relaxed); color: var(--clr-text-3); }
.prose-content p { font-size: var(--text-sm); margin-bottom: 1.125rem; }
.prose-content h2 {
  font-size: clamp(1.125rem, 2vw, 1.375rem);
  font-weight: 700;
  color: var(--clr-text);
  margin: 2rem 0 0.875rem;
  padding-left: 1rem;
  border-left: 4px solid var(--clr-gold);
}
.prose-content h3 {
  font-size: var(--text-base);
  font-weight: 600;
  color: var(--clr-primary);
  margin: 1.5rem 0 0.625rem;
}
.prose-content ol,
.prose-content ul {
  padding-left: 1.25rem;
  margin-bottom: 1.125rem;
  display: flex;
  flex-direction: column;
  gap: 0.625rem;
}
.prose-content ol { list-style: decimal; }
.prose-content ul { list-style: disc; }
.prose-content li { font-size: var(--text-sm); color: var(--clr-text-3); }
.prose-content strong { color: var(--clr-text); font-weight: 600; }
.prose-content a { color: var(--clr-primary); font-weight: 500; }
.prose-content a:hover { text-decoration: underline; }

/* ── Author Box ──────────────────────────── */
.author-box {
  display: flex;
  align-items: center;
  gap: 1.25rem;
  background: var(--clr-surface);
  border: 1px solid var(--clr-border);
  border-radius: var(--radius-lg);
  padding: 1.5rem;
  margin-top: 2.5rem;
  box-shadow: var(--shadow-xs);
}
.author-avatar {
  width: 60px;
  height: 60px;
  background: var(--clr-primary);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.75rem;
  color: var(--clr-gold);
  flex-shrink: 0;
}

/* ── Share Section ───────────────────────── */
.share-section {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  gap: 0.75rem;
  margin-top: 2rem;
  padding-top: 1.5rem;
  border-top: 1px solid var(--clr-border);
}
.share-btns { display: flex; flex-wrap: wrap; gap: 0.5rem; }
.share-btn {
  display: inline-flex;
  align-items: center;
  gap: 0.375rem;
  padding: 0.5rem 0.875rem;
  border-radius: var(--radius-full);
  font-size: var(--text-xs);
  font-weight: 600;
  color: #fff;
  transition: opacity var(--ease-base), transform var(--ease-base);
}
.share-btn:hover { opacity: 0.85; transform: translateY(-1px); }
.share-wa { background: #25D366; }
.share-fb { background: #1877F2; }
.share-tw { background: #000; }
.share-li { background: #0A66C2; }

/* ── Related Articles Grid ──────────────── */
.related-card {
  display: block;
  background: var(--clr-surface);
  border: 1px solid var(--clr-border-light);
  border-radius: var(--radius-lg);
  padding: 1.125rem;
  text-decoration: none;
  transition: box-shadow var(--ease-base), transform var(--ease-base);
}
.related-card:hover { box-shadow: var(--shadow-md); transform: translateY(-2px); }
.related-cat { font-size: var(--text-xs); font-weight: 700; text-transform: uppercase; letter-spacing: 0.08em; color: var(--clr-gold); margin-bottom: 0.375rem; }
.related-title { font-size: var(--text-xs); font-weight: 600; color: var(--clr-text); line-height: 1.4; margin-bottom: 0.5rem; }
.related-meta { font-size: var(--text-xs); color: var(--clr-text-muted); display: flex; align-items: center; gap: 0.25rem; }

/* ── Sidebar ─────────────────────────────── */
.sidebar-cta-card {
  background: linear-gradient(135deg, var(--clr-primary), var(--clr-primary-light));
  border-radius: var(--radius-xl);
  padding: 2rem;
  position: relative;
  overflow: hidden;
  box-shadow: var(--shadow-navy);
}
.sidebar-card {
  background: var(--clr-surface);
  border: 1px solid var(--clr-border-light);
  border-radius: var(--radius-lg);
  padding: 1.5rem;
  box-shadow: var(--shadow-xs);
}
.sidebar-card-title {
  font-size: var(--text-sm);
  font-weight: 700;
  color: var(--clr-text);
  margin-bottom: 1rem;
  display: flex;
  align-items: center;
  gap: 0.5rem;
  padding-bottom: 0.75rem;
  border-bottom: 1px solid var(--clr-border-light);
}
.sidebar-card-title i { color: var(--clr-primary); }
.sidebar-article-link {
  display: flex;
  align-items: flex-start;
  gap: 0.875rem;
  text-decoration: none;
  transition: opacity var(--ease-base);
}
.sidebar-article-link:hover { opacity: 0.75; }

/* ── Responsive ──────────────────────────── */
@media (max-width: 1023px) {
  .blog-layout { grid-template-columns: 1fr; }
  .blog-sidebar { position: static; }
  .related-grid { grid-template-columns: 1fr 1fr !important; }
}
@media (max-width: 639px) {
  .related-grid { grid-template-columns: 1fr !important; }
  .share-section { flex-direction: column; align-items: flex-start; }
  .author-box { flex-direction: column; text-align: center; }
  .prose-content h2 { font-size: 1.0625rem; }
}
</style>

<?php include 'includes/footer.php'; ?>
