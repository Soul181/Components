<?php
include 'functions.php';
$db = include 'database/start.php';

$db -> create('posts', [
	"title" => $_POST['title']
]);

redirect_to("/functions/homepage.php");
?>





