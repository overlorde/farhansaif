/**
 * Main entry point for all JavaScript modules
 * Initializes all animations and interactions when DOM is ready
 */

import { initTypingEffect } from './typing.js';
import { initSmoothScroll } from './scroll.js';
import { initScrollAnimations } from './animations.js';

/**
 * Initialize all modules when DOM is ready
 */
document.addEventListener('DOMContentLoaded', function() {
    // Initialize typing effect for main heading
    initTypingEffect();

    // Initialize smooth scrolling for anchor links
    initSmoothScroll();

    // Initialize fade-in animations on scroll
    initScrollAnimations();
});
