<?php $titre = "Liste des posts"; ?>
<?php ob_start() ?>
<ul>
	<?php foreach ($posts as $post): ?>
		<li>
			<a href="/show?id=<?= $post['id'] ?>"><?= $post['titre']?></a>
		</li>
	<?php endforeach ?>
</ul>
<?php $content = ob_get_clean() ?>
<?php include "layout.php" ?>