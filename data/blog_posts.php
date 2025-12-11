<?php
/**
 * Blog posts data
 * Add new blog posts to the 'posts' array
 * Posts are displayed in order (newest first recommended)
 */

return [
    'title' => 'Blog',
    'description' => 'Thoughts on research, programming, and systems',
    'posts' => [
        [
            'id' => 'welcome-to-my-blog',
            'title' => 'Welcome to My Blog',
            'date' => '2025-12-11',
            'excerpt' => 'First post on my new blog. Here I\'ll share insights about my research, programming experiences, and thoughts on computer systems.',
            'content_type' => 'markdown',  // 'markdown' or 'html'
            'content_file' => 'welcome-to-my-blog.md',  // Markdown file in data/blog/posts/
            'tags' => ['meta', 'announcement'],
        ],
        // Add more posts here
        // Example with markdown file:
        // [
        //     'id' => 'my-research-post',
        //     'title' => 'My Research Update',
        //     'date' => '2025-12-15',
        //     'excerpt' => 'Short summary...',
        //     'content_type' => 'markdown',
        //     'content_file' => 'my-research-post.md',  // Create this in data/blog/posts/
        //     'tags' => ['research', 'python'],
        // ],
        // Example with inline markdown:
        // [
        //     'id' => 'quick-post',
        //     'title' => 'Quick Post',
        //     'date' => '2025-12-16',
        //     'excerpt' => 'A quick update...',
        //     'content_type' => 'markdown',
        //     'content' => '## Heading\n\nSome **bold** text here.',
        //     'tags' => ['update'],
        // ],
        // Example with HTML (legacy support):
        // [
        //     'id' => 'html-post',
        //     'title' => 'HTML Post',
        //     'date' => '2025-12-17',
        //     'excerpt' => 'Using HTML...',
        //     'content_type' => 'html',
        //     'content' => '<p>HTML content here...</p>',
        //     'tags' => ['tech'],
        // ],
    ],
];
