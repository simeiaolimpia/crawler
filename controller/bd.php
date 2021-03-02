<?php 

$dsn = 'mysql:dbname=mydb;host=127.0.0.1'; // Data Source Name
$db_user = 'usuário';
$db_pass = 'senha';
$pdo = new PDO($dsn, $db_user, $db_pass); // representa a conexão com o SGBD

 ?>