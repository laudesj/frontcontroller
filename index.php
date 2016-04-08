<?php

// connexion à la bdd
$dbh = new PDO("mysql:host=localhost;dbname=blog", 'root', '');

// la liste des posts de mon blog
$results = $dbh->query("SELECT id, titre FROM posts");
?>
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
<?php $dbh = null; ?>