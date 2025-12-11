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
            'content' => '
                <p>Welcome to my blog! I\'m excited to start sharing my thoughts and experiences here.</p>

                <h3>What You\'ll Find Here</h3>
                <p>This blog will cover topics including:</p>
                <ul>
                    <li>Research updates on Python concurrency and multi-version execution</li>
                    <li>Compiler engineering and LLVM toolchain experiences</li>
                    <li>Systems programming insights</li>
                    <li>Debugging techniques and tools</li>
                </ul>

                <h3>Stay Tuned</h3>
                <p>I\'ll be posting regularly about my work and discoveries. Check back soon for more content!</p>
            ',
            'tags' => ['meta', 'announcement'],
        ],
        // Add more posts here
        // Example:
        // [
        //     'id' => 'post-slug',
        //     'title' => 'Post Title',
        //     'date' => '2025-12-15',
        //     'excerpt' => 'Short summary...',
        //     'content' => '<p>Full post content with HTML...</p>',
        //     'tags' => ['research', 'python'],
        // ],
    ],
];
