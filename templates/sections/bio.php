
    <section id="section500">

    <h2>Hi, I'm <?php echo e($data['name']); ?>  </h2>
<?php foreach ($data['paragraphs'] as $paragraph): ?>
    <p><?php echo $paragraph['text']; ?></p>
<?php endforeach; ?>
    </section>
