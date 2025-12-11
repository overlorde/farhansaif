

    <section id="<?php echo e($data['section_id']); ?>">
    <h3><?php echo e($data['title']); ?></h3>
    <ul>
<?php foreach ($data['interests'] as $interest): ?>
        <li><?php echo e($interest); ?></li>
<?php endforeach; ?>
    </ul>
    <a href="#section0">toc</a>
    </section>
