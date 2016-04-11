<?php $titre = "Liste des posts"; ?>
<?php ob_start() ?>
<ul>
	<?php foreach ($posts as $post): ?>
		<li>
			<a href="/index.php/show?id=<?= $post['id'] ?>"><?= $post['titre']?></a>
		</li>
	<?php endforeach ?>
</ul>
<a href="/index.php/poster">Poster un nouveau post</a>
<?php $content = ob_get_clean() ?>
<?php include "layout.php" ?>