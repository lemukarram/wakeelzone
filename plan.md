# WakeelZone — Execution Plan

## Overview
Complete rebuild of existing Bootstrap/DB-dependent site into a premium Tailwind CSS + Vanilla JS + static PHP template website for cPanel shared hosting.

---

## PHASE 1 — Foundation & Config
- [x] Create CLAUDE.md (project bible)
- [x] Create plan.md (this file)
- [ ] Update `config.php` — WakeelZone branding, Pakistan details
- [ ] Create `includes/data.php` — all static site data (no DB)
- [ ] Create `assets/css/variables.css` — complete CSS design system
- [ ] Create `assets/css/style.css` — all custom component styles
- [ ] Create `assets/js/main.js` — all vanilla JS interactions
- [ ] Create `src/input.css` — Tailwind source for production build
- [ ] Create `tailwind.config.js`
- [ ] Create `package.json`
- [ ] Create `.htaccess`

## PHASE 2 — Core PHP Templates
- [ ] Create `includes/head.php` — meta, fonts, CSS, Tailwind CDN
- [ ] Create `includes/nav.php` — sticky navbar, mobile hamburger, dropdown
- [ ] Rewrite `includes/footer.php` — dark navy, 4-column, social icons

## PHASE 3 — Homepage (index.php)
Sections to build:
- [ ] Hero — full-height, navy gradient, split layout, CTAs, trust badges
- [ ] Stats bar — animated counters (2500+ Lawyers, 10K+ Cases, 18 Areas)
- [ ] Services grid — 18 cards, hover lift + gold border animation
- [ ] How It Works — 4-step timeline with connecting lines
- [ ] Why Choose Us — feature list + stats 2x2 grid
- [ ] Testimonials — 3-card slider with vanilla JS
- [ ] Trust Badges — DPIIT, MSME, IACC, media logos
- [ ] FAQ accordion — smooth height animation
- [ ] CTA Banner — full-width gold/navy gradient + phone number

## PHASE 4 — Inner Pages
- [ ] `about.php` — story, founder, mission/vision/values, team, certifications
- [ ] `services.php` — all 18 services grid with search/filter
- [ ] `service.php` — individual service detail + sidebar CTA
- [ ] `how-we-work.php` — expanded process with visual steps
- [ ] `contact.php` — form + contact info + map placeholder
- [ ] `process_contact.php` — PHP mail() form handler
- [ ] `lawyer-registration.php` — lawyer onboarding form

## PHASE 5 — Blog & Additional Pages
- [ ] `blog.php` — blog listing grid
- [ ] `privacy-policy.php` — privacy policy content
- [ ] `terms.php` — terms & conditions

## PHASE 6 — Git Setup & Push
- [ ] Initialize git repo
- [ ] Add remote origin
- [ ] Initial commit with all files
- [ ] Push to github

---

## Design Decisions
| Decision | Choice | Reason |
|---|---|---|
| CSS Framework | Tailwind Play CDN + custom CSS | No build step on server |
| Icons | Phosphor Icons v2 CDN | Modern, consistent, beautiful |
| Font | Poppins (Google Fonts) | Professional, readable |
| Animations | Custom CSS + Intersection Observer | No library dependency |
| Data | Static PHP arrays | No database needed |
| Forms | PHP mail() | cPanel compatible |

## Animation Strategy
```
Page Load → Navbar slide down (200ms)
Hero text → staggered fadeInUp (0ms, 100ms, 200ms, 300ms)
Scroll sections → Intersection Observer triggers .visible class
Stats → counter animation when section enters viewport
Cards → staggered reveal with 80ms delay per card
Mobile menu → slide down + fade in (300ms ease)
FAQ items → smooth max-height transition (400ms ease)
Testimonials → slide transition (400ms ease-in-out)
```

## Content Source
All content adapted from vakeelsaab.com, updated for Pakistan:
- India → Pakistan
- Bar Council of India → Pakistan Bar Council / Provincial Bar Councils
- Delhi/Mumbai/etc → Karachi/Lahore/Islamabad/etc
- NRI → Overseas Pakistani
- INR → PKR
- Indian laws → Pakistan laws equivalent
