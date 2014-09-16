<?php
/*
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="wmkweb"; // Database name 
$tbl_name="user"; // Table name 

*/

$host="mysql.hazza.com.br"; // Host name 
$username="hazza"; // Mysql username 
$password="fewr5re"; // Mysql password 
$db_name="hazza"; // Database name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

?>