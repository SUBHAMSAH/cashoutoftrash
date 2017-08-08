<?php
$db['db_host']="localhost";
$db['db_user']="happySAH";
$db['db_pass']="sub@542SAH";
$db['db_name']="coot";

foreach($db as $key=>$value)
{
	define(strtoupper($key),$value);
}

$connection=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);


?>