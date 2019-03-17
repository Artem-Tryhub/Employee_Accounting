<?php include_once (ROOT .'/views/layout/header.php'); ?>
<ul>
<?php foreach ($departments as $department): ?>
<li><a href="departments/<?=$department['name']?>"><?=$department['name'];?></a></li>
<?php endforeach;?>
</ul>
<?php include_once (ROOT .'/views/layout/footer.php'); ?>

