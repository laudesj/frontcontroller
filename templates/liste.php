<!DOCTYPE html>
<html>
<head>
	<title>Liste des posts</title>
</head>
<body>
	<ul>
		<?php
			while($ligne = $result->fetch(PDO::FETCH_ASSOC)): ?>
			<li>
				<a href="/detail.php?id=<?= $ligne['id']?>">
					<?= $ligne['titre'] ?>
				</a>
			</li>
		<?php endwhile ?>
	</ul>
</body>
</html>