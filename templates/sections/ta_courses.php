

    <section id="<?php echo e($data['section_id']); ?>">
    <h3><?php echo e($data['title']); ?></h3>
    <ul>
<?php foreach ($data['courses'] as $course): ?>
		<li><?php echo e($course); ?></li>
<?php endforeach; ?>
    </ul>
    </section>
