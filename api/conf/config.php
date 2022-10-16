<?php 
$baseurl =       file_get_contents($_SERVER['DOCUMENT_ROOT'].'/confdirectory.txt');
$db_host =            												   'localhost';
$db_username =             													'root';
$db_password =  			   													'';
$db_databasename =     	 												  'nbblog';

$db = new mysqli($db_host, $db_username, $db_password, $db_databasename);


?>