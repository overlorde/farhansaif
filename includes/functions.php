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

/**
 * Parse markdown to HTML
 *
 * @param string $markdown Markdown content
 * @return string HTML content
 */
function parse_markdown($markdown) {
    require_once __DIR__ . '/Parsedown.php';
    $parsedown = new Parsedown();
    return $parsedown->text($markdown);
}

/**
 * Load markdown file from data/blog/posts/
 *
 * @param string $filename Markdown filename (with or without .md)
 * @return string Markdown content
 */
function load_markdown($filename) {
    // Add .md extension if not present
    if (substr($filename, -3) !== '.md') {
        $filename .= '.md';
    }

    $path = __DIR__ . '/../data/blog/posts/' . $filename;

    if (file_exists($path)) {
        return file_get_contents($path);
    }

    return '';
}
