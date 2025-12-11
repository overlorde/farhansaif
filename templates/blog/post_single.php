
    <section id="blog-post">
    <article>
        <h2><?php echo e($post['title']); ?></h2>
        <p class="post-meta">
            <time datetime="<?php echo e($post['date']); ?>"><?php echo date('F j, Y', strtotime($post['date'])); ?></time>
            <?php if (!empty($post['tags'])): ?>
                | Tags: <?php echo e(implode(', ', $post['tags'])); ?>
            <?php endif; ?>
        </p>

        <div class="post-content">
            <?php
            // Get content based on type
            $content = '';
            if (!empty($post['content_file'])) {
                // Load from markdown file
                $content = load_markdown($post['content_file']);
            } elseif (!empty($post['content'])) {
                // Use inline content
                $content = $post['content'];
            }

            // Parse markdown or use HTML directly
            if (!empty($post['content_type']) && $post['content_type'] === 'markdown') {
                echo parse_markdown($content);
            } else {
                echo $content;
            }
            ?>
        </div>
    </article>

    <p><a href="/blog">← Back to Blog</a> | <a href="/">Home</a></p>
    </section>
