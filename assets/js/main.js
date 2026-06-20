/**
 * WakeelZone — Main JavaScript
 * Vanilla JS: no jQuery, no framework.
 * Handles: navbar, mobile menu, scroll animations,
 *          stat counters, FAQ accordion, testimonial slider,
 *          back-to-top, floating call button.
 */

(function () {
  'use strict';

  const $  = (sel, ctx) => (ctx || document).querySelector(sel);
  const $$ = (sel, ctx) => [...(ctx || document).querySelectorAll(sel)];

  document.addEventListener('DOMContentLoaded', () => {
    initNavbar();
    initMobileMenu();
    initScrollReveal();
    initStatCounters();
    initFAQ();
    initTestimonialSlider();
    initBackToTop();
    initSmoothScroll();
    initServiceCardTilt();
    initContactForm();
  });

  /* ── Navbar ─────────────────────────────────────────── */
  function initNavbar() {
    const navbar = $('.navbar');
    if (!navbar) return;

    const onScroll = () => navbar.classList.toggle('scrolled', window.scrollY > 60);
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();

    // Active link
    const current = window.location.pathname.split('/').pop() || 'index.php';
    $$('.nav-link, .mobile-nav-link').forEach(link => {
      const href = link.getAttribute('href') || '';
      if (href && href !== '#' && href.includes(current) && current !== '') {
        link.classList.add('active');
      }
    });
  }

  /* ── Mobile Menu ─────────────────────────────────────── */
  function initMobileMenu() {
    const burger = $('.burger');
    const menu   = $('.mobile-menu');
    if (!burger || !menu) return;

    let open = false;

    const toggle = () => {
      open = !open;
      burger.classList.toggle('open', open);
      menu.classList.toggle('open', open);
      document.body.style.overflow = open ? 'hidden' : '';
    };

    const close = () => {
      if (!open) return;
      open = false;
      burger.classList.remove('open');
      menu.classList.remove('open');
      document.body.style.overflow = '';
    };

    burger.addEventListener('click', toggle);
    document.addEventListener('keydown', e => e.key === 'Escape' && close());
    document.addEventListener('click', e => {
      if (open && !burger.contains(e.target) && !menu.contains(e.target)) close();
    });
    $$('.mobile-nav-link, .mobile-service-link', menu).forEach(l => l.addEventListener('click', close));

    // Services sub-panel toggle
    const toggle2 = $('#mobileServicesToggle');
    const panel2  = $('#mobileServicesPanel');
    const arrow2  = $('#mobileServicesArrow');
    if (toggle2 && panel2) {
      let panelOpen = false;
      toggle2.addEventListener('click', e => {
        e.preventDefault();
        panelOpen = !panelOpen;
        panel2.style.display = panelOpen ? 'grid' : 'none';
        if (arrow2) arrow2.style.transform = panelOpen ? 'rotate(180deg)' : '';
      });
    }
  }

  /* ── Scroll Reveal (Intersection Observer) ────────────── */
  function initScrollReveal() {
    const els = $$('.reveal, .reveal-left, .reveal-right, .reveal-scale');
    if (!els.length) return;

    const obs = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          obs.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1, rootMargin: '0px 0px -30px 0px' });

    els.forEach(el => obs.observe(el));
  }

  /* ── Stat Counters ───────────────────────────────────── */
  function initStatCounters() {
    const els = $$('.stat-number[data-count]');
    if (!els.length) return;

    const animate = (el) => {
      const target = parseInt(el.dataset.count, 10);
      const suffix = el.dataset.suffix || '';
      const dur    = 1800;
      const t0     = performance.now();

      const frame = (now) => {
        const p = Math.min((now - t0) / dur, 1);
        const e = 1 - Math.pow(1 - p, 3); // ease-out cubic
        el.textContent = Math.floor(e * target).toLocaleString() + suffix;
        if (p < 1) requestAnimationFrame(frame);
      };
      requestAnimationFrame(frame);
    };

    const obs = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          animate(entry.target);
          obs.unobserve(entry.target);
        }
      });
    }, { threshold: 0.5 });

    els.forEach(el => obs.observe(el));
  }

  /* ── FAQ Accordion ───────────────────────────────────── */
  function initFAQ() {
    const items = $$('.faq-item');
    if (!items.length) return;

    items.forEach(item => {
      const q = $('.faq-question', item);
      if (!q) return;
      q.addEventListener('click', () => {
        const wasOpen = item.classList.contains('open');
        items.forEach(i => i.classList.remove('open'));
        if (!wasOpen) item.classList.add('open');
      });
    });
  }

  /* ── Testimonial Slider ──────────────────────────────── */
  function initTestimonialSlider() {
    const wrap  = $('.testimonials-wrap');
    const track = $('.testimonials-track');
    if (!wrap || !track) return;

    const dots  = $$('.slider-dot');
    const prev  = $('#sliderPrev');
    const next  = $('#sliderNext');
    let cur = 0, auto = null;

    const visible = () => window.innerWidth < 640 ? 1 : window.innerWidth < 1024 ? 2 : 3;
    const slides  = () => $$('.testimonial-slide', track);
    const maxIdx  = () => Math.max(0, slides().length - visible());

    const goTo = (i) => {
      cur = Math.max(0, Math.min(i, maxIdx()));
      const sw  = slides()[0]?.offsetWidth || 0;
      track.style.transform = `translateX(-${cur * (sw + 20)}px)`;
      dots.forEach((d, j) => d.classList.toggle('active', j === cur));
    };

    if (prev) prev.addEventListener('click', () => { goTo(cur - 1); reset(); });
    if (next) next.addEventListener('click', () => { goTo(cur + 1); reset(); });
    dots.forEach((d, i) => d.addEventListener('click', () => { goTo(i); reset(); }));

    const start = () => { auto = setInterval(() => goTo(cur >= maxIdx() ? 0 : cur + 1), 5000); };
    const reset = () => { clearInterval(auto); start(); };

    // Touch swipe
    let ts = 0;
    wrap.addEventListener('touchstart', e => { ts = e.touches[0].clientX; }, { passive: true });
    wrap.addEventListener('touchend',   e => {
      const d = ts - e.changedTouches[0].clientX;
      if (Math.abs(d) > 50) { d > 0 ? goTo(cur + 1) : goTo(cur - 1); reset(); }
    });

    let rt;
    window.addEventListener('resize', () => { clearTimeout(rt); rt = setTimeout(() => goTo(cur), 150); });

    goTo(0);
    start();
  }

  /* ── Back to Top ─────────────────────────────────────── */
  function initBackToTop() {
    const btn = $('.back-top');
    if (!btn) return;
    window.addEventListener('scroll', () => btn.classList.toggle('show', window.scrollY > 500), { passive: true });
    btn.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
  }

  /* ── Smooth Scroll ───────────────────────────────────── */
  function initSmoothScroll() {
    $$('a[href^="#"]').forEach(a => {
      a.addEventListener('click', e => {
        const target = $(a.getAttribute('href'));
        if (!target) return;
        e.preventDefault();
        window.scrollTo({ top: target.getBoundingClientRect().top + window.scrollY - 80, behavior: 'smooth' });
      });
    });
  }

  /* ── Service Card 3D Tilt (desktop only) ─────────────── */
  function initServiceCardTilt() {
    if (window.matchMedia('(hover: none)').matches) return;
    $$('.service-card').forEach(card => {
      card.addEventListener('mousemove', e => {
        const r = card.getBoundingClientRect();
        const x = (e.clientX - r.left) / r.width  - 0.5;
        const y = (e.clientY - r.top)  / r.height - 0.5;
        card.style.transform = `translateY(-5px) rotateX(${-y * 4}deg) rotateY(${x * 4}deg)`;
      });
      card.addEventListener('mouseleave', () => { card.style.transform = ''; });
    });
  }

  /* ── Contact Form AJAX ───────────────────────────────── */
  function initContactForm() {
    const form = $('#contactForm');
    if (!form) return;

    form.addEventListener('submit', async (e) => {
      e.preventDefault();
      const btn      = form.querySelector('[type="submit"]');
      const feedback = $('#formFeedback');
      const orig     = btn.innerHTML;

      btn.innerHTML = '<i class="ph ph-circle-notch" style="display:inline-block;animation:wz-spin 0.8s linear infinite"></i> Sending…';
      btn.disabled  = true;

      try {
        const res  = await fetch('process_contact.php', { method: 'POST', body: new FormData(form) });
        const data = await res.json();
        if (feedback) {
          feedback.className = data.success ? 'form-feedback-success' : 'form-feedback-error';
          feedback.innerHTML = (data.success ? '<i class="ph ph-check-circle"></i> ' : '<i class="ph ph-x-circle"></i> ') + data.message;
          feedback.style.display = 'flex';
          feedback.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }
        if (data.success) form.reset();
      } catch {
        if (feedback) {
          feedback.className = 'form-feedback-error';
          feedback.innerHTML = '<i class="ph ph-x-circle"></i> Something went wrong. Please call our helpline directly.';
          feedback.style.display = 'flex';
        }
      } finally {
        btn.innerHTML = orig;
        btn.disabled  = false;
      }
    });
  }

  /* Spin animation for loading state */
  const s = document.createElement('style');
  s.textContent = '@keyframes wz-spin { to { transform: rotate(360deg); } }';
  document.head.appendChild(s);

})();
