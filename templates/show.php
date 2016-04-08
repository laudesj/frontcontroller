<?php $title = $post['titre'] ?>
<?php ob_start() ?>
<h1><?php echo $post['titre'] ?></h1>
<div class="body">
<?php echo $post['corps'] ?>
</div>
<?php $content = ob_get_clean() ?>
<?php include 'layout.php' ?>