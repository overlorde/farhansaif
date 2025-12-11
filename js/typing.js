/**
 * Typing effect module
 * Creates a typewriter animation for text elements
 */

export function typeWriter(element, text, speed = 100) {
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

/**
 * Initialize typing effect for the main heading
 */
export function initTypingEffect() {
    const mainHeading = document.querySelector('#section500 h2');
    if (mainHeading) {
        const originalText = mainHeading.textContent;
        setTimeout(() => {
            typeWriter(mainHeading, originalText, 80);
        }, 300);
    }
}
