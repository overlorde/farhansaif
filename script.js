/**
 * Simple animations for the portfolio site
 */

// Typing effect function
function typeWriter(element, text, speed = 100) {
    let i = 0;
    element.textContent = '';
    element.classList.add('typing');

    function type() {
        if (i < text.length) {
            element.textContent += text.charAt(i);
            i++;
            setTimeout(type, speed);
        } else {
            element.classList.remove('typing');
            element.classList.add('typing-done');
        }
    }

    type();
}

// Smooth scroll for anchor links
document.addEventListener('DOMContentLoaded', function() {
    // Typing effect for the main heading
    const mainHeading = document.querySelector('#section500 h2');
    if (mainHeading) {
        const originalText = mainHeading.textContent;
        setTimeout(() => {
            typeWriter(mainHeading, originalText, 80);
        }, 300);
    }
    // Add smooth scrolling to all anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Fade-in animation on scroll
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
});
