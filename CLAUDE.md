# WakeelZone — Project Bible

## Project Identity
- **Brand**: WakeelZone
- **Tagline**: Pakistan's Premier Anonymous Legal Platform
- **Domain**: wakeelzone.com
- **Git Repo**: git@github.com:lemukarram/wakeelzone.git
- **Contact Email**: mukarram@igate.sa

## What This Is
A Pakistan-based law firm / legal consultation platform website. Inspired by vakeelsaab.com's content and service range, adapted for the Pakistani legal system and audience. Completely rebuilt with a premium, elegant design.

## Tech Stack (cPanel Shared Hosting)
| Layer | Tech | Reason |
|---|---|---|
| Backend | PHP 8.x (no framework) | Simple, cPanel-native |
| CSS Framework | Tailwind CSS v3 Play CDN + Custom CSS | No build step needed |
| Icons | Phosphor Icons v2 (CDN) | Beautiful, consistent |
| Font | Poppins (Google Fonts) | Modern, professional |
| JS | Vanilla JS (no jQuery/framework) | Lightweight |
| Data | Static PHP arrays in `includes/data.php` | No DB needed |
| Animations | Custom CSS + Intersection Observer API | No AOS library |
| Forms | PHP mail() | cPanel native |

## Architecture (Simple PHP Templates)
```
wakeelzone/
├── assets/
│   ├── css/
│   │   ├── variables.css     ← THE SINGLE SOURCE OF TRUTH for colors, fonts, radius
│   │   └── style.css         ← All custom component styles (uses CSS vars)
│   ├── js/
│   │   └── main.js           ← All vanilla JS: menu, animations, counters, slider
│   └── images/               ← Optimized images
├── includes/
│   ├── head.php              ← <head> tag with all CSS/font imports
│   ├── nav.php               ← Navigation component
│   ├── footer.php            ← Footer component
│   └── data.php              ← All site data as PHP arrays (services, testimonials, etc.)
├── src/
│   └── input.css             ← Tailwind source (for production build)
├── index.php                 ← Homepage
├── about.php                 ← About Us
├── services.php              ← All services listing
├── service.php               ← Individual service detail (uses ?slug=)
├── how-we-work.php           ← Process page
├── blog.php                  ← Blog listing
├── contact.php               ← Contact + PHP mail form
├── lawyer-registration.php   ← Lawyer onboarding form
├── process_contact.php       ← Contact form handler
├── privacy-policy.php        ← Privacy Policy
├── terms.php                 ← Terms & Conditions
├── tailwind.config.js        ← Tailwind config (for production build)
├── package.json              ← npm scripts (for production CSS build)
├── .htaccess                 ← URL rewriting, security headers
└── config.php                ← Site-wide constants
```

## Design System

### Brand Colors
```css
--clr-primary:        #1B3A6B   /* Deep Navy — main brand */
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
--clr-surface-2:      #F5F3EE   /* Subtle section bg */
--clr-text:           #0A1628   /* Headings */
--clr-text-2:         #4B5563   /* Body text */
--clr-text-muted:     #9CA3AF   /* Muted / labels */
--clr-border:         #E8E4DC   /* Card borders */
```

### Typography
- **Font**: Poppins (300, 400, 500, 600, 700, 800)
- **Base size**: 16px
- Hero H1: 56-72px desktop, 36-48px mobile, weight 800

### Border Radius
```css
--radius-sm:    8px
--radius-md:    12px
--radius-lg:    20px
--radius-xl:    32px
--radius-full:  9999px
```

### Shadows
```css
--shadow-sm:    0 2px 8px rgba(10,22,40,0.06)
--shadow-md:    0 4px 16px rgba(10,22,40,0.08)
--shadow-lg:    0 8px 32px rgba(10,22,40,0.12)
--shadow-gold:  0 4px 24px rgba(201,168,76,0.3)
--shadow-navy:  0 4px 24px rgba(27,58,107,0.25)
```

## Pakistan Context
- **Courts**: District Courts, High Courts (Lahore, Sindh, Peshawar, Balochistan, Islamabad), Supreme Court, Federal Shariat Court
- **Cities**: Karachi, Lahore, Islamabad, Rawalpindi, Peshawar, Quetta, Faisalabad, Multan, Sialkot, Gujranwala
- **Legal body**: Pakistan Bar Council, Provincial Bar Councils
- **Overseas**: Overseas Pakistanis (not NRI)
- **Currency**: PKR

## Key Rules
1. **No database** — all data lives in `includes/data.php` as PHP arrays
2. **No jQuery** — pure vanilla JS only
3. **No Bootstrap** — Tailwind CDN + custom CSS only
4. **No AOS library** — custom Intersection Observer animations
5. **One CSS variables file** — `assets/css/variables.css` controls the entire theme
6. **Mobile-first** — design for 375px width upward
7. **Phosphor Icons only** — no Bootstrap Icons, no Font Awesome
8. **Poppins everywhere** — no font mixing

## Production Build (optional, for optimized CSS)
```bash
npm install
npx tailwindcss -i src/input.css -o assets/css/style.css --minify
```
For development, Tailwind CDN Play is used (see head.php).

## cPanel Deployment
1. Upload all files via FTP or cPanel File Manager
2. Point domain to public_html (or subdirectory)
3. Update `config.php` with production values
4. Ensure PHP 8.x is selected in cPanel
5. Set up email in cPanel (for contact form mail delivery)

## Git Workflow
```bash
git remote add origin git@github.com:lemukarram/wakeelzone.git
git branch -M main
git push -u origin main
```
