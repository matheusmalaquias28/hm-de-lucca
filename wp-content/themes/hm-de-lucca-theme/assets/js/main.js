/**
 * HM De Lucca — main.js
 * Preloader · Navbar · Mobile Menu · Scroll Reveal · Smooth Scroll
 */

(function () {
  'use strict';

  /* ============================================================
     PRELOADER
  ============================================================ */
  function initPreloader() {
    var preloader = document.getElementById('preloader');
    if (!preloader) return;

    // Minimum display time for premium feel
    var minTime = 2200;
    var startTime = Date.now();

    function hidePreloader() {
      var elapsed = Date.now() - startTime;
      var remaining = Math.max(0, minTime - elapsed);

      setTimeout(function () {
        preloader.classList.add('hidden');
        document.body.classList.remove('loading');

        // Trigger hero animations
        triggerHeroAnimations();

        // Remove from DOM after transition
        setTimeout(function () {
          if (preloader && preloader.parentNode) {
            preloader.parentNode.removeChild(preloader);
          }
        }, 900);
      }, remaining);
    }

    if (document.readyState === 'complete') {
      hidePreloader();
    } else {
      window.addEventListener('load', hidePreloader);
    }
  }

  /* ============================================================
     HERO ANIMATIONS
  ============================================================ */
  function triggerHeroAnimations() {
    var heroEls = document.querySelectorAll(
      '.hero-eyebrow, .hero-title, .hero-subtitle, .hero-checks, .hero-buttons, .hero-stats, .hero-scroll'
    );
    heroEls.forEach(function (el) {
      el.style.animationPlayState = 'running';
    });
  }

  /* ============================================================
     NAVBAR — SCROLL BEHAVIOR
  ============================================================ */
  function initNavbar() {
    var navbar = document.getElementById('navbar');
    if (!navbar) return;

    var scrollThreshold = 60;
    var ticking = false;

    function updateNavbar() {
      if (window.scrollY > scrollThreshold) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
      ticking = false;
    }

    window.addEventListener('scroll', function () {
      if (!ticking) {
        window.requestAnimationFrame(updateNavbar);
        ticking = true;
      }
    }, { passive: true });

    // Initial check
    updateNavbar();
  }

  /* ============================================================
     HERO PARALLAX / SCROLL INTERACTION
  ============================================================ */
  function initHeroParallax() {
    var hero = document.querySelector('.hero');
    if (!hero) return;

    var heroContent = hero.querySelector('.hero-content');
    var heroImage = hero.querySelector('.hero-image');
    if (!heroContent || !heroImage) return;

    var enabled = window.innerWidth >= 768;
    if (!enabled) return;

    var lastScrollY = window.scrollY;
    var ticking = false;

    function updateParallax() {
      var scrollY = lastScrollY;
      var maxOffset = 80;
      var progress = Math.min(scrollY / 800, 1);

      var contentOffset = progress * 26;   // moves slightly down
      var imageOffset   = progress * -30;  // moves slightly up
      var scale         = 1.02 + progress * 0.03;

      heroContent.style.transform = 'translateY(' + contentOffset + 'px)';
      heroImage.style.transform   = 'translateY(' + imageOffset + 'px) scale(' + scale + ')';

      ticking = false;
    }

    window.addEventListener('scroll', function () {
      lastScrollY = window.scrollY;
      if (!ticking) {
        window.requestAnimationFrame(updateParallax);
        ticking = true;
      }
    }, { passive: true });
  }

  /* ============================================================
     MOBILE MENU
  ============================================================ */
  function initMobileMenu() {
    var hamburger = document.getElementById('hamburger');
    var mobileMenu = document.getElementById('mobileMenu');
    var overlay = document.getElementById('mobileOverlay');
    var closeBtn = document.getElementById('mobileClose');

    if (!hamburger || !mobileMenu) return;

    function openMenu() {
      hamburger.classList.add('open');
      mobileMenu.classList.add('open');
      document.body.classList.add('menu-open');
      if (overlay) overlay.classList.add('visible');
    }

    function closeMenu() {
      hamburger.classList.remove('open');
      mobileMenu.classList.remove('open');
      document.body.classList.remove('menu-open');
      if (overlay) overlay.classList.remove('visible');
    }

    hamburger.addEventListener('click', function () {
      if (mobileMenu.classList.contains('open')) {
        closeMenu();
      } else {
        openMenu();
      }
    });

    if (closeBtn) closeBtn.addEventListener('click', closeMenu);
    if (overlay) overlay.addEventListener('click', closeMenu);

    // Close on menu link click
    var menuLinks = mobileMenu.querySelectorAll('a');
    menuLinks.forEach(function (link) {
      link.addEventListener('click', closeMenu);
    });

    // Close on Escape key
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && mobileMenu.classList.contains('open')) {
        closeMenu();
      }
    });
  }

  /* ============================================================
     SCROLL REVEAL — INTERSECTION OBSERVER
  ============================================================ */
  function initReveal() {
    if (!('IntersectionObserver' in window)) {
      // Fallback: show everything
      document.querySelectorAll('.reveal').forEach(function (el) {
        el.classList.add('visible');
      });
      return;
    }

    var options = {
      threshold: 0.12,
      rootMargin: '0px 0px -40px 0px'
    };

    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          observer.unobserve(entry.target);
        }
      });
    }, options);

    document.querySelectorAll('.reveal').forEach(function (el) {
      observer.observe(el);
    });
  }

  /* ============================================================
     SMOOTH SCROLL FOR ANCHOR LINKS
  ============================================================ */
  function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
      anchor.addEventListener('click', function (e) {
        var targetId = this.getAttribute('href');
        if (targetId === '#') return;

        var target = document.querySelector(targetId);
        if (!target) return;

        e.preventDefault();

        var navH = parseInt(getComputedStyle(document.documentElement).getPropertyValue('--nav-h')) || 82;
        var targetTop = target.getBoundingClientRect().top + window.scrollY - navH;

        window.scrollTo({
          top: targetTop,
          behavior: 'smooth'
        });
      });
    });
  }

  /* ============================================================
     STAGGER CHILDREN REVEAL
  ============================================================ */
  function initStaggerReveal() {
    var staggerContainers = document.querySelectorAll('.sobre-grid, .areas-grid, .blog-grid, .areas-full-grid, .team-grid');

    if (!('IntersectionObserver' in window)) return;

    var options = { threshold: 0.08 };

    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          var children = entry.target.querySelectorAll('.sobre-card, .area-card, .blog-card, .area-full-card, .team-card');
          children.forEach(function (child, i) {
            setTimeout(function () {
              child.classList.add('visible');
            }, i * 120);
          });
          observer.unobserve(entry.target);
        }
      });
    }, options);

    staggerContainers.forEach(function (container) {
      var cards = container.querySelectorAll('.sobre-card, .area-card, .blog-card, .area-full-card, .team-card');
      cards.forEach(function (card) {
        card.classList.add('reveal');
      });
      observer.observe(container);
    });
  }

  /* ============================================================
     ANIMATED COUNTERS (hero stats)
  ============================================================ */
  function initCounters() {
    var counters = document.querySelectorAll('[data-count]');
    if (!counters.length) return;

    if (!('IntersectionObserver' in window)) return;

    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          animateCounter(entry.target);
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.5 });

    counters.forEach(function (counter) {
      observer.observe(counter);
    });
  }

  function animateCounter(el) {
    var target = parseInt(el.getAttribute('data-count'), 10);
    var suffix = el.getAttribute('data-suffix') || '';
    var duration = 1800;
    var start = null;

    function step(timestamp) {
      if (!start) start = timestamp;
      var progress = Math.min((timestamp - start) / duration, 1);
      var eased = 1 - Math.pow(1 - progress, 3); // ease-out cubic
      el.textContent = Math.floor(eased * target) + suffix;

      if (progress < 1) {
        window.requestAnimationFrame(step);
      }
    }

    window.requestAnimationFrame(step);
  }

  /* ============================================================
     ACTIVE MENU ITEM (highlight current page)
  ============================================================ */
  function initActiveMenu() {
    var currentPath = window.location.pathname;
    var menuLinks = document.querySelectorAll('.navbar-menu a, .mobile-nav a');

    menuLinks.forEach(function (link) {
      var href = link.getAttribute('href');
      if (!href) return;

      try {
        var linkPath = new URL(href, window.location.origin).pathname;
        if (currentPath === linkPath || (linkPath !== '/' && currentPath.startsWith(linkPath))) {
          link.classList.add('active');
          var li = link.closest('li');
          if (li) li.classList.add('current-menu-item');
        }
      } catch (e) {
        // ignore invalid URLs
      }
    });
  }

  /* ============================================================
     NAVBAR ACTIVE SECTION (scroll spy)
  ============================================================ */
  function initScrollSpy() {
    var sections = document.querySelectorAll('section[id]');
    var navLinks = document.querySelectorAll('.navbar-menu a[href^="#"]');
    if (!sections.length || !navLinks.length) return;

    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          var id = '#' + entry.target.id;
          navLinks.forEach(function (link) {
            link.classList.toggle('active', link.getAttribute('href') === id);
          });
        }
      });
    }, { threshold: 0.4 });

    sections.forEach(function (section) {
      observer.observe(section);
    });
  }

  /* ============================================================
     LAZY IMAGES (native loading="lazy" fallback)
  ============================================================ */
  function initLazyImages() {
    var images = document.querySelectorAll('img[data-src]');
    if (!images.length) return;

    if ('IntersectionObserver' in window) {
      var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            var img = entry.target;
            img.src = img.getAttribute('data-src');
            img.removeAttribute('data-src');
            observer.unobserve(img);
          }
        });
      });
      images.forEach(function (img) { observer.observe(img); });
    } else {
      images.forEach(function (img) {
        img.src = img.getAttribute('data-src');
      });
    }
  }

  /* ============================================================
     INIT
  ============================================================ */
  function init() {
    initPreloader();
    initNavbar();
    initHeroParallax();
    initMobileMenu();
    initReveal();
    initStaggerReveal();
    initCounters();
    initActiveMenu();
    initScrollSpy();
    initSmoothScroll();
    initLazyImages();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }

})();
