<!DOCTYPE html>
<html>
<head>
	<title>Liste des posts</title>
</head>
<body>
	<ul>
		<?php foreach ($posts as $post): ?>
			<li>
			<a href="/show?id=<?= $post['id'] ?>"><?= $post['titre']?></a>
			</li>
		<?php endforeach ?>
	</ul>
</body>
</html>