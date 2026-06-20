# WakeelZone — Pakistan's Premier Anonymous Legal Platform

A complete, production-ready law firm website built for **wakeelzone.com** — a Pakistan-based anonymous legal consultation platform. Fully adapted for the Pakistani legal system, courts, and audience. No database. No framework. No build step required.

---

## Table of Contents

- [Project Overview](#project-overview)
- [Tech Stack](#tech-stack)
- [Project Structure](#project-structure)
- [All Pages](#all-pages)
- [Design System](#design-system)
- [Configuration](#configuration)
- [Deployment to cPanel](#deployment-to-cpanel)
- [Production CSS Build (Optional)](#production-css-build-optional)
- [Git Repository](#git-repository)
- [Pakistan Legal Context](#pakistan-legal-context)
- [Contact](#contact)

---

## Project Overview

WakeelZone connects clients with verified lawyers anonymously — the client's identity is never revealed to the lawyer until they choose to proceed with formal representation. The platform covers 18 practice areas, all major Pakistani courts, and 8 major cities with dedicated landing pages.

**Key Features:**
- Complete anonymity for clients — consult without revealing identity
- 18 legal practice areas with dedicated content pages
- 8 city-specific advocate pages (Karachi, Lahore, Islamabad, etc.)
- 5 High Court landing pages (Lahore, Sindh, Peshawar, Balochistan, Islamabad)
- Supreme Court lawyers page + Special Leave Petition (SLP) guide
- Female lawyers page for sensitive matters
- Full FAQ (17 questions), Blog with 6 full articles, custom 404 page
- Dynamic XML sitemap + robots.txt for SEO
- PHP mail() contact form with AJAX — no database required
- 24/7 helpline integration throughout (call buttons, WhatsApp)
- Mobile-first, fully responsive design
- Scroll-triggered animations (no AOS library — pure Intersection Observer)
- Testimonial slider with touch swipe support

---

## Tech Stack

| Layer | Technology | Reason |
|---|---|---|
| Backend | PHP 8.x (no framework) | Simple, cPanel-native |
| CSS Framework | Tailwind CSS v3 Play CDN | No build step for development |
| Icons | Phosphor Icons v2 (CDN) | Beautiful, consistent icon set |
| Font | Poppins (Google Fonts) | Modern, professional |
| JavaScript | Vanilla JS only | No jQuery, no frameworks |
| Data | Static PHP arrays (`includes/data.php`) | No MySQL needed |
| Animations | Custom CSS + Intersection Observer API | No AOS library |
| Forms | PHP `mail()` | cPanel native |
| Deployment | cPanel Shared Hosting | Simple FTP upload |

---

## Project Structure

```
wakeelzone/
├── assets/
│   ├── css/
│   │   ├── variables.css     ← Single source of truth for all colors, fonts, radius, shadows
│   │   └── style.css         ← All custom component styles (uses CSS variables)
│   └── js/
│       └── main.js           ← All vanilla JS: menu, animations, counters, slider, forms
│
├── includes/
│   ├── head.php              ← <head> tag: SEO meta, OG tags, CDN links, favicon
│   ├── nav.php               ← Sticky navbar with services dropdown + mobile menu
│   ├── footer.php            ← Footer with city/court links strip + floating call button
│   └── data.php              ← All site data as PHP arrays (services, FAQs, stats, etc.)
│
├── src/
│   └── input.css             ← Tailwind source (for optional production build)
│
├── config.php                ← Site-wide constants (phone, email, address, social links)
├── .htaccess                 ← Security headers, gzip, caching, URL rewriting, 404 routing
├── robots.txt                ← Search engine crawl rules + sitemap URL
├── sitemap.xml.php           ← Dynamic XML sitemap (served as /sitemap.xml via .htaccess)
├── tailwind.config.js        ← Tailwind config for production CSS build
└── package.json              ← npm scripts for Tailwind CLI build
```

---

## All Pages

### Core Pages (37 PHP files total)

| File | Description |
|---|---|
| `index.php` | Homepage — hero, services, stats, process, testimonials, cities, FAQ, CTA |
| `about.php` | About WakeelZone — story, mission/vision/values, differentiators |
| `services.php` | All 18 practice areas grid + specialty pages + court links |
| `service.php` | Dynamic individual service page (`?slug=` parameter) |
| `how-we-work.php` | 4-step process, anonymity details, lawyer benefits |
| `contact.php` | Contact info + AJAX contact form with service dropdown |
| `process_contact.php` | PHP `mail()` form handler — returns JSON |
| `lawyer-registration.php` | Lawyer onboarding form |
| `blog.php` | Blog listing — 6 legal guide articles |
| `blog-post.php` | Dynamic blog post template (`?slug=`) — full 800-1000 word articles |

### Legal & Utility Pages

| File | Description |
|---|---|
| `privacy-policy.php` | 9-section privacy policy (Pakistan-adapted) |
| `terms.php` | 11-section client Terms & Conditions |
| `lawyer-terms.php` | 12-section Lawyer Terms & Conditions (with PBC references) |
| `faq.php` | 17 FAQs in 5 categories with accordion |
| `404.php` | Custom 404 error page (returns HTTP 404 header) |
| `sitemap.php` | HTML sitemap — all pages organized by section |
| `sitemap.xml.php` | XML sitemap for search engines (served as `/sitemap.xml`) |

### Specialty Legal Pages

| File | Description |
|---|---|
| `all-lawyers.php` | Lawyer finder — search by practice area, city, court, language |
| `high-court-lawyers.php` | High Court lawyers hub — all 5 Pakistani HCs |
| `supreme-court-lawyers.php` | Supreme Court of Pakistan lawyers + SLP process |
| `female-lawyers.php` | Female advocates network for sensitive matters |
| `special-leave-petition.php` | Detailed SLP guide — Article 185(3), process, grounds |
| `child-protection-lawyer.php` | Child protection law page — ZARRA, CMRA, reporting channels |

### City Advocate Pages (8 pages)

| File | City |
|---|---|
| `advocate-lawyer-karachi.php` | Karachi — Sindh HC, commercial capital |
| `advocate-lawyer-lahore.php` | Lahore — Lahore HC, cultural capital |
| `advocate-lawyer-islamabad.php` | Islamabad — Islamabad HC, federal capital |
| `advocate-lawyer-rawalpindi.php` | Rawalpindi — Lahore HC Rawalpindi Bench |
| `advocate-lawyer-peshawar.php` | Peshawar — Peshawar HC, KPK |
| `advocate-lawyer-quetta.php` | Quetta — Balochistan HC |
| `advocate-lawyer-faisalabad.php` | Faisalabad — Lahore HC Faisalabad Bench |
| `advocate-lawyer-multan.php` | Multan — Lahore HC Multan Bench |

### High Court City Pages (5 pages)

| File | Court |
|---|---|
| `high-court-lawyer-lahore.php` | Lahore High Court — est. 1919, Punjab jurisdiction |
| `high-court-lawyer-sindh.php` | Sindh High Court — est. 1955, Karachi |
| `high-court-lawyer-islamabad.php` | Islamabad High Court — est. 2010, ICT |
| `high-court-lawyer-peshawar.php` | Peshawar High Court — est. 1955, KPK |
| `high-court-lawyer-balochistan.php` | Balochistan High Court — est. 1976, Quetta |

---

## Design System

All design tokens are defined in `assets/css/variables.css` — editing this one file changes the entire site theme.

### Brand Colors

```css
--clr-primary:        #1B3A6B   /* Deep Navy — main brand color */
--clr-primary-dark:   #0D1F3C   /* Midnight Navy — gradients, footer */
--clr-primary-light:  #2D5F9E   /* Lighter Navy — hover states */
--clr-gold:           #C9A84C   /* Gold — CTAs, accents, highlights */
--clr-gold-dark:      #A8853A   /* Deep Gold */
--clr-gold-light:     #E4C97A   /* Light Gold */
```

### Neutrals

```css
--clr-bg:             #FAFAF8   /* Warm off-white body */
--clr-surface:        #FFFFFF   /* Cards */
--clr-surface-2:      #F5F3EE   /* Subtle section background */
--clr-text:           #0A1628   /* Headings */
--clr-text-2:         #3D4A5C   /* Body text */
--clr-text-muted:     #9CA3AF   /* Labels, metadata */
--clr-border:         #E8E4DC   /* Card borders */
```

### Typography

- **Font Family:** Poppins (weights: 300, 400, 500, 600, 700, 800)
- **Base Size:** 16px
- **Hero H1:** 56–72px desktop, 36–48px mobile, weight 800

### Border Radius

```css
--radius-xs: 4px   --radius-sm: 8px   --radius-md: 12px
--radius-lg: 20px  --radius-xl: 28px  --radius-2xl: 40px  --radius-full: 9999px
```

---

## Configuration

Open `config.php` and update ALL values before deploying:

```php
define('SITE_NAME',       'WakeelZone');
define('SITE_TAGLINE',    "Pakistan's Premier Anonymous Legal Platform");
define('SITE_URL',        'https://wakeelzone.com');   // ← Your domain

// Contact Details — UPDATE THESE
define('HELPLINE_NUMBER', '+92 300 000 0000');          // ← Your real phone number
define('WHATSAPP_NUMBER', '923000000000');               // ← Your real WhatsApp (no + or spaces)
define('CONTACT_EMAIL',   'help@wakeelzone.com');        // ← Your real email
define('OFFICE_ADDRESS',  'Your Office Address, City, Pakistan'); // ← Your real address
define('OFFICE_HOURS',    'Open 24 Hours, 7 Days a Week');

// Social Media Links — UPDATE THESE
define('SOCIAL_FACEBOOK',  'https://facebook.com/yourpage');
define('SOCIAL_INSTAGRAM', 'https://instagram.com/yourpage');
define('SOCIAL_TWITTER',   'https://twitter.com/yourpage');
define('SOCIAL_LINKEDIN',  'https://linkedin.com/company/yourpage');
define('SOCIAL_YOUTUBE',   'https://youtube.com/yourpage');
```

---

## Deployment to cPanel

### Step 1 — Upload Files

Upload the entire project folder via FTP (FileZilla) or cPanel File Manager to your `public_html` directory.

```
public_html/
├── assets/
├── includes/
├── src/
├── config.php
├── index.php
├── ... (all .php files)
├── .htaccess
├── robots.txt
└── sitemap.xml.php
```

> **Important:** Do NOT upload `node_modules/`, `.git/`, `gemini.md`, `plan.md`, or `README.md` to production.

### Step 2 — Set PHP Version

In cPanel → **Select PHP Version** → choose **PHP 8.1** or higher.

### Step 3 — Enable HTTPS Redirect

In `.htaccess`, uncomment these two lines (remove the `#`):

```apache
# RewriteCond %{HTTPS} off
# RewriteRule ^ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
```

Change to:

```apache
RewriteCond %{HTTPS} off
RewriteRule ^ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
```

### Step 4 — Set Up Email

In cPanel → **Email Accounts** → create `help@wakeelzone.com` (or your configured `CONTACT_EMAIL`). This is required for the contact form to deliver messages.

### Step 5 — Point Domain

In cPanel → **Domains** → point `wakeelzone.com` to `public_html`.

### Step 6 — Verify Sitemap

Visit `https://wakeelzone.com/sitemap.xml` — it should return a valid XML sitemap. Submit this URL to Google Search Console.

---

## Production CSS Build (Optional)

By default, the site uses **Tailwind CSS Play CDN** — no build step needed. For a faster production site with optimized, minified CSS:

```bash
# Install dependencies
npm install

# Build minified CSS (outputs to assets/css/tailwind.css)
npm run build

# Watch mode for development
npm run dev
```

Then in `includes/head.php`, replace the Tailwind CDN `<script>` tag with a link to the compiled file:

```html
<!-- Remove this CDN script: -->
<script src="https://cdn.tailwindcss.com"></script>

<!-- Add this instead: -->
<link rel="stylesheet" href="assets/css/tailwind.css">
```

---

## Git Repository

```bash
# Clone
git clone git@github.com:lemukarram/wakeelzone.git

# Add remote (if starting fresh)
git remote add origin git@github.com:lemukarram/wakeelzone.git
git branch -M main
git push -u origin main
```

**Files to add to `.gitignore` (already configured):**
- `node_modules/`
- `.env`
- `*.log`
- `.DS_Store`
- `config/db.php` (not used — no database)

---

## Pakistan Legal Context

This site is built specifically for the Pakistani legal system. Key adaptations:

| Topic | Pakistan Equivalent |
|---|---|
| Legal body | Pakistan Bar Council (PBC) + Provincial Bar Councils |
| Company registration | SECP (Securities and Exchange Commission of Pakistan) |
| Tax authority | FBR (Federal Board of Revenue), ATIR (Appellate Tribunal Inland Revenue) |
| Cyber crime law | PECA 2016 (Prevention of Electronic Crimes Act) |
| Labour benefits | EOBI (Employees Old-Age Benefits Institution), PESSI |
| Overseas clients | Overseas Pakistanis (NICOP, POC) — not "NRI" |
| Currency | PKR |

**Courts covered:**
- Supreme Court of Pakistan
- Lahore High Court (Punjab)
- Sindh High Court (Karachi)
- Peshawar High Court (KPK)
- Balochistan High Court (Quetta)
- Islamabad High Court (ICT)
- Federal Shariat Court
- ATIR, Labour Courts, Family Courts, Consumer Courts, IP Tribunal

**Cities with dedicated pages:**
Karachi · Lahore · Islamabad · Rawalpindi · Peshawar · Quetta · Faisalabad · Multan

---

## Contact

- **Website:** https://wakeelzone.com
- **Email:** mukarram@igate.sa
- **GitHub:** https://github.com/lemukarram/wakeelzone
