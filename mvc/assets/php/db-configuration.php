<?php
$host     = 'localhost';
$user     = 'root';
$password = '';
$dbName   = 'tutorial_dbase';

$connect  = mysql_connect($host, $user, $password, $dbName);
@mysql_select_db($dbName) or die(mysql_error());
?>