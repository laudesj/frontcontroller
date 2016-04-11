<?php

function open_database_connection() {
	$dbh = new PDO("mysql:host=localhost;dbname=blogfc", 'root', '');
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

function get_post_by_id($id)
{
	$link = open_database_connection();
	$id = intval($id);
	$result = $link->query('SELECT titre, corps FROM posts WHERE id = '.$id);
	$row = $result->fetch(PDO::FETCH_ASSOC);
	close_database_connection($link);
	return $row;
}

function poster($titre, $corps) {
	$link = open_database_connection();
	$stmt = $link->prepare("INSERT INTO posts (titre, corps) VALUES (:titre, :corps)");
	$stmt->bindValue(':titre', $titre);
	$stmt->bindValue(':corps', $corps);
	$result = $stmt->execute();
	close_database_connection($link);
	return $result;
}