<?php

// connexion à la bdd
$dbh = new PDO("mysql:host=localhost;dbname=blog", 'root', '');

// la liste des posts de mon blog
$results = $dbh->query("SELECT id, titre FROM posts");

require 'templates/liste.php';

$dbh = null; 

?>