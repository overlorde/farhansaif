

    <section id="<?php echo e($data['section_id']); ?>">
    <h3><?php echo e($data['title']); ?></h3>
    <ul>
        <li>mail : <?php echo e($data['email']); ?></li>
<?php foreach ($data['links'] as $link): ?>
        <li><a href="<?php echo e($link['url']); ?>"><?php echo e($link['label']); ?></a></li>
<?php endforeach; ?>
    </ul>
    </section>
