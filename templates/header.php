<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="theme-color" content="<?php echo e($config['theme_color']); ?>">
    <meta name="viewport" content="width=device-width">
    <meta name="author" content="<?php echo e($config['author']); ?>">
    <meta name="description" content="<?php echo e($config['description']); ?>">
    <meta property="og:url" content="<?php echo e($config['og_url']); ?>">
    <meta property="og:title" content="<?php echo e($config['og_title']); ?>">
    <meta property="og:site_name" content="<?php echo e($config['og_site_name']); ?>">
    <meta name="robots" content="index, follow">
    <meta property="og:description" content="<?php echo e($config['og_description']); ?>">
    <meta name="twitter:card" content="<?php echo e($config['twitter_card']); ?>">
    <meta name="twitter:title" content="<?php echo e($config['twitter_title']); ?>">
    <meta name="twitter:description" content="<?php echo e($config['twitter_description']); ?>">
    <meta name="twitter:creator" content="<?php echo e($config['twitter_creator']); ?>">
    <title><?php echo e($config['title']); ?></title>
    <style type="text/css">
        body {
	    background-color: white;
	    color: black;
            font-size: 1.2em;
            line-height: 1.5em;
            max-width: 45em;
            margin: auto;
            padding: 0 2%;
        }

        img {
            max-width: 100%;
            display: block;
            margin: .75em auto;
        }

    justified-text {
      text-align: justify;
    }

    </style>

</head>

<body>
