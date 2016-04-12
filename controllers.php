<?php
function list_action() {
	$posts = get_all_posts();
	require 'templates/list.php';
}

function show_action($id) {
	$post = get_post_by_id($id);
	require 'templates/show.php';
}

function poster_action() {
	require 'templates/forms/poster_form.php';
}

function poster_post_action() {
	
	if(isset($_POST['poster'])) {
		poster($_POST['titre'], $_POST['corps']);
	}
	require 'templates/merci.php';
}


// fonctions de l'api

function posts_api() {
	$posts = get_all_posts();
	$a = array();
	foreach ($posts as $post) {
		$a[] = $post;
	}
	$json = json_encode($a);
	echo $json;
}


?>