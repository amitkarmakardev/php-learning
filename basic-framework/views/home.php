<?php 
require "views/partials/container.php";
?>
<h1>All Tasks</h1>
<ul>
<?php foreach ($tasks as $task) : ?>
    <li><?= $task->getName(); ?></li>
<?php endforeach; ?>
</ul>
<?php require "views/partials/footer.php" ?>