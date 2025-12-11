<?php
/**
 * Blog page
 *
 * Handles:
 * - /blog - List all posts
 * - /blog/post-slug - Single post view
 */

// Load helper functions
require_once __DIR__ . '/includes/functions.php';

// Load configuration and blog data
$config = load_config();
$blog_data = load_data('blog_posts');

// Get the post ID from the URL path
$request_uri = $_SERVER['REQUEST_URI'];
$post_id = null;

// Extract post ID if viewing single post (/blog/post-slug)
if (preg_match('#^/blog/([a-z0-9-]+)#', $request_uri, $matches)) {
    $post_id = $matches[1];
}

// Find the post if viewing single post
$post = null;
if ($post_id) {
    foreach ($blog_data['posts'] as $p) {
        if ($p['id'] === $post_id) {
            $post = $p;
            break;
        }
    }

    // If post not found, show 404
    if (!$post) {
        header("HTTP/1.0 404 Not Found");
        echo "<!DOCTYPE html><html><head><title>Post Not Found</title></head><body>";
        echo "<h1>404 - Post Not Found</h1>";
        echo "<p><a href='/blog'>← Back to Blog</a> | <a href='/'>Home</a></p>";
        echo "</body></html>";
        exit;
    }

    // Update page title for single post
    $config['title'] = $post['title'] . ' - Blog';
}

// Start output
require __DIR__ . '/templates/header.php';

// Show single post or post list
if ($post) {
    require __DIR__ . '/templates/blog/post_single.php';
} else {
    $data = $blog_data; // Pass data to template
    require __DIR__ . '/templates/blog/post_list.php';
}

require __DIR__ . '/templates/footer.php';
