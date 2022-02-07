<?php 
// $banco = "cadastro";
// $host = "localhost";
// $user_bd = "root"; 
// $pass_bd = "";
// $charset = "utf8";

// $config = "mysql:dbname=$banco;";
// $config .= "host=$host;";
// $config .= "charset=$charset"; 

$banco = "u339401739_cadastro";
$host = "localhost";
$user_bd = "u339401739_proflucas"; 
$pass_bd = "199010";
$charset = "utf8";

$config = "mysql:dbname=$banco;";
$config .= "host=$host;";
$config .= "charset=$charset"; 

$conn = new PDO($config,$user_bd,$pass_bd);











?>