<?php
$db = include __DIR__ . '/../database/start.php';


spl_autoload_register(function ($class) {
    require 'Classes/' . $class . '.php';
});

$class1 = new Class1();
$class2 = new Class2();

exit;



//$posts = $db -> getAll('posts');

//include __DIR__ . '/../index.view.php';
?>
