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

if (document.readyState !== 'loading') {
    initReveal();
} else {
    document.addEventListener('DOMContentLoaded', initReveal);
}
