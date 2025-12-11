/**
 * Animations module
 * Handles fade-in animations on scroll
 */

/**
 * Initialize fade-in animation for sections on scroll
 */
export function initScrollAnimations() {
    const sections = document.querySelectorAll('section');

    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in');
            }
        });
    }, observerOptions);

    sections.forEach(section => {
        section.classList.add('fade-out');
        observer.observe(section);
    });
}
