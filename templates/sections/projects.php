

    <section id="<?php echo e($data['section_id']); ?>">
    <h3><?php echo e($data['title']); ?> </h3>
    <ul>
<?php foreach ($data['projects'] as $project): ?>
        <li><strong><?php echo e($project['title']); ?></strong>: <?php echo e($project['description']); ?><?php if ($project['link']): ?> <a href="<?php echo e($project['link']); ?>">Here</a> for more.<?php endif; ?></li>
<?php endforeach; ?>
    </ul>
    <a href="#section0">toc</a>
    </section>
