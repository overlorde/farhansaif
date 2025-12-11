
    <section id="<?php echo e($data['section_id']); ?>">
    <h3><?php echo e($data['title']); ?></h3>
    <ul>
<?php foreach ($data['entries'] as $entry): ?>
        <li><?php echo e($entry); ?></li>
<?php endforeach; ?>
    </ul>
    </section>
