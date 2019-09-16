<?php
//Database Class
class Database extends PDO
{
	function __construct()
	{
		$dbtype = 'mysql';
		$host = 'localhost';
		$dbname = 'rmvc';
		$dbuser = 'root';
		$dbpassword = '';
		parent:: __construct($dbtype.":host=".$host.";dbname=".$dbname, $dbuser, $dbpassword);
	}
}