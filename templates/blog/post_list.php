
    <section id="blog-list">
    <h2><?php echo e($data['title']); ?></h2>
    <p><?php echo e($data['description']); ?></p>

    <div class="blog-posts">
<?php if (empty($data['posts'])): ?>
        <p>No blog posts yet. Check back soon!</p>
<?php else: ?>
<?php foreach ($data['posts'] as $post): ?>
        <article class="blog-post">
            <h3><a href="/blog/<?php echo e($post['id']); ?>"><?php echo e($post['title']); ?></a></h3>
            <p class="post-meta">
                <time datetime="<?php echo e($post['date']); ?>"><?php echo date('F j, Y', strtotime($post['date'])); ?></time>
                <?php if (!empty($post['tags'])): ?>
                    | Tags: <?php echo e(implode(', ', $post['tags'])); ?>
                <?php endif; ?>
            </p>
            <p class="post-excerpt"><?php echo e($post['excerpt']); ?></p>
            <a href="/blog/<?php echo e($post['id']); ?>">Read more →</a>
        </article>
<?php endforeach; ?>
<?php endif; ?>
    </div>

    <p><a href="/">← Back to Home</a></p>
    </section>
