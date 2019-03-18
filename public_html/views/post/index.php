<?php include_once(ROOT . '/views/layout/header.php'); ?>
<ul>
    <?php foreach ($posts as $post): ?>
        <li><a href="/post/<?= $post['id'] ?>"><?= $post['name']; ?></a></li>
    <?php endforeach; ?>
</ul>
<?php include_once(ROOT . '/views/layout/header.php'); ?>
