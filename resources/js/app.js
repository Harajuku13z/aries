import Alpine from 'alpinejs';

window.Alpine = Alpine;
Alpine.start();

/* ----------------------------------------------------------------
 * Reveal on scroll
 * Adds .is-visible to .reveal elements as they enter the viewport.
 * ---------------------------------------------------------------- */
const initReveal = () => {
    const targets = document.querySelectorAll('.reveal');
    if (!('IntersectionObserver' in window) || targets.length === 0) {
        targets.forEach(el => el.classList.add('is-visible'));
        return;
    }

    const io = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                io.unobserve(entry.target);
            }
        });
    }, {
        rootMargin: '0px 0px -10% 0px',
        threshold: 0.08,
    });

    targets.forEach(el => io.observe(el));
};

const initCountUp = () => {
    const counters = document.querySelectorAll('[data-countup]');
    if (counters.length === 0) return;

    const animateCounter = (el) => {
        const target = Number(el.dataset.countup || 0);
        const suffix = el.textContent.trim().replace(/[0-9]/g, '');
        const duration = 1200;
        const start = performance.now();

        const tick = (now) => {
            const progress = Math.min((now - start) / duration, 1);
            const eased = 1 - Math.pow(1 - progress, 3);
            const value = Math.round(target * eased);
            el.textContent = `${value}${suffix}`;
            if (progress < 1) {
                requestAnimationFrame(tick);
            }
        };

        requestAnimationFrame(tick);
    };

    if (!('IntersectionObserver' in window)) {
        counters.forEach(animateCounter);
        return;
    }

    const io = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                io.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    counters.forEach((counter) => io.observe(counter));
};

const initParallax = () => {
    const items = [...document.querySelectorAll('[data-parallax]')];
    if (items.length === 0 || window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

    const update = () => {
        items.forEach((item) => {
            const rect = item.getBoundingClientRect();
            const speed = Number(item.dataset.parallaxSpeed || 0.04);
            const offset = (rect.top - window.innerHeight / 2) * speed;
            item.style.transform = `translate3d(0, ${offset}px, 0)`;
        });
    };

    update();
    window.addEventListener('scroll', update, { passive: true });
};

if (document.readyState !== 'loading') {
    initReveal();
    initCountUp();
    initParallax();
} else {
    document.addEventListener('DOMContentLoaded', () => {
        initReveal();
        initCountUp();
        initParallax();
    });
}
