<?php
/**
 * Main entry point for the PHP-based portfolio site
 *
 * This file orchestrates the entire site rendering by:
 * 1. Loading helper functions
 * 2. Loading configuration and data
 * 3. Rendering header, sections, and footer
 */

// Load helper functions
require_once __DIR__ . '/includes/functions.php';

// Load configuration and data
$config = load_config();
$bio = load_data('bio');
$timeline = load_data('timeline');
$projects = load_data('projects');
$papers = load_data('papers');
$research = load_data('research_interests');
$tech_stack = load_data('tech_stack');
$ta_courses = load_data('ta_courses');
$contact = load_data('contact');

// Start output - render header
require __DIR__ . '/templates/header.php';
?>

<?php render_section('bio', ['data' => $bio]); ?>

<?php render_section('timeline', ['data' => $timeline]); ?>

<?php require __DIR__ . '/templates/sections/toc.php'; ?>


<?php render_section('projects', ['data' => $projects]); ?>

<?php render_section('papers', ['data' => $papers]); ?>


<?php render_section('research', ['data' => $research]); ?>

<?php render_section('tech_stack', ['data' => $tech_stack]); ?>

<?php render_section('ta_courses', ['data' => $ta_courses]); ?>

<?php render_section('contact', ['data' => $contact]); ?>

    <p style="text-align: right"><a href="#section500">Home</a></p>

<?php require __DIR__ . '/templates/footer.php'; ?>
