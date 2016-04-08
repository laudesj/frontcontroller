<?php

require_once 'model.php';
require_once 'controllers.php';

// "routes"
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if('/index.php/liste' === $uri) {
	list_action();
} elseif ('index.php/show' === $uri && isset($_GET['id'])) {
	show_action($_GET['id']);
} else {
	header('Status: 404 Not Found');
	echo '<html><body>Page non trouvée...</body></html>';
}
?>