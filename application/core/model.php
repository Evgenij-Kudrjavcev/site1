<?php

class Model extends PDO
{
	
	/*
		Модель обычно включает методы выборки данных, это могут быть:
			> методы нативных библиотек pgsql или mysql;
			> методы библиотек, реализующих абстракицю данных. Например, методы библиотеки PEAR MDB2;
			> методы ORM;
			> методы для работы с NoSQL;
			> и др.
	*/

	// метод выборки данных
    public $id;
    public $text;

    public $db;
    public $query;
    public $data=array();

    public function __construct() {

        parent::__construct('mysql:host=localhost;dbname=php-test', 'root', '');
    }
	public function get_data()
	{
		// todo
	}
}