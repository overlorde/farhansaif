

    <section id="<?php echo e($data['section_id']); ?>">
    <h3><?php echo e($data['title']); ?></h3>
<?php foreach ($data['papers'] as $paper): ?>
    <h4><?php echo e($paper['title']); ?>[<?php echo e($paper['status']); ?>] [<?php echo e($paper['period']); ?>]</h4>
<?php endforeach; ?>
    <a href="#section0">toc</a>
    </section>
