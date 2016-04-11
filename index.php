<?php

require_once 'model.php';
require_once 'controllers.php';

// "routes"
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
echo "<small>route = $uri</small><br>";
if('/index.php' === $uri) {
	list_action();
} elseif ('/index.php/show' === $uri && isset($_GET['id'])) {
	show_action($_GET['id']);
} elseif ('/index.php/poster' === $uri) {
	poster_action();
} elseif ('/index.php/poster_post' === $uri) {
	poster_post_action();
}

else {
	header('Status: 404 Not Found');
	echo '<html><body>Page non trouvée...</body></html>';
}
?>