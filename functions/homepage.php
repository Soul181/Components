<?php
$db = include __DIR__ . '/../database/start.php';


spl_autoload_register(function ($class) {
    var_dump($class); die;
    include 'classes/' . $class . '.class.php';
});





$posts = $db -> getAll('posts');

include __DIR__ . '/../index.view.php';
?>
