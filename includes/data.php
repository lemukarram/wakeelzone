<?php
/**
 * WakeelZone — Static Site Data
 * All content as PHP arrays — no database required.
 * Adapted from vakeelsaab.com for Pakistan legal context.
 */

// ─── SERVICES ───────────────────────────────────────────────────────────────
$services = [
    [
        'slug'        => 'property-lawyer',
        'title'       => 'Property Lawyer',
        'short'       => 'Real estate transactions, property disputes, land records, documentation, and title verification.',
        'icon'        => 'ph-house',
        'color'       => 'navy',
        'content'     => 'Real estate transactions and disputes in Pakistan can be complex and stressful. We provide end-to-end legal solutions for all property-related matters, including:

1. Title Verification: Thorough due diligence before any property purchase to confirm ownership and encumbrances.
2. Fard & Registry Assistance: Ensuring proper transfer of property in revenue records (Patwari, Tehsildar).
3. Builder-Buyer Disputes: Representation before courts and housing authority tribunals.
4. Landlord-Tenant Issues: Eviction suits, rent agreement drafting, and recovery of rent arrears.
5. Property Partition: Resolving ancestral property and inheritance disputes.
6. Sale Deed & Documentation: Drafting and vetting all property documents to protect your interests.',
        'features'    => [
            'Title Verification & Due Diligence',
            'Property Registration & Documentation',
            'Inheritance & Partition Disputes',
            'Landlord-Tenant Legal Support',
            'Builder Dispute Representation',
            'Revenue Records Correction',
        ],
    ],
    [
        'slug'        => 'criminal-lawyer',
        'title'       => 'Criminal Lawyer',
        'short'       => 'Criminal defense, bail applications, FIR guidance, and representation in criminal proceedings.',
        'icon'        => 'ph-scales',
        'color'       => 'gold',
        'content'     => 'When facing criminal charges, immediate legal intervention is critical. Our panel of experienced criminal defense lawyers specializes in:

1. Bail Matters: Regular Bail, Pre-Arrest (Anticipatory) Bail, and Bail-Before-Arrest applications.
2. FIR Quashing: Petitions in High Courts to quash wrongful or malicious FIRs.
3. Defense in Trials: Handling cases related to white-collar crimes, assault, fraud, and forgery.
4. Cyber Crimes: Legal assistance under the Prevention of Electronic Crimes Act (PECA 2016).
5. Appeals: Filing revisions and appeals before Sessions Courts, High Courts, and the Supreme Court of Pakistan.
6. Khula & Domestic Cases: Legal guidance in domestic violence and family criminal matters.',
        'features'    => [
            'Bail Applications (Regular & Pre-Arrest)',
            'FIR Registration & Quashing',
            'Criminal Trial Defense',
            'Appeals to Higher Courts',
            'PECA & Cyber Crime Defense',
            '24/7 Emergency Legal Assistance',
        ],
    ],
    [
        'slug'        => 'civil-lawyer',
        'title'       => 'Civil Lawyer',
        'short'       => 'Civil disputes, contract matters, recovery suits, and general civil litigation support.',
        'icon'        => 'ph-file-text',
        'color'       => 'navy',
        'content'     => 'Civil litigation covers a broad spectrum of non-criminal disputes between individuals and entities. We assist with:

1. Money Recovery: Suits for recovery of debts and commercial dues.
2. Cheque Dishonour: Legal notices and criminal complaints under Section 489-F PPC.
3. Specific Performance: Enforcement of sale agreements and contractual obligations.
4. Injunction Orders: Urgent relief to prevent disposal of property or breach of agreements.
5. Damages & Compensation: Suits for losses arising from negligence or breach of contract.
6. Consumer Protection: Filing complaints with Consumer Courts against deficient goods or services.',
        'features'    => [
            'Money Recovery Suits',
            'Cheque Dishonour Cases (489-F PPC)',
            'Contract Enforcement',
            'Injunction & Stay Orders',
            'Consumer Court Complaints',
            'Appellate Representation',
        ],
    ],
    [
        'slug'        => 'family-lawyer',
        'title'       => 'Family Lawyer',
        'short'       => 'Divorce proceedings, child custody, domestic violence, alimony, and family disputes.',
        'icon'        => 'ph-users',
        'color'       => 'gold',
        'content'     => 'Family law matters are deeply personal and require a sensitive yet firm approach. Our experts handle:

1. Divorce: Khula, Talaq, and Judicial Divorce proceedings under Muslim Family Laws Ordinance 1961.
2. Child Custody & Guardianship: Securing the best interests of the child in custody battles.
3. Maintenance & Alimony: Enforcement and recovery of Mehr, maintenance, and alimony.
4. Domestic Violence: Urgent protection orders under the Domestic Violence (Prevention & Protection) Acts.
5. Succession & Inheritance: Resolving family property disputes and obtaining Succession Certificates.
6. Adoption & Guardianship: Legal procedures for guardianship under the Guardians & Wards Act 1890.',
        'features'    => [
            'Khula, Talaq & Judicial Divorce',
            'Child Custody & Visitation Rights',
            'Maintenance & Mehr Recovery',
            'Domestic Violence Protection',
            'Succession Certificates',
            'Guardianship Proceedings',
        ],
    ],
    [
        'slug'        => 'divorce-lawyer',
        'title'       => 'Divorce Lawyer',
        'short'       => 'Specialized divorce services including Khula, Talaq, contested divorce and custody matters.',
        'icon'        => 'ph-heart-break',
        'color'       => 'navy',
        'content'     => 'Divorce is one of the most emotionally challenging legal processes. Our dedicated divorce lawyers provide compassionate yet strategic legal support:

1. Khula: Guiding women through Khula proceedings before Family Courts.
2. Talaq: Ensuring proper legal process and NADRA registration under Muslim Family Laws Ordinance.
3. Contested Divorce: Vigorous representation in disputed divorce proceedings.
4. Mutual Divorce: Drafting divorce deeds and handling mutual consent separations efficiently.
5. Mehr Recovery: Filing suits for recovery of unpaid Mehr (dower) amount.
6. Post-Divorce: Alimony, child support, asset division, and custody arrangements.',
        'features'    => [
            'Khula Proceedings',
            'Talaq & NADRA Registration',
            'Contested & Mutual Divorce',
            'Mehr Recovery',
            'Alimony & Child Support',
            'Asset Division',
        ],
    ],
    [
        'slug'        => 'corporate-lawyer',
        'title'       => 'Corporate Lawyer',
        'short'       => 'Business registration, SECP compliance, mergers & acquisitions, and corporate governance.',
        'icon'        => 'ph-buildings',
        'color'       => 'gold',
        'content'     => 'We support businesses at every stage of their lifecycle with comprehensive corporate legal services:

1. Company Incorporation: Private Limited, Single Member Company (SMC), and LLP registrations with SECP.
2. Regulatory Compliance: SECP filings, annual returns, and corporate governance best practices.
3. Mergers & Acquisitions: Due diligence, transaction structuring, and post-merger integration.
4. Contract Management: Drafting MSAs, NDAs, Shareholders Agreements, and Vendor Agreements.
5. FBR & Tax Compliance: Legal guidance on corporate tax, withholding tax, and FBR compliance.
6. Board & Shareholder Disputes: Resolution of intra-company conflicts and minority shareholder rights.',
        'features'    => [
            'SECP Registration & Compliance',
            'M&A Due Diligence',
            'Corporate Contract Drafting',
            'Board & Shareholder Disputes',
            'Corporate Governance',
            'FBR Tax Compliance',
        ],
    ],
    [
        'slug'        => 'cyber-crime-lawyer',
        'title'       => 'Cyber Crime Lawyer',
        'short'       => 'Online fraud, PECA 2016 cases, cyberstalking, data breach, and digital harassment defense.',
        'icon'        => 'ph-shield-warning',
        'color'       => 'navy',
        'content'     => 'Cyber crime is one of the fastest-growing legal challenges in Pakistan. Our specialists handle:

1. PECA 2016 Cases: Defense and prosecution under the Prevention of Electronic Crimes Act.
2. Online Fraud & Scams: Legal action against digital financial fraud and phishing.
3. Cyberstalking & Harassment: Protection orders and FIR registration for online harassment.
4. Data Breach & Privacy: Legal response to unauthorized access and data leaks.
5. FIA Cybercrime Wing: Representation before FIA and Cybercrime Reporting Centre (CCRC).
6. Social Media Defamation: Legal action against online defamation and reputation damage.',
        'features'    => [
            'PECA 2016 Defense & Prosecution',
            'Online Fraud Cases',
            'Cyberstalking Protection',
            'FIA Cybercrime Representation',
            'Data Privacy Disputes',
            'Social Media Defamation',
        ],
    ],
    [
        'slug'        => 'intellectual-property',
        'title'       => 'Intellectual Property',
        'short'       => 'Patent filing, trademark registration, copyright protection, and IP litigation in Pakistan.',
        'icon'        => 'ph-lightbulb',
        'color'       => 'gold',
        'content'     => 'Protecting your intellectual property is crucial for long-term business success. Our IP lawyers handle:

1. Trademark Registration: Filing and prosecution with the Intellectual Property Organization (IPO-Pakistan).
2. Patent Filing: National and international patent applications and enforcement.
3. Copyright Protection: Registration and legal action for copyright infringement.
4. IP Litigation: Representation in IP Tribunal and courts for infringement disputes.
5. Trade Secrets: Legal frameworks to protect proprietary business information.
6. IP Due Diligence: IP audits for startups, investors, and M&A transactions.',
        'features'    => [
            'Trademark Registration (IPO-Pakistan)',
            'Patent Applications',
            'Copyright Registration',
            'IP Infringement Litigation',
            'IP Tribunal Representation',
            'IP Due Diligence',
        ],
    ],
    [
        'slug'        => 'labour-employment',
        'title'       => 'Labour & Employment',
        'short'       => 'Employment contracts, wrongful dismissal, EOBI, and workplace dispute resolution.',
        'icon'        => 'ph-briefcase',
        'color'       => 'navy',
        'content'     => 'Navigating employer-employee relationships requires specialized knowledge of Pakistan labour law:

1. Wrongful Termination: Legal action under Industrial Relations Act and labour courts.
2. Workplace Harassment: Representation under Protection Against Harassment of Women at Workplace Act 2010.
3. EOBI & PESSI: Disputes regarding EOBI pensions, PESSI benefits, and gratuity.
4. Employment Contracts: Drafting offer letters, NDAs, and non-compete clauses.
5. Labour Court Representation: Disputes on wages, overtime, and unlawful deductions.
6. Collective Bargaining: Legal support for trade unions and collective agreements.',
        'features'    => [
            'Wrongful Dismissal Claims',
            'Workplace Harassment (WHAct 2010)',
            'EOBI & PESSI Disputes',
            'Employment Contract Drafting',
            'Labour Court Representation',
            'Trade Union Legal Support',
        ],
    ],
    [
        'slug'        => 'administrative-lawyer',
        'title'       => 'Administrative Lawyer',
        'short'       => 'Government regulations, administrative appeals, licensing disputes, and regulatory compliance.',
        'icon'        => 'ph-bank',
        'color'       => 'gold',
        'content'     => 'Administrative law governs the relationship between citizens and the state. Our administrative lawyers handle:

1. Writ Petitions: Filing Constitutional Petitions (Writ Petitions) before High Courts.
2. Service Law Matters: Government employee service disputes, suspensions, and dismissals.
3. Licensing Disputes: Challenges against arbitrary refusal or cancellation of licenses.
4. NAB & Accountability: Representation in NAB proceedings and accountability courts.
5. Regulatory Compliance: NEPRA, OGRA, PTA, SECP, and sector-specific regulatory matters.
6. Land Acquisition: Challenging unlawful acquisition of land by government authorities.',
        'features'    => [
            'Writ Petitions in High Courts',
            'Government Service Disputes',
            'Regulatory Compliance',
            'NAB & Accountability Matters',
            'License Dispute Resolution',
            'Land Acquisition Challenges',
        ],
    ],
    [
        'slug'        => 'tax-lawyer',
        'title'       => 'Tax Lawyer',
        'short'       => 'FBR disputes, income tax, GST/sales tax, and tax tribunal representation.',
        'icon'        => 'ph-receipt',
        'color'       => 'navy',
        'content'     => 'Pakistan\'s tax system is complex. Our tax lawyers provide expert guidance across all tax matters:

1. FBR Disputes: Representation before FBR, ATIR (Appellate Tribunal Inland Revenue).
2. Income Tax: Returns filing, refund recovery, and dispute resolution.
3. Sales Tax / GST: Compliance, audits, and penalty appeals under Sales Tax Act 1990.
4. Customs & Excise: Customs duty disputes and anti-dumping investigations.
5. Tax Planning: Structuring transactions for optimal tax efficiency within the law.
6. Withholding Tax: Compliance and dispute resolution on WHT obligations.',
        'features'    => [
            'FBR Dispute Resolution',
            'ATIR Representation',
            'Sales Tax & GST Compliance',
            'Income Tax Planning',
            'Customs Duty Disputes',
            'Tax Audit Defense',
        ],
    ],
    [
        'slug'        => 'consumer-protection',
        'title'       => 'Consumer Protection',
        'short'       => 'Consumer court complaints, product liability, service deficiency, and refund disputes.',
        'icon'        => 'ph-shopping-cart',
        'color'       => 'gold',
        'content'     => 'Every Pakistani consumer has rights. We help enforce them through legal channels:

1. Consumer Court Complaints: Filing complaints under Consumer Protection Acts (federal and provincial).
2. Product Liability: Legal action for defective products causing injury or financial loss.
3. Service Deficiency: Claims against service providers, banks, telecoms, and utilities.
4. E-Commerce Disputes: Legal remedies for online shopping fraud and non-delivery.
5. Insurance Claims: Fighting wrongful rejection of insurance claims.
6. Banking Consumer Rights: Disputes with banks over charges, loans, and financial services.',
        'features'    => [
            'Consumer Court Representation',
            'Product Defect Claims',
            'Service Deficiency Complaints',
            'E-Commerce Fraud',
            'Bank & Telecom Disputes',
            'Online Refund Recovery',
        ],
    ],
    [
        'slug'        => 'environmental-lawyer',
        'title'       => 'Environmental Lawyer',
        'short'       => 'Environmental compliance, EPA violations, pollution control, and environmental litigation.',
        'icon'        => 'ph-leaf',
        'color'       => 'navy',
        'content'     => 'Environmental law is increasingly important in Pakistan. Our specialists handle:

1. EPA Compliance: Legal guidance under Pakistan Environment Protection Act 1997.
2. Environmental Impact Assessment (EIA): Legal support for EIA approvals and challenges.
3. Pollution Disputes: Legal action against industrial pollution affecting communities.
4. NEQS Violations: Handling violations of National Environmental Quality Standards.
5. Wildlife & Forestry: Legal protection of wildlife and forest resources.
6. Climate Litigation: Emerging climate change legal proceedings in Pakistan.',
        'features'    => [
            'EPA Compliance (1997)',
            'Environmental Impact Assessment',
            'Pollution Dispute Resolution',
            'NEQS Violation Defense',
            'Industrial License Challenges',
            'Community Rights Litigation',
        ],
    ],
    [
        'slug'        => 'immigration-lawyer',
        'title'       => 'Immigration Lawyer',
        'short'       => 'Visa applications, asylum, citizenship, work permits, and immigration court matters.',
        'icon'        => 'ph-airplane',
        'color'       => 'gold',
        'content'     => 'Immigration law requires precision and expertise. Our lawyers assist with:

1. Visa Applications: Business, student, family reunion, and skilled worker visa support.
2. Pakistan Citizenship: Application and legal proceedings for Pakistan citizenship.
3. Asylum & Refugee: Legal representation for asylum seekers in Pakistan.
4. Work Permits: Assistance with work permit applications for foreign nationals.
5. Immigration Disputes: Appeals against visa rejections and deportation orders.
6. Overseas Pakistanis: Legal matters for Pakistanis living abroad (NICOP, POC, property).',
        'features'    => [
            'Visa Application Support',
            'Pakistan Citizenship',
            'Asylum & Refugee Cases',
            'Work Permit Applications',
            'Deportation Order Appeals',
            'Overseas Pakistani Matters',
        ],
    ],
    [
        'slug'        => 'insurance-lawyer',
        'title'       => 'Insurance Lawyer',
        'short'       => 'Insurance claim disputes, policy interpretation, wrongful rejection, and SECP complaints.',
        'icon'        => 'ph-umbrella',
        'color'       => 'navy',
        'content'     => 'Insurance disputes require specialized legal knowledge. Our experts handle:

1. Claim Rejection: Legal action against wrongful rejection of life, health, or property insurance claims.
2. Policy Disputes: Interpretation of insurance policy terms and exclusions.
3. SECP Complaints: Filing regulatory complaints against insurance companies.
4. Takaful Disputes: Legal matters related to Islamic insurance (Takaful) products.
5. Motor Insurance: Disputes arising from road accident claims.
6. Business Insurance: Legal support for commercial property and liability insurance disputes.',
        'features'    => [
            'Insurance Claim Recovery',
            'Policy Dispute Resolution',
            'SECP Regulatory Complaints',
            'Takaful Disputes',
            'Motor Accident Claims',
            'Business Insurance Litigation',
        ],
    ],
    [
        'slug'        => 'startup-lawyer',
        'title'       => 'Startup Lawyer',
        'short'       => 'Startup registration, founder agreements, equity splits, funding rounds, and startup compliance.',
        'icon'        => 'ph-rocket',
        'color'       => 'gold',
        'content'     => 'Pakistan\'s startup ecosystem is thriving. Our startup lawyers provide tailored legal support:

1. Company Registration: SECP incorporation, structure advice (Pvt Ltd, SMC, LLP).
2. Founder Agreements: Co-founder equity splits, vesting schedules, and IP assignment.
3. Investment Rounds: Term sheets, SAFE notes, SHA, and investor agreement negotiation.
4. Intellectual Property: Trademark, patent, and copyright protection for your innovations.
5. Employment Policies: Compliant HR policies, stock options, and contractor agreements.
6. Regulatory Licenses: SBP, PTA, SECP, and sector-specific license applications.',
        'features'    => [
            'SECP Startup Incorporation',
            'Co-Founder Agreements',
            'Investment Round Documentation',
            'IP Protection Strategy',
            'Stock Option Plans (ESOPs)',
            'Startup Regulatory Compliance',
        ],
    ],
    [
        'slug'        => 'business-lawyer',
        'title'       => 'Business Lawyer',
        'short'       => 'Business contracts, partnership disputes, commercial litigation, and business compliance.',
        'icon'        => 'ph-chart-line-up',
        'color'       => 'navy',
        'content'     => 'Sound legal foundations are essential for every business. We provide:

1. Commercial Contracts: Drafting and reviewing supply, distribution, and service agreements.
2. Partnership Disputes: Legal resolution of disputes between business partners.
3. Debt Recovery: Commercial recovery suits and enforcement of arbitration awards.
4. Business Restructuring: Legal guidance on business mergers, splits, and dissolution.
5. Regulatory Compliance: Ongoing compliance with company law, tax, and sector regulations.
6. Dispute Resolution: Negotiation, mediation, arbitration, and commercial litigation.',
        'features'    => [
            'Commercial Contract Drafting',
            'Partnership Dispute Resolution',
            'Debt Recovery Suits',
            'Business Restructuring',
            'Arbitration & Mediation',
            'Regulatory Compliance',
        ],
    ],
    [
        'slug'        => 'overseas-pakistani',
        'title'       => 'Overseas Pakistani Lawyer',
        'short'       => 'Property, inheritance, NADRA, POC, and legal matters for Pakistanis living abroad.',
        'icon'        => 'ph-globe',
        'color'       => 'gold',
        'content'     => 'Overseas Pakistanis face unique legal challenges. Our specialists are here to help:

1. Property Management: Handling property purchase, sale, and disputes without you needing to be present.
2. Power of Attorney: Drafting and attesting Special/General Power of Attorney for legal representation.
3. Inheritance & Succession: Succession certificates, legal heirship, and property transfer for overseas heirs.
4. NADRA Matters: NICOP renewal, POC applications, and CNIC documentation issues.
5. Court Representation: Full representation without the client needing to travel to Pakistan.
6. Remittances & Banking: Legal guidance on repatriation of funds and banking disputes.',
        'features'    => [
            'Property Handling (Remote)',
            'Power of Attorney Services',
            'Inheritance & Succession',
            'NADRA / NICOP / POC Matters',
            'Full Court Representation',
            'Banking & Remittance Disputes',
        ],
    ],
];

// ─── TESTIMONIALS ────────────────────────────────────────────────────────────
$testimonials = [
    [
        'name'     => 'Fatima Malik',
        'city'     => 'Lahore',
        'text'     => 'The anonymity feature is a lifesaver. I could discuss my family issue without any fear of being judged or my identity being shared. Got expert advice within minutes.',
        'rating'   => 5,
        'service'  => 'Family Law',
    ],
    [
        'name'     => 'Ahmed Raza',
        'city'     => 'Karachi',
        'text'     => 'Very professional service. The lawyer matched with me was highly experienced in corporate law and helped us navigate a complex SECP compliance issue smoothly.',
        'rating'   => 5,
        'service'  => 'Corporate Law',
    ],
    [
        'name'     => 'Imran Siddiqui',
        'city'     => 'Islamabad',
        'text'     => 'I got instant legal advice at midnight when I was in trouble. The helpline is truly 24/7. They connected me with a criminal defense lawyer immediately.',
        'rating'   => 5,
        'service'  => 'Criminal Law',
    ],
    [
        'name'     => 'Sara Khan',
        'city'     => 'Rawalpindi',
        'text'     => 'Needed urgent help with a property fraud case. WakeelZone connected me with an expert who guided me through the FIR process step by step. Highly recommended.',
        'rating'   => 5,
        'service'  => 'Property Law',
    ],
    [
        'name'     => 'Tariq Mehmood',
        'city'     => 'Peshawar',
        'text'     => 'As an overseas Pakistani, managing property back home was a nightmare. Their team handled everything professionally. I never had to fly back even once.',
        'rating'   => 5,
        'service'  => 'Overseas Pakistani',
    ],
    [
        'name'     => 'Nadia Hussain',
        'city'     => 'Faisalabad',
        'text'     => 'Got comprehensive guidance on my Khula case. The lawyer was empathetic and highly professional. The anonymous consultation gave me the confidence to take the first step.',
        'rating'   => 5,
        'service'  => 'Family Law',
    ],
];

// ─── PROCESS STEPS ──────────────────────────────────────────────────────────
$process_steps = [
    [
        'number' => '01',
        'title'  => 'Call Our Helpline',
        'desc'   => 'Dial our 24/7 helpline to connect with our legal executive instantly. No appointment needed.',
        'icon'   => 'ph-phone-call',
    ],
    [
        'number' => '02',
        'title'  => 'Brief Your Issue',
        'desc'   => 'Explain your legal issue, language preference, and budget. Everything stays completely confidential.',
        'icon'   => 'ph-chat-dots',
    ],
    [
        'number' => '03',
        'title'  => 'Get Matched',
        'desc'   => 'We match you with the best-verified lawyer suited for your specific case type and location.',
        'icon'   => 'ph-user-check',
    ],
    [
        'number' => '04',
        'title'  => 'Start Consultation',
        'desc'   => 'Connect securely and get expert legal guidance — completely anonymous until you choose otherwise.',
        'icon'   => 'ph-shield-check',
    ],
];

// ─── FAQ ─────────────────────────────────────────────────────────────────────
$faqs = [
    [
        'q' => 'Is online legal consultation valid in Pakistan?',
        'a' => 'Yes, online legal consultation is completely valid in Pakistan. You can receive professional legal advice, case analysis, and strategic guidance through our platform. For formal court representation, your lawyer will handle all required in-person filings on your behalf.',
    ],
    [
        'q' => 'How does the anonymous consultation work?',
        'a' => 'When you call our helpline, your identity is masked through our platform. The lawyer you consult with only knows the details of your legal issue — not your name, address, or phone number. You remain anonymous until you choose to formally engage that lawyer for representation.',
    ],
    [
        'q' => 'Are all lawyers on WakeelZone verified?',
        'a' => 'Absolutely. Every lawyer on our platform undergoes a mandatory Pakistan Bar Council and Provincial Bar Council cross-check, credential verification, and profile review. We only onboard practicing advocates with clean records.',
    ],
    [
        'q' => 'Which languages are consultations available in?',
        'a' => 'We offer consultations in Urdu, English, Punjabi, Sindhi, Pashto, and Balochi. When you call, simply inform our executive of your preferred language and we will match you accordingly.',
    ],
    [
        'q' => 'What are the consultation charges?',
        'a' => 'We offer transparent, competitive consultation rates with no hidden charges. Pricing depends on the lawyer\'s experience, specialization, and consultation duration. Initial 10-minute guidance calls are available at minimal cost. Ask our helpline executive for current rates.',
    ],
    [
        'q' => 'Can I consult a lawyer for Supreme Court matters?',
        'a' => 'Yes. Our network includes Supreme Court of Pakistan advocates, High Court lawyers across all four provinces plus Islamabad, as well as specialists for Federal Shariat Court, ATIR, EOBI Tribunal, and other specialized forums.',
    ],
    [
        'q' => 'What if I am an Overseas Pakistani?',
        'a' => 'We specialize in representing overseas Pakistanis. You can consult from anywhere in the world and we handle all proceedings in Pakistan on your behalf. Our lawyers are available across multiple time zones and offer WhatsApp/video consultations.',
    ],
    [
        'q' => 'How do I register as a lawyer on WakeelZone?',
        'a' => 'Click the "Register as Lawyer" link in our navigation. Fill out the registration form with your Bar Council enrollment number, practice areas, and contact details. Our team will verify your credentials and onboard you within 2-3 business days.',
    ],
    [
        'q' => 'What cities does WakeelZone cover?',
        'a' => 'We cover all major cities including Karachi, Lahore, Islamabad, Rawalpindi, Peshawar, Quetta, Faisalabad, Multan, Sialkot, and Gujranwala. Our network also extends to district-level courts across all four provinces.',
    ],
];

// ─── STATS ──────────────────────────────────────────────────────────────────
$stats = [
    ['value' => '2500', 'suffix' => '+', 'label' => 'Verified Lawyers',    'icon' => 'ph-users'],
    ['value' => '10000', 'suffix' => '+', 'label' => 'Consultations Done', 'icon' => 'ph-chat-circle-dots'],
    ['value' => '18',   'suffix' => '',   'label' => 'Practice Areas',     'icon' => 'ph-scales'],
    ['value' => '24',   'suffix' => '/7', 'label' => 'Available',          'icon' => 'ph-clock'],
];

// ─── CITIES COVERED ──────────────────────────────────────────────────────────
$cities = [
    'Karachi', 'Lahore', 'Islamabad', 'Rawalpindi', 'Peshawar',
    'Quetta', 'Faisalabad', 'Multan', 'Sialkot', 'Gujranwala',
    'Hyderabad', 'Sukkur', 'Bahawalpur', 'Sargodha', 'Abbottabad',
];

// ─── COURTS COVERED ──────────────────────────────────────────────────────────
$courts = [
    'Supreme Court of Pakistan',
    'Lahore High Court',
    'Sindh High Court',
    'Peshawar High Court',
    'Balochistan High Court',
    'Islamabad High Court',
    'Federal Shariat Court',
    'ATIR (Tax Tribunal)',
    'Labour Courts',
    'Family Courts',
    'Consumer Courts',
    'IP Tribunal',
];

// ─── TRUST BADGES ────────────────────────────────────────────────────────────
$trust_badges = [
    ['label' => 'SECP Registered',  'icon' => 'ph-certificate'],
    ['label' => 'PBC Verified',     'icon' => 'ph-seal-check'],
    ['label' => '100% Confidential','icon' => 'ph-lock'],
    ['label' => 'Media Featured',   'icon' => 'ph-newspaper'],
];

// ─── WHY CHOOSE US ────────────────────────────────────────────────────────────
$why_us = [
    [
        'title' => 'Complete Anonymity',
        'desc'  => 'Consult lawyers without revealing your name or phone number. Your privacy is our #1 commitment.',
        'icon'  => 'ph-shield-lock',
    ],
    [
        'title' => 'Verified Experts Only',
        'desc'  => 'Every lawyer is cross-checked with Pakistan Bar Council records before joining our platform.',
        'icon'  => 'ph-seal-check',
    ],
    [
        'title' => 'Transparent Pricing',
        'desc'  => 'No hidden fees. Clear, upfront pricing so you always know what you\'re paying for.',
        'icon'  => 'ph-currency-circle-dollar',
    ],
    [
        'title' => 'Hybrid Model',
        'desc'  => 'Consult anonymously online, then transition to formal representation seamlessly when ready.',
        'icon'  => 'ph-arrows-merge',
    ],
    [
        'title' => '24/7 Helpline',
        'desc'  => 'Legal emergencies don\'t wait. Our team is available round the clock, every day of the year.',
        'icon'  => 'ph-clock-countdown',
    ],
    [
        'title' => 'Nationwide Coverage',
        'desc'  => 'Lawyers in all major cities, High Courts, the Supreme Court, and specialized tribunals.',
        'icon'  => 'ph-map-pin',
    ],
];
?>
