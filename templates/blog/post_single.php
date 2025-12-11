
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
            <?php echo $post['content']; ?>
        </div>
    </article>

    <p><a href="/blog">← Back to Blog</a> | <a href="/">Home</a></p>
    </section>
