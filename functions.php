<?php

function dd($data){
	echo '<pre>';	
	var_dump($data);
	echo '</pre>';
	die;
}

function redirect_to($url){
	header('Location: '.$url);
	exit;
}
?>