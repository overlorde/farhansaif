<?php
/**
 * Helper functions for the PHP-based portfolio site
 */

/**
 * Escape HTML output for security
 *
 * @param string $string The string to escape
 * @return string The escaped string
 */
function e($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

/**
 * Load data from a PHP file that returns an array
 *
 * @param string $file The filename (without .php extension) in the data directory
 * @return array The data array
 */
function load_data($file) {
    $path = __DIR__ . '/../data/' . $file . '.php';
    if (file_exists($path)) {
        return require $path;
    }
    return [];
}

/**
 * Load configuration
 *
 * @return array The configuration array
 */
function load_config() {
    return require __DIR__ . '/../config/site.php';
}

/**
 * Render a template with data
 *
 * @param string $template The template filename (without .php extension)
 * @param array $data The data to pass to the template
 */
function render_section($template, $data = []) {
    extract($data);
    require __DIR__ . '/../templates/sections/' . $template . '.php';
}
