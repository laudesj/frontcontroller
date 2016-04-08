<?php

function open_database_connection() {
	$dbh = new PDO("mysql:host=localhost;dbname=blog", 'root', '');
	return $dbh;
}

function close_database_connection($dbh) {
	$dbh = null;
}

function get_all_posts() {
	$link = open_database_connection();
	$result = $link->query("SELECT id, titre FROM posts");
	$posts = array();
	while($row = $result->fetch(PDO::FETCH_ASSOC)) {
		$posts[] = $row;
	}
	close_database_connection($link);
	return $posts;
}