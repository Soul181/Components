<?php


class Connection{
	
	
	public static function make($config)
	{
		return new PDO(
			"mysql:host={$config['connection']}; 
			dbname={$config['database']}; 
			charset={$config['charset']};",
			$config['user'],
			$config['password']); // создаём объкет PDO
	}
}

?>